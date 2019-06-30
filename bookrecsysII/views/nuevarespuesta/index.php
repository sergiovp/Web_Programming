
<?php
    require 'views/inicio.php';
    require 'views/header.php';
    error_reporting(0);
     
?>

<main class="foro">
    <section class="union-foro">
        <a href="<?php echo constant('URL');?>foro/index.php"><button type="submit" class="boton-tema">Aceptar</button></a>
        <a href="<?php echo constant('URL');?>foro/index.php"><button type="submit" class="boton-tema">Volver atrás</button></a>
        <table border="" class="tabla">
            <tr class="indice">
                <td class="titulo">Respuesta</td>
            </tr>
            <tr class="gris">
                <td rowspan="2"><textarea class="datos-busqueda" name="direccion" rows="5" cols="100"></textarea></td>
            </tr>
        </table>
        <a href="<?php echo constant('URL');?>foro/index.php"><button type="submit" class="boton-tema">Aceptar</button></a>
        <a href="<?php echo constant('URL');?>foro/index.php"><button type="submit" class="boton-tema">Volver atrás</button></a>
    </section>
</main>

<?php
    require 'views/footer.php';
    require 'views/fin.php';
?>
