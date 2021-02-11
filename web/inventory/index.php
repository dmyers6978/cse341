<?php
if(!isset($_SESSION)){
    session_start();
}
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
        $itemId = filter_input(INPUT_POST, 'itemId', FILTER_VALIDATE_INT);
        $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);
        $actionRadio = filter_input(INPUT_POST, 'actionRadio', FILTER_SANITIZE_STRING);
        $exists = getInvById($itemId);
        if($exists){
        if($actionRadio == 'add'){
            $success = addInv($itemId, $quantity);
            logAction($itemId, $quantity);
        } else{
            $success = removeInv($itemId, $quantity);
            logAction($itemId, ($quantity*-1));
        }
        } else{
            $success = insertInv($itemId, $quantity);
        }
        if($success){
            $_SESSION['message'] = "<p>Item updated successfully.</p>";
            header('location: ./?action=invManager');
        }
    break;

    case 'viewInv':
        $table = buildInvTable();
        include './views/viewInv.php';
        exit;
    break;

    case 'itemManager':
        $table = buildItemTable();
        include './views/itemManager.php';
        exit;
    break;

    case 'deleteItem':
        $itemId = filter_input(INPUT_GET, 'itemId', FILTER_VALIDATE_INT);
        $success = deleteItem($itemId);
        if($success){
            $_SESSION['message'] = "<p>Item deleted successfully.</p>";
            header('location: ./?action=itemManager');
            exit;
        } else{
            $_SESSION['message'] = "<p>Something went wrong. Please try again later.</p>";
            header('location: ./?action=itemManager');
            exit;
        }
    break;

    case 'addItem':
        $itemName = filter_input(INPUT_POST, 'itemName', FILTER_SANITIZE_STRING);
        $success = addItem($itemName);
        if($success){
            $_SESSION['message'] = "<p>$itemName added successfully.</p>";
            header('location: ./?action=itemManager');
            exit;
        } else{
            $_SESSION['message'] = "<p>Something went wrong. Please try again later.</p>";
            header('location: ./?action=itemManager');
            exit;
        }
    break;

    case 'viewLog':
        $table = buildLogTable();
        include './views/viewLog.php';
        exit;
    break;

    default:
    include './views/home.php';
    exit;
}