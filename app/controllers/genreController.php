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
            if(empty($games)){
                $this->view->showMessage("no se pueden mostrar juegos porque ". $genre->genero. " no contiene ninguno");
            }else{
                $this->view->showBygenre($games,$genre);
            }
           

    }

    function addGenreForm(){
        $this->userHelper->checkLoggedIn();
        $this->view->addGenreForm("finishAddGenre");
    }

    function addGenre(){
        $this->userHelper->checkLoggedIn();
        $genre= $_POST['genre'];
        $description= $_POST['description'];
        $this->model->addGenre($genre,$description);
    }

    function deleteGenre($id){
        $this->userHelper->checkLoggedIn();
        $games=$this->model->getByGenre($id);
        if(empty($games)){
            $this->model->deleteGenre($id);
        }
        else{
            $genre= $this->model->getOne($id);
            $this->view->showMessage("no se puede eliminar ". $genre->genero. " porque contiene juegos");
        }
      /*  if(sizeof($this->model->getByGenre($id))<=0){
           
        }
        else{
            $smarty->view->
        }*/
    }
    
    function updateGenreForm($id){

        $this->userHelper->checkLoggedIn();
        $genre= $this->model->getOne($id);
        $this->view->updateGenreForm("finishUpdateGenre",$genre);
    }


    function updateGenre($id){
        $this->userHelper->checkLoggedIn();
        $genre= $_POST['genre'];
        $description= $_POST['description'];
        

        $this->model->updateGenre($id,$genre,$description);


    }



    
}