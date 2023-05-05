<?php require_once 'includes/redireccion.php';?>
<!--trae la cabezera y el lateral de la pagina-->
<?php require_once 'includes/lateral.php';?>
<?php require_once 'includes/cabecera.php';?>

<!-- Caja principal -->
<div id = "principal">
    <h1>Crear Categorias</h1>

    <p>
        Añade nuevas categorias 
    </p>
    
    <form action="guardar-categoria.php" method="POST">

        <label for="nombre">Nombre de la categoria</label>
        <input type="text" name="nombre" />
        <input type="submit" value="Guardar" />
        
    </form>

</div>
<!-- fin del contenido -->

<!--trae el pie de pagina-->
<?php require_once 'includes/pie.php'; ?>;