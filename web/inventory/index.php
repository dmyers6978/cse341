<?php
require_once './models/mainModel.php';
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if(!$action){
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}

switch($action){

    default:
    include './views/home.php';
    exit;
}