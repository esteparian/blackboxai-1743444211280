<?php
/**
 * Encabezado del sitio con sistema de idiomas mejorado
 */
 
require_once __DIR__.'/language-config.php';

$translations = [];
$langFile = __DIR__.'/../translations/'.$availableLanguages[$currentLanguage]['file'];
if (file_exists($langFile)) {
    $translations = include $langFile;
}
?>
<!DOCTYPE html>
<html lang="<?= $currentLanguage ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $translations['site_title'] ?? 'Esteparian' ?></title>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <?php include __DIR__.'/optimized-styles.php'; ?>
</head>
<body>
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold text-gray-800">Esteparian</a>
                </div>

                <!-- Menú de Navegación -->
                <nav class="hidden md:flex space-x-8">
                    <a href="services.php" class="text-gray-600 hover:text-blue-600"><?= __('services') ?></a>
                    <a href="industries.php" class="text-gray-600 hover:text-blue-600"><?= __('industries') ?></a>
                    <a href="about.php" class="text-gray-600 hover:text-blue-600"><?= __('about') ?></a>
                    <a href="contact.php" class="text-gray-600 hover:text-blue-600"><?= __('contact') ?></a>
                </nav>

                <!-- Selector de Idiomas -->
                <div class="relative group" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-1 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-globe"></i>
                        <span><?= strtoupper($currentLanguage) ?></span>
                        <i class="fas fa-chevron-down text-xs transition-transform" :class="{ 'transform rotate-180': open }"></i>
                    </button>
                    <div class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg py-1 z-50"
                         x-show="open"
                         @click.away="open = false"
                         x-transition>
                        <?php foreach ($availableLanguages as $code => $lang): ?>
                            <a href="?lang=<?= $code ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <?= $lang['flag'] ?> <?= $lang['name'] ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>