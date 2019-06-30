<?php
    require 'views/inicio.php';
    require 'views/header.php';
?>

<main class="main-pedidos">
      <h3 class="se">Información del libro "<?php echo $this->valoration->titulo ?>"</h3>
      <h5><?php //echo $this->mensaje; ?></h5>
      <section class="libros">

      <form class="formulario-busqueda" enctype="multipart/form-data" action="<?php echo constant('URL'); ?>misvaloraciones/actualizarValoracion" method="post">

            <p><label for="titulo">Título:</label><input id="titulo" disabled class="datos-busqueda" value="<?php echo $this->valoration->titulo; ?>" type="text" name="titulo"></input></p>

            <p><label for="autor">Autor:</label><input id="autor" class="datos-busqueda" value="<?php echo $this->valoration->autor; ?>" type="text" name="autor" ></input></p>

            <p><label for="anio">Año:</label><input id="anio" class="datos-busqueda" value="<?php echo $this->valoration->anio; ?>" type="text" name="anio" ></input></p>
            <p><label for="descripcion">Descripción:</label></p><p><textarea rows="10" cols="100" id="descripcion" class="datos-busqueda"  name="descripcion"><?php echo $this->valoration->descripcion; ?></textarea></p>

            <p><label for="opinion">Opinión:</label></p><p><textarea rows="10" cols="100" id="opinion" class="datos-busqueda"  name="opinion"><?php echo $this->valoration->opinion; ?></textarea></p>

            <p><label for="valoración">Valoración:</label><input id="valoracion" class="datos-busqueda" value="<?php echo $this->valoration->valoracion; ?>" type="text" name="valoracion" ></p>

            <label><input id="boton-enviar" type="submit" value="Actualizar"/></label>
            <br><br>
        </form>
      </section>

    </main>

    <?php
    require 'views/footer.php';
    require 'views/fin.php';
    
    //echo $this->getVista(); //OBTENEMOS LA VISTA QUE NOS SERVIRÁ PARA EL NAV

?>
















    