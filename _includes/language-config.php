<?php
// Configuración robusta de idiomas
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$availableLanguages = [
    'es' => [
        'name' => 'Español',
        'flag' => '🇪🇸',
        'file' => 'es.php'
    ],
    'en' => [
        'name' => 'English', 
        'flag' => '🇬🇧',
        'file' => 'en.php'
    ],
    'it' => [
        'name' => 'Italiano',
        'flag' => '🇮🇹',
        'file' => 'it.php'
    ],
    'fr' => [
        'name' => 'Français',
        'flag' => '🇫🇷',
        'file' => 'fr.php'
    ]
];

// Manejo del cambio de idioma
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $availableLanguages)) {
    $_SESSION['current_language'] = $_GET['lang'];
    // Redirección para evitar reenvío del formulario
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit();
}

// Idioma actual (predeterminado: español)
$currentLanguage = $_SESSION['current_language'] ?? 'es';

// Función de traducción
function __($key) {
    global $translations;
    return $translations[$key] ?? $key;
}
?>