<?php

    class Mislibros extends Controller{


        public function __construct(){
            parent::__construct();

            $this->view->mensaje = "";
            
            //Cambiamos la vista a "altauruario".
            $this->view->setVista("mislibros");
            
            //Mostramos la vista de "altausuario".
            //$this->view->render('mislibros/index');
        }

        public function render(){
            $this->view->render('mislibros/index');
        }

        public function registrarValoracion(){

            //Almacenamos datos insertados del formulario
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $anio = $_POST['anio'];
            $descripcion = $_POST['descripcion'];
            $opinion = $_POST['opinion'];
            $valoracion = $_POST['valoracion'];
            
            if($this->model->insert(['titulo' => $titulo, 'autor' => $autor, 'anio' => $anio, 'descripcion' => $descripcion, 'opinion' => $opinion, 'valoracion' => $valoracion])){
                $mensaje = "La valoración se ha creado correctamente. La puedes ver, editar o borrar en Mis Valoraciones";
            }
            else{
                $mensaje = "No se ha podido crear la valoración. Segunrmente el libro que has introducido ya está valorado.";
            }

            $this->view->mensaje = $mensaje;
            $this->render('mislibros/index');
        }
    }

?>