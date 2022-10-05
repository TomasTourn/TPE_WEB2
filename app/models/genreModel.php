<?php

class genreModel{

    private $db;

    function __construct(){
        $this->db = $this->connectDB();
    }
    
    private function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=videojuegos;charset=utf8','root',''); 
        return $db;
    }

    function getAll(){
       
    
        $query = $this->db->prepare('SELECT * FROM genero ');
        $query-> execute();
    
        $genres  = $query->fetchAll(PDO::FETCH_OBJ);
    
    
        return $genres;
    }

    function getByGenre($id){


        $query = $this->db->prepare('SELECT * FROM juegos  JOIN genero ON genero.id_genero = juegos.id_genero_fk  WHERE id_genero_fk= ?');
        $query-> execute([$id]);
    
        $games  = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $games;

    }










}