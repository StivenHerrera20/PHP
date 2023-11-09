<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require '../vendor/phpmailer/SMTP.php';
require '../vendor/phpmailer/PHPMailer.php';
require '../vendor/phpmailer/Exception.php';

$mail = new PHPMailer(true);
$email = $_POST['email'];

try {
    // Configurar el servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Cambia esto por tu servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'stiven3722@gmail.com'; // Cambia esto por tu dirección de correo
    $mail->Password = 'hpag xath hjeu puws'; // Cambia esto por tu contraseña de correo
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // Cambia el puerto según la configuración de tu servidor

    // Configurar el remitente y el destinatario
    $mail->setFrom($email, 'Checho');
    $mail->addAddress($email);

    // Asignar el asunto y el cuerpo del correo
    $mail->Subject = 'Correo con archivo adjunto';
    $mail->Body = 'Reportes de peliculas.';

    // Adjuntar el archivo
    if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
        $archivoTmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        // Adjuntar el archivo cargado
        $mail->addAttachment($archivoTmp, $nombreArchivo);
        $_SESSION["mensajeExitoso"] = "Correo enviado exitosamente";
    } else {
        $_SESSION["mensajeError"] = "Error: No se cargó ningún archivo o hubo un problema con la carga.";
    }

    // Enviar el correo
    $mail->send();
    echo 'Correo enviado correctamente';
} catch (Exception $e) {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
}
