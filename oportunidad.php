<?php 
include 'includes/header.php'; 
?>

<!-- ========================================
     SECCIÓN HERO - OPORTUNIDAD DXN
     ======================================== -->
<section class="relative overflow-hidden bg-gradient-to-br from-white to-gray-50">
    <div class="container mx-auto px-4 py-8 md:py-12 lg:py-16">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 md:gap-12">
            
            <!-- Columna izquierda - Texto -->
            <div class="flex-1 text-center lg:text-left z-10">
                <!-- Badge de oportunidad -->
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4 md:mb-6">
                    <span class="w-2 h-2 bg-cian rounded-full animate-pulse"></span>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">OPORTUNIDAD DE NEGOCIO</span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 md:mb-6">
                    <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                        ¿Qué harías
                    </span>
                    <br>
                    <span class="text-gray-800">
                        si el tiempo y el dinero
                        <span class="text-cian relative inline-block">
                            dejaran de ser un obstáculo?
                            <svg class="absolute -bottom-2 left-0 w-full h-2 text-cian" viewBox="0 0 200 8" fill="currentColor">
                                <path d="M0,4 Q50,0 100,4 T200,4" stroke="currentColor" stroke-width="2" fill="none"/>
                            </svg>
                        </span>
                    </span>
                </h1>
                
                <!-- Lista de beneficios -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6 md:mb-8">
                    <div class="flex items-center justify-center lg:justify-start gap-2">
                        <i class="fas fa-check-circle text-cian text-lg"></i>
                        <span class="text-gray-700">Cumplir sueños</span>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start gap-2">
                        <i class="fas fa-check-circle text-cian text-lg"></i>
                        <span class="text-gray-700">Cumplir promesas</span>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start gap-2">
                        <i class="fas fa-check-circle text-cian text-lg"></i>
                        <span class="text-gray-700">Mejor estilo de vida</span>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start gap-2">
                        <i class="fas fa-check-circle text-cian text-lg"></i>
                        <span class="text-gray-700">Obtener libertad</span>
                    </div>
                </div>
            
            </div>
            
            <!-- Columna derecha - Imagen -->
            <div class="flex-1 flex justify-center">
                <img src="<?= BASE_URL ?>/assets/img/libertad.avif" 
                     alt="Libertad financiera" 
                     class="w-full max-w-sm md:max-w-md lg:max-w-lg rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: EL CUADRANTE DEL DINERO
     ======================================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-chart-pie text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">LA CLAVE DEL ÉXITO</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Las 4 Formas de Generar Ingresos
                </span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Para lograr cambios es necesario entender cómo funciona la economía. Según los expertos existen solo 4 formas en cómo se mueve la economía a nivel mundial.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Empleado (E) -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2 bg-gradient-to-br from-green-50 to-green-100">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-green-600 to-green-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fas fa-user-tie text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Empleado (E)</h3>
                <p class="text-gray-600 text-sm">
                    Intercambia tiempo por dinero. Trabaja para otros.
                </p>
            </div>
            
            <!-- Autoempleado (A) -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2 bg-gradient-to-br from-blue-50 to-blue-100">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-blue-600 to-blue-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fas fa-laptop-code text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Autoempleado (A)</h3>
                <p class="text-gray-600 text-sm">
                    Trabaja por cuenta propia. Depende de su tiempo y esfuerzo.
                </p>
            </div>
            
            <!-- Dueño de Negocio (D) - Destacado -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2 bg-gradient-to-br from-azul-oscuro/10 to-indigo/10 ring-2 ring-cian">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-azul-oscuro to-indigo rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fas fa-chart-line text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-azul-oscuro mb-3">Dueño de Negocio (D)</h3>
                <p class="text-gray-600 text-sm">
                    Construye sistemas y equipos. El dinero trabaja para él.
                </p>
                <span class="inline-block mt-2 text-xs bg-cian/20 text-cian px-2 py-1 rounded-full">⭐ Recomendado</span>
            </div>
            
            <!-- Inversionista (I) -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2 bg-gradient-to-br from-yellow-50 to-yellow-100">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-yellow-600 to-yellow-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fas fa-coins text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Inversionista (I)</h3>
                <p class="text-gray-600 text-sm">
                    Hace que el dinero trabaje para él mediante inversiones.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: ¿POR QUÉ DUEÑO DE NEGOCIO?
     ======================================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
            <div class="flex-1">
                <img src="<?= BASE_URL ?>/assets/img/cuadrante.avif" 
                     alt="Cuadrante del dinero"
                     class="rounded-2xl shadow-xl w-full">
            </div>
            <div class="flex-1 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                    <i class="fas fa-question-circle text-cian text-sm"></i>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">¿POR QUÉ ES EL MEJOR?</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                        Dueño de Negocio
                    </span>
                </h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    El cuadrante de "Dueño de Negocio" es la clave para alcanzar la libertad financiera, 
                    ya que te permite crear un sistema que trabaje para ti.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    En lugar de depender del tiempo y esfuerzo de una sola persona, puedes construir un equipo 
                    que te ayude a generar ingresos pasivos. Este modelo de negocio ofrece mayor estabilidad 
                    y crecimiento a largo plazo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: LLAMADA A LA ACCIÓN MOTIVACIONAL
     ======================================== -->
<section class="py-16 bg-gradient-to-r from-azul-oscuro via-indigo to-cian">
    <div class="container mx-auto px-4 text-center">
        <i class="fas fa-rocket text-5xl text-white/80 mb-4"></i>
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-4">
            ¡Es momento de tomar las riendas de tu futuro!
        </h2>
        <p class="text-white/90 text-base md:text-lg mb-6 max-w-3xl mx-auto">
            Puedes ser dueño de tu propio negocio sin tener que empezar desde cero. El modelo de Network Marketing DXN 
            te permite construir tu propio sistema y equipo, mientras generas ingresos pasivos que crecen constantemente.
        </p>
        <p class="text-white/80 text-sm max-w-2xl mx-auto">
            No se trata solo de vender productos, sino de crear una red de emprendedores que, al igual que tú, 
            buscan libertad financiera y éxito. ¡Haz que tu dinero trabaje para ti!
        </p>
    </div>
</section>

<!-- ========================================
     SECCIÓN: ¿CÓMO FUNCIONA DXN?
     ======================================== -->
<section id="como-funciona" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-cogs text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">PASO A PASO</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    ¿Cómo funciona el Negocio DXN?
                </span>
            </h2>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Paso 1: Usar -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-azul-oscuro to-indigo rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="text-3xl font-bold text-white">1</span>
                </div>
                <div class="w-16 h-16 mx-auto -mt-12 mb-4 bg-white rounded-full shadow-lg flex items-center justify-center">
                    <i class="fas fa-mug-hot text-2xl text-azul-oscuro"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Usar</h3>
                <p class="text-gray-600">Disfruta de los productos DXN y comprueba su eficacia.</p>
            </div>
            
            <!-- Paso 2: Compartir -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-indigo to-cian rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="text-3xl font-bold text-white">2</span>
                </div>
                <div class="w-16 h-16 mx-auto -mt-12 mb-4 bg-white rounded-full shadow-lg flex items-center justify-center">
                    <i class="fas fa-share-alt text-2xl text-indigo"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Compartir</h3>
                <p class="text-gray-600">Comparte tu experiencia con otros e invítalos a usar los productos DXN.</p>
            </div>
            
            <!-- Paso 3: Construir -->
            <div class="group text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-cian to-azul-oscuro rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="text-3xl font-bold text-white">3</span>
                </div>
                <div class="w-16 h-16 mx-auto -mt-12 mb-4 bg-white rounded-full shadow-lg flex items-center justify-center">
                    <i class="fas fa-building text-2xl text-cian"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Construir</h3>
                <p class="text-gray-600">Registra y patrocina a otros guiándolos hacia el éxito en DXN.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: VIDEO EXPLICATIVO
     ======================================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Conoce más sobre DXN
                </span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Descubre cómo DXN está transformando vidas alrededor del mundo
            </p>
        </div>
        
        <div class="flex justify-center">
            <div class="relative w-full max-w-4xl rounded-2xl overflow-hidden shadow-2xl">
                <div style="padding-bottom: 56.25%; position: relative;">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/3BOIX023u4w?si=-ZfHKuFGiIQ1O7Ne" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: CÓMO SER PARTE
     ======================================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-user-plus text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">REQUISITOS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    ¿Cómo ser parte de DXN?
                </span>
            </h2>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="text-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-xl">
                <div class="w-16 h-16 mx-auto mb-4 bg-green-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-calendar-check text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-800">Ser Mayor de 18 años</h3>
                <p class="text-sm text-gray-600">Requisito fundamental para iniciar tu negocio</p>
            </div>
            
            <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl">
                <div class="w-16 h-16 mx-auto mb-4 bg-blue-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-800">Llenar formulario</h3>
                <p class="text-sm text-gray-600">Obtén tu código de nuevo miembro</p>
            </div>
            
            <div class="text-center p-6 bg-gradient-to-br from-azul-oscuro/10 to-indigo/10 rounded-xl">
                <div class="w-16 h-16 mx-auto mb-4 bg-indigo-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-envelope text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-800">Envíanos tu código</h3>
                <p class="text-sm text-gray-600">Te guiaremos hacia el éxito en DXN</p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: AFILIACIÓN (BANNER)
     ======================================== -->
<section class="py-16 bg-gradient-to-r from-azul-oscuro via-indigo to-cian">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    ¡Afiliación Gratuita!
                </h2>
                <p class="text-white/90 text-lg mb-6">
                    Obtén tu código DXN y comienza tu camino al éxito
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                    <a href="https://eworld.dxn2u.com/index.php?r=account/register&mc=<?= DXN_CODE ?>&dlang=es-ES" 
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-white text-azul-oscuro px-6 py-3 rounded-lg font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-user-plus"></i>
                        <span>Registrarme ahora</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="<?= BASE_URL ?>/tienda-virtual" 
                       class="inline-flex items-center gap-2 border-2 border-white text-white hover:bg-white/10 px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                        <i class="fas fa-store"></i>
                        <span>Conocer productos</span>
                    </a>
                </div>
            </div>
            <div>
                <img src="<?= BASE_URL ?>/assets/img/dxnAfiliate.avif" 
                     alt="Afíliate a DXN"
                     class="w-64 h-64 object-contain">
            </div>
        </div>
    </div>
</section>

<!-- Estilos adicionales -->
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
    
    html {
        scroll-behavior: smooth;
    }
</style>

<?php include 'includes/footer.php'; ?>