
<?php 
    
    require 'views/inicio.php';
    require 'views/nav.php';
    getNavError();

?>
    
    <section>
      <h1 class="mensaje-error"><?php echo $this->mensaje;?></h1>
      <p class="mensaje-error2">Compruebe que la página a la que está intentando ingresar realmente exista, en caso afirmativo,
      póngase en contacto con el administrador.</p>
    </section>

<?php

    require 'views/footer.php';
    require 'views/fin.php';
?>

    