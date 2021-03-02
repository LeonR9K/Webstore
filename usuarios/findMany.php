<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/styles2.css" />
</head>

<body>
  <?php
  require_once '../Conexion/conexion.php';
  $bd = $client->webstore; //Obtiene la base de datos
  $coleccion = $bd->users; //Obtiene la coleccion  

  $cursor = $coleccion->find(
    [],
    [
      'limit' => 9
    ]
  );
  ?>




  <header class="header contenedor-tabla">
    <div class="header-video">
      <video src="../videos/video_people.mp4" autoplay loop></video>
    </div>
    <div class="header-overlay"></div>
    <div class="contenedor-tabla header-content ">

      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th></th>
          </tr>
        </thead>

        <?php foreach ($cursor as $document) { ?>

          <tr>
            <td> <?php echo $document['_id'];
                  $id = $document['_id']
                  ?>
            </td>
            <td> <?php echo  $document['perfil'];
                  $username = $document['perfil'];
                  ?>
            </td>
            <td> <?php echo  $document['email'];
                  $email = $document['email'];
                  $pass = $document['password'];
                  ?>
            </td>
            <td><?php
                echo "<a href='findOne.php?id=$id&username=$username&email=$email&pass=$pass'><i class='fas fa-pen-alt margin-l'></i></a>";
                ?><?php
                  echo "<a href='deleteOne.php?username=$username'><i class='fas fa-trash-alt'></i></a>";
                  ?></td>
          </tr>


        <?php } ?>
      </table>


    </div>
  </header>

</body>

</html>