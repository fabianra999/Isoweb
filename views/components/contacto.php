<?php
/**
 * Formulario
 *  $destino : correo destino;
 *  $name,$email,$email,$asunto,$mensage : campos formulario;
 *  $date : Fecha de envio;
 */
function validar_campo($campo){
    // Quita Espacio
    $campo = trim($campo); 
    // Quita /
    $campo = stripcslashes($campo);
    // incercion html
    $campo = htmlspecialchars($campo);

   return $campo;
}

if ( isset($_POST['your-empresa'])  && !empty($_POST['your-empresa'])&&
     isset($_POST['your-email']) && !empty($_POST['your-email']) &&
     isset($_POST['your-telefono']) && !empty($_POST['your-telefono']) ) {

    // Destino
    $destino = 'fabianra999@gmail.com';

    // Campos
    $name = validar_campo($_POST['your-name']);
    $email = validar_campo($_POST['your-email']);
    $telefono = validar_campo($_POST['your-telefono']);
    $empresa = validar_campo($_POST['your-empresa']);
    $cargo = validar_campo($_POST['your-cargo']);
    $empleados = validar_campo($_POST['your-empleados']);

    /**
     * Asunto Email
     */
    $asuntoMail = 'Contacto sitio Web Isoweb | ' . $name;

    /**
     * Body Email
     */
    $mensaje = "Este mensaje fue enviado por " . $name . ".\r\n";
    $mensaje .= "Enviado el: " . $date . ".\r\n";
    $mensaje .= "Empresa: " . $empresa . ".\r\n";
    $mensaje .= "Nombre: " . $name . ".\r\n";
    $mensaje .= "Cargo: " . $cargo . ".\r\n";
    $mensaje .= "Numero de empleados: " . $empleados . ".\r\n";
    $mensaje .= "Email: " . $email . ".\r\n";
    $mensaje .= "Telefono: " . $telefono . ".\r\n";


    /**
     * Envio Email
     */
    mail($destino, $asuntoMail, utf8_decode($mensaje));
    
    return print(json_decode('ok'));

}
return print(json_decode('no'));
