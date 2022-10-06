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

   function gameForm(){

        $genres= $this->genreModel->getAll();
        $this->view->GameForm("addedGame",$genres);

   }

   function addGame(){
       
        $name= $_POST['name'];
        $price= $_POST['price'];
        $description= $_POST['description'];
        $genre= $_POST['genre'];

        $this->model->addGame($name,$price,$description,$genre);

   }

   function deleteGame($id){
        $this->model->deleteGame($id);

   }
   function updateGameForm($id){
        $game= $this->model->getOne($id);
        $genre=$this->genreModel->getOne($game->id_genero_fk);
        $genres= $this->genreModel->getAll();
        $this->view->updateGameForm("updatedGame",$genres,$game,$genre);
   }
   function updateGame($id){
        $name= $_POST['name'];
        $price= $_POST['price'];
        $description= $_POST['description'];
        $genre= $_POST['genre'];

        $this->model->updateGame($id,$name,$price,$description,$genre);

   }


}