<?php

    class CError extends Controller{

        private $mensaje = "";

        public function __construct(){

            parent::__construct();
            

            $this->view->setVista("cerror");
            $this->view->mensaje = "Error al cargar la página";
            $this->view->render('cerror/index');
        }
    }

?>
