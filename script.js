function desplegarMenuUsuario(){
    let menuDropdown = document.getElementById("header__usuario__menu");
    menuDropdown.classList.toggle('header__usuario__menu--abierto');

    let iconoDrop = document.getElementById('header__usuario__icono__secundario')
    iconoDrop.classList.toggle('header__usuario__icono__secundario--activo')
}