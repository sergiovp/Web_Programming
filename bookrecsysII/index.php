<?php

    /*
        Tal y como tenemos especificado en el fichero .htaccess,
        nuestro punto de partida será este fichero index.

        Desde aquí podremos mandar a llamar a nuestros controladores.

        Lamaremos a nuestra clase "App" que se encargará de "centralizar la aplicación".

        Incluimos nuestras clases controladoras.
    */

    require_once('libs/app.php');
    require_once('libs/controller.php');
    require_once('libs/view.php');
    require_once('libs/model.php');
    require_once('libs/database.php');
    require_once('config/config.php');

    $app = new App();

?>
