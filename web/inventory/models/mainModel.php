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

function insertInv($invId, $quantity){
    $db = dbConnect();
    $sql = 'INSERT INTO inventory (invid, quantity) VALUES (:invId, :quantity);';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function addInv($invId, $quantity){
    $db = dbConnect();
    $sql = 'UPDATE inventory SET quantity = (quantity + :quantity) WHERE invid = :invId;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function getInvById($invId){
    $db = dbConnect();
    $sql = 'SELECT * FROM items JOIN inventory USING(itemId) WHERE invid = :invId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function removeInv($invId, $quantity){
    $db = dbConnect();
    $sql = 'UPDATE inventory SET quantity = (quantity - :quantity) WHERE invid = :invId;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function getInv(){
    $db = dbConnect();
    $sql = 'SELECT * FROM items JOIN inventory USING(itemId) ORDER BY itemname';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

function deleteItem($itemId){
    $db = dbConnect();
    $sql = 'DELETE FROM inventory WHERE itemid = :itemId;
    DELETE FROM items WHERE itemid = :itemId;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':itemId', $itemId, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}