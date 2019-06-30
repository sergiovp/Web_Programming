<?php

    class misvaloraciones extends Controller{

        public function __construct(){
            //Lamamos al constructor de la clase padre.
            parent::__construct();

            //Cambiamos la vista a "altauruario".
            $this->view->setVista("misvaloraciones");

            $this->view->vals = [];
            
            
        }

        public function render(){

            $vals = $this->model->get();

            $this->view->vals = $vals;
            
            //Mostramos la vista de "altausuario".
            $this->view->render('misvaloraciones/index');
        }

        //Funciona Bien el método entero.
        public function verValoracion($param = null){
            $idVal = $param[0]; //Por muchos parámetras que tengamos, solo nos interesa el primero
            $valoration = $this->model->getByID($idVal);

            //Evitamos que puedan modificar el título del libro, uso de sesión
            session_start();
            $_SESSION['id_verValoracion'] = $valoration->titulo;

            $this->view->mensaje = "";
            $this->view->valoration = $valoration;

            $this->view->render('misvaloraciones/detalle');
        }

        public function actualizarValoracion(){
            session_start();
            //Aquí nos metemos.
            $titulo = $_SESSION['id_verValoracion'];
            $autor = $_POST['autor'];
            $anio = $_POST['anio'];
            $descripcion = $_POST['descripcion'];
            $opinion = $_POST['opinion'];
            $valoracion = $_POST['valoracion'];

            unset($_SESSION['id_verValoracion']);

            if($this->model->update(['titulo' => $titulo, 'autor' => $autor, 'anio' => $anio, 'descripcion' => $descripcion, 'opinion' => $opinion, 'valoracion' => $valoracion])){
                //Actualizamos la valoración
                $valoration = new Valoraciones();

                $valoration->titulo = $titulo;
                $valoration->autor = $autor;
                $valoration->anio = $anio;
                $valoration->descripcion = $descripcion;
                $valoration->opinion = $opinion;
                $valoration->valoracion = $valoracion;

                $this->view->valoration = $valoration;
                $this->view->mensaje = "Valoración actualizada correctamente.";
//                echo "HHHOOLA";
            }
            else{
                echo "MAL";
                //$this->view->mensaje = "La valoración no se ha podido actualizar.";
            }

            $this->view->render('misvaloraciones/detalle');
        }

        public function eliminarValoracion($param = null){
            $titulo = $param[0];

            if($this->model->delete($titulo)){
                
                $this->view->mensaje = "Valoración eliminada correctamente.";
                
            }
            else{
                
                //$this->view->mensaje = "La valoración no se ha podido actualizar.";
            }

            $this->render();
        }
    }

?>
