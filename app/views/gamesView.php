<?php

    require_once "libs/Smarty.class.php";
    
    class gamesView{

        private  $smarty;

        function __construct (){
            $this->smarty= new Smarty();
            
        }

        function showTable($games){

            
            $this->smarty->assign('titulo','tabla de juegos');
            $this->smarty->assign('encabezado','tabla');
            $this->smarty->assign('footer','footer');
            $this->smarty->assign('games',$games);

         
            $this->smarty->display('templates/gamesTable.tpl');
       


        }
         function showGame($game){
            
            $this->smarty->assign('titulo','detalle de juego');
            $this->smarty->assign('encabezado','juego');
            $this->smarty->assign('footer','footer');
            $this->smarty->assign('game',$game);
            
           
            $this->smarty->display('templates/showGame.tpl');
          
         }

         function gameForm($action,$genres){
            $this->smarty->assign('genres',$genres);
            $this->smarty->assign('titulo','agregar juego');
            $this->smarty->assign('encabezado','add');
            $this->smarty->assign('footer','footer');
            $this->smarty->assign('action',$action);
            $this->smarty->display('templates/gameForm.tpl');
         }
    

         function updateGameForm($action,$genres,$game,$genre){

            $this->smarty->assign('genres',$genres);
            $this->smarty->assign('genre',$genre);
            $this->smarty->assign('game',$game);
            $this->smarty->assign('titulo','editar juego');
            $this->smarty->assign('encabezado','edit');
            $this->smarty->assign('footer','footer');
            $this->smarty->assign('action',$action);
            $this->smarty->display('templates/gameForm.tpl');

        }

    }