<?php require_once 'includes/helpers.php'; ?>

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
                    <?php if(isset($_SESSION['errores'])): ?>
                        <?php var_dump($_SESSION['errores']); ?>
                    <?php endif ;  ?>
                    <h3>Registrate</h3>
                    <form action="registro.php" method="POST">
                        
                        <label for="nombres">Nombres</label>
                        <input type="text" name="nombres"/>
                        <?php echo mostrarError($_SESSION['errores']['nombre'], 'nombre'); ?>
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos"/>
                        
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password"/>
                        
                        <input type="submit" name="submit" value="registrar"/>
                    </form>
                </div>
            </aside>
