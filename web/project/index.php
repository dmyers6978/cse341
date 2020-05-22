<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once './model/mainModel.php';
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if(!$action){
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch($action){
    case 'contact':
        $table = '';
        $services = getServices();
        foreach($services as $service){
            $table .= "<tr><td>$service[serviceName]</td><td>$service[serviceTime]</td><td>$service[servicePrice]</td></tr>";
        }
        include './views/contact.php';
        exit;
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