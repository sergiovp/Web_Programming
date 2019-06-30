<?php

    /*
        Clase "base" de nuestros modelos -> heredarán de esta clase.
    */

    class Model{

        //Objeto Database
        protected $db;

        public function __construct(){
            $this->db = new Database();
        }
    }

?>