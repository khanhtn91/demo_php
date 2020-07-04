<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

include_once './controller/' . $controller . 'Controller.php';

switch ($controller) {
    case 'product':
        $controllerObject = new productController();
        break;
    default:
        $controllerObject = new indexController();
        break;
}

$data = $controllerObject->{$action}();

$view = $data['view'];