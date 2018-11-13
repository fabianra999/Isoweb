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

if ( isset($_POST['email'])  && !empty($_POST['email'])) {

    // Destino
    $destino = 'fabianra999@gmail.com';

    // Campos
    $email = validar_campo($_POST['email']);

    /**
     * Asunto Email
     */
    $asuntoMail = 'Contacto sitio Web Isoweb newsletter | ' . $name;

    /**
     * Body Email
     */
    $mensaje = "Email newsletter: " . $email . ".\r\n";


    /**
     * Envio Email
     */
    mail($destino, $asuntoMail, utf8_decode($mensaje));
    
    return print(json_decode('ok'));

}
return print(json_decode('no'));
