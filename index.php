<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="authors" content="Grupo 5">
        <meta name="copyright" content="Conservamos los derechos de la página">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/main1.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
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
                        <img class="header__menu-central__item__icono filtro-blanco" src="assets/img/icons/magnifying-glass-solid.svg">
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
                                <li class="header__usuario__menu__item"><a class="header__usuario__menu__item__link" href="#">Perfil</a></li>
                                <li class="header__usuario__menu__item"><a class="header__usuario__menu__item__link" href="#">Ajustes</a></li>
                                <li class="header__usuario__menu__item"><a href="cerrarsesion.php" class="header__usuario__menu__item__link">Cerrar Sesion</a></li>
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

        <main>
            <section class="seccion-titular">
                <h2>Recomendado para tí</h2>
    
                <div class="seccion-titular__music">
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 3.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Life Will Change</a>
                            <p class="seccion-titular__info--artista">Lyn</p>
                        </div>
                    </div>
                    
                    
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 1.jpg"></img>
                            <img class= "reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">The Wanderer</a>
                            <p class="seccion-titular__info--artista">Dion</p>
                        </div>
                    </div>
                    
                    <div class="conete" id="pene"></div>
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 2.jpg"></img>
                            <img class= "reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">I Will Give You My All 2017</a>
                            <p class="seccion-titular__info--artista">Simon Viklund</p>
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="seccion-titular">
                <h2>Canciones en tendencia</h2>
            
                <div class="seccion-titular__music">
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 4.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Starboy</a>
                            <p class="seccion-titular__info--artista">The Weeknd, Daft Punk</p>
                        </div>
                    </div>
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 4.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Starboy</a>
                            <p class="seccion-titular__info--artista">The Weeknd, Daft Punk</p>
                        </div>
                    </div>
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 4.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Starboy</a>
                            <p class="seccion-titular__info--artista">The Weeknd, Daft Punk</p>
                        </div>
                    </div>
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 4.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Starboy</a>
                            <p class="seccion-titular__info--artista">The Weeknd, Daft Punk</p>
                        </div>
                    </div>
            
            
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 5.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Bones</a>
                            <p class="seccion-titular__info--artista">Imagine Dragons</p>
                        </div>
                    </div>
    
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 6.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Don't Start Now</a>
                            <p class="seccion-titular__info--artista">Dua Lipa</p>
                        </div>
                    </div>
            
            
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 7.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Get Lucky</a>
                            <p class="seccion-titular__info--artista">Daft Punk, Pharrel Williams, Nile Rodgers</p>
                        </div>
                    </div>
    
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 8.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">As It Was</a>
                            <p class="seccion-titular__info--artista">Harry Styles</p>
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="seccion-titular">
                <h2>Hard Rock & Heavy Metal</h2>
    
                <div class="seccion-titular__music">
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 9.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class=" seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Highway to Hell</a>
                            <p class="seccion-titular__info--artista">AC/DC</p>
                        </div>
                    </div>
    
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 10.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">B.Y.O.B</a>
                            <p class="seccion-titular__info--artista">System Of A Down</p>
                        </div>
                    </div>
    
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 11.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class=" seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">T.N.T</a>
                            <p class="seccion-titular__info--artista">AC/DC</p>
                        </div>
                    </div>
    
    
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 12.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Sanctified with Dynamite</a>
                            <p class="seccion-titular__info--artista">Powerwolf</p>
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="seccion-titular">
                <h2>Hip Hop</h2>
            
                <div class="seccion-titular__music">
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 13.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">Versos Perversos</a>
                            <p class="seccion-titular__info--artista">Lil Bokeron</p>
                        </div>
                    </div>
            
            
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 14.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">My Name Is</a>
                            <p class="seccion-titular__info--artista">Eminem</p>
                        </div>
                    </div>
            
                    <div class="seccion-titular__info--music">
                        <div class="seccion-titular__info--img">
                            <img class="imagen" src="assets/img/covers/cover 15.jpg"></img>
                            <img class="reproducir-sobre-imagen" src="assets/img/icons/play-button.svg">
                        </div>
                        <div class="seccion-titular__info--text">
                            <a class="seccion-titular__info--titulo">In Da Club</a>
                            <p class="seccion-titular__info--artista">50 Cent</p>
                        </div>
                    </div>
                </div>
            </section>

            <hr id="barra-footer">

            <footer>
                    <div id="footer__logo"><img src="assets/img/icons/imagotipo.svg"></div>
                    <p id="derechos-footer">Copyright ©2023 Muse. <br>Developed by Fermin S. , Gil A. , Jiménez G. </p>
                    <div id="footer__iconos">
                        <img class="icono-footer filtro-blanco" src="assets/img/icons/instagram.svg">
                        <img class="icono-footer filtro-blanco" src="assets/img/icons/twitter.svg">
                        <img class="icono-footer filtro-blanco" src="assets/img/icons/facebook-f.svg">
                    </div>
            </footer>
        </main>

        
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
        <section class="barra-inferior">
            <div class="contenedor-imagen-actual">
                <img id="imagen-actual" src="assets/img/covers/cover 1.jpg">
            </div>
        
            <div class="texto-actual">
                <a id="cancion-actual">The Wanderer</a>
                <p id="artista-actual">Dion</p>
            </div>
        
            <div class="zona-reproductor">
                <audio id="reproductor-de-audio" src="src\Dion - The Wanderer.mp3" controls controlsList="nodownload noplaybackrate"></audio>
            </div>

            <div id="lista-reproduciendo__imagenes">
                <img class="lista-reproduciendo__imagenes__item" src="assets/img/covers/cover 13.jpg">
                <img class="lista-reproduciendo__imagenes__item" src="assets/img/covers/cover 10.jpg">
                <img class="lista-reproduciendo__imagenes__item" src="assets/img/covers/cover 11.jpg">
                <img class="lista-reproduciendo__imagenes__item" src="assets/img/covers/cover 12.jpg">
            </div>
            <div id="lista-reproduciendo__texto">
                <p id="lista-reproduciendo__texto__titulo">My Playlist</p>
                <p id="lista-reproduciendo__texto__canciones">Versos Perversos,T.N.T,Sanctified with Dynamite</p>
            </div>
        </section>
    </body>
</html>