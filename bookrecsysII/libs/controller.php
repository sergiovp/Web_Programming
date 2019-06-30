<?php

    /*
        Clase "base" de nuestros controladores -> heredarán de esta clase.
    */

    class Controller{

        //Variable para la vista. Cada vez que creemos un controlador, tendremos una vista asociada que creamos en el constructor.
        protected $view;
        protected $url;
        protected $modelName;
        protected $model;


        public function __construct(){
            
            $this->view = new View();
            $url = null;
        }

        public function loadModel($model){
            $url = 'models/' . $model . 'model.php'; //Importante, mis archivos modelos van a terminar con "model.php".
            if(file_exists($url)){
                require $url;

                $modelName = $model . 'Model';
                $this->model = new $modelName();    //Llamamos al modelo.
            }
        }
        //En este punto tenemos tanto la vista como el modelo creado.
    }

?>