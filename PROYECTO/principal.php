<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <link rel="stylesheet" href="../css/main_1.css">
    </head>
    <body>
        <div id="menu">
            <ul>
                <li>Home</li>
                <li class="cerrar-sesion"><a href="logica/salir.php">Cerrar sesión</a></li>
            </ul>
        </div>

        <section>
            
            <?php
            session_start();
            $usuario = $_SESSION['username'];

            if (!isset($usuario)) {
                header("location: login.php");
            } else {
                echo "<H1>BIENVENIDO $usuario</H1>";
                
            }
            ?>
        </section>

    </body>
</html>


