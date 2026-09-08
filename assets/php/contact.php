<?php

declare(strict_types=1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ==========================================================
// CNE CONSULTORÍAS - FORMULARIO DE CONTACTO
// ==========================================================

// Solo aceptar solicitudes POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);

    echo '<div style="
        padding: 18px;
        background: #7f1d1d;
        color: #ffffff;
        border-radius: 12px;
        text-align: center;
    ">
        Solicitud no válida.
    </div>';

    exit;
}

// ==========================================================
// CARGAR PHPMAILER
// ==========================================================

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

// ==========================================================
// FUNCIONES
// ==========================================================

function limpiarTexto(string $valor): string
{
    $valor = trim($valor);
    $valor = strip_tags($valor);

    return $valor;
}

function escapar(string $valor): string
{
    return htmlspecialchars(
        $valor,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

function responderError(string $mensaje): void
{
    http_response_code(400);

    echo '<div style="
        padding: 18px;
        background: #7f1d1d;
        color: #ffffff;
        border-radius: 12px;
        text-align: center;
    ">
        <strong>No pudimos enviar tu mensaje.</strong>
        <br>
        <span style="font-size: 14px;">' . escapar($mensaje) . '</span>
    </div>';

    exit;
}

// ==========================================================
// PROTECCIÓN ANTI-SPAM
// ==========================================================

// Este campo debe permanecer vacío.
// Los bots suelen llenarlo automáticamente.
$website = isset($_POST['website'])
    ? trim((string) $_POST['website'])
    : '';

if ($website !== '') {

    // Respondemos como si todo estuviera bien para no avisar al bot.
    echo '<div style="
        padding: 18px;
        background: #17171a;
        color: #ffffff;
        border-radius: 12px;
        text-align: center;
    ">
        Mensaje recibido correctamente.
    </div>';

    exit;
}

// ==========================================================
// RECIBIR DATOS
// ==========================================================

$nombre = isset($_POST['nombre'])
    ? limpiarTexto((string) $_POST['nombre'])
    : '';

$empresa = isset($_POST['empresa'])
    ? limpiarTexto((string) $_POST['empresa'])
    : '';

$correo = isset($_POST['correo'])
    ? trim((string) $_POST['correo'])
    : '';

$telefono = isset($_POST['telefono'])
    ? limpiarTexto((string) $_POST['telefono'])
    : '';

$motivo = isset($_POST['motivo'])
    ? limpiarTexto((string) $_POST['motivo'])
    : '';

$mensaje = isset($_POST['mensaje'])
    ? limpiarTexto((string) $_POST['mensaje'])
    : '';

// ==========================================================
// VALIDACIONES
// ==========================================================

if (
    $nombre === '' ||
    $empresa === '' ||
    $correo === '' ||
    $telefono === '' ||
    $motivo === '' ||
    $mensaje === ''
) {
    responderError('Por favor, completa todos los campos.');
}

// Correo válido
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    responderError('Ingresa un correo electrónico válido.');
}

// Evitar saltos de línea en correo
if (
    str_contains($correo, "\r") ||
    str_contains($correo, "\n")
) {
    responderError('El correo electrónico no es válido.');
}

// Límites de longitud
if (mb_strlen($nombre) > 80) {
    responderError('El nombre es demasiado largo.');
}

if (mb_strlen($empresa) > 120) {
    responderError('El nombre de la empresa es demasiado largo.');
}

if (mb_strlen($correo) > 150) {
    responderError('El correo electrónico es demasiado largo.');
}

if (mb_strlen($telefono) > 20) {
    responderError('El teléfono es demasiado largo.');
}

if (mb_strlen($mensaje) > 2000) {
    responderError('El mensaje es demasiado largo.');
}

// ==========================================================
// MOTIVOS PERMITIDOS
// ==========================================================

$motivosPermitidos = [
    'estrategia'   => 'Consultoría estratégica y financiera',
    'normatividad' => 'Cumplimiento normativo (NOM / STPS)',
    'capacitacion' => 'Capacitación y facilitación',
    'sector'       => 'Consultoría especializada por sector',
    'diagnostico'  => 'Diagnóstico básico gratuito',
];

if (!array_key_exists($motivo, $motivosPermitidos)) {
    responderError('Selecciona un motivo de consulta válido.');
}

$motivoTexto = $motivosPermitidos[$motivo];

// ==========================================================
// CONFIGURACIÓN DE CORREO
// ==========================================================

// ESTOS DATOS LOS CONFIGURAREMOS CON EL CORREO REAL DE CNE.

$smtpHost = 'smtp.gmail.com';
$smtpUser = 'yarelymartinez2412@gmail.com';
$smtpPass = 'xcgxrapcqubbiehm';
$smtpPort = 465;

// Correo donde se recibirán los formularios durante las pruebas
$recipientEmail = 'yarelymartinez2412@gmail.com';
$recipientName  = 'Pruebas CNE Consultorías';

// ==========================================================
// CREAR CORREO
// ==========================================================

$mail = new PHPMailer(true);

try {

    // ------------------------------------------------------
    // CONFIGURACIÓN SMTP
    // ------------------------------------------------------

    $mail->isSMTP();

    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = $smtpPort;

    $mail->CharSet = 'UTF-8';

    // Evitar que información técnica aparezca al visitante
    $mail->SMTPDebug = 0;

    // Evitar que una conexión SMTP tarde demasiado
    $mail->Timeout = 15;

    // ------------------------------------------------------
    // REMITENTE
    // ------------------------------------------------------

    $mail->setFrom(
        $smtpUser,
        'Sitio Web CNE Consultorías'
    );

    // Cuando CNE presione "Responder",
    // responderá directamente al prospecto.
    $mail->addReplyTo(
        $correo,
        $nombre
    );

    // ------------------------------------------------------
    // DESTINATARIO
    // ------------------------------------------------------

    $mail->addAddress(
        $recipientEmail,
        $recipientName
    );

    // ======================================================
    // CONTENIDO DEL CORREO
    // ======================================================

    $mail->isHTML(true);

    $mail->Subject =
        'Nueva consulta web | ' .
        $motivoTexto .
        ' | ' .
        $nombre;

    $body = '
    <div style="
        max-width: 650px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
        color: #17171a;
        border: 1px solid #e3e1dd;
        border-radius: 16px;
        overflow: hidden;
    ">

        <div style="
            background: #17171a;
            color: #ffffff;
            padding: 25px 30px;
        ">
            <h2 style="
                margin: 0;
                font-size: 22px;
            ">
                Nueva consulta desde CNE Consultorías
            </h2>
        </div>

        <div style="
            padding: 30px;
            background: #ffffff;
        ">

            <p>
                <strong>Nombre:</strong><br>
                ' . escapar($nombre) . '
            </p>

            <p>
                <strong>Empresa:</strong><br>
                ' . escapar($empresa) . '
            </p>

            <p>
                <strong>Correo:</strong><br>
                ' . escapar($correo) . '
            </p>

            <p>
                <strong>Teléfono:</strong><br>
                ' . escapar($telefono) . '
            </p>

            <p>
                <strong>Motivo de consulta:</strong><br>
                <span style="
                    color: #e12d22;
                    font-weight: bold;
                ">
                    ' . escapar($motivoTexto) . '
                </span>
            </p>

            <p>
                <strong>Mensaje:</strong>
            </p>

            <div style="
                background: #f6f5f3;
                padding: 18px;
                border-radius: 10px;
                line-height: 1.6;
            ">
                ' . nl2br(escapar($mensaje)) . '
            </div>

        </div>

        <div style="
            padding: 18px 30px;
            background: #f6f5f3;
            font-size: 12px;
            color: #777777;
        ">
            Mensaje enviado desde el formulario de contacto de
            CNE Consultorías.
        </div>

    </div>';

    $mail->Body = $body;

    // Versión texto plano
    $mail->AltBody =
        "Nueva consulta desde CNE Consultorías\n\n" .
        "Nombre: {$nombre}\n" .
        "Empresa: {$empresa}\n" .
        "Correo: {$correo}\n" .
        "Teléfono: {$telefono}\n" .
        "Motivo: {$motivoTexto}\n\n" .
        "Mensaje:\n{$mensaje}";

    // ======================================================
    // ENVIAR
    // ======================================================

    $mail->send();

    echo '<div style="
        padding: 20px;
        background: #17171a;
        color: #ffffff;
        border: 1px solid #e12d22;
        border-radius: 14px;
        text-align: center;
    ">

        <p style="
            margin: 0 0 6px;
            font-weight: bold;
        ">
            ¡Mensaje enviado correctamente!
        </p>

        <p style="
            margin: 0;
            font-size: 14px;
            opacity: .8;
        ">
            Gracias por contactar a CNE Consultorías.
            Nuestro equipo se pondrá en contacto contigo.
        </p>

    </div>';
} catch (Exception $e) {

    http_response_code(500);

    error_log(
        'Error formulario CNE: ' . $mail->ErrorInfo
    );

    echo '<div style="
        padding: 20px;
        background: #7f1d1d;
        color: #ffffff;
        border-radius: 14px;
        text-align: center;
    ">

        <p style="
            margin: 0 0 6px;
            font-weight: bold;
        ">
            No fue posible enviar el mensaje.
        </p>

        <p style="
            margin: 0;
            font-size: 14px;
        ">
            Inténtalo nuevamente más tarde o contáctanos directamente.
        </p>

    </div>';
}
