<?php
    require 'views/inicio.php';
    require 'views/header.php';
?>

<section class="registro">
    <form action="formulario.php" method="post" class="box" id="caja-datos">
        <h1>Tus datos:</h1>
        <label for="nombre-usu">Nombre de usuario:</label><input id="nombre-usu" type="text" name="email" value="SergioVela">
        <label for="mail">EMail: </label><input id="mail" type="email" name="email" value="sergiovp96@gmail.com">
        <label for="password">Contraseña: </label><input id="password" type="password" name="contraseña" value="gahdah">
        <input type="submit" name="aceptar" value="Modificar" class="registro-boton">
    </form>
</section>

<?php
    require 'views/footer.php';
    require 'views/fin.php';

?>