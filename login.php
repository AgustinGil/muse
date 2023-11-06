<?php
    session_start();

    include('config/conexion.php');

    if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $consulta = "SELECT nombre_US FROM usuarios WHERE email = '$email' and contraseña = '$contraseña'";

        $sql = mysqli_query($conexion, $consulta);

        $filas = mysqli_num_rows($sql);
        if ($filas > 0) {
            $resultado = mysqli_fetch_assoc($sql); // Obtener el resultado de la consulta
            $_SESSION['usuario'] = $resultado['nombre_US']; // Asignar el nombre_US a la sesión
            header("location: index.php");
        }

        mysqli_free_result($sql);
        mysqli_close($conexion);
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="authors" content="Grupo 5">
    <meta name="copyright" content="Conservamos los derechos de la página">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/script.js"></script>

    <link rel="shortcut icon" href="assets/img/icons/favicon.ico"/>
    <title>Muse</title>
</head>

<body>
    <main>
        <div id="autenticacion">
            <a href="index.php"><div id="autenticacion__logo"><img src="assets/img/icons/imagotipo.svg" title="Muse"></div></a>
            <div id="autenticacion__titulo">
                <h1>Inicio de Sesion</h1>
                <p id="autenticacion__titulo__sub">para acceder a tu cuenta de MUSE</p>
            </div>
            

            <form id="autenticacion__form" action="login.php" method="post"  novalidate>
                <div class="autenticacion__form__campo">
                    <label class="autenticacion__form__campo__etiqueta" for="email">Email</label>
                    <input type="email" name="email" class="autenticacion__form__campo__entrada" placeholder="Email" required>
                </div>
                <?php
                    if(isset($_POST['submit'])){
                        if(empty($_POST['email'])){
                            echo '<script> barraError("email"); </script>';
                            echo '<p class="autenticacion__form__error">Ingrese un correo electronico valido</p>';
                        }else{
                            echo '<script> barraCorrecta("email"); </script>';
                        }
                    }
                ?>

                <div class="autenticacion__form__campo">
                    <div class="autenticacion__form__campo__etiqueta" for="contraseña">Contraseña</div>
                    <input type="password" name="contraseña" class="autenticacion__form__campo__entrada" placeholder="Contraseña" required>
                </div>
                <?php
                    if(isset($_POST['submit'])){
                        if(empty($_POST['contraseña'])){
                            echo '<script> barraError("contraseña"); </script>';
                            echo '<p class="autenticacion__form__error">Ingrese una contraseña valida</p>';
                        }else{
                            echo '<script> barraCorrecta("contraseña"); </script>';
                        }
                    }
                ?>

                <div class="autenticacion__redirecciones autenticacion__redirecciones__contraseña">
                    <a href="">¿Olvidaste tu constraseña?</a>
                </div>
                
                <div id="autenticacion__form__contenedor-boton">
                    <input type="submit" name="submit" value="Iniciar Sesion" required>
                </div>
            </form>

            

            <div class="autenticacion__redirecciones autenticacion__registro">
                <p>¿No tienes una cuenta? <a href="registro.php">Registrate</a></p>
            </div>
        </div>

        
    </main>

    <!-- Footer de la Pagina -->
    <?php include('includes/footer.php') ?>
</body>

</html>