<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$action = isset($_GET['action']) ? $_GET['action'] : 'indexAction';

include_once './controller/'.$controller.'Controller.php';

switch ($controller) {
    case 'index':
        $controllerObject = new indexController();
        break;
    case 'contact':
        $controllerObject = new contactController();
        break;
    case 'product':
        $controllerObject = new productController();
        break;
    case 'about':
        $controllerObject = new aboutController();
        break;
    
    default:
        $controllerObject = new indexController();
        break;
}

$data = $controllerObject->{ $action }();

$view = $data['view'];
