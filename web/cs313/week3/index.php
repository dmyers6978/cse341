<?php
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
        $fName = filter_input(INPUT_POST, 'fName', FILTER_SANITIZE_STRING);
        $lName = filter_input(INPUT_POST, 'lName', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $address1 = filter_input(INPUT_POST, 'address1', FILTER_SANITIZE_STRING);
        $address2 = filter_input(INPUT_POST, 'address2', FILTER_SANITIZE_STRING);
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
        $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
        $zip = filter_input(INPUT_POST, 'zip', FILTER_VALIDATE_INT);
        include './views/confirmation.php';
        exit;
    break;

    case 'addToCart':
    $itemTitle = filter_input(INPUT_GET, 'itemTitle', FILTER_SANITIZE_STRING);
    $itemPrice = filter_input(INPUT_GET, 'itemPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    array_push($_SESSION['cart'], array('itemTitle'=>$itemTitle,'itemPrice'=>$itemPrice));
    header('location: ./index.php');
    exit;
    break;

    case 'remItem':
        $itemId = filter_input(INPUT_GET, 'itemId', FILTER_VALIDATE_INT);
        unset($_SESSION['cart'][intval($itemId)]);
        header('location: ./index.php?action=viewCart');
        exit;
    default:
    include './views/viewItems.php';
    exit;
}