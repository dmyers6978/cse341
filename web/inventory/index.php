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



    default:
    include './views/home.php';
    exit;
}