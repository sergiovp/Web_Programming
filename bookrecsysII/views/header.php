<?php
if (session_status()==PHP_SESSION_NONE)
  session_start();

$userinfo = array(
                'vela'=>'123',
                'user2'=>'password2'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }else {
        $motrar = "Usuario o contraseña inválidos";
    }
}
?>
            <header>

                <img src="<?php echo constant('URL');?>public/images/logo2.png" alt="Imagen de la página">

                <form action="" method="post" name="login" class="parte-der-head">
                    <p><label for="usu">Usuario:</label><input id="usu" type="text" name="username" value="vela"></p>
                    <p><label for="pass">Contraseña:</label><input id="pass" type="password" name="password" value="123"></p>
                    <a href=""><button type="submit">Login</button></a>
                    <?php if($_SESSION['username']): ?>
                        <p id="no-m">¡Bienvenido! <?=$_SESSION['username']?></p>
                    <?php endif; ?>
                    <a class="enlace" href="?logout=1">Logout</a>
                    <a class="enlace" href="altausuario">¿No estás registrado?</a>
                </form>
                <h1>ValoraBook</h1>
                <p class="texto-cabezera">En esta página podrás valorar libros, leer valoraciones de otros usuarios,
                    compartir opiniones en nuestro foro o recibir recomendaciones de libros que no hayas leído.</p>
                <p class="texto-cabezera">¿A qué esperas?, ¡Únete!</p>
            </header>

        <?php 
            if($_SESSION['username']){ 
                require_once 'nav.php';
                
                switch($this->getVista()){
                    case 'main':
                        getNavEnlaces();
                    break;

                    case 'cerror':
                        getNavError();
                    break;

                    case 'mislibros':
                        getNavMisLibros();
                    break;

                    case 'misdatos':
                        getNavMisDatos();
                    break;

                    case 'misrecomendaciones':
                        getNavMisRecomendaciones();
                    break;

                    case 'misvaloraciones':
                        getNavMisValoraciones();
                    break;

                    case 'foro' || 'nuevarespuesta' || 'nuevotema' || 'hilo1' || 'hilo2' || 'hilo3':
                        getNavForo();
                    break;
                }      
            } 
        ?>