<?php
    require_once '../Conexion/conexion.php';
    $bd = $client->webstore; //Obtiene la base de datos
    $coleccion = $bd->users; //Obtiene la coleccion

    //Trae los datos desde usuarios2.php y los asigna en las variables $
    $email=$_POST['email']; 
    $pass=$_POST['pass'];
    $perfil=$_POST['name'];
    
    $user=array();

    $user['email']=$email;
    $user['password']=$pass;
    $user['perfil']=$perfil;

    $insertOneResult=$coleccion->insertOne($user);

    printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
    var_dump($insertOneResult->getInsertedId());


?>