
<?php

require 'views/inicio.php';
require 'views/header.php';
?>

<?php error_reporting(0); ?>
<main class="foro">
      <section class="union-foro">
        <a href="<?php echo constant('URL');?>nuevarespuesta/index.php"><button type="submit" class="boton-tema">Responder</button></a>
        <a href="<?php echo constant('URL'); ?>foro/index.php"><button type="submit" class="boton-tema">Volver atrás</button></a>
        <table border="" class="hilos">
          <tr class="indice">
            <td class="texto-col-centrado" colspan="2"><a href="">
              Necesito consejo sobre un libro para regalar</a></td>
          </tr>
          <tr class="indice">
            <td><span>Hola ValoraBookers, la semana que viene
              es el cumpleaños de mi prima, es una apasionada de la lectura,
              por lo que me he decidido a regalarle un libro.</span>
              <span>¿Alguien me podría echar una mano? tiene 20 años
                y le gusta la ciencia ficción.</span>
            </td>
            <td class="texto-col-centrado">PepitoGrillo</td>
          </tr>
          <tr class="gris">
            <td><span>Buenas tardes Pepito.</span>
              <span>Te recomiendo el libro<strong> Divergente</strong>
              que seguro que le gustará.</span><span>Un saludo.</span>
            </td>
            <td class="texto-col-centrado">SergioVela</td>
          </tr>
          <tr>
            <td><span>Gracias por tu respuesta SergioVela.</span>
            <span>Ese será el libro que le compraré, tiene muy buenas reseñas.</span></td>
            <td class="texto-col-centrado">PepitoGrillo</td>
          </tr>
        </table>
        <a href="<?php echo constant('URL');?>nuevarespuesta/index.php"><button type="submit" class="boton-tema">Responder</button></a>
        <a href="<?php echo constant('URL'); ?>foro/index.php"><button type="submit" class="boton-tema">Volver atrás</button></a>
      </section>
    </main>

<?php
  require 'views/footer.php';
  require 'views/fin.php';

?>