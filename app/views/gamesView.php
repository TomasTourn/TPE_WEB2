<?php

    require_once "libs/Smarty.class.php";
    
    class gamesView{

        function showTable($games){

            $smarty= new Smarty();

            $smarty->assign('games',$games);
            $smarty->display('templates/gamesTable.tpl');


        }
         function showGameF($game){
            $smarty= new Smarty();

            $smarty->assign('game',$game);
            $smarty->display('templates/showGame.tpl');
         }


    }