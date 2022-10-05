<?php
require_once "app/models/genreModel.php";
require_once "app/views/genreView.php";

class genreController{

    private $model;
    private $view;

    function __construct(){
        
        $this->model = new genreModel();
        $this->view = new genreView();
    }

    function showTable(){
        $genres = $this->model->getAll();
        $this->view->showTable($genres);
       
    }

   
        function showByGenre($id){
           
            $games= $this->model->getByGenre($id);

            $this->view->showBygenre($games);


        }
    



    
}