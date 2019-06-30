<?php

    class Hilo3 extends Controller{

        public function __construct(){

            //Lamamos al constructor de la clase padre.
            parent::__construct();
            //Cambiamos la vista a "altauruario".
            $this->view->setVista("hilo3");
            
            //Mostramos la vista de "altausuario".
            $this->view->render('hilo3/index');
        }

        public function render(){
            
        }
    }

?>
