<?php
require_once './models/mainModel.php';
require_once './library/functions.php';
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if(!$action){
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}

switch($action){
    case 'invManager':
        $select = buildItemSelect();
        include './views/invManager.php';
        exit;
    break;

    case 'editInv':
        $invId = filter_input(INPUT_POST, 'itemId', FILTER_VALIDATE_INT);
        $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);
        $actionRadio = filter_input(INPUT_POST, 'actionRadio', FILTER_SANITIZE_STRING);
        $exists = getInv($invId);
        if($exists){
        if($actionRadio == 'add'){
            $success = addInv($invId, $quantity);
        } else{
            $success = removeInv($invId, $quantity);
        }
        } else{
            $success = insertInv($invId, $quantity);
        }
        if($success){
            $_SESSION['message'] = "<p>Item updated successfully.</p>";
            header('location: ./?action=invManager');
        }
    break;

    default:
    include './views/home.php';
    exit;
}