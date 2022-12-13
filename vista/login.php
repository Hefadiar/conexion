<?php
session_start();
// Invoke the session variables to start a new session or resume an existing session.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link type="text/css" rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Library to style javascript alerts-->
</head>
<body>
    <div class="row">
        <div class="col-12 col-s-12">
            <?php
            include_once "includes/menuext.php";
            // we include the outside menu
            ?>
        </div>
        <div class="col-12 col-s-12 main">
            <div class="col-10 col-s-10 contenedor">
                <h1 class="col-12 col-s-12">Inicio de Sesi&oacute;n </h1>
                <form action="" method="POST" id="formulario" class="col-12 col-s-12">
                    <!-- email -->
                    <div class="fila">
                        <input type="email" id="email" name="email" maxlength="30" size="30" placeholder="Email" />
                        <label for="email" class="propiedad">Email</label>
                    </div>
                    <!-- password -->
                    <div class="fila">
                        <input type="password" id="password" name="password" size="30" placeholder="Contrase&ntilde;a" required="required" />
                        <label for="password" class="propiedad">Contrase&ntilde;a</label>
                    </div>
                    <!-- keypad -->
                    <div class="fila botonera">
                        <button type="submit">Ingresar</button>
                        <button type="reset">Cancelar</button>
                    </div>
                </form>
                <?php
                // include_once "controlador/control_login.php";
                /* include the controller that allows the connection between the view and the model */
                ?>

            </div>
        </div>
    </div>
</body>

</html>