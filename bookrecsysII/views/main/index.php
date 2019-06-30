<?php
    require 'views/inicio.php';
    require 'views/header.php';
    //getHeaderLogin();
    //require 'views/nav.php';
    //getNavEnlaces();
?>

<div class="central">
      <section class="parte-izquierda-central">
        <img src="<?php echo constant('URL'); ?>public/images/libros.jpg" alt="Imagen de libros" class="imagen-izq">
      </section>

      <section class="parte-derecha-central">
        <h3>Libros mejor valorados</h3>

        <article>
          <img src="<?php echo constant('URL'); ?>public/images/rayden.jpg" alt="Foto del libro EL MUNDO ES UN GATO JUGANDO CON AUSTRALIA">
          <p><span class="titulo-libro">EL MUNDO ES UN GATO JUGANDO CON AUSTRALIA</span>
          <span class="nombre-autor">DAVID MARTÍNEZ ÁLVAREZ</span></p>
        </article>

        <article>
          <img src="<?php echo constant('URL'); ?>public/images/javier.jpg" alt="Foto del libro TODO LO QUE SUCEDIÓ CON MIRANDA HUFF">
          <p><span class="titulo-libro">TODO LO QUE SUCEDIÓ CON MIRANDA HUFF</span>
          <span class="nombre-autor">JAVIER CASTILLO</span></p>
        </article>

        <article>
          <img src="<?php echo constant('URL'); ?>public/images/anonimo.jpg" alt="FOTO del libro EL ANÓNIMO">
          <p><span class="titulo-libro">EL ANÓNIMO</span>
          <span class="nombre-autor">NATASHA PRESTON</span></p>
        </article>
      </section>
    </div>

<?php
    require 'views/footer.php';
    require 'views/fin.php';

?>