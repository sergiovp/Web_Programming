 

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="SergioVela">
        <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilo.css">
        <script src="<?php echo constant('URL');?>public/js/validar.js"></script>

<?php

    $titulo = "";

    switch($this->getVista()){
        case 'main':
            $titulo = "Inicio ValoraBook";
        break;

        case 'cerror':
            $titulo = "PÁGINA DE ERROR";
        break;

        case 'mislibros':
            $titulo = "Mis libros";
        break;

        case 'foro':
            $titulo = "Foro";
        break;

        case 'misdatos':
            $titulo = "Mis datos";
        break;

        case 'misrecomendaciones':
            $titulo = "Mis recomendaciones";
        break;

        case 'altausuario':
            $titulo = "Regístrate en ValoraBook";
        break;

        case 'hilo1':
            $titulo = "Foro Hilo 1";
        break;

        case 'hilo2':
            $titulo = "Foro Hilo 2";
        break;

        case 'hilo3':
            $titulo = "Foro Hilo 3";
        break;

        case 'misvaloraciones':
            $titulo = "Mis valoraciones";
        break;
    }
?>

        <title><?php echo $titulo; ?></title>
    </head>
<body>
    
