<?php

require_once "app/models/gamesModel.php";
require_once "app/views/gamesView.php";

class gamesController{

    private $model;
    private $view;

    function __construct(){
        
        $this->model = new gamesModel();
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




}