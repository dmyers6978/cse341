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