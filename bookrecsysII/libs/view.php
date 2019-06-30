<?php

    /*
        Clase "base" de nuestras vistas.
    */

    class View{

        private $vista;


        public function __construct(){
            $this->vista = "";
        }

        public function getVista(){
            return $this->vista;
            
        }

        public function setVista($vista){
            $this->vista = $vista;
        }

        //Método para mostrar la vista.
        public function render($nombre_vista){
            //$vista = $nombre_vista;
            //echo $vista;
            require 'views/' . $nombre_vista . '.php';
        } 
    }

?>