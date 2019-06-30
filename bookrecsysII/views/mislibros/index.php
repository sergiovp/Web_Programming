<?php

    require 'views/inicio.php';
    require 'views/header.php';
?>
<main class="main-pedidos">
      <?php echo $this->mensaje; ?>
      <form class="formulario-busqueda" action="<?php echo constant('URL'); ?>mislibros/registrarValoracion" method="post" onsubmit="return validarValoracion();">
          <p><span class="preguntas-formulario"></span> <span></span></p>
          <p><label for="nombre-apellidos"><span class="preguntas-formulario">Título:</span></label><input id="titulo" class="datos-busqueda" type="text" name="titulo" >
          <p><label for="autor"><span class="preguntas-formulario">Autor:</span></label><input id="autor" class="datos-busqueda" type="text" name="autor">
            
          <p><label for="anio"><span class="preguntas-formulario">Año:</span></label><input id="anio" class="datos-busqueda" type="text" name="anio">
          <fieldset>
            <p><span class="preguntas-formulario">Descripción:</span></p>
              <textarea class="datos-busqueda" name="descripcion" rows="10" id="descripcion" cols="100"></textarea>
          </fieldset>
          <fieldset>
            <p><span class="preguntas-formulario">Opinión:</span></p>
            <textarea class="datos-busqueda" name="opinion" rows="10" id="opinion"cols="100"></textarea>
          </fieldset>
          <br>
          <p id="se"><label for="val"><span class="preguntas-formulario">Valoración:</span></label><input id="valoracion" class="datos-busqueda" type="text" name="valoracion">

              <input id="boton-enviar" type="submit" value="Enviar"/>
              <br>
      </form>
    </main>

    
<?php
    require 'views/footer.php';
    require 'views/fin.php';
    
    //echo $this->getVista(); //OBTENEMOS LA VISTA QUE NOS SERVIRÁ PARA EL NAV

?>