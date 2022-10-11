<?php
require_once "app/models/genreModel.php";
require_once "app/views/genreView.php";
require_once "helpers/userHelper.php";

class genreController{

    private $model;
    private $view;
    private $userHelper;
    function __construct(){
        
        $this->model = new genreModel();
        $this->view = new genreView();
        $this->userHelper= new userHelper();
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
        $this->userHelper->checkLoggedIn();
        $this->view->addGenreForm("addedGenre");
    }

    function addGenre(){
        $this->userHelper->checkLoggedIn();
        $genre= $_POST['genre'];
        $description= $_POST['description'];
        $this->model->addGenre($genre,$description);
    }

    function deleteGenre($id){
        $this->userHelper->checkLoggedIn();
       
        if(sizeof($this->model->getByGenre($id))<=0){
            $this->model->deleteGenre($id);
        }
        else{
            var_dump("debe eliminar los juegos del genero primero");
        }
    }
    
    function updateGenreForm($id){

        $this->userHelper->checkLoggedIn();
        $genre= $this->model->getOne($id);
        $this->view->updateGenreForm("updatedGenre",$genre);
    }


    function updateGenre($id){
        $this->userHelper->checkLoggedIn();
        $genre= $_POST['genre'];
        $description= $_POST['description'];
        

        $this->model->updateGenre($id,$genre,$description);


    }



    
}