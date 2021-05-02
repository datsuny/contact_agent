</<?php
include 'includes/layout/header.php';
?>

<div class="contenedor-barra">
    <div class="contenedor barra">
        <a href="index.php" class="btn volver">Inicio</a>
        <h1>Editar Contacto</h1>
    </div>
</div>

<div class="bg-amarillo contenedor sombra">
    <form id="contacto">
        <legend class="title">Edite el contacto</legend>
        <?php
            include 'includes/layout/formulario.php';
        ?>
    </form>
</div>


<?php
include 'includes/layout/footer.php';
?>