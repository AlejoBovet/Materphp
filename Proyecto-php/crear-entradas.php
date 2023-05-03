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
    
    <form action="guardar-entradas.php" method="post">

        <label for="titulo">Nombre de la categoria</label>
        <input type="text" name="titulo" />

        <label for="descripcion"> descripcion</label>
        <textarea type="text" name="descripcion" ></textarea>

        <label for="categoria">Categoria</label>
        <select name="categoria">
        
        <?php 
            $categorias = conseguirCategorias($db); 
            if(!empty($categorias)):
            while($categoria = mysqli_fetch_assoc($categorias)):
        ?>
        <option value="<?=$categoria['id']?>">
            <?=$categoria['nombre']?>
        <?php
            endwhile;
            endif;
        ?>

        </select>

        <input type="submit"  value= "guardas" >
    </form>

</div>
<!-- fin del contenido -->

<!--trae el pie de pagina-->
<?php require_once 'includes/pie.php'; ?>;