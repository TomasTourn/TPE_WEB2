<?php
 require_once "libs/Smarty.class.php";
    
 class genreView{

     private  $smarty;

     function __construct (){
         $this->smarty= new Smarty();
         
     }

     function showTable($genres){

            
        $this->smarty->assign('titulo','tabla de generos');
        $this->smarty->assign('footer','footer');
        $this->smarty->assign('genres',$genres);

     
        $this->smarty->display('templates/genreTable.tpl');
   

    }

    function showBygenre($games){

        $this->smarty->assign('titulo','tabla de generos');
        $this->smarty->assign('footer','footer');
        $this->smarty->assign('games',$games);

        if(sizeof($games)>0){
            $this->smarty->display('templates/genreGames.tpl');
        }
        else{
            var_dump("no hay juegos en ese genero");
        }
       



    }
}