<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Set - LEGOD</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="centrar-contenido">

    <div class="encabezado">
        <h1>LEG<span>O</span>D</h1>
    </div>

    <div class="menu-navegacion">
        <a href="index.html" class="btn-menu">Buscar</a>
        <a href="crear.php" class="btn-menu">Crear</a>
        <a href="magia.php" class="btn-menu">Botón Mágico</a>
    </div>

    <div class="contenedor-busqueda">
        <div class="formulario">
            <h2>Actualizar Set</h2>
            
            <form action="guardar_cambios.php" method="POST">
                <!-- PHP (x5)--> 
                <input type="hidden" name="id_original" value="<?php  ?>">

                <label>Número de Set (set_num):</label>
                <input type="text" name="set_num" value="<?php  ?>" required>

                <label>Nombre del Set:</label>
                <input type="text" name="name" value="<?php  ?>" required>

                <label>Año de lanzamiento:</label>
                <input type="number" name="year" value="<?php  ?>" required>

                <label>Número de Piezas:</label>
                <input type="number" name="num_parts" value="<?php  ?>" required>

                <br><br>
                <input type="submit" value="Guardar Cambios">
            </form>
        </div>
    </div>

</body>
</html>