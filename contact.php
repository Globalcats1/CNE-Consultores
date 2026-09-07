<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

function responder(
    bool $ok,
    string $mensaje,
    int $codigo = 200
): never {
    http_response_code($codigo);

    echo json_encode(
        [
            'ok' => $ok,
            'message' => $mensaje
        ],
        JSON_UNESCAPED_UNICODE
    );

    exit;
}

function obtenerCampo(string $nombre): string
{
    if (
        !isset($_POST[$nombre]) ||
        !is_string($_POST[$nombre])
    ) {
        return '';
    }

    return trim($_POST[$nombre]);
}

function longitud(string $texto): int
{
    if (function_exists('mb_strlen')) {
        return mb_strlen($texto, 'UTF-8');
    }

    return strlen($texto);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    responder(
        false,
        'Método no permitido.',
        405
    );
}

/*
|--------------------------------------------------------------------------
| Limitar tamaño de la petición
|--------------------------------------------------------------------------
*/

$contentLength = (int)($_SERVER['CONTENT_LENGTH'] ?? 0);

if ($contentLength > 20000) {
    responder(
        false,
        'La solicitud es demasiado grande.',
        413
    );
}

/*
|--------------------------------------------------------------------------
| Honeypot anti-spam
|--------------------------------------------------------------------------
*/

$website = obtenerCampo('website');

if ($website !== '') {
    /*
     * Fingimos que funcionó para no avisarle al bot.
     */
    responder(
        true,
        'Solicitud enviada correctamente.'
    );
}

/*
|--------------------------------------------------------------------------
| Recibir campos
|--------------------------------------------------------------------------
*/

$nombre   = obtenerCampo('nombre');
$empresa  = obtenerCampo('empresa');
$correo   = obtenerCampo('correo');
$telefono = obtenerCampo('telefono');
$motivo   = obtenerCampo('motivo');
$mensaje  = obtenerCampo('mensaje');

/*
|--------------------------------------------------------------------------
| Validar campos obligatorios
|--------------------------------------------------------------------------
*/

if (
    $nombre === '' ||
    $empresa === '' ||
    $correo === '' ||
    $telefono === '' ||
    $motivo === '' ||
    $mensaje === ''
) {
    responder(
        false,
        'Por favor completa todos los campos.',
        422
    );
}

/*
|--------------------------------------------------------------------------
| Validar longitudes
|--------------------------------------------------------------------------
*/

if (
    longitud($nombre) < 2 ||
    longitud($nombre) > 80
) {
    responder(
        false,
        'Ingresa un nombre válido.',
        422
    );
}

if (
    longitud($empresa) < 2 ||
    longitud($empresa) > 120
) {
    responder(
        false,
        'Ingresa un nombre de empresa válido.',
        422
    );
}

if (longitud($correo) > 150) {
    responder(
        false,
        'El correo electrónico no es válido.',
        422
    );
}

if (
    longitud($telefono) < 7 ||
    longitud($telefono) > 20
) {
    responder(
        false,
        'Ingresa un teléfono válido.',
        422
    );
}

if (
    longitud($mensaje) < 5 ||
    longitud($mensaje) > 2000
) {
    responder(
        false,
        'El mensaje debe contener entre 5 y 2000 caracteres.',
        422
    );
}

/*
|--------------------------------------------------------------------------
| Validar correo electrónico
|--------------------------------------------------------------------------
*/

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    responder(
        false,
        'Ingresa un correo electrónico válido.',
        422
    );
}

/*
|--------------------------------------------------------------------------
| Protección contra Email Header Injection
|--------------------------------------------------------------------------
*/

if (
    str_contains($correo, "\r") ||
    str_contains($correo, "\n")
) {
    responder(
        false,
        'El correo electrónico no es válido.',
        422
    );
}

/*
|--------------------------------------------------------------------------
| Validar teléfono
|--------------------------------------------------------------------------
*/

if (!preg_match('/^[0-9+\s().-]+$/', $telefono)) {
    responder(
        false,
        'Ingresa un teléfono válido.',
        422
    );
}

/*
|--------------------------------------------------------------------------
| Validar motivo usando lista blanca
|--------------------------------------------------------------------------
*/

$motivosPermitidos = [
    'estrategia' =>
    'Consultoría estratégica y financiera',

    'normatividad' =>
    'Cumplimiento normativo (NOM / STPS)',

    'capacitacion' =>
    'Capacitación y facilitación',

    'sector' =>
    'Consultoría especializada por sector',

    'diagnostico' =>
    'Diagnóstico básico gratuito'
];

if (!isset($motivosPermitidos[$motivo])) {
    responder(
        false,
        'Selecciona un motivo de consulta válido.',
        422
    );
}

$motivoTexto = $motivosPermitidos[$motivo];

/*
|--------------------------------------------------------------------------
| Normalizar caracteres de control
|--------------------------------------------------------------------------
*/

$nombre = preg_replace(
    '/[\r\n\t]+/',
    ' ',
    $nombre
) ?? '';

$empresa = preg_replace(
    '/[\r\n\t]+/',
    ' ',
    $empresa
) ?? '';

$telefono = preg_replace(
    '/[\r\n\t]+/',
    ' ',
    $telefono
) ?? '';

$mensaje = str_replace(
    ["\r\n", "\r"],
    "\n",
    $mensaje
);

/*
|--------------------------------------------------------------------------
| Preparar correo
|--------------------------------------------------------------------------
*/

$destinatario = 'contacto@cnemx.com';

$asunto = 'Nueva solicitud de contacto - CNE Consultorías';

$cuerpo = <<<TXT
Nueva solicitud desde el sitio web de CNE Consultorías

Nombre:
{$nombre}

Empresa:
{$empresa}

Correo:
{$correo}

Teléfono:
{$telefono}

Motivo de consulta:
{$motivoTexto}

Mensaje:
{$mensaje}


----------------------------------------
Mensaje enviado desde el formulario de cnemx.com
TXT;

/*
|--------------------------------------------------------------------------
| Encabezados
|--------------------------------------------------------------------------
|
| IMPORTANTE:
| El correo del cliente NO se usa como From.
|
| Se utiliza como Reply-To para que CNE pueda
| responder directamente al cliente.
|--------------------------------------------------------------------------
*/

$headers = [];

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'From: CNE Consultorías <contacto@cnemx.com>';
$headers[] = 'Reply-To: ' . $correo;

/*
|--------------------------------------------------------------------------
| Enviar correo
|--------------------------------------------------------------------------
*/

$enviado = mail(
    $destinatario,
    $asunto,
    $cuerpo,
    implode("\r\n", $headers)
);

if (!$enviado) {
    error_log(
        'Error al enviar formulario CNE - ' .
            date('Y-m-d H:i:s')
    );

    responder(
        false,
        'No fue posible enviar la solicitud. Intenta nuevamente más tarde.',
        500
    );
}

/*
|--------------------------------------------------------------------------
| Todo correcto
|--------------------------------------------------------------------------
*/

responder(
    true,
    'Solicitud enviada correctamente. Un consultor de CNE se pondrá en contacto contigo.'
);
