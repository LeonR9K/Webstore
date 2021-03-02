<?php

require_once '../Conexion/conexion.php';
$bd = $client->webstore; //Obtiene la base de datos
$coleccion = $bd->users; //Obtiene la coleccion

//include 'findOne.php';
// $id=$_POST['id'];

$email = $_POST['email'];
$pass = $_POST['pass'];
$perfil = $_POST['name'];

echo $email;
echo $pass;
echo $perfil;

$updateResult = $coleccion->updateOne(
    ['email' => $email],
    ['$set' => ['perfil' => $perfil]],
    // ['$set' => ['email' => '$email']],
    ['$set' => ['password' => $pass]]
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
