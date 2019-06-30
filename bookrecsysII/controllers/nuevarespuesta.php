<?php

    class Nuevarespuesta extends Controller{

        public function __construct(){

            //Lamamos al constructor de la clase padre.
            parent::__construct();

            //Cambiamos la vista a "main".
            $this->view->setVista("nuevarespuesta");
            //Mostramos la vista de "main".
            $this->view->render('nuevarespuesta/index');
        }

        public function render(){
        }
    }

?>
