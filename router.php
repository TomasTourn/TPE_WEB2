<?php
require_once "app/controllers/gamesController.php";
require_once "app/controllers/genreController.php";
require_once "app/controllers/loginController.php";
$action="home";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
    $action=$_GET['action'];
}

$params = explode('/',$action);

$gamesController = new gamesController();
$genresController= new genreController();
$loginController= new loginController();


switch($params[0]){
    case "home":
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
        $gamesController->gameForm();
        break;
    case "addedGame":
        $gamesController->addGame();
        header("location: ". BASE_URL."home");
        break;
    case "deleteGame":
        $gamesController->deleteGame($params[1]);
        header("location: ". BASE_URL."home");
        break;

    case "updateGame":
        $gamesController->updateGameForm($params[1]);
        break;
    case "updatedGame":
        $gamesController->updateGame($params[1]);
        header("location: ". BASE_URL."home");
        break;

    case "addGenre":
        $genresController->addGenreForm();
        break;
    case "addedGenre":
        $genresController->addGenre();
        header("location: ". BASE_URL."showGenre");
        break;
    case "deleteGenre":
        $genresController->deleteGenre($params[1]);
        header("location: ". BASE_URL."showGenre");
        break;
    case "updateGenre":
        $genresController->updateGenreForm($params[1]);
        break;
    case "updatedGenre":
        $genresController->updateGenre($params[1]);
        header("location: ". BASE_URL."showGenre");
        break;
    case "logIn":
        $loginController->showLogin();
        break;
    case "verifyUser":
        $loginController->verifyUser();
        break;
    case "generarPass":
        $loginController->generarPass();
        break;
    case "logOut":
        $loginController->logOut();
        header("location: ". BASE_URL."home");
        break;
    }