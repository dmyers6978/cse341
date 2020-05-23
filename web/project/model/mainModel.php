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