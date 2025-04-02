<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esteparian - Recuperar Contraseña</title>
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
            background-image: url('https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .auth-card {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.85);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Header -->
    <?php include '_includes/header.php'; ?>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="auth-card w-full max-w-md rounded-xl shadow-2xl overflow-hidden">
            <div class="p-8">
                <!-- Logo -->
                <div class="flex justify-center mb-8">
                    <img src="assets/images/logo.png" alt="Esteparian Logo" class="h-16">
                </div>

                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Recuperar Contraseña</h2>
                <p class="text-gray-600 text-center mb-6">Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>

                <!-- Success Message -->
                <?php if (isset($_GET['success'])): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        Se ha enviado un enlace de recuperación a tu correo electrónico.
                    </div>
                <?php endif; ?>

                <!-- Error Message -->
                <?php if (isset($_GET['error'])): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <?php 
                        switch($_GET['error']) {
                            case 'email_invalido':
                                echo 'Por favor ingresa un correo electrónico válido';
                                break;
                            case 'usuario_no_encontrado':
                                echo 'No se encontró una cuenta con este correo electrónico';
                                break;
                            default:
                                echo 'Error al procesar la solicitud';
                        }
                        ?>
                    </div>
                <?php endif; ?>

                <!-- Recovery Form -->
                <form action="auth_handler.php" method="POST" class="space-y-6">
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Correo Electrónico</label>
                        <input type="email" name="recover_email" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            placeholder="usuario@ejemplo.com">
                    </div>

                    <button type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg shadow-md transition duration-200 flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2"></i> Enviar Enlace
                    </button>
                </form>

                <!-- Back to Login -->
                <div class="mt-6 text-center">
                    <a href="index.php" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                        <i class="fas fa-arrow-left mr-1"></i> Volver al inicio de sesión
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include '_includes/footer.php'; ?>
</body>
</html>