<?php
    require 'includes/funcion.php';

    incluirTemplate('header');
?>
    <main>
        <p>Pagina de prueba para poder realizar las consultas a la base de datos</p>
        <ol>
            <li><a href="admin/consulta.php">Ver registros</a></li>
            <li><a href="admin/crear.php">Crear registro</a></li>
        </ol>
    </main>

<?php
    incluirTemplate('footer');
?>