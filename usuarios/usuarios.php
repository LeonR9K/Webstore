<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles2.css">
</head>

<body>
    <header class="header contenedor">
        <div class="header-video">
            <video src="../videos/video_mujer.mp4" autoplay loop></video>
        </div>
        <div class="header-overlay"></div>
        <div class="contenedor header-content">

            <form action="guardar.php" class="formulario" method="POST">
                <h1>Sign up now</h1>
                <input name="name" class="redondeado form-control" placeholder="User Name" type="text">
                <input name="email" class="redondeado form-control" placeholder="Email" type="email">
                <input name="pass" class="redondeado form-control" placeholder="Password" type="password" name="" id="">
                <button type="submit" class="boton redondeado">Sign up</button>

            </form>

            <form action="findMany.php" method="GET" class="formulario">
                <button type="submit" class="boton redondeado ">Registros</button>
            </form>
        </div>
    </header>
</body>

</html>