<?php

    class App{

        private $url;
        private $archivoController;
        private $controller;

        public function __construct(){
            //$url = $_GET['url'];

            //Por si no ingresamos un controlador directamente.
            if(isset($_GET['url']))
                $url = $_GET['url'];
            else
                $url = null;

            //Quitamos las diagonales "/" o caracteres que nos sobren con rtrim.
            $url = rtrim($url, '/');

            //Dividimos los parámetros que nos pasen en la url.
            $url = explode('/', $url);

            //$url = null -> redirigimos main
            if(empty($url[0])){
                $archivoController = 'controllers/main.php';
                require_once $archivoController;
                $controller = new Main();
                $controller->loadModel('main');
                //$controller->render();
                return false;
            }

            //$archivoController tendrá la url del controlador
            $archivoController = 'controllers/' . $url[0] . '.php';
            //echo $archivoController;
            //echo $archivoController;
            //Si existe el archivo, cargamos el controlador.
            if(file_exists($archivoController)){
                require_once $archivoController;
                $controller = new $url[0];
                $controller->loadModel($url[0]);

                //Número parámetros URL
                $nparam = sizeof($url);

                if($nparam > 1){
                    if($nparam > 2){    //Para la parte de editar
                        $param = [];

                        for($i = 2; $i < $nparam; $i++){
                            array_push($param, $url[$i]);   //Para que el controlador sepa si hay parámetros.
                        }
                        $controller->{$url[1]}($param);
                    }else{
                        $controller->{$url[1]}();
                    }
                }
                else{
                    $controller->render();
                }

                //Si Existe el método, lo llamamos. (El método es el 2º parámetro de la url).
               /* if(isset($url[1])){
                    $controller->{$url[1]}();
                }
                else{
                    $controller->render();
                }*/
            }//En caso de que el archivo no exista, llamaremos a nuestro controlador de error.

            else{
                require_once 'controllers/cerror.php';
                $controller = new CError();
            }
        }
    }

?>