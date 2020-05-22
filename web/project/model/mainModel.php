<?php
require_once '../connections.php';

function getServices(){
    $db = dbConnect();
    $sql = 'SELECT * FROM services;';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}