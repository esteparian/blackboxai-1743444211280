<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Esteparian</title>
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
        .form-input {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(0, 119, 204, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include '_includes/header.php'; ?>

    <main>
        <!-- Contact Hero -->
        <section class="bg-blue-600 text-white py-20">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Contáctenos</h1>
                <p class="text-xl max-w-2xl mx-auto">Estamos listos para ayudarle con sus necesidades tecnológicas</p>
            </div>
        </section>

        <!-- Contact Content -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h2 class="text-2xl font-semibold mb-6">Envíenos un mensaje</h2>
                        <form id="contactForm" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre completo*</label>
                                    <input type="text" id="name" name="name" required
                                        class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                </div>
                                <div>
                                    <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Empresa</label>
                                    <input type="text" id="company" name="company"
                                        class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico*</label>
                                    <input type="email" id="email" name="email" required
                                        class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Teléfono*</label>
                                    <input type="tel" id="phone" name="phone" required
                                        class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                </div>
                            </div>

                            <div>
                                <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Servicio de interés*</label>
                                <select id="service" name="service" required
                                    class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                    <option value="">Seleccione un servicio</option>
                                    <option value="automation">Automatización Industrial</option>
                                    <option value="security">Seguridad Biométrica</option>
                                    <option value="energy">Soluciones Energéticas</option>
                                    <option value="consulting">Consultoría Tecnológica</option>
                                    <option value="other">Otro</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Preferencia de contacto</label>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="radio" name="contact_pref" value="email" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300" checked>
                                        <span class="ml-2 text-gray-700">Correo electrónico</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="contact_pref" value="phone" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                        <span class="ml-2 text-gray-700">Llamada telefónica</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="contact_pref" value="whatsapp" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                        <span class="ml-2 text-gray-700">WhatsApp</span>
                                    </label>
                                </div>
                            </div>

                            <div>
                                <label for="call_date" class="block text-sm font-medium text-gray-700 mb-1">Fecha preferida para llamada</label>
                                <input type="date" id="call_date" name="call_date" min="<?= date('Y-m-d') ?>"
                                    class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                            </div>

                            <div>
                                <label for="call_time" class="block text-sm font-medium text-gray-700 mb-1">Horario preferido</label>
                                <select id="call_time" name="call_time"
                                    class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none">
                                    <option value="">Seleccione horario</option>
                                    <option value="morning">Mañana (9-12hs)</option>
                                    <option value="afternoon">Tarde (14-17hs)</option>
                                    <option value="evening">Noche (17-20hs)</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensaje*</label>
                                <textarea id="message" name="message" rows="4" required
                                    class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                                    placeholder="Describa brevemente su consulta o necesidad"></textarea>
                            </div>

                            <div class="flex items-center">
                                <input id="terms" name="terms" type="checkbox" required
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="terms" class="ml-2 block text-sm text-gray-700">
                                    Acepto recibir información y que mis datos sean tratados según la política de privacidad
                                </label>
                            </div>

                            <button type="submit"
                                class="w-full px-6 py-3 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Solicitar llamada con representante
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-6">Información de contacto</h2>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium mb-1">Oficina Principal</h3>
                                    <p class="text-gray-600">Av. Tecnológica 1234, Zona Industrial, Ciudad</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-phone-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium mb-1">Teléfonos</h3>
                                    <p class="text-gray-600">+52 55 1234 5678</p>
                                    <p class="text-gray-600">+52 55 8765 4321</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium mb-1">Correo electrónico</h3>
                                    <p class="text-gray-600">contacto@esteparian.com</p>
                                    <p class="text-gray-600">ventas@esteparian.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium mb-1">Horario de atención</h3>
                                    <p class="text-gray-600">Lunes a Viernes: 9:00 - 18:00</p>
                                    <p class="text-gray-600">Sábados: 10:00 - 14:00</p>
                                </div>
                            </div>
                        </div>

                        <!-- Map -->
                        <div class="mt-8">
                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 rounded-lg overflow-hidden">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.888215416012!2d-99.180987924987!3d19.42702088187245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff35f5bd1563%3A0x6c366f0e2de02ff7!2sEl%20%C3%81ngel%20de%20la%20Independencia!2m2!1d-99.167662!2d19.427025!5e0!3m2!1sen!2smx!4v1620000000000!5m2!1sen!2smx" 
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '_includes/footer.php'; ?>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Form validation and submission logic would go here
            alert('Gracias por su mensaje. Nos pondremos en contacto pronto.');
            this.reset();
        });
    </script>
</body>
</html>