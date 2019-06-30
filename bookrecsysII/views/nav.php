    
    
<?php

    function getNavEnlaces(){
        echo <<< HTML
        <nav class="menu-navegacion">
            <ul class="lista-menu">
HTML;
?>
                <li><a class="actual" href="<?php echo constant('URL');?>main">Inicio</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>mislibros">Valorar</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>misvaloraciones">Mis Valoraciones</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>foro">Foro</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>misdatos">Mis datos</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>misrecomendaciones">Mis recomendaciones</a></li>
<?php
        echo <<< HTML
            </ul>
        </nav>
HTML;
?>
<?php } ?>
<?php

    function getNavError(){
        echo <<< HTML
        <nav class="menu-navegacion">
            <ul class="lista-menu">
HTML;
?>
                <li><a class="enlace" href="<?php echo constant('URL');?>main">Inicio</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>mislibros">Valorar</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>misvaloraciones">Mis Valoraciones</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>foro">Foro</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>misdatos">Mis datos</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>misrecomendaciones">Mis recomendaciones</a></li>
<?php
        echo <<< HTML
            </ul>
        </nav>
HTML;
?>
<?php } ?>
    
<?php
    function getNavMisLibros(){
        echo <<< HTML
            <nav class="menu-navegacion">
                <ul class="lista-menu">
HTML;
?>
                    <li><a class="enlace" href="<?php echo constant('URL');?>main">Inicio</a></li>
                    <li><a class="actual" href="<?php echo constant('URL');?>mislibros">Valorar</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misvaloraciones">Mis Valoraciones</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>foro">Foro</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misdatos">Mis datos</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misrecomendaciones">Mis recomendaciones</a></li>
<?php
        echo <<< HTML
                </ul>
            </nav>
HTML;
?>
<?php } ?>

<?php
    function getNavForo(){
        echo <<< HTML
            <nav class="menu-navegacion">
                <ul class="lista-menu">
HTML;
?>
                    <li><a class="enlace" href="<?php echo constant('URL');?>main">Inicio</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>mislibros">Valorar</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misvaloraciones">Mis Valoraciones</a></li>
                    <li><a class="actual" href="<?php echo constant('URL');?>foro">Foro</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misdatos">Mis datos</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misrecomendaciones">Mis recomendaciones</a></li>
<?php
        echo <<< HTML
                </ul>
            </nav>
HTML;
?>
<?php } ?>

<?php
    function getNavMisDatos(){
        echo <<< HTML
            <nav class="menu-navegacion">
                <ul class="lista-menu">
HTML;
?>
                    <li><a class="enlace" href="<?php echo constant('URL');?>main">Inicio</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>mislibros">Valorar</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misvaloraciones">Mis Valoraciones</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>foro">Foro</a></li>
                    <li><a class="actual" href="<?php echo constant('URL');?>misdatos">Mis datos</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misrecomendaciones">Mis recomendaciones</a></li>
<?php
        echo <<< HTML
                </ul>
            </nav>
HTML;
?>
<?php } ?>

<?php
    function getNavMisRecomendaciones(){
        echo <<< HTML
            <nav class="menu-navegacion">
                <ul class="lista-menu">
HTML;
?>
                    <li><a class="enlace" href="<?php echo constant('URL');?>main">Inicio</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>mislibros">Valorar</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misvaloraciones">Mis Valoraciones</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>foro">Foro</a></li>
                    <li><a class="enlace" href="<?php echo constant('URL');?>misdatos">Mis datos</a></li>
                    <li><a class="actual" href="<?php echo constant('URL');?>misrecomendaciones">Mis recomendaciones</a></li>
<?php
        echo <<< HTML
                </ul>
            </nav>
HTML;
?>
<?php } ?>

<?php

    function getNavMisValoraciones(){
        echo <<< HTML
        <nav class="menu-navegacion">
            <ul class="lista-menu">
HTML;
?>
                <li><a class="enlace" href="<?php echo constant('URL');?>main">Inicio</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>mislibros">Valorar</a></li>
                <li><a class="actual" href="<?php echo constant('URL');?>misvaloraciones">Mis Valoraciones</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>foro">Foro</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>misdatos">Mis datos</a></li>
                <li><a class="enlace" href="<?php echo constant('URL');?>misrecomendaciones">Mis recomendaciones</a></li>
<?php
        echo <<< HTML
            </ul>
        </nav>
HTML;
?>
<?php } ?>

        