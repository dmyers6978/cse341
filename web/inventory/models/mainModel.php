<?php
require_once '/app/web/inventory/library/connections.php';

function getItems(){
$db = dbConnect();
$sql = 'SELECT itemid, itemname, quantity FROM items JOIN inventory USING(itemId)';
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
return $result;
}