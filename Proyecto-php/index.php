<?php require_once './includes/cabecera.php'; ?>
<?php require_once './includes/lateral.php'; ?>
        
        <div id="contenedor">
            
        
            
            
            
            
            <!-- Caja principal -->
            <div id="principal">
                
                <h1>Ultimas entradas</h1>

                <?php 
                    $entradas = conseguirUltimasEntradas($db); 
                    if(!empty($entradas)):
                    while($entrada = mysqli_fetch_assoc($entradas)):
                ?>

                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?=substr($entrada['descripcion'], 0, 180)."..."?>
                        </p>
                    </a>

                <?php
                    endwhile;
                    endif;
                ?>
                
              
                
            </div>
            
            
        </div> <!-- fin del contenido -->
        
        
        
        
        
     <?php require_once './includes/pie.php'; ?>;
