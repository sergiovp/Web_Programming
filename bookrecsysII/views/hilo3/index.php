
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
              ¡Se me ha mojado mi libro favorito y no sé cómo secarlo!</a></td>
          </tr>
          <tr class="indice">
            <td><span>Buenas tardes amigos.</span>
              <span>Esta mañana mientras me bañaba, estaba leyendo mi
              libro favorito, con la mala suerte de que se me resbaló y se mojó entero.</span>
              <span>No me gustaría tirarlo porque fue un regalo de mi abuela.
              ¿A alguien le ha pasado algo parecido y sabe cómo solucionarlo? :(</span>
            </td>
            <td class="texto-col-centrado">MartaSanchez</td>
          </tr>
          <tr class="gris">

            <td><span>¡Hala que mala suerte MartaSanchez!</span>
              <span>La verdad es que nunca me ha pasado algo parecido, espero
              que haya alguien que te pueda ayudar.</span>
              <span>Suerte.</span>
            </td>
            <td class="texto-col-centrado">SebitasFernandez</td>
          </tr>
          <tr>
            <td><span>Hola Marta,</span>
            <span>Te recomiendo que con un secador vayas página por página secando
            , el libro se quedará bastante bien.</span><span>Ánimo.</span></td>
            <td class="texto-col-centrado">Fubaso</td>
          </tr>
          <tr class="gris">
            <td><span>Hola chicos.</span>
            <span>Quizás ir página por página es algo tedioso, si tienes alguna
              estufa, te recomiendo dejar el libro a su lado, se irá secando poco a poco.</span>
            <span>Eso sí, cuidado no vaya a ser que termine ardiendo.</span></td>
            <td class="texto-col-centrado">UcranianBoy</td>
          </tr>
          <tr>
            <td><span>Buenas tardes ValoraBookers.</span>
            <span>Múchisimas gracias, de verdad, espero que funcione y finalmente
            se quede como nuevo.</span>
            <span>Gracias de nuevo :)</span></td>
            <td class="texto-col-centrado">MartaSanchez</td>
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