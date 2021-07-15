<?php include("../database.php"); ?>

<html>
    <head>
        <title>Registrarse</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="contenedor">
            <form action="register.php" method="POST">
                <h1>Registrarse</h1>
                <p>Usuario <input type="text" name="usuario" placeholder="Cree su usuario"></p>
                <p>Email <input type="email" name="email" placeholder="Ingrese su email"></p>
                <p>Contraseña <input type="password" name="contraseña" placeholder="Cree su contraseña"></p>
                <p>Confirme su contraseña <input type="password" name="contraseña-con" placeholder="Confirme su contraseña"></p>

                <input type="submit" value="Registrarse">
            </form>
        </div>
    </body>
</html>