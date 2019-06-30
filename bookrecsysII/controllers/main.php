<?php

    class Main extends Controller{

        public function __construct(){

            //Lamamos al constructor de la clase padre.
            parent::__construct();
            //Cambiamos la vista a "altauruario".
            $this->view->setVista("main");
            
            //Mostramos la vista de "altausuario".
            $this->view->render('main/index');
        }

        public function render(){
            
        }

        public function Saludo(){
            echo "hola jaja";
        }
    }

?>
