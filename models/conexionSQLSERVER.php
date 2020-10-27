<?php
/*
================================
Este archivo se encarga de conectar a la base de datos SQL SERVER
================================
 */
//Datos de conexion
$contraseña = "marco2020";
$usuario = "mmarco";
$nombreBaseDeDatos = "prueba";
#  IP del servidor remoto
$rutaServidor = "192.168.0.15\SQLSENALAB";
try {
    $base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
