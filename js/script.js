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

document.addEventListener( 'DOMContentLoaded', function() {
    var splideLista = document.getElementsByClassName( 'splide' );

    for ( var i = 0; i < splideLista.length; i++ ) {
        new Splide( splideLista[ i ],{
            type:'slide',
            perPage: 5,
            perMove:1,
            wheel:true,
            gap: '5rem',
            pagination:false,
    
            breakpoints:{
                1200:{
                    perPage:4,
                },
    
                950:{
                    perPage:3,
                },
    
                640:{
                    perPage:2,
                }
            }
        } ).mount();
    }
})