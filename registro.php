<?php
    include('config/conexion.php');

    $consulta_paises = "SELECT id_pais, nombre FROM paises";
    $resultado_paises = mysqli_query($conexion, $consulta_paises);
    
    function ingresar($conexion) {
        if ( !empty($_POST['usuario']) 
            && !(strlen($_POST['usuario']) > 20) 
            && !empty($_POST['nombre']) 
            && !empty($_POST['apellido']) 
            && !empty($_POST['email']) 
            && !empty($_POST['contraseña']) 
            && (preg_match('/^\pL+$/u', ($_POST['nombre']))) 
            && (strlen($_POST['nombre']) < 21) 
            && (strlen($_POST['apellido']) < 21)
            && (preg_match('/^\pL+$/u', ($_POST['apellido']))) 
            && !(!isset($_POST['a']) && $_POST['a']='País')
            ) {
                

            $usuario = $_POST['usuario'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            $pais = intval( $_POST['a']);

            $consulta = "INSERT INTO usuarios (nombre_US, nombre, apellido, email, contraseña, id_pais) 
            VALUES ('$usuario', '$nombre', '$apellido', '$email', '$contraseña', '$pais')";

            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
        }
    }
?>

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

            <form id="autenticacion__form" action="registro.php" method='post'  novalidate>
            <?php ingresar($conexion); ?>

                <div class="autenticacion__form__campo">
                    <input type="text" name="usuario" class="autenticacion__form__campo__entrada" placeholder="Usuario" required>
                </div>
                <?php
                    if(isset($_POST['submit'])){
                        if(empty($_POST['usuario'])){
                            echo '<script> barraError("usuario"); </script>';
                            echo '<p class="autenticacion__form__error">Ingrese un nombre de usuario valido</p>';
                        }else if(strlen($_POST['usuario']) > 20){
                                echo '<script> barraError("usuario"); </script>';
                                echo '<p class="autenticacion__form__error">Su usuario no puede exceder los 20 caracteres</p>';
                        }else{
                            echo '<script> barraCorrecta("usuario"); </script>';
                        }
                    }
                ?>
                    
                <div class="autenticacion__form__campo">
                    <input type="text" name="nombre" class="autenticacion__form__campo__entrada campo__nombre" placeholder="Nombre" required>
                    <input type="text" name="apellido" class="autenticacion__form__campo__entrada" placeholder="Apellido" required>
                </div>
                <?php
                    if(isset($_POST['submit'])){
                        if(empty($_POST['nombre']) || empty($_POST['apellido']) || !(preg_match('/^\pL+$/u', ($_POST['nombre']))) || !(preg_match('/^\pL+$/u', ($_POST['apellido']))) ){
                            echo '<script> barraError("nombre"); barraError("apellido"); </script>';
                            echo '<p class="autenticacion__form__error">Ingrese un nombre y apellido, con unicamente letras</p>';
                        }else if((strlen($_POST['nombre']) > 20) || (strlen($_POST['apellido']) > 20)){
                            echo '<script> barraError("nombre"); barraError("apellido"); </script>';
                            echo '<p class="autenticacion__form__error">Su nombre y apellidos no puede exceder los 20 caracteres cada uno</p>';
                        }else{
                            echo '<script> barraCorrecta("nombre"); barraCorrecta("apellido") </script>';
                        }
                    }
                ?>

                <div class="autenticacion__form__campo">
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
                    <?php
                        if($resultado_paises) {
                    ?>
                        <select name="a" class="autenticacion__form__campo__entrada dropdown-pais">
                            <option value="" disabled selected hidden>País</option>
                        <?php    
                            while($fila = mysqli_fetch_assoc($resultado_paises)) {
                            echo '<option value="' . $fila['id_pais'] . '">' . $fila['nombre'] . '</option>';
                            }
                        } 
                        ?>
                    </select>
                </div>
                <?php
                    if(isset($_POST['submit'])){
                        if(!isset($_POST['a']) && $_POST['a']='País'){
                            echo '<script> barraError("a"); </script>';
                            echo '<p class="autenticacion__form__error">Seleccione un pais</p>';
                        }else{
                            echo '<script> barraCorrecta("a"); </script>';
                        }
                    }
                ?>

                <div class="autenticacion__form__campo">
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

                
                <div id="autenticacion__form__contenedor-boton">
                    <input type="submit" name='submit'value="Registrarse" id="autenticacion__form__cont-b__boton" required>
                </div>
            </form>

            <div class="autenticacion__redirecciones autenticacion__registro">
                <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesion aqui</a></p>
            </div>
        </div>
    </main>

    <!-- Footer de la Pagina -->
    <?php include('includes/footer.php') ?>
</body>
</html>