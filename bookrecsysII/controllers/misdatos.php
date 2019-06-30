<?php

    class Misdatos extends Controller{

        public function __construct(){
            parent::__construct();

            //Cambiamos la vista a "altauruario".
            $this->view->setVista("misdatos");
            
            //Mostramos la vista de "altausuario".
            $this->view->render('misdatos/index');
        }

        public function render(){
            
        }

    }

?>