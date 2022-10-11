<?php
 require_once "libs/Smarty.class.php";
    
 class genreView{

     private  $smarty;

     function __construct (){
         $this->smarty= new Smarty();
         
     }

     function showTable($genres){

        session_start();
        $this->smarty->assign('titulo','tabla de generos');
        $this->smarty->assign('encabezado','generos');
        $this->smarty->assign('genres',$genres);

     
        $this->smarty->display('templates/genreTable.tpl');
   

    }

    function showBygenre($games,$genre){
        session_start();
        $this->smarty->assign('titulo','tabla de generos');
        $this->smarty->assign('genero',$genre);
        $this->smarty->assign('games',$games);

        if(sizeof($games)>0){
            $this->smarty->display('templates/genreGames.tpl');
        }
        else{
            var_dump("no hay juegos en ese genero");
        }

    }

    function addGenreForm($action){

        $this->smarty->assign('action',$action);
        $this->smarty->assign('titulo','agregar genero');
        $this->smarty->assign('encabezado','addGenre');
        $this->smarty->display('templates/genreForm.tpl');



    }



    function updateGenreForm($action,$genre){


        $this->smarty->assign('action',$action);
        $this->smarty->assign('genre',$genre);
        $this->smarty->assign('titulo','editar genero');
        $this->smarty->assign('encabezado','editar Genero');
        $this->smarty->assign('footer','footer');
        $this->smarty->display('templates/genreForm.tpl');

    }
}