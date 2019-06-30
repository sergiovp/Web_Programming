<?php
    require 'views/inicio.php';
    require 'views/header.php';
    error_reporting(0); 
?>
        <div class="centro-recomenda">
      <main class="recomenda">
        <p>En esta página encontrarás recomendaciones por género que genera el sistema
        automáticamente en función de los libros que hayas leído y valorado.</p>
        <section class="seccion-filtros">
          <ul class="filtro">
            <li class="infor"><a href="#informatica">Informática</a></li>
            <li class="ficc"><a href="#ficcion">Ciencia ficción</a></li>
            <li class="comic"><a href="#manga">Cómic y manga</a></li>
            <li class="var"><a href="#variado">Variado</a></li>
          </ul>
        </section>

        <section id="informatica">
          <h3>Informática</h3>
          <p><img src="<?php echo constant('URL');?>public/images/py.gif" alt="Imagen del libro">
            <span class="titulo">PYTHON PARA TODOS</span><span>RAÚL GONZÁLEZ DUQUE</span></p>
          <p><img src="<?php echo constant('URL');?>public/images/codigo.jpg" alt="Imagen del libro">
            <span class="titulo">EL LIMPIADOR DE CÓDIGO</span><span>ROBERT C. MARTIN</span></p>
          <p><img src="<?php echo constant('URL');?>public/images/hack.jpg" alt="Imagen del libro">
            <span class="titulo">HACKER ÉPICO</span><span>ALEJANDRO RAMOS Y RODRIGO YEPES</span></p>
            <p><img src="<?php echo constant('URL');?>public/images/html.jpg" alt="Imagen del libro">
              <span class="titulo">HTML5, CSS Y JAVASCRIPT</span><span>JOSÉ DIMAS LUJÁN</span></p>
          <a href=""><button type="button">Volver arriba</button></a>
        </section>

        <section id="ficcion">
          <h3>Ciencia ficción</h3>
          <p><img src="<?php echo constant('URL');?>public/images/reden.jpg" alt="Imagen del libro">
            <span class="titulo">LA REDENCIÓN DEL TIEMPO</span><span>BAOSHU</span></p>
          <p><img src="<?php echo constant('URL');?>public/images/lago.jpg" alt="Imagen del libro">
            <span class="titulo">LAGO NEGRO DE TUS OJOS</span><span>GUILLEM LÓPEZ</span></p>
          <p><img src="<?php echo constant('URL');?>public/images/spider.jpg" alt="Imagen del libro">
            <span class="titulo">SPIDERLIGHT</span><span>ADRIAN TCHAIKOVSKY</span></p>
            <p><img src="<?php echo constant('URL');?>public/images/ender.jpg" alt="Imagen del libro">
              <span class="titulo">EL JUEGO DE ENDER</span><span>ORSON SCOTT</span></p>
          <a href=""><button type="button">Volver arriba</button></a>
        </section>

        <section id="manga">
          <h3>Cómic y manga</h3>
          <p><img src="<?php echo constant('URL');?>public/images/poke.jpg" alt="Imagen del libro">
            <span class="titulo">POKÉMON</span><span>HIDENORI KUSAKA</span></p>
          <p><img src="<?php echo constant('URL');?>public/images/iron.jpg" alt="Imagen del libro">
            <span class="titulo">IRON MAN EXTREMIS</span><span>WARREN ELLIS</span></p>
          <p><img src="<?php echo constant('URL');?>public/images/hulk.jpeg" alt="Imagen del libro">
            <span class="titulo">THOR VS HULK</span><span>JEREMY WHITLEY</span></p>
            <p><img src="<?php echo constant('URL');?>public/images/naruto.jpg" alt="Imagen del libro">
              <span class="titulo">NARUTO</span><span>NASASHI KISHIMOTO</span></p>
          <a href=""><button type="button">Volver arriba</button></a>
        </section>

        <section id="variado">
          <h3>Variado</h3>
          <p><img src="<?php echo constant('URL');?>public/images/foot.jpg" alt="Imagen del libro">
            <span class="titulo">HOMBRE DE FÚTBOL</span><span>ARTHUR HOPCRAFT</span></p>
          <p><img src="<?php echo constant('URL');?>public/images/oso.JPG" alt="Imagen del libro">
            <span class="titulo">JACKY, OSO DE TALLAC</span><span>ERNEST THOMPSON</span></p>
          <p><img src="<?php echo constant('URL');?>public/images/diez.jpg" alt="Imagen del libro">
            <span class="titulo">DIEZ MIL HERIDAS</span><span>PATXI IRURZUN</span></p>
            <p><img src="<?php echo constant('URL');?>public/images/isla.jpg" alt="Imagen del libro">
              <span class="titulo">MI ISLA</span><span>ELISABET BENAVENT</span></p>
          <a href=""><button type="button">Volver arriba</button></a>
        </section>
      </main>
    </div>

<?php

    require 'views/footer.php';
    require 'views/fin.php';

?>