<?php

    require '../includes/funcion.php';
    require '../includes/database.php';

    $db = conection();

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($db, $_POST['apellido']);
        $edad = mysqli_real_escape_string($db, $_POST['edad']);

        $query = "INSERT INTO personas (nombre, apellido, edad) VALUES('$nombre', '$apellido', '$edad')";

        $resultado = mysqli_query($db, $query);
    }

    incluirTemplate('header');
?>

    <main>
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