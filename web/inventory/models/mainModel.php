<?php
require_once '/app/web/inventory/library/connections.php';

function getItems(){
    $db = dbConnect();
    $sql = 'SELECT itemid, itemname, COALESCE(quantity, 0) AS quantity FROM items LEFT JOIN inventory USING(itemid) ORDER BY itemname ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function insertInv($itemId, $quantity){
    $db = dbConnect();
    $sql = 'INSERT INTO inventory (itemid, quantity) VALUES (:itemId, :quantity);';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':itemId', $itemId, PDO::PARAM_INT);
    $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function addInv($itemid, $quantity){
    $db = dbConnect();
    $sql = 'UPDATE inventory SET quantity = (quantity + :quantity) WHERE itemid = :itemid;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':itemid', $itemid, PDO::PARAM_INT);
    $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function getInvById($invId){
    $db = dbConnect();
    $sql = 'SELECT *, COALESCE(quantity, 0) AS quantity FROM items LEFT JOIN inventory USING(itemid) WHERE invid = :invId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function removeInv($itemid, $quantity){
    $db = dbConnect();
    $sql = 'UPDATE inventory SET quantity = (quantity - :quantity) WHERE itemid = :itemid;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':itemid', $itemid, PDO::PARAM_INT);
    $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function getInv(){
    $db = dbConnect();
    $sql = 'SELECT *, COALESCE(quantity) AS quantity FROM items LEFT JOIN inventory USING(itemId) ORDER BY itemname';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function deleteItem($itemId){
    $db = dbConnect();
    $sql = 'DELETE FROM inventory WHERE itemid = :itemId;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':itemId', $itemId, PDO::PARAM_INT);
    $stmt->execute();
    $sql = 'DELETE FROM items WHERE itemid = :itemId;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':itemId', $itemId, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function addItem($itemName){
    $db = dbConnect();
    $sql = 'INSERT INTO items (itemname) VALUES (:itemName)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':itemName', $itemName, PDO::PARAM_STR);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function logAction($itemId, $quantity){
    $db = dbConnect();
    $sql = 'INSERT INTO log (itemid, quantity) VALUES (:itemId, :quantity)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':itemId', $itemId, PDO::PARAM_INT);
    $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function getLogs(){
    $db = dbConnect();
    $sql = "SELECT *, TO_CHAR(datetime, 'DD-MM-YYYY HH:MI:SS AM') AS dateTime FROM log JOIN items USING(itemid) ORDER BY log.datetime DESC";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}