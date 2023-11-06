<?php

    function compDatos($var, $exprecion, $tam, $mensaje, $mensaje2) {
        return !empty($var) ? tipoTexto($var, $exprecion, $mensaje2, $tam) : $mensaje;        
    }
    
    function tipoTexto($var, $exprecion, $mensaje2, $tam) {
        if (!preg_match("/^" . $exprecion . "$/", $var)) {
            return $mensaje2;
        } else {
            return " ";
        }

        if (!(mb_strlen($var, "UTF-8") <= $tam)) {
            return "Máximo " . $tam . " caracteres";
        } else {
            return " ";
        }
    }
    
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $pais = $_POST['pais'];
    $contraseña = $_POST['contraseña'];
    $verif_contraseña = $_POST['verif_contraseña'];

    $mensajeUsuario = compDatos($usuario, "^[a-zA-Z0-9]+", 20, "Usuario vacio", "Solo letras y numeros");
    $mensajeNombre = compDatos($nombre, "^[a-zA-Z]+", 20, "Nombre vacio", "Solo letras");
    $mensajeApellido = compDatos($apellido, "^[a-zA-Z]+", 20, "Apellido vacio", "Solo letras");
    $mensajeEmail = compDatos($email, "^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+", 320, "Email vacio", "Email no valido");
    $mensajePais = compDatos($pais, "^[0-9]+", 3, "Selecciones algún país", "País no valido");
    $mensajeContraseña = compDatos($contraseña,"^[A-Za-z0-9@#$%^&!*_]+", 20, "Contraseña vacia", "Solo letras, numeros, @, #, $, %, ^, &, !, * y _");
    $mensajeVerif_Contraseña = compDatos($contraseña,"^[A-Za-z0-9@#$%^&!*_]+", 20, "Verificar contraseña vacia", "Solo letras, numeros, @, #, $, %, ^, &, !, * y _");

    $resultado = [
        'usuario' => $mensajeUsuario,
        'nombre' => $mensajeNombre,
        'apellido' => $mensajeApellido,
        'email' => $mensajeEmail,
        'pais' => $mensajePais,
        'contraseña' => $mensajeContraseña,
        'verif_contraseña' => $mensajeVerif_Contraseña,
    ];

    echo json_encode($resultado);

    /*function limpEntrada($texto) {
        $texto = trim($text);
        $texto = stripslashes($texto);
        $texto = str_ireplace("'", "", $texto);
    }*/