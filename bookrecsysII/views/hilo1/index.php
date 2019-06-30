
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
              ¿Alguien conoce alguna tienda de libros barata?</a></td>
          </tr>
          <tr class="indice">
            <td rowspan="2"><span>Hola ValoraBookers, ¿Qué tal estáis?</span>
              <span>Desde hace algunos meses nos hemos aficionado a la lectura. Lo bueno
              de ser dos personas es que solo tenemos que comprar un único libro
              que cuando uno lee, se lo deja al otro.</span> <span>El problema es que últimamente
              andamos un poco justos de dinero y nos gustaría saber si hay alguna página
              o tienda de venta de libros más barata de lo normal.</span>
              <span>Esperamos respuesta, ¡muchas gracias!</span>
            </td>
            <td class="texto-col-centrado">SergioVela</td>
          </tr>
          <tr class="indice">
            <td class="texto-col-centrado">NoeliaSbrn</td>
          </tr>
          <tr class="gris">
            <td><span>Buenas tardes SergioVela y NoeliaSbrn.</span>
              <span>Hace unos meses descubrí la página<strong> elrincondellibro</strong>
              y suele tener bastantes ofertas y la mayoría de libros a un precio más asequible
              que en el resto de librerías.</span><span>¡Os la recomiendo!</span>
            </td>
            <td class="texto-col-centrado">PepitoGrillo</td>
          </tr>
          <tr>
            <td><span>Buenas tardes chicos.</span>
            <span>Al igual que PepitoGrillo, yo también suelo pedir libros en esa página
            por el precio tan económico que ofrecen.</span></td>
            <td class="texto-col-centrado">Pulgarcito</td>
          </tr>
          <tr class="gris">
            <td rowspan="2"><span>Muchísimas gracias a los dos.</span> <span>Hemos estado echando
              un vistazo y tenéis razón, recomendable 100%</span>
            </td>
            <td class="texto-col-centrado">SergioVela</td>
          </tr>
          <tr class="gris">
            <td class="texto-col-centrado">NoeliaSbrn</td>
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