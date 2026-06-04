<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar Set - LEGOD</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

    <div class="encabezado">
        <h1>LEG<span>O</span>D</h1>
    </div>

    <div class="menu-navegacion">
        <a href="index.html" class="btn-menu">Buscar</a>
        <a href="crear.php" class="btn-menu">Crear</a>
        
    </div>

    <!-- PHP --> 
    <div class="mensaje <?php  ?>">
        <h3>Resultado de la inserción:</h3>
        <!-- PHP --> 
        <p><?php  ?></p>
        <br>
        <a href="crear.php" style="color: #000; font-weight:bold;">Añadir otro set</a> | 
        <a href="index.html" style="color: #000; font-weight:bold;">Ir al buscador</a>
    </div>

</body>
</html>