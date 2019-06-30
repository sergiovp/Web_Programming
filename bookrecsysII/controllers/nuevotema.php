<?php

    class Nuevotema extends Controller{

        public function __construct(){

            //Lamamos al constructor de la clase padre.
            parent::__construct();

            //Cambiamos la vista a "altauruario".
            $this->view->setVista("nuevotema");
            
            //Mostramos la vista de "altausuario".
            $this->view->render('nuevotema/index');
        }

        public function render(){
            
        }
    }

?>
