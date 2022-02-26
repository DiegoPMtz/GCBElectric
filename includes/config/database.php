<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('162.241.62.202','gcbelect_DiegoPMtz', 'diego4798D#', 'gcbelect_Clientes_Facturacion_Datos');

    if(!$db){
        echo "Error, no se pudo conectar";
        exit;
    }

    return $db;
}