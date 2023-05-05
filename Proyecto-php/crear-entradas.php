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
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'titulo') : ''; ?>  

        <label for="descripcion"> descripcion</label>
        <textarea type="text" name="descripcion" ></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'descripcion') : ''; ?>  

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
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'],'categoria') : ''; ?>  

        <input type="submit"  value= "guardas" >
    </form>

    <?php borrarErrores(); ?>

</div>
<!-- fin del contenido -->

<!--trae el pie de pagina-->
<?php require_once 'includes/pie.php'; ?>;