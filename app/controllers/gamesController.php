<?php

require_once "app/models/gamesModel.php";
require_once "app/views/gamesView.php";
require_once "app/models/genreModel.php";

class gamesController{

    private $model;
    private $view;

    function __construct(){
        
        $this->model = new gamesModel();
        $this->genreModel = new genreModel();
        $this->view = new gamesView();
    }

    function showTable(){
        $games = $this->model->getAll();
        $this->view->showTable($games);
       
    }

    function showGame($id){

        $game = $this->model->getOne($id);
        $this->view->showGame($game);
    }

   function addGame(){
        $genres= $this->genreModel->getAll();
        $this->view->GameForm("added",$genres);


   }


}