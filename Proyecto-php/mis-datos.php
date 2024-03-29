<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/cabecera.php'; ?>
<?php require_once './includes/lateral.php'; ?>

<!-- Caja principal -->
<div id="principal">

    <h1>Mis datos</h1>

    <?php if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                            <?=$_SESSION['completado']?>
                        </div>
                    <?php elseif (isset($_SESSION['errores']['general'])) : ?>
                        <div class="alerta alerta-exito">
                            <?=$_SESSION['errores']['general']?>
                        </div>
                    <?php endif; ?>
                    <form action="actualizar-usuario.php" method="POST">
                        
                        <label for="nombres">Nombres</label>
                        <input type="text" name="nombres" value="<?= $_SESSION['usuario']['nombre'] ?> "/>
                            
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos'] ?> "/>
                        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'apellidos') : ''; ?> 

                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?= $_SESSION['usuario']['email'] ?> "/>
                        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'email') : ''; ?>    

                        <input type="submit" name="submit" value="actualizar"/>
                    </form>
                    <?php borrarErrores();?>

</div>
<!-- fin del contenido -->

<!--trae el pie de pagina-->
<?php require_once './includes/pie.php'; ?>;