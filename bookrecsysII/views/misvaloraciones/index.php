<?php
    require 'views/inicio.php';
    require 'views/header.php';
?>

<main class="main-pedidos">

<?php
  $color = true;
  $contador = 1;
  foreach($this->vals as $row){
    $v = new Valoraciones();
    $v = $row;
    if($color){
      $color=false;
?>

<main class="main-pedidos">
      <form class="formulario-busqueda" action="formulario.php" method="post">
        <br>
        <h2> Valoración número <?php echo $contador; $contador++; ?> </h2>
          <p><span class="preguntas-formulario"></span> <span></span></p>
          <p><span class="preguntas-formulario">Título:</span> <span><?php echo $v->titulo; ?></span></p>
          <p><span class="preguntas-formulario">Autor:</span> <span><?php echo $v->autor; ?></span></p>
          <p><span class="preguntas-formulario">Año:</span> <span><?php echo $v->anio; ?></span></p>
          <fieldset>
            <p><span class="preguntas-formulario">Descripción:</span></p>
            <p class="parrafo"><?php echo $v->descripcion; ?></p>
          </fieldset>
          <fieldset>
            <p><span class="preguntas-formulario">Opinión:</span></p>
            <p class="parrafo"><?php echo $v->opinion; ?></p>
          </fieldset>
            <br>
            <label>Tu valoración:</label><span class="preguntas-formulario"><?php echo $v->valoracion; ?></span>
              <br><br>
              <a class="edit" href="<?php echo constant('URL') . 'misvaloraciones/verValoracion/' . $v->titulo; ?>">Editar</a>
              <a class="edit" href="<?php echo constant('URL') . 'misvaloraciones/eliminarValoracion/' . $v->titulo; ?>">Eliminar</a>
            <br><br>
      </form>
    </main>

    <?php }else{ 
      $color=true;
    ?>

      <form class="formulario-busqueda" action="formulario.php" method="post">
      <br>
      <h2> Valoración número <?php echo $contador; $contador++; ?> </h2>
          <p><span class="preguntas-formulario"></span> <span></span></p>
          <p><span class="preguntas-formulario">Título:</span> <span><?php echo $v->titulo; ?></span></p>
          <p><span class="preguntas-formulario">Autor:</span> <span><?php echo $v->autor; ?></span></p>
          <p><span class="preguntas-formulario">Año:</span> <span><?php echo $v->anio; ?></span></p>
          <fieldset>
            <p><span class="preguntas-formulario">Descripción:</span></p>
            <p class="parrafo"><?php echo $v->descripcion; ?></p>
          </fieldset>
          <fieldset>
            <p><span class="preguntas-formulario">Opinión:</span></p>
            <p class="parrafo"><?php echo $v->opinion; ?></p>
          </fieldset>
          <br>
              <br>
              <label>Tu valoración:</label><span class="preguntas-formulario"><?php echo $v->valoracion; ?></span>
              <br>
              <br>
              <a class="edit" href="<?php echo constant('URL') . 'misvaloraciones/verValoracion/' . $v->titulo; ?>">Editar</a>
              <a class="edit" href="<?php echo constant('URL') . 'misvaloraciones/eliminarValoracion/' . $v->titulo; ?>">Eliminar</a>
              <br><br>
      </form>
      <?php } }?>
    </main>


<?php
    require 'views/footer.php';
    require 'views/fin.php';
?>