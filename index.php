<?php include 'includes/header.php'; ?>

<!-- Sección Hero con imagen de perfil -->
<section class="relative overflow-hidden bg-gradient-to-br from-white to-gray-50">
    <div class="container mx-auto px-4 py-8 md:py-12 lg:py-16">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 md:gap-12">
            
            <!-- Columna izquierda - Texto -->
            <div class="flex-1 text-center lg:text-left z-10">
                <!-- Badge de bienvenida -->
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4 md:mb-6">
                    <span class="w-2 h-2 bg-cian rounded-full animate-pulse"></span>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">NETWORK MARKETING PROFESIONAL</span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 md:mb-6">
                    <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                        Formamos Líderes
                    </span>
                    <br>
                    <span class="text-gray-800">
                        que Transforman
                        <span class="text-cian relative inline-block">
                            Vidas
                            <svg class="absolute -bottom-2 left-0 w-full h-2 text-cian" viewBox="0 0 200 8" fill="currentColor">
                                <path d="M0,4 Q50,0 100,4 T200,4" stroke="currentColor" stroke-width="2" fill="none"/>
                            </svg>
                        </span>
                    </span>
                </h1>
                
                <!-- Descripción -->
                <p class="text-gray-600 text-base md:text-lg lg:text-xl mb-6 md:mb-8 max-w-2xl mx-auto lg:mx-0">
                    Descubre el camino hacia el éxito en Network Marketing. Desarrolla tu liderazgo, 
                    potencia tu crecimiento personal y construye un futuro extraordinario.
                </p>
                
                <!-- Botones CTA -->
                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center lg:justify-start">
                    <a href="<?= BASE_URL ?>/oportunidad.php" 
                       class="group bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center justify-center gap-2 text-sm md:text-base">
                        <span>Comenzar mi camino</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="<?= BASE_URL ?>/sobre_mi.php" 
                       class="border-2 border-indigo text-indigo hover:bg-indigo hover:text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center gap-2 text-sm md:text-base">
                        <i class="fas fa-play-circle"></i>
                        <span>Conocer más</span>
                    </a>
                </div>
                
                <!-- Estadísticas -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 md:gap-6 mt-8 md:mt-12 pt-6 md:pt-8 border-t border-gray-200">
                    <div>
                        <div class="text-xl md:text-2xl font-bold text-azul-oscuro">500+</div>
                        <div class="text-xs md:text-sm text-gray-500">Líderes Formados</div>
                    </div>
                    <div>
                        <div class="text-xl md:text-2xl font-bold text-azul-oscuro">15+</div>
                        <div class="text-xs md:text-sm text-gray-500">Países Alcanzados</div>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <div class="text-xl md:text-2xl font-bold text-azul-oscuro">10K+</div>
                        <div class="text-xs md:text-sm text-gray-500">Vidas Impactadas</div>
                    </div>
                </div>
            </div>
            
            <!-- Columna derecha - Imagen de perfil -->
            <div class="flex-1 flex justify-center">
                <img src="<?= BASE_URL ?>/assets/img/perfil.avif" 
                    alt="Líder Leader DXN" 
                    class="w-full max-w-sm md:max-w-md lg:max-w-lg drop-shadow-xl">
            </div>
        </div>
    </div>
</section>




<!-- ========================================
     SECCIÓN DE VALORES Y PILARES
     ======================================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Nuestros Pilares
                </span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Fundamentos que guían nuestro camino hacia la excelencia en el desarrollo profesional y personal
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Pilar 1: Liderazgo -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-azul-oscuro/10 to-indigo/10 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fas fa-crown text-3xl text-azul-oscuro"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Liderazgo</h3>
                <p class="text-gray-600">
                    Desarrollamos líderes capaces de inspirar, guiar y multiplicar el éxito en sus equipos.
                </p>
            </div>
            
            <!-- Pilar 2: Desarrollo Personal -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-indigo/10 to-cian/10 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fas fa-chart-line text-3xl text-indigo"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Desarrollo Personal</h3>
                <p class="text-gray-600">
                    Potenciamos tus habilidades blandas y tu mentalidad de crecimiento constante.
                </p>
            </div>
            
            <!-- Pilar 3: Network Marketing -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-cian/10 to-azul-oscuro/10 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fas fa-users text-3xl text-cian"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Network Marketing</h3>
                <p class="text-gray-600">
                    Aprende las estrategias y técnicas para construir un negocio sólido y escalable.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN DE LLAMADA A LA ACCIÓN
     ======================================== -->
<section class="py-16 bg-gradient-to-r from-azul-oscuro via-indigo to-cian">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            ¿Listo para Transformar tu Vida?
        </h2>
        <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
            Únete a nuestra comunidad de líderes y comienza tu viaje hacia el éxito profesional y personal.
        </p>
        <a href="<?= BASE_URL ?>/oportunidad.php" 
           class="inline-flex items-center gap-2 bg-white text-azul-oscuro px-8 py-3 rounded-lg font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
            <span>Quiero ser parte</span>
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>

<!-- ========================================
     SECCIÓN DE TESTIMONIOS (OPCIONAL)
     ======================================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Lo que Dicen Nuestros Líderes
                </span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Historias reales de transformación y éxito
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Testimonio 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all">
                <div class="flex items-center gap-1 mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-4">
                    "Gracias a Leader DXN aprendí a liderar mi propio camino. Hoy tengo un negocio próspero y un equipo de 50 personas."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-azul-oscuro to-indigo rounded-full flex items-center justify-center text-white font-bold">
                        MC
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">María Castillo</h4>
                        <p class="text-xs text-gray-500">Líder Diamante</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonio 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all">
                <div class="flex items-center gap-1 mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-4">
                    "El desarrollo personal que recibí aquí transformó mi mentalidad. Pasé de empleado a empresario exitoso."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-indigo to-cian rounded-full flex items-center justify-center text-white font-bold">
                        CR
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Carlos Rodríguez</h4>
                        <p class="text-xs text-gray-500">Líder Platino</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonio 3 -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all md:col-span-2 lg:col-span-1">
                <div class="flex items-center gap-1 mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-4">
                    "No solo aprendí de negocios, aprendí a ser una mejor versión de mí misma. El equipo de líderes es increíble."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-cian to-azul-oscuro rounded-full flex items-center justify-center text-white font-bold">
                        AG
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Ana González</h4>
                        <p class="text-xs text-gray-500">Líder Oro</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Agregar estilos adicionales para el gradiente de texto -->
<style>
    .text-gradient {
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-bounce {
        animation: bounce 1s infinite;
    }
</style>

<?php include 'includes/footer.php'; ?>
