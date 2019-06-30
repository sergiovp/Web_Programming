<?php

    class Foro extends Controller{

        public function __construct(){
            parent::__construct();
            //Cambiamos la vista a "altauruario".
            $this->view->setVista("foro");
            
            //Mostramos la vista de "altausuario".
            $this->view->render('foro/index');
        }

        public function render(){
            
        }

    }

?>