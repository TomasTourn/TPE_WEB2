<?php


    class gamesModel{

    
      private $db;

      function __construct(){ //start the connection with the db
          $this->db = $this->connectDB();
      }
      
      private function connectDB(){
          $db = new PDO('mysql:host=localhost;'.'dbname=videojuegos;charset=utf8','root',''); 
          return $db;
      }
      
      function getAll(){
       
    
        $query = $this->db->prepare('SELECT * FROM juegos  JOIN genero ON genero.id_genero = juegos.id_genero_fk ');
        $query-> execute();
    
        $juegos  = $query->fetchAll(PDO::FETCH_OBJ);
    
    
        return $juegos;
    }


        function getOne($id){
            $query = $this->db->prepare('SELECT * FROM juegos  JOIN genero ON genero.id_genero = juegos.id_genero_fk  WHERE id_juego= ?');
            $query-> execute([$id]);

            $juego  = $query->fetch(PDO::FETCH_OBJ);
            return $juego;


        }



}
