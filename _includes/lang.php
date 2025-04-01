<?php
$translations = [
    'es' => [
        'home' => 'Inicio',
        'services' => 'Servicios',
        'industries' => 'Industrias',
        'about' => 'Nosotros',
        'contact' => 'Contacto'
    ],
    'en' => [
        'home' => 'Home',
        'services' => 'Services',
        'industries' => 'Industries',
        'about' => 'About Us',
        'contact' => 'Contact'
    ],
    'it' => [
        'home' => 'Home',
        'services' => 'Servizi',
        'industries' => 'Industrie',
        'about' => 'Chi siamo',
        'contact' => 'Contatto'
    ],
    'fr' => [
        'home' => 'Accueil',
        'services' => 'Services',
        'industries' => 'Industries',
        'about' => 'À propos',
        'contact' => 'Contact'
    ]
];

$currentLang = $_SESSION['lang'] ?? 'es';
function __($key) {
    global $translations, $currentLang;
    return $translations[$currentLang][$key] ?? $key;
}
?>