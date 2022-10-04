<?php
require_once "app/controllers/gamesController.php";

$action="home";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
    $action=$_GET['action'];
}

$params = explode('/',$action);

$controller = new gamesController();
switch($params[0]){
    case "table":
        $controller->showTable();
        break;
    case "showGame":
        $controller->showGame($params[1]);
        break;
    }