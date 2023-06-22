<?php

require_once "../configuracion/conexion.php";

class Categoria
{
    public function __construct()
    {
    }

    public function insertar($nombre, $descripcion)
    {
        $sql = "INSERT INTO categoria (nombre, descripcion, condicion) VALUES ('$nombre', '$descripcion', '1')";
        return ejecutarConsulta($sql);
    }
}
