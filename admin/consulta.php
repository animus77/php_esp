<?php
    require '../includes/funcion.php';
    require '../includes/database.php';
    $db = conection();

    $query = "SELECT * FROM personas";
    $resultado = mysqli_query($db, $query);

    incluirTemplate('header');
?>

<main>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php while( $personas = mysqli_fetch_assoc($resultado) ): ?>
            <tr>
                <td><?php echo $personas['nombre'];?></td>
                <td><?php echo $personas['apellido'];?></td>
                <td><?php echo $personas['edad'];?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>