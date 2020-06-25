<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$action = isset($_GET['action']) ? $_GET['action'] : 'indexAction';

include './controller/'.$controller.'Controller.php';
switch ($controller) {
    case 'index':
        $controllerObject = new indexController();
        break;
    case 'contact':
        $controllerObject = new contactController();
        break;
    
    default:
        # code...
        break;
}

$data = $controllerObject->{ $action }();
$view = $data['view'];
