<?php

    require '../includes/funcion.php';
    require '../includes/database.php';

    $db = conection();

    $errores = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        // extraccion de datos del metodo post
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($db, $_POST['apellido']);
        $edad = mysqli_real_escape_string($db, $_POST['edad']);

        // validacion de datos
        if (!$nombre) {
            $errores[] = 'Falta agregar el nombre';
        }
        if (!$apellido) {
            $errores[] = 'Falta agregar el apellido';
        }
        if (!$edad) {
            $errores[] = 'Falta agregar la edad';
        }

        // insercion de datos en la base de datos, si no se tienen errores
        if (empty($errores)){
            $query = "INSERT INTO personas (nombre, apellido, edad) VALUES('$nombre', '$apellido', '$edad')";
            $resultado = mysqli_query($db, $query);
        }

    }

    incluirTemplate('header');
?>

    <main>
        <div>
            <?php
                foreach($errores as $error){
                    echo "<ol>";
                    echo "<li>$error</li>";
                    echo "</ol>";

                }
            ?>
        </div>
        <p>Pagina para la creacion de informacion</p>
        <form action="" method="POST">
            <div class="formulario">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre">
            </div>

            <div class="formulario">
                <label for="apellido">Apellido</label>
                <input type="text" id="nombre" name="apellido">
            </div>

            <div class="formulario">
                <label for="edad">Edad</label>
                <input type="number" id="edad" name="edad">
            </div>
            

            <input type="submit" value="Guardar">
        </form>
    </main>