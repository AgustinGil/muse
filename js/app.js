$(document).ready(function() {
    $("#submit").click(function() {
        let usuario = $("#usuario").val();
        let nombre = $("#nombre").val();
        let apellido = $("#apellido").val();
        let email = $("#email").val();
        let pais = $("#pais").val();
        let contraseña = $("#contraseña").val();
        let verif_contraseña = $("#verif_contraseña").val();
        $.ajax({
            url: "config/validaciones.php",
            data: {usuario: usuario, nombre: nombre, apellido: apellido, email: email, pais: pais, contraseña: contraseña, verif_contraseña: verif_contraseña},
            type: "POST",
            dataType: "json",
            success: function(response) {
                $("#miPus").text(response.usuario);
                barraON_OFF('usuario',response.usuario);

                $("#miPnomb").text(response.nombre);
                barraON_OFF('nombre',response.nombre);

                $("#miPapell").text(response.apellido);
                barraON_OFF('apellido',response.apellido);

                $("#miPemail").text(response.email);
                barraON_OFF('email',response.email);

                $("#miPpais").text(response.pais);
                barraON_OFF('pais',response.pais);
                
                $("#miPcontraseña").text(response.contraseña);
                barraON_OFF('contraseña',response.contraseña);

                $("#miPverif_contraseña").text(response.verif_contraseña)
                barraON_OFF('verif_contraseña',response.verif_contraseña);
            }
        });
    });
});

function barraON_OFF(nombre, mensaje){
    if (mensaje != " ") {
        barraError(nombre);
    } else {
        barraCorrecta(nombre);
    }
}