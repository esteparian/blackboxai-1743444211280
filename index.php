<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esteparian - Soluciones Tecnológicas</title>
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
<body class="bg-gray-50">
    <!-- Header -->
    <?php include '_includes/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="relative bg-gray-900 text-white">
            <div class="absolute inset-0">
                <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg" alt="Industrial Technology" class="w-full h-full object-cover opacity-50">
            </div>
            <div class="relative container mx-auto px-6 py-32">
                <div class="max-w-2xl">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Soluciones Tecnológicas para la Industria Moderna</h1>
                    <p class="text-xl mb-8">Innovación en software y hardware para automatización industrial, seguridad biométrica y gestión energética.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="services.php" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 rounded-md text-center font-medium transition">Nuestros Servicios</a>
                        <a href="contact.php" class="px-6 py-3 bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 rounded-md text-center font-medium transition">Contactar Ahora</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Services -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Nuestras Soluciones</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-industry text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Automatización Industrial</h3>
                        <p class="text-gray-600">Sistemas IoT para optimización de procesos industriales y manufactura inteligente.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Seguridad Integral</h3>
                        <p class="text-gray-600">Sistemas biométricos, CCTV y sensores avanzados para protección de activos.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-solar-panel text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Energías Renovables</h3>
                        <p class="text-gray-600">Tecnología para gestión eficiente de energía solar, eólica y sistemas híbridos.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include '_includes/footer.php'; ?>
</body>
</html>