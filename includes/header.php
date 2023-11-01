<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="authors" content="Grupo 5">
    <meta name="copyright" content="Conservamos los derechos de la página">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <script src="js/script.js"></script>
    
    <link rel="shortcut icon" href="assets/img/icons/favicon.ico">
    <link rel="icon" href="assets/img/icons/favicon.ico">
    <title>Muse</title>
</head>
<body>
    <header id="header">
        <a href="index.php">
            <div id="header__logo"><img src="assets/img/icons/imagotipo.svg" title="Muse"></div>
            <div id="header__logo-secundario"><img src="assets/img/icons/isotipo.svg" title="Muse"></div>
        </a>
    
    
        <nav id="header__menu-central">
            <ul>
                <li class="header__menu-central__item">
                    <img class="header__menu-central__item__icono filtro-blanco" src="assets/img/icons/book-bookmark.svg">
                    <a href="" class="header__menu-central__item__link">Biblioteca</a>
                </li>
                <li class="header__menu-central__item">
                    <img class="header__menu-central__item__icono filtro-morado" src="assets/img/icons/house-solid.svg">
                    <a href="" class="header__menu-central__item__link filtro-morado">Inicio</a>
                </li>
                <li class="header__menu-central__item">
                    <img class="header__menu-central__item__icono filtro-blanco"
                        src="assets/img/icons/magnifying-glass-solid.svg">
                    <a href="" class="header__menu-central__item__link">Buscar</a>
                </li>
            </ul>
        </nav>
    
        <?php
                    session_start();
                    
                    if (isset($_SESSION['usuario'])) {
                        // El usuario ha iniciado sesión, muestra el nombre de usuario u otra información
                        $nombreUsuario = $_SESSION['usuario'];
                        ?>
        <div id="header__usuario" onclick="desplegarMenuUsuario()">
    
            <img id="header__usuario__icono__secundario" class="filtro-blanco" src="assets/img/icons/drop_down_menu.svg">
            <?php echo '<p id="nombre_us">'.$nombreUsuario.'</p>' ?>
            <img class="header__usuario__icono filtro-blanco" src="assets/img/icons/circle-user.svg">
    
            <nav id="header__usuario__menu">
                <ul>
                    <li class="header__usuario__menu__item"><a class="header__usuario__menu__item__link" href="#">Perfil</a>
                    </li>
                    <li class="header__usuario__menu__item"><a class="header__usuario__menu__item__link"
                            href="#">Ajustes</a></li>
                    <li class="header__usuario__menu__item"><a href="config/cerrarsesion.php"
                            class="header__usuario__menu__item__link">Cerrar Sesion</a></li>
                </ul>
            </nav>
    
        </div>
        <?php
                    } else {
                        ?>
        <div id="header__sin-iniciar">
            <a href="registro.php"><button id="header__usuario__crear-cuenta">Crear Cuenta</button></a>
            <a href="login.php"><button id="header__usuario__iniciar-sesion">Iniciar Sesion</button></a>
        </div>
        <?php
                    }
                ?>    
    </header>

    <section id="menu-inferior">
            <ul>
                <li class="menu-inferior__item">
                    <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/book-bookmark.svg">
                    <a href="" class="menu-inferior__item__link">Biblioteca</a>
                </li>
                <li class="menu-inferior__item menu-inferior__item--activo">
                    <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/house-solid.svg">
                    <a href="" class="menu-inferior__item__link">Inicio</a>
                </li>
                <li class="menu-inferior__item">
                    <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/magnifying-glass-solid.svg">
                    <a href="" class="menu-inferior__item__link">Buscar</a>
                </li>
                <li class="menu-inferior__item">
                    <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/Lyre Icon.svg">
                    <a href="" class="menu-inferior__item__link">Premium</a>
                </li>
            </ul>
        </section>
</body>
</html>