<?php
    require 'views/inicio.php';
    
?>
    <section class="registro" id="centrado">
        <form action="<?php echo constant('URL'); ?>altausuario/registrarUsuario" method="post" class="box" onsubmit="return validarUsuario();">
            <h1>¡Regístrate!</h1>
            <label for="nombre-usu">Nombre de usuario:</label><input id="nombre_usu" type="text" name="usuario">
            <label for="mail">EMail: </label><input id="mail" type="text" name="correo">
            <label for="password">Contraseña: </label><input id="password" type="password" name="pass">
            <input type="submit" name="aceptar" value="Aceptar" class="registro-boton">
        </form>
    </section>

<?php
    require 'views/fin.php';
?>

