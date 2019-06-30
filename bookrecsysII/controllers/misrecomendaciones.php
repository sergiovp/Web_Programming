<?php

    class Misrecomendaciones extends Controller{

        public function __construct(){
            parent::__construct();

            //Cambiamos la vista a "mislibros".
            $this->view->setVista("misrecomendaciones");
            
            //Mostramos la vista de "main".
            $this->view->render('misrecomendaciones/index');
        }

        public function render(){
            //Cambiamos la vista a "altauruario".
            $this->view->setVista("misrecomendaciones");
            
            //Mostramos la vista de "altausuario".
            $this->view->render('misrecomendaciones/index');
        }

    }

?>