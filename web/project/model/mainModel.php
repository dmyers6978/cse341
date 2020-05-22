<?php
require_once '/app/web/project/library/connections.php';

function getServices(){
    $db = dbConnect();
    $stmt = $db->prepare('SELECT * FROM services;');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}