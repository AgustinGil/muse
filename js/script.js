function desplegarMenuUsuario(){
    let menuDropdown = document.getElementById("header__usuario__menu");
    menuDropdown.classList.toggle('header__usuario__menu--abierto');

    let iconoDrop = document.getElementById('header__usuario__icono__secundario')
    iconoDrop.classList.toggle('header__usuario__icono__secundario--activo')
}

function barraError(nombre){
    let campoError = document.getElementsByName(nombre)[0];
    
    if (!campoError.classList.contains('autenticacion__form__campo__entrada--error')){
        campoError.classList.toggle('autenticacion__form__campo__entrada--error')
    }
}

function barraCorrecta(nombre){
    let campoError = document.getElementsByName(nombre)[0];

    if (campoError.classList.contains('autenticacion__form__campo__entrada--error')){
        campoError.classList.toggle('autenticacion__form__campo__entrada--error')
    }
}