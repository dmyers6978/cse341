<?php
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if(!$action){
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch($action){

    case 'assignments':
        include './views/assignments.php';
        exit;
    break;

    default:
    include './views/about.php';
    exit;
}