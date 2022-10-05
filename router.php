<?php
require_once "app/controllers/gamesController.php";
require_once "app/controllers/genreController.php";
$action="home";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
    $action=$_GET['action'];
}

$params = explode('/',$action);

$gamesController = new gamesController();
$genresController= new genreController();


switch($params[0]){
    case "table":
        $gamesController->showTable();
        break;
    case "showGame":
        $gamesController->showGame($params[1]);
        if($params[1]=="table"){
            header("location: ". BASE_URL."table");
        }
        break;
    case "showGenre":
        $genresController->showTable();
        break;
    case "showByGenre":
        $genresController->showByGenre($params[1]);
        break;
    case "addGame":
        $gamesController->addGame();
        break;
    }