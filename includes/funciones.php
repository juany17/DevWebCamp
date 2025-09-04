<?php
// Inicia la sesión de inmediato, antes de cualquier salida
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function s($html) : string {
    return htmlspecialchars($html);
}

function pagina_actual($path) : bool {
    return str_contains($_SERVER['PATH_INFO'] ?? '/', $path);
}

function is_auth() : bool {
    // Ya iniciamos sesión arriba, no hace falta session_start aquí
    return isset($_SESSION['nombre']) && !empty($_SESSION['nombre']);
}

function is_admin() : bool {
    // Ya iniciamos sesión arriba
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}

function aos_animacion() : void {
    $efectos = ['fade-up', 'fade-down', 'fade-left', 'fade-right', 'flip-left', 'flip-right', 'zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-out'];
    $efecto = array_rand($efectos, 1);
    echo ' data-aos="' . $efectos[$efecto] . '" ';
}
