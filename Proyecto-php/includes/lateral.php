<?php require_once('helpers.php') ?>

<!-- Barra lateral -->
            <aside id="sidebar" class="bloque">
                <div id="login">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password"/>
                        
                        <input type="submit" value="Entrar"/>
                    </form>
                </div>
                
                <div id="register" class="bloque">
                <?php echo mostrarErrores($_SESSION['errores'], 'nombre'); ?>
                    <h3>Registrate</h3>
                    <?php if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                            <?=$_SESSION['completado']?>
                        </div>
                    <?php elseif (isset($_SESSION['errores']['general'])) : ?>
                        <div class="alerta alerta-exito">
                            <?=$_SESSION['errores']['general']?>
                        </div>
                    <?php endif; ?>
                    <form action="registro.php" method="POST">
                        
                        <label for="nombres">Nombres</label>
                        <input type="text" name="nombres"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'nombres') : ''; ?>       

                        
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'apellidos') : ''; ?> 
                        

                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'email') : ''; ?> 


                        <label for="password">Contraseña</label>
                        <input type="password" name="password"/>
                        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'],'password') : ''; ?> 


                        <input type="submit" name="submit" value="registrar"/>
                    </form>
                    <?php borrarErrores();?>
                </div>
            </aside>
