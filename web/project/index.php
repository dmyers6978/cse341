<?php
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if(!$action){
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch($action){
    case 'contact':

    break;

    case 'about':
    
    break;

    case 'status':
        if(!$_SESSION['loggedIn']){
            $_SESSION['location'] = './?action=status';
            $_SESSION['message'] = "<p>You need to login to see the progress on your bike.</p>";
            header('location: ./?action=login');
            exit;
        }

    break;

    case 'login':
        include './views/login.php';
        exit;
    break;

    default:
    include './views/home.php';
    exit;
}