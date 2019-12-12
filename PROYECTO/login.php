<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/main_1.css">
        <title>LOGIN PROYECTO</title>

    </head>
    <body>
        <form action="logica/loguear.php" method="post" >
            <div align="center">
            <?php
            if (isset($errorLogin)) {
                echo $errorLogin;
            }
            ?>
            <h2>INICIAR SESION</h2>
          
            <input type="text" name="usuario" placeholder="nickname" autocomplete="off" required="true">
            <br><br>
            <input type="password" name="password" placeholder="password" autocomplete="off" required="true">
            <br><br>
            <input type="submit" ></input >
            <br><br>
            </div>
        </form>
        <div align="center">
            <a href=" vistas/registro.php">Registrarme</a> &nbsp&nbsp &nbsp
            <a href=" vistas/correo.php">Olvide mi password</a>
            
        </div>
    </body>
</html>