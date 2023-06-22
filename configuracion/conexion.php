<?php

require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_query($conexion, 'SET NAMES "' . DB_ENCODE . '"');

if (mysqli_connect_errno()) {
    printf("Fallo conexion a la base de datos: %s\n", mysqli_connect_error());
    exit();
}

function ejecutarConsulta($sql)
{
    global $conexion;
    $query = $conexion->query($sql);
    return $query;
}

function ejecutarConsultaUnica($sql)
{
    global $conexion;
    $query = $conexion->query($sql);
    $row = $query->fetch_assoc();
    return $row;
}

function ejecutarConsulta_retornarID($sql)
{
    global $conexion;
    $query = $conexion->query($sql);
    return $conexion->insert_id;
}

function limpiarCadena($str)
{
    global $conexion; // Hace referencia a la conexión a la base de datos, que se supone está previamente establecida.

    $str = mysqli_real_escape_string($conexion, trim($str));
    // Utiliza la función mysqli_real_escape_string() para escapar caracteres especiales y prevenir inyecciones SQL. 
    // También se aplica la función trim() para eliminar espacios en blanco al inicio y al final de la cadena.
    // El resultado se guarda en la variable $str.

    return htmlspecialchars($str);
    // Utiliza la función htmlspecialchars() para convertir caracteres especiales en entidades HTML.
    // Esto ayuda a prevenir ataques XSS (cross-site scripting) al asegurarse de que los caracteres especiales no se interpreten como código HTML o JavaScript malicioso.
    // Devuelve la cadena final segura y limpia.
}
