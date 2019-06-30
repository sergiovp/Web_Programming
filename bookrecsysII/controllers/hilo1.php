<?php

    class Hilo1 extends Controller{

        public function __construct(){

            //Lamamos al constructor de la clase padre.
            parent::__construct();

            //Cambiamos la vista a "altauruario".
            $this->view->setVista("hilo1");
            
            //Mostramos la vista de "altausuario".
            $this->view->render('hilo1/index');
        }
    }

?>
