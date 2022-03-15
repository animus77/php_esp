<?php
    function conection() : mysqli
    {
        $db = mysqli_connect('localhost', 'root', 'MariaJose7', 'php_test');
        
        if(!$db){
            echo 'error en la conexion';
            exit;
        }
        return $db;
    }

?>