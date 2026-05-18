<?php 
include 'includes/header.php'; 
?>

<!-- ========================================
     SECCIÓN HERO - SALUD Y BIENESTAR
     ======================================== -->
<section class="relative overflow-hidden bg-gradient-to-br from-white to-gray-50">
    <div class="container mx-auto px-4 py-8 md:py-12 lg:py-16">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 md:gap-12">
            
            <!-- Columna izquierda - Texto -->
            <div class="flex-1 text-center lg:text-left z-10">
                <!-- Badge de salud -->
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4 md:mb-6">
                    <span class="w-2 h-2 bg-cian rounded-full animate-pulse"></span>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">SALUD Y BIENESTAR</span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 md:mb-6 efect1">
                    <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                        Una vida
                    </span>
                    <br>
                    <span class="text-gray-800">
                        saludable
                        <span class="text-cian relative inline-block">
                            comienza hoy
                            <svg class="absolute -bottom-2 left-0 w-full h-2 text-cian" viewBox="0 0 200 8" fill="currentColor">
                                <path d="M0,4 Q50,0 100,4 T200,4" stroke="currentColor" stroke-width="2" fill="none"/>
                            </svg>
                        </span>
                    </span>
                </h1>
                
                <!-- Descripción -->
                <p class="text-gray-600 text-base md:text-lg lg:text-xl mb-6 md:mb-8 max-w-2xl mx-auto lg:mx-0">
                    Descubre cómo cuidar tu salud de forma natural con productos de alta calidad y 
                    hábitos saludables que transformarán tu vida.
                </p>
            </div>
            
            <!-- Columna derecha - Imagen -->
            <div class="flex-1 flex justify-center efect2">
                <img src="<?= BASE_URL ?>/assets/img/banner_salud.avif" 
                     alt="Salud y bienestar" 
                     class="w-full max-w-sm md:max-w-md lg:max-w-lg rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>


<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
            <div class="flex-1 order-2 lg:order-1 efect1">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                    <i class="fas fa-question-circle text-cian text-sm"></i>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">¿SABÍAS QUE?</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                        ¿Cómo nos enfermamos?
                    </span>
                </h2>
                <div class="space-y-3 mb-6">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-times-circle text-red-500 text-xl"></i>
                        <span class="text-gray-700">Malos hábitos alimenticios</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-times-circle text-red-500 text-xl"></i>
                        <span class="text-gray-700">Mucho estrés y tensiones en el cuerpo</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-times-circle text-red-500 text-xl"></i>
                        <span class="text-gray-700">Mediante un contagio</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-times-circle text-red-500 text-xl"></i>
                        <span class="text-gray-700">Consumiendo cosas sucias</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-times-circle text-red-500 text-xl"></i>
                        <span class="text-gray-700">Por tener bajas defensas</span>
                    </div>
                </div>
            </div>
            <div class="flex-1 order-1 lg:order-2 efect2">
                <img src="<?= BASE_URL ?>/assets/img/comoNosEnfermamos.avif" 
                     alt="Cómo nos enfermamos"
                     class="rounded-2xl shadow-xl w-full">
            </div>
        </div>
    </div>
</section>


<section class="py-16 bg-gradient-to-r from-azul-oscuro/5 via-indigo/5 to-cian/5">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-3xl mx-auto efect1">
            <i class="fas fa-skull-crossbones text-4xl text-red-400 mb-4"></i>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">
                En resumen: Nos enfermamos por el ingreso de <span class="text-red-500">TOXINAS</span> 
                y el <span class="text-red-500">DESEQUILIBRIO</span> en nuestro cuerpo
            </h2>
        </div>
    </div>
</section>


<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
            <div class="flex-1 efect2">
                <img src="<?= BASE_URL ?>/assets/img/familia.avif" 
                     alt="Familia saludable"
                     class="rounded-2xl shadow-xl w-full">
            </div>
            <div class="flex-1 efect1">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                    <i class="fas fa-lightbulb text-cian text-sm"></i>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">LA SOLUCIÓN</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                        La Solución
                    </span>
                </h2>
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-check-circle text-cian text-xl"></i>
                        <span class="text-gray-700">Eliminar toxinas de nuestro cuerpo</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-check-circle text-cian text-xl"></i>
                        <span class="text-gray-700">Equilibrar las funciones</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-check-circle text-cian text-xl"></i>
                        <span class="text-gray-700">Incrementar las defensas</span>
                    </div>
                </div>
                <div class="mt-6 p-4 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 rounded-xl">
                    <p class="text-gray-700 font-medium">
                        Para ello necesitaremos aplicar los <strong class="text-cian">4 pilares de la salud</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-columns text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">FUNDAMENTOS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 efect1">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Los 4 Pilares de la Salud
                </span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto efect1">
                Estos son los fundamentos esenciales para mantener una vida saludable y equilibrada
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Pilar 1 -->
            <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 efect3">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-azul-oscuro to-indigo rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-smile text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Actitud mental positiva</h3>
                        <p class="text-gray-600">
                            Es mejor evitar todo aquello que habla de quejas y malestares, pueden ser personas e incluso medios de comunicación.
                            Rodéate de personas positivas que hagan tu entorno más agradable.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Pilar 2 -->
            <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 efect3">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-indigo to-cian rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-heartbeat text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Estilo de vida saludable</h3>
                        <p class="text-gray-600">
                            Adquiere nuevos hábitos en tu ser y en tu familia; como beber agua en lugar de gaseosas, hacer ejercicio, 
                            practicar meditación, dormir temprano en lugar de trasnocharse con el teléfono móvil o el televisor.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Pilar 3 -->
            <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 efect3">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-cian to-azul-oscuro rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-apple-alt text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Dieta sana</h3>
                        <p class="text-gray-600">
                            Consumir más vegetales y alimentos naturales en lugar de comida procesada, comida chatarra, 
                            dulces o colorantes artificiales, beber por lo menos 2 litros de agua al día.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Pilar 4 -->
            <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 efect3">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-azul-oscuro to-indigo rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-capsules text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Suplementar</h3>
                        <p class="text-gray-600">
                            Debido a la cultivación moderna, nuestros alimentos ya no poseen los nutrientes necesarios. 
                            Para ello tendremos que consumir suplementos naturales altos en nutrientes, vitaminas y todo lo que nuestro cuerpo necesite.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="productos" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-box-open text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">PRODUCTOS DESTACADOS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 efect1">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Nuestros productos sugeridos
                </span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Existen muchos suplementos y alimentos para el cuidado de la salud; tenemos algunas sugerencias para tí
            </p>
        </div>
        
        <!-- Producto 1: Spirulina -->
        <div class="flex flex-col lg:flex-row items-center gap-8 mb-16">
            <div class="flex-1 efect2">
                <img src="<?= BASE_URL ?>/assets/img/algaspirulina.avif" 
                     alt="Spirulina"
                     class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="flex-1 efect1">
                <span class="inline-block bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full mb-3">Suplemento natural</span>
                <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Spirulina</h3>
                <p class="text-gray-600 mb-4">
                    Considerada un coctel de vitaminas por la enorme cantidad que esta que posee.
                </p>
                <h4 class="font-semibold text-gray-800 mb-2">Beneficios:</h4>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Rica en Nutrientes:</strong> Fuente densa de proteínas, vitaminas y minerales.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Propiedades Antioxidantes:</strong> Contiene antioxidantes potentes como la ficocianina.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Mejora el Sistema Inmunológico:</strong> Aumenta la producción de anticuerpos.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Apoya la Salud Cardiovascular:</strong> Reduce el colesterol y la presión arterial.</span></li>
                </ul>
            </div>
        </div>
        
        <!-- Producto 2: Ganoderma -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-8 mb-16 bg-gray-50 px-6 py-8 rounded-2xl shadow">
            <div class="flex-1 efect2">
                <img src="<?= BASE_URL ?>/assets/img/ganodermaplanta.avif" 
                     alt="Ganoderma Lucidum"
                     class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="flex-1 efect1">
                <span class="inline-block bg-amber-100 text-amber-700 text-sm px-3 py-1 rounded-full mb-3">Hongo medicinal</span>
                <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Ganoderma Lucidum</h3>
                <p class="text-gray-600 mb-4">
                    Conocido como el rey de las hierbas debido a su alto contenido de Antioxidantes
                </p>
                <h4 class="font-semibold text-gray-800 mb-2">Beneficios:</h4>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Refuerza el Sistema Inmunológico:</strong> Mejora la respuesta inmune.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Propiedades Antioxidantes:</strong> Protege contra el daño celular.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Reducción del Estrés:</strong> Promueve la relajación y mejora el sueño.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Salud Cardiovascular:</strong> Ayuda a reducir el colesterol y la presión arterial.</span></li>
                </ul>
            </div>
        </div>
        
        <!-- Producto 3: Noni -->
        <div class="flex flex-col lg:flex-row items-center gap-8 mb-16">
            <div class="flex-1 efect2">
                <img src="<?= BASE_URL ?>/assets/img/noniplanta.avif" 
                     alt="Noni"
                     class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="flex-1 efect1">
                <span class="inline-block bg-purple-100 text-purple-700 text-sm px-3 py-1 rounded-full mb-3">Fruto tropical</span>
                <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Noni</h3>
                <p class="text-gray-600 mb-4">
                    Se ha utilizado durante siglos en la medicina tradicional de diversas culturas por sus beneficios para la salud.
                </p>
                <h4 class="font-semibold text-gray-800 mb-2">Beneficios:</h4>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Refuerza el Sistema Inmunológico:</strong> Mejora la respuesta inmune.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Propiedades Antioxidantes:</strong> Protege contra el daño celular.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Propiedades Anti-Inflamatorias:</strong> Reduce la inflamación.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Mejora la Digestión:</strong> Alivia problemas digestivos y mejora la salud intestinal.</span></li>
                </ul>
            </div>
        </div>
        
        <!-- Producto 4: Oolong Tea -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-8 mb-16 bg-gray-50 px-6 py-8 rounded-2xl shadow">
            <div class="flex-1 efect2">
                <img src="<?= BASE_URL ?>/assets/img/oolongplanta.avif" 
                     alt="Oolong Tea"
                     class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="flex-1 efect1">
                <span class="inline-block bg-cyan-100 text-cyan-700 text-sm px-3 py-1 rounded-full mb-3">Té semioxidado</span>
                <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Oolong Tea</h3>
                <p class="text-gray-600 mb-4">
                    Este té se elabora a partir de las hojas de la planta Camellia sinensis, con un proceso de oxidación parcial.
                </p>
                <h4 class="font-semibold text-gray-800 mb-2">Beneficios:</h4>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Mejora el Metabolismo:</strong> Ayuda en la pérdida de peso.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Propiedades Antioxidantes:</strong> Protege contra el daño celular.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Salud Cardiovascular:</strong> Reduce el colesterol y mejora la circulación.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Salud Mental:</strong> Aumenta la alerta mental y reduce el estrés.</span></li>
                </ul>
            </div>
        </div>
        
        <!-- Producto 5: Sábila / Aloe Vera -->
        <div class="flex flex-col lg:flex-row items-center gap-8 mb-16">
            <div class="flex-1 efect2">
                <img src="<?= BASE_URL ?>/assets/img/sabilaplanta.avif" 
                     alt="Sábila"
                     class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="flex-1 efect1">
                <span class="inline-block bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full mb-3">Planta medicinal</span>
                <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Sábila / Aloe Vera</h3>
                <p class="text-gray-600 mb-4">
                    Contiene vitaminas, minerales, enzimas, aminoácidos y antioxidantes con propiedades curativas y nutritivas.
                </p>
                <h4 class="font-semibold text-gray-800 mb-2">Beneficios:</h4>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Propiedades Curativas:</strong> Acelera la cicatrización de heridas y quemaduras.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Hidratación de la Piel:</strong> Profundamente hidrata y suaviza la piel.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Mejora la Digestión:</strong> Alivia problemas digestivos.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Propiedades Anti-Inflamatorias:</strong> Reduce la inflamación.</span></li>
                </ul>
            </div>
        </div>
        
        <!-- Producto 6: Cordyceps -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-8 mb-16 bg-gray-50 px-6 py-8 rounded-2xl shadow">
            <div class="flex-1 efect2">
                <img src="<?= BASE_URL ?>/assets/img/cordycepsplanta.avif" 
                     alt="Cordyceps"
                     class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="flex-1 efect1">
                <span class="inline-block bg-red-100 text-red-700 text-sm px-3 py-1 rounded-full mb-3">Hongo medicinal</span>
                <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Cordyceps</h3>
                <p class="text-gray-600 mb-4">
                    Un hongo usado en la medicina tradicional China utilizado para incrementar el sistema inmunológico.
                </p>
                <h4 class="font-semibold text-gray-800 mb-2">Beneficios:</h4>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Aumenta la Energía:</strong> Mejora la resistencia y el rendimiento físico.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Refuerza el Sistema Inmunológico:</strong> Potencia la respuesta inmune.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Propiedades Antioxidantes:</strong> Protege contra el daño celular.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Mejora la Salud Respiratoria:</strong> Alivia síntomas de enfermedades respiratorias.</span></li>
                </ul>
            </div>
        </div>
        
        <!-- Producto 7: Melena de León -->
        <div class="flex flex-col lg:flex-row items-center gap-8">
            <div class="flex-1 efect2">
                <img src="<?= BASE_URL ?>/assets/img/plantaMelenaDeLeon.avif" 
                     alt="Melena de León"
                     class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="flex-1 efect1">
                <span class="inline-block bg-blue-100 text-blue-700 text-sm px-3 py-1 rounded-full mb-3">Hongo comestible</span>
                <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Melena de León</h3>
                <p class="text-gray-600 mb-4">
                    Hongo comestible conocido por mejorar la función cognitiva y apoyar el sistema nervioso.
                </p>
                <h4 class="font-semibold text-gray-800 mb-2">Beneficios:</h4>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Mejora la Función Cognitiva:</strong> Estimula la salud cerebral y la memoria.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Apoya el Sistema Nervioso:</strong> Promueve la regeneración de nervios.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Refuerza el Sistema Inmunológico:</strong> Potencia la respuesta inmune.</span></li>
                    <li class="flex items-start gap-2"><i class="fas fa-check-circle text-cian mt-1"></i><span class="text-gray-600"><strong>Propiedades Anti-Inflamatorias:</strong> Reduce la inflamación.</span></li>
                </ul>
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