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
            $genre= $this->model->getOne($id);
            
            $this->view->showBygenre($games,$genre);

    }

    function addGenreForm(){
        $this->view->addGenreForm("addedGenre");
    }

    function addGenre(){
        $genre= $_POST['genre'];
        $description= $_POST['description'];
        $this->model->addGenre($genre,$description);
    }

    function deleteGenre($id){
       
        if(sizeof($this->model->getByGenre($id))<=0){
            $this->model->deleteGenre($id);
        }
        else{
            var_dump("debe eliminar los juegos del genero primero");
        }
    }
    
    function updateGenreForm($id){

        
        $genre= $this->model->getOne($id);
        $this->view->updateGenreForm("updatedGenre",$genre);
    }


    function updateGenre($id){

        $genre= $_POST['genre'];
        $description= $_POST['description'];
        

        $this->model->updateGenre($id,$genre,$description);


    }



    
}