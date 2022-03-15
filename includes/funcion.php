<?php

// generamos una constante que genera la ruta para encontrar el archivo
define('TEMPLATE', __DIR__ . '/templates');

// funcion que hace el llamado de los archivos
function incluirTemplate( string $nombre ){
    include TEMPLATE . "/${nombre}.php";
}