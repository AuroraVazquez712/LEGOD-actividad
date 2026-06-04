<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambios Guardados - LEGOD</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

    <div class="encabezado">
        <h1>LEG<span>O</span>D</h1>
    </div>

    <div class="menu-navegacion">
        <a href="index.html" class="btn-menu">Buscar</a>
        <a href="crear.php" class="btn-menu">Crear</a>
        <a href="magia.php" class="btn-menu">Botón Mágico</a>
    </div>
    
    <!-- PHP --> 
    <div class="mensaje <?php  ?>">
        <h3>Estado de la actualización:</h3>
        <!-- PHP --> 
        <p><?php  ?></p>
        <br>
        <a href="index.html" style="color: #000; font-weight:bold;">Volver al buscador</a>
    </div>

</body>
</html>