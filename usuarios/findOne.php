<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles2.css">
</head>

<body>
    <?php
    $id = $_GET['id'];
    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['pass'];
    ?>
    <header class="header contenedor">
        <div class="header-video">
            <video src="../videos/video_woman2.mp4" autoplay loop></video>
        </div>
        <div class="header-overlay"></div>
        <div class="contenedor header-content">

            <form action="updateOne.php" class="formulario registro" method="POST">
                <h1>Actualizacion</h1>
                <input name="id" value="<?php echo $id ?>" class="input-fantasma">
                <input name="name" class="redondeado form-control" placeholder="User Name" type="text" value="<?php echo $username ?>">
                <input name="email" readonly="readonly" class="redondeado form-control" placeholder="Email" type="email" value="<?php echo $email ?>">
                <input name="pass" class="redondeado form-control" placeholder="Password" type="password" value="<?php echo $password ?>">
                <button type="submit" class="boton redondeado">Actualizar</button>
            </form>


        </div>
    </header>
</body>

</html>