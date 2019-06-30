<?php

    class Altausuario extends Controller{

        public function __construct(){
            parent::__construct();

            //Cambiamos la vista a "altauruario".
            $this->view->setVista("altausuario");
            
            //Mostramos la vista de "altausuario".
            $this->view->render('altausuario/index');
        }

        public function render(){
            
        }

        public function registrarUsuario(){

            //Almacenamos datos insertados del formulario
            $usuario = $_POST['usuario'];
            $correo = $_POST['correo'];
            $pass = $_POST['pass'];
            
            if($this->model->insert(['usuario' => $usuario, 'correo' => $correo, 'pass' => $pass])){
                echo'<h3 class="mens-reg">Usuario registrado. Vuelva a inicio para iniciar sesión</h3>
                    <nav class="menu-navegacion">
                        <ul class="lista-menu">?>
                            <li><a class="enlace" href="http://betatun.ugr.es/~x75933698/bookrecsysII//main">Volver a inicio</a></li>
                        <?php</ul>
                    </nav>';
            }
            else{
                echo '<h3 class="mens-reg">El usuario introducido ya existe, pruebe con otro nombre de usuario</h3>';
            }
?>
            
<?php
        }
    }
?>
