<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esteparian - Panel de Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #003366;
            --secondary: #0077CC;
            --accent: #FFA500;
        }
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <?php include '_includes/header.php'; ?>

    <main class="container mx-auto px-4 py-8">
        <?php if (isset($_SESSION['user'])): ?>
            <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl mx-auto">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Bienvenido, <?= htmlspecialchars($_SESSION['user']['name']) ?></h1>
                <p class="text-gray-600 mb-6">Has iniciado sesión correctamente como <?= htmlspecialchars($_SESSION['user']['email']) ?></p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="bg-blue-50 p-4 rounded-lg border border-blue-100">
                        <h3 class="font-medium text-blue-800 mb-2"><i class="fas fa-user mr-2"></i>Perfil</h3>
                        <p class="text-sm text-blue-600">Actualiza tu información personal</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg border border-green-100">
                        <h3 class="font-medium text-green-800 mb-2"><i class="fas fa-cog mr-2"></i>Configuración</h3>
                        <p class="text-sm text-green-600">Ajusta tus preferencias</p>
                    </div>
                </div>
                
                <a href="auth_handler.php?action=logout" class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition">
                    <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
                </a>
            </div>
        <?php else: ?>
            <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl mx-auto text-center">
                <h2 class="text-xl font-medium text-gray-800 mb-4">No has iniciado sesión</h2>
                <p class="text-gray-600 mb-4">Por favor inicia sesión para acceder al panel de control.</p>
                <a href="index.php" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                    <i class="fas fa-sign-in-alt mr-2"></i> Iniciar Sesión
                </a>
            </div>
        <?php endif; ?>
    </main>

    <!-- Footer -->
    <?php include '_includes/footer.php'; ?>
</body>
</html>