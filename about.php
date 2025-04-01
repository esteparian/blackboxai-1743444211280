<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | Esteparian</title>
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
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -38px;
            top: 0;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--secondary);
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include '_includes/header.php'; ?>

    <main>
        <!-- About Hero -->
        <section class="bg-gray-900 text-white py-20 relative">
            <div class="absolute inset-0">
                <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg" alt="Team Meeting" class="w-full h-full object-cover opacity-40">
            </div>
            <div class="relative container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Nuestra Empresa</h1>
                <p class="text-xl max-w-2xl mx-auto">Innovación tecnológica con más de una década de experiencia</p>
            </div>
        </section>

        <!-- About Content -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold mb-8 text-center">Nuestra Historia</h2>
                    <div class="relative pl-12">
                        <!-- Timeline -->
                        <div class="border-l-2 border-blue-200 space-y-12">
                            <!-- Timeline Item 1 -->
                            <div class="relative timeline-item pl-8">
                                <h3 class="text-xl font-semibold mb-2">Fundación (2010)</h3>
                                <p class="text-gray-600">Esteparian fue fundada por un grupo de ingenieros con la visión de llevar tecnología avanzada a la industria local.</p>
                            </div>
                            <!-- Timeline Item 2 -->
                            <div class="relative timeline-item pl-8">
                                <h3 class="text-xl font-semibold mb-2">Primer Gran Proyecto (2013)</h3>
                                <p class="text-gray-600">Implementamos nuestro primer sistema de automatización industrial para una planta manufacturera, estableciendo nuestro enfoque en soluciones prácticas.</p>
                            </div>
                            <!-- Timeline Item 3 -->
                            <div class="relative timeline-item pl-8">
                                <h3 class="text-xl font-semibold mb-2">Expansión a Seguridad (2016)</h3>
                                <p class="text-gray-600">Diversificamos nuestros servicios para incluir sistemas de seguridad biométrica, respondiendo a la creciente demanda del mercado.</p>
                            </div>
                            <!-- Timeline Item 4 -->
                            <div class="relative timeline-item pl-8">
                                <h3 class="text-xl font-semibold mb-2">Energías Renovables (2019)</h3>
                                <p class="text-gray-600">Lanzamos nuestra división de soluciones energéticas, combinando nuestra experiencia técnica con tecnologías sostenibles.</p>
                            </div>
                            <!-- Timeline Item 5 -->
                            <div class="relative timeline-item pl-8">
                                <h3 class="text-xl font-semibold mb-2">Hoy</h3>
                                <p class="text-gray-600">Continuamos innovando con más de 50 empleados y cientos de clientes satisfechos en toda la región.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission & Values -->
                <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-lg shadow-md text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-bullseye text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Misión</h3>
                        <p class="text-gray-600">Proveer soluciones tecnológicas innovadoras que impulsen la eficiencia y seguridad de nuestros clientes, superando sus expectativas con calidad y profesionalismo.</p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-eye text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Visión</h3>
                        <p class="text-gray-600">Ser reconocidos como líderes en implementación de tecnología para industria y seguridad, expandiendo nuestro alcance a nivel internacional.</p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-gem text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Valores</h3>
                        <ul class="space-y-2 text-gray-600 text-left">
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i> Innovación constante</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i> Integridad en cada acción</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i> Excelencia técnica</li>
                            <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i> Compromiso con el cliente</li>
                        </ul>
                    </div>
                </div>

                <!-- Team Section -->
                <div class="mt-20">
                    <h2 class="text-3xl font-bold text-center mb-12">Nuestro Equipo</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Team Member 1 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="h-64 overflow-hidden">
                                <img src="https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg" alt="CEO" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold">Ing. Javier Estépar</h3>
                                <p class="text-blue-600 mb-2">CEO & Fundador</p>
                                <p class="text-gray-600 text-sm">Más de 20 años de experiencia en automatización industrial.</p>
                            </div>
                        </div>
                        <!-- Team Member 2 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="h-64 overflow-hidden">
                                <img src="https://images.pexels.com/photos/3777943/pexels-photo-3777943.jpeg" alt="CTO" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold">Dra. Ana Rodríguez</h3>
                                <p class="text-blue-600 mb-2">Directora de Tecnología</p>
                                <p class="text-gray-600 text-sm">Especialista en sistemas de seguridad biométrica.</p>
                            </div>
                        </div>
                        <!-- Team Member 3 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="h-64 overflow-hidden">
                                <img src="https://images.pexels.com/photos/3777946/pexels-photo-3777946.jpeg" alt="Energy Lead" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold">Ing. Carlos Méndez</h3>
                                <p class="text-blue-600 mb-2">Líder de Energías</p>
                                <p class="text-gray-600 text-sm">Experto en soluciones energéticas sostenibles.</p>
                            </div>
                        </div>
                        <!-- Team Member 4 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="h-64 overflow-hidden">
                                <img src="https://images.pexels.com/photos/3777946/pexels-photo-3777946.jpeg" alt="Operations" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold">Lic. Sofía Vargas</h3>
                                <p class="text-blue-600 mb-2">Directora de Operaciones</p>
                                <p class="text-gray-600 text-sm">Gestiona la ejecución impecable de nuestros proyectos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '_includes/footer.php'; ?>
</body>
</html>