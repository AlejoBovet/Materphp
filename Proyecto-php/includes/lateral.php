

<!-- Barra lateral -->
            <aside id="sidebar" class="bloque">

                <!-- bloque de pop up secion iniciada -->
                <?php if(isset($_SESSION['usuario'])):?>
                <div id="usuario-loguado " class="bloque">
                    <h3>Bienvenido <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
                    <!-- Botones -->
                    <a href="cerrar.php" class="boton boton-verde">Crear entradas</a>
                    <a href="cerrar.php" class="boton">Crear categoria</a>
                    <a href="cerrar.php" class="boton boton-naranja">Mis datos</a>
                    <a href="cerrar.php" class="boton boton-rojo">Cerrar sesion</a>

                </div>
                <?php endif; ?>  
                
                <!-- bloque de pop up secion cerrada -->
                <?php if(isset($_SESSION['error_login'])):?>
                    <div class="alerta alerta-error">
                        <?= $_SESSION['error_login']; ?>
                    </div>
                <?php endif; ?>  

                <?php if(!isset($_SESSION['usuario'])):?>

                <div id="login" class="bloque">
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
                <?php endif; ?>
            </aside>
