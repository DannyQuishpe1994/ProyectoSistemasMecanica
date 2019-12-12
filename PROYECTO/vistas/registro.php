<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/reset.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
        <link rel="stylesheet" href="../css/main.css">
        <title>Formulario</title>
    </head>
    <body>
        <div class="container">

            <div class="form__top">
                <h2>Registro <span> de</span> <span> Usuarios</span></h2>
            </div>		
            <form action="../vistas/registro.php" class="form__reg" method="POST">

                <input class="input" type="text" name="cedula" placeholder="&#128100;  Cedula" minlength="10" maxlength="10" pattern="[0-9]+" required autocomplete="off"/>
                <input class="input" type="text" name="nombre" placeholder="&#128100;  Nombre" minlength="2" maxlength="15" pattern="[A-Za-z]+" required autocomplete="off"/>
                <input class="input" type="text" name="apellido" placeholder="&#128100;  Apellido" minlength="2" maxlength="15" pattern="[A-Za-z]+" required autocomplete="off"/>
                <input class="input" type="text" name="username" placeholder="&#128100;  Username" minlength="5" maxlength="15" pattern="[A-Za-z0-9]+" required autocomplete="off"/>
                <input class="input" type="password" name="password" placeholder="&#8962;  Password" minlength="5" maxlength="12" pattern="[A-Za-z0-9]+" required autocomplete="off"> 
                <input class="input" type="email" name="correo" placeholder="&#9993;  Correo"  required autocomplete="off"/>
                <div class="btn__form">
                    <input type="submit" class="btn__submit" name="registrarse" value="REGISTRAR">
                    <input class="btn__reset" type="reset" value="LIMPIAR">	
                </div>
            </form>
        </div>
<div id="menu">
            <ul>
               
                <li class="cerrar-sesion"><a href="..//login.php">Salir</a></li>
            </ul>
        </div>
    </body>
</html>

<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "proyecto";
$enlace = mysqli_connect($server, $username, $password, $database);

if (!$enlace) {
    echo 'error de conexion';
}else{
    //echo 'conectado' ;
}
if (isset($_POST['registrarse'])) {
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $correo = $_POST["correo"];

    $insertarDatos = "INSERT INTO usuarios VALUES ('$cedula', '$nombre', '$apellido', '$username', '$password', '$correo');";
    
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if ($ejecutarInsertar) {
        echo '<br><alert>USUARIO  ' . $username . '    REGISTRADO CON ÉXITO </alert>';
        
        header('location: ..//login.php');
    } else {
        echo '<alert>USUARIO ' . $username . '  NO SE PUDO REGISTRAR, INTENTE NUEVAENTE </alert>';
    }
}
?>

