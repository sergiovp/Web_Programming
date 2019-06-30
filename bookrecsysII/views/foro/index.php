<?php
    require 'views/inicio.php';
    require 'views/header.php';
?>

<?php error_reporting(0); ?>

<main class="foro">
    <section class="union-foro">
        <a href="<?php echo constant('URL');?>nuevotema/index.php"><button type="submit" class="boton-tema">Nuevo Tema</button></a>
        <table border="" class="tabla">
            <tr class="indice">
                <td class="titulo">Tema</td>
                <td class="titulo">Autor/es</td>
                <td class="titulo">Respuestas</td>
                <td class="titulo">Visitas</td>
            </tr>
            <tr class="gris">
                <td rowspan="2"> <a href="<?php echo constant('URL');?>hilo1/index.php">
                    ¿Alguien conoce alguna tienda de libros barata?</a></td>
                <td class="datos2">SergioVela</td>
                <td class="datos" rowspan="2">4</td>
                <td class="datos" rowspan="2">27</td>
            </tr>
            <tr class="gris">
                <td class="datos2">NoeliaSbrn</td>
            </tr>
            <tr>
                <td><a href="<?php echo constant('URL');?>hilo2/index.php">
                    Necesito consejo sobre un libro para regalar</a></td>
                <td class="datos2">PepitoGrillo</td>
                <td class="datos">3</td>
                <td class="datos">4</td>
            </tr>
            <tr class="gris">
                <td><a href="<?php echo constant('URL');?>hilo3/index.php">
                    ¡Se me ha mojado mi libro favorito y no sé cómo secarlo!</a></td>
            <td class="datos2">Pulgarcito33</td>
            <td class="datos">5</td>
            <td class="datos">65</td>
            </tr>
        </table>
        <a href="<?php echo constant('URL');?>nuevotema/index.php"><button type="submit" class="boton-tema">Nuevo Tema</button></a>
    </section>
</main>


<?php
    require 'views/footer.php';
    require 'views/fin.php';
?>