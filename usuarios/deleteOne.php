<?php

require_once '../Conexion/conexion.php';
$bd = $client->webstore; //Obtiene la base de datos
$coleccion = $bd->users; //Obtiene la coleccion

$perfil = $_GET['username'];


$deleteResult = $coleccion->deleteOne(
    ['perfil' => $perfil]
);

printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());
