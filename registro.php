<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="authors" content="Grupo 5">
    <meta name="copyright" content="Conservamos los dere3chos de la página">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <link rel="icon" href="assets/img/icons/favicon.ico">
    <title>Muse</title>
</head>
<body>
    <main>
        <div id="autenticacion">
            <a href="index.php"><div id="autenticacion__logo"><img src="assets/img/icons/imagotipo.svg" title="Muse"></div></a>
            
            <div id="autenticacion__titulo">
                <h1>Registro</h1>
                <p id="autenticacion__titulo__sub">ten la experiencia MUSE al completo</p>
            </div>

            <form id="autenticacion__form" action="config/validaciones.php" method='post'  >

                <div class="autenticacion__form__campo">
                    <input type="text" id="usuario" name="usuario" class="autenticacion__form__campo__entrada" placeholder="Usuario" required>
                </div>
                <div class="div__autenticacion__form__error">
                    <p id="miPus" class="autenticacion__form__error"></p>
                </div>
                
                <div class="autenticacion__form__campo">
                    <input type="text" id="nombre" name="nombre" class="autenticacion__form__campo__entrada campo__nombre" placeholder="Nombre" required>
                    <input type="text" id="apellido" name="apellido" class="autenticacion__form__campo__entrada" placeholder="Apellido" required>
                </div>
                <div class="div__autenticacion__form__error">
                    <p id="miPnomb" class="autenticacion__form__error"></p>
                    <p id="miPapell" class="autenticacion__form__error"></p>
                </div>
                

                <div class="autenticacion__form__campo">
                    <input type="email" id="email" name="email" class="autenticacion__form__campo__entrada" placeholder="Email" required>
                </div>
                <div class="div__autenticacion__form__error">
                    <p id="miPemail" class="autenticacion__form__error"></p>
                </div>

                <div class="autenticacion__form__campo">
                    <select id="pais" name="pais" class="autenticacion__form__campo__entrada dropdown-pais">
                        <option value="" disabled selected hidden>País</option>
                        <option value="1">Venezuela</option>;
                    </select>
                </div>

                <div class="div__autenticacion__form__error">
                    <p id="miPpais" class="autenticacion__form__error"></p>
                </div>

                <div class="autenticacion__form__campo">
                    <input type="password" id="contraseña" name="contraseña" class="autenticacion__form__campo__entrada" placeholder="Contraseña" required>
                </div>

                <div class="div__autenticacion__form__error">
                    <p id="miPcontraseña" class="autenticacion__form__error"></p>
                </div>

                <div class="autenticacion__form__campo">
                    <input type="password" id="verif_contraseña" name="verif_contraseña" class="autenticacion__form__campo__entrada" placeholder="Verificar Contraseña" required>
                </div>

                <div class="div__autenticacion__form__error">
                    <p id="miPverif_contraseña" class="autenticacion__form__error"></p>
                </div>
                
                <div id="autenticacion__form__contenedor-boton">
                    <input type="button" id="submit" name='submit'value="Registrarse" id="autenticacion__form__cont-b__boton" required>
                </div>
            </form>

            <div class="autenticacion__redirecciones autenticacion__registro">
                <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
            </div>
        </div>
    </main>

    <!-- Footer de la Pagina -->
    <?php include_once('includes/footer.php') ?>
    <script src="js/app.js"></script>
</body>
</html>