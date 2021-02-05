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
        var_dump($invId, $quantity, $actionRadio);
        exit;
    break;

    default:
    include './views/home.php';
    exit;
}