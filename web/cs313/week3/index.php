<?php
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if(!$action){
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch($action){

    case 'viewCart':
        include './views/cart.php';
    break;

    case 'checkout':
        include './views/checkout.php';
    break;

    case 'confirmation':
        include './views/confirmation.php';
    break;

    default:
    include './views/viewItems.php';
    exit;
}