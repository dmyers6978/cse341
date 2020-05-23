<?php
require_once '/app/web/project/library/connections.php';

function getServices(){
    $db = dbConnect();
    $sql = 'SELECT * FROM services ORDER BY servicePrice ASC, serviceName ASC;';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function addUser($fName, $lName, $phone, $email, $password){
    $db = dbConnect();
    $sql = 'INSERT INTO users (userfirstname, userlastname, userphonenumber, useremail, userpassword) VALUES (:fName, :lName, :phone, :email, :password);';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':fName', $fName, PDO::PARAM_STR);
    $stmt->bindValue(':lName', $lName, PDO::PARAM_STR);
    $stmt->bindValue(':phone', $phone, PDO::PARAM_INT);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->rowCount();
    $stmt->closeCursor();
    return $result;
}

function checkUserEmail($email){
    $db = dbConnect();
    $sql = 'SELECT userid, userfirstname, userlastname, useremail, userphonenumber, userlevel, userpassword FROM users WHERE useremail = :email';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function getAllJobs(){
    $db = dbConnect();
    $sql = 'SELECT * FROM jobs JOIN jobservice USING(jobid) JOIN services USING(serviceid);';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function getJobs($userId){
    $db = dbConnect();
    $sql = 'SELECT * FROM jobs JOIN jobservice USING(jobid) JOIN services USING(serviceid) WHERE userid = :userId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':userId', $userId, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function getUsers(){
    $db = dbConnect();
    $sql = 'SELECT userfirstname, userlastname, userid FROM users ORDER BY userlastname ASC, userfirstname ASC;';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function addJob($jobTitle, $userId){
    $db = dbConnect();
    $sql = 'INSERT INTO jobs (jobTitle, userId) VALUES (:jobTitle, userId);';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':jobTitle', $jobTitle, PDO::PARAM_STR);
    $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->rowCount();
    $stmt->closeCursor();
    return $result;
}

function getJobId($jobTitle, $userId){
    $db = dbConnect();
    $sql = 'SELECT * FROM jobs WHERE userid = :userId AND jobtitle = :jobTitle';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':userId', $userId, PDO::PARAM_STR);
    $stmt->bindValue(':jobTItle', $jobTitle, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function addJobService($jobId, $serviceId){
    $db = dbConnect();
    $sql = 'INSERT INTO jobservice (jobid, serviceid) VALUES (:jobId, :serviceId);';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':jobId', $jobId, PDO::PARAM_INT);
    $stmt->bindValue(':serviceId', $serviceId, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->rowCount();
    $stmt->closeCursor();
    return $result;
}