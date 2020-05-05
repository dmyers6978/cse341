<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!$_SESSION){
    session_start();
}
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if(!$action){
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch($action){

    case 'viewCart':
        include './views/cart.php';
        exit;
    break;

    case 'checkout':
        include './views/checkout.php';
        exit;
    break;

    case 'confirmation':
        include './views/confirmation.php';
        exit;
    break;

    case 'addToCart':
    $itemTitle = filter_input(INPUT_GET, 'itemTitle', FILTER_SANITIZE_STRING);
    $itemPrice = filter_input(INPUT_GET, 'itemPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    array_push(array('itemTitle'=>$itemTitle,'itemPrice'=>$itemPrice));
    header('location: ./index.php');
    exit;
break;

    default:
    include './views/viewItems.php';
    exit;
}