<?php

use PHPMailer\PHPMailer\PHPMailer;

function leer_conf_correo() {
    $dept = new DOMDocument();
    $dept->load('./configuracion_correo.xml');
    $res = $dept->schemaValidate('./configuracion_correo.xsd');
    if (!$res) {
        throw new InvalidArgumentException("Revise fichero de configuración");
    }
    else
    {
        $datos = simplexml_load_file("configuracion_correo.xml");
        $host = $datos->xpath("//host");
        $port = $datos->xpath("//port");
        $user = $datos->xpath("//user");
        $clave = $datos->xpath("//clave");
        $resul = [];
        $resul[] = $host[0];
        $resul[] = $port[0];
        $resul[] = $user[0];
        $resul[] = $clave[0];
        return $resul;
    }
}

function enviar_correo($cuerpo, $correoDestino) {
    $datos = leer_conf_correo();
    $asunto = "Contacto Baza3Culturas";

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug   = 0;
    $mail->SMTPAuth    = true;
    $mail->SMTPSecure  = "tls";
    $mail->Host        = $datos[0];
    $mail->Port        = $datos[1];
    $mail->Username    = $datos[2];
    $mail->Password    = $datos[3];
    $mail->setFrom('pepe@gmail.com');
    $mail->Subject = $asunto;
    $mail->msgHTML($cuerpo);
    $mail->addAddress($correoDestino);
}