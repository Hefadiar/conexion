<?php
session_start();
// Invoke the session variables to start a new session or resume an existing session.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link type="text/css" rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Library to style javascript alerts-->
</head>

<body>
    <div class="row">
        <?php
        include_once "includes/menuext.php";
        // we include the outside menu
        ?>
        <div class="col-12 col-s-12 main">
            <div class="col-10 col-s-10 contenedor">
                <h1 class="col-12 col-s-12">Perfil de usuario</h1>
                <form method="POST" action="" id="formulario" class="col-12 col-s-12">
                    <!-- field list -->
                    <div class="fila">
                        <!-- text -->
                        <input type="text" id="cc" name="cc" maxlength="10" size="30" placeholder="Documento de identidad" required="required" autofocus="autofocus" />
                        <label for="cc" class="propiedad">Documento</label>
                    </div>
                    <div class="fila">
                        <!-- text -->
                        <input type="text" id="nombre" name="fullname" maxlength="30" size="30" placeholder="Nombre" required="required" autofocus="autofocus" />
                        <label for="nombre" class="propiedad">Nombre</label>
                    </div>
                    <!-- password -->
                    <div class="fila">
                        <input type="password" id="password" name="password" size="30" placeholder="Contraseña" required="required" />
                        <label for="password" class="propiedad">Contraseña</label>
                    </div>
                    <!-- email -->
                    <div class="fila">
                        <input type="email" id="email" name="email" maxlength="30" size="30" placeholder="Email" />
                        <label for="email" class="propiedad">Email</label>
                    </div>
                    <!-- tel -->
                    <div class="fila">
                        <input type="tel" id="telefono" name="phonenumber" maxlength="10" size="11" placeholder="Tel&eacute;fono" pattern="[0-9]{10}" />
                        <label for="telefono" class="propiedad">Tel&eacute;fono</label>
                    </div>
                    <!-- url -->
                    <div class="fila">
                        <input type="url" id="web" name="web" maxlength="30" size="30" placeholder="url" value="http://" />
                        <label for="web" class="propiedad">Facebook</label>
                    </div>
                    <!-- date -->
                    <div class="fila">
                        <input type="date" id="fecha" name="birthdate" />
                        <label for="fecha" class="propiedad">Fecha de nacimiento</label>
                    </div>



                    <!-- radio -->
                    <div class="fila">
                        <input type="radio" id="hombre" name="genre" value="hombre" />
                        <label for="hombre" class="de-radio">Hombre</label>
                        <input type="radio" id="mujer" name="genre" value="mujer" checked="checked" />
                        <label for="mujer" class="de-radio">Mujer</label>
                        <label for="genero" class="propiedad">Género</label>
                    </div>

                    <!-- select combo -->
                    <div class="fila">
                        <select id="estudios" name="studies" required="required">
                            <option value="">- Seleccione -</option>
                            <option value="primaria">Primaria</option>
                            <option value="bachillerato">Bachillerato</option>
                            <option value="media">Media Tecnica</option>
                            <option value="tecnologo">Tecnologo</option>
                            <option value="profesional">Grado universitario</option>
                        </select>
                        <label for="estudios" class="propiedad">Nivel máximo de estudios</label>
                    </div>
                    <!-- checkbox -->
                    <div class="fila">
                        <input type="checkbox" id="terminos" value="1" name="terminos" />
                        <label for="terminos" class="propiedad">Acepta los terminos y condiciones</label>
                    </div>
                    <!-- keypad -->
                    <div class="fila botonera">
                        <button type="submit">Registrar</button>
                        <button type="reset">Cancelar</button>
                    </div>

                </form>
                <?php
                include_once "controlador/control_user.php";
                /* include the controller that allows the connection between the view and the model */
                ?>
            </div>
        </div>
    </div>
</body>

</html>