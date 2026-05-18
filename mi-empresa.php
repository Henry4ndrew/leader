<?php 
include 'includes/header.php'; 
?>

<!-- ========================================
     SECCIÓN HERO - MI EMPRESA
     ======================================== -->
<section class="relative overflow-hidden bg-gradient-to-br from-white to-gray-50">
    <div class="container mx-auto px-4 py-8 md:py-12 lg:py-16">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 md:gap-12">
            
            <div class="flex-1 text-center lg:text-left z-10">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4 md:mb-6">
                    <span class="w-2 h-2 bg-cian rounded-full animate-pulse"></span>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">CONOCE DXN</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 md:mb-6">
                    <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                        Mi Empresa
                    </span>
                    <br>
                    <span class="text-gray-800">
                        DXN
                        <span class="text-cian relative inline-block">
                            Internacional
                            <svg class="absolute -bottom-2 left-0 w-full h-2 text-cian" viewBox="0 0 200 8" fill="currentColor">
                                <path d="M0,4 Q50,0 100,4 T200,4" stroke="currentColor" stroke-width="2" fill="none"/>
                            </svg>
                        </span>
                    </span>
                </h1>
                
                <p class="text-gray-600 text-base md:text-lg lg:text-xl mb-6 md:mb-8 max-w-2xl mx-auto lg:mx-0">
                    DXN fue fundado por Datuk Lim Siow Jin en 1993, con el objetivo de llevar los beneficios del Ganoderma a todo el mundo.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center lg:justify-start">
                    <a href="#historia" 
                       class="group bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center justify-center gap-2 text-sm md:text-base">
                        <span>Conocer historia</span>
                        <i class="fas fa-arrow-down group-hover:translate-y-1 transition-transform"></i>
                    </a>
                    <a href="#certificaciones" 
                       class="border-2 border-indigo text-indigo hover:bg-indigo hover:text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center gap-2 text-sm md:text-base">
                        <i class="fas fa-certificate"></i>
                        <span>Certificaciones</span>
                    </a>
                </div>
            </div>
            
            <div class="flex-1 flex justify-center">
                <img src="<?= BASE_URL ?>/assets/img/fabricaDXN.avif" 
                     alt="Fábrica DXN" 
                     class="w-full max-w-sm md:max-w-md lg:max-w-lg rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: HISTORIA DXN
     ======================================== -->
<section id="historia" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-history text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">NUESTRA HISTORIA</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Historia de DXN
                </span>
            </h2>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <p class="text-gray-600 leading-relaxed">
                DXN fue fundado por Datuk Lim Siow Jin graduado de un prestigioso Instituto de Tecnología de la India. 
                Datuk Lim comenzó el negocio en busca de los beneficios de los hongos en la salud humana. Su profundo interés 
                e incansables esfuerzos le llevaron a utilizar el máximo potencial del Ganoderma o Lingzhi, el cual es reconocido 
                por ser el Rey de Las Hierbas para la salud humana y la riqueza. Él estableció DXN en 1993.
            </p>
            <p class="text-gray-600 leading-relaxed">
                La actividad principal de DXN incluye el cultivo, manufactura y mercadeo de los suplementos dietarios saludables. 
                Con sede en Malasia y operaciones mundiales, la compañía es reconocida por sus negocios de Ganoderma. 
                Entre sus líneas de productos incluye productos de cuidado personal, cosméticos, productos del hogar y sistemas 
                de tratamiento de agua. Desde su introducción en 1993, DXN ha tenido el concepto de 
                <strong class="text-cian">"Un Mundo, Un Mercado, Una Mente, Una Compañía Dragón"</strong>.
            </p>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: VIDEOS DXN
     ======================================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-video text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">MULTIMEDIA</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Videos DXN
                </span>
            </h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative pb-[56.25%]">
                    <iframe class="absolute top-0 left-0 w-full h-full" 
                            src="https://www.youtube.com/embed/aTHB57LuztI?si=FDD4qO2mTnirk-gS" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative pb-[56.25%]">
                    <iframe class="absolute top-0 left-0 w-full h-full" 
                            src="https://www.youtube.com/embed/HW-NklGagks?si=DrdvhF8ZrvNiPQTn" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative pb-[56.25%]">
                    <iframe class="absolute top-0 left-0 w-full h-full" 
                            src="https://www.youtube.com/embed/UbezhP43qBM?si=PISNU2fW44ntzlp8" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: CONCEPTO "UN MUNDO, UN MERCADO, UNA MENTE"
     ======================================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-globe-americas text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">CONCEPTO</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Un Mundo, Un Mercado, Una Mente
                </span>
            </h2>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Concepto 1 -->
            <div class="group bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-dragon text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Un Dragón</h3>
                <p class="text-gray-600">
                    El proceso completo - Cultivo, procesamiento y mercadeo todo es realizado por la Compañía bajo un estricto control de Calidad.
                </p>
            </div>
            
            <!-- Concepto 2 -->
            <div class="group bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-globe text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Un Mundo, Un Mercado</h3>
                <p class="text-gray-600">
                    Todos y cada uno de los Distribuidores disfrutan de un bono mundial con una sola membresía.
                </p>
            </div>
            
            <!-- Concepto 3 -->
            <div class="group bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-brain text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Una Mente</h3>
                <p class="text-gray-600">
                    La Compañía y sus distribuidores comparten una sola mente y se concentran al hacer el negocio de DXN.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: FILOSOFÍA DXN
     ======================================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
            <div class="flex-1">
                <img src="<?= BASE_URL ?>/assets/img/filosofia.webp" 
                     alt="Filosofía DXN"
                     class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="flex-1">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                    <i class="fas fa-leaf text-cian text-sm"></i>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">FILOSOFÍA</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-azul-oscuro">
                    Precios Bajos, Alta Calidad, Perfil Bajo, Altos Ingresos
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    Productos de Alta Calidad a Precios Bajos, para mantener un perfil bajo y mantener un Ingreso Alto 
                    lo cual es ideal para las Ventas Directas. Este Sistema es Equitativo y Accesible para cualquier persona 
                    de cualquier tipo de antecedentes. Nuestro Sistema de Libre Empresa permite que todos puedan tener logros 
                    personales que los lleven a una Independencia Financiera Mayor.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: FUNDADOR DXN
     ======================================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row-reverse items-center gap-8 lg:gap-12">
            <div class="flex-1">
                <img src="<?= BASE_URL ?>/assets/img/DrLim.avif" 
                     alt="Dr. Lim Siow Jin"
                     class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="flex-1">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                    <i class="fas fa-user-tie text-cian text-sm"></i>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">FUNDADOR</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                        Datuk Dr. Lim Siow Jin
                    </span>
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    DXN fue fundado por Datuk Dr. Lim Siow Jin, un graduado del prestigioso Instituto Indio de Tecnología. 
                    Desde su juventud ha tenido un profundo interés en los hongos y cómo estos pueden contribuir a mejorar la salud humana.
                    Después de más de 20 años de rigurosa investigación, descubrió los beneficios medicinales del Ganoderma Lucidum.
                    En 1993, el sueño de Datuk Dr. Lim se hizo realidad cuando fundó la compañía DXN en Kedah, Malasia.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: LOGO DXN
     ======================================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-palette text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">SIGNIFICADO</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Significado del Logo DXN
                </span>
            </h2>
        </div>
        
        <div class="flex justify-center mb-8">
            <img src="<?= BASE_URL ?>/assets/img/logoDXN.avif" 
                 alt="Logo DXN" 
                 class="w-48 h-48 object-contain">
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-red-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-fire text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-red-600 mb-2">ROJO</h3>
                <p class="text-gray-600">Representa el fuego que simboliza el espíritu combativo para el progreso.</p>
                <div class="mt-3 pt-3 border-t border-red-200">
                    <p class="text-sm text-gray-600"><strong>El Oval Rojo:</strong> Simboliza el sol naciente que representa la agresividad, una mente y la persistencia.</p>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-green-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-tree text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-green-600 mb-2">VERDE</h3>
                <p class="text-gray-600">Representa los árboles que simbolizan el crecimiento dinámico y la expansión.</p>
                <div class="mt-3 pt-3 border-t border-green-200">
                    <p class="text-sm text-gray-600"><strong>Las ramas verdes:</strong> Simbolizan el Ganoderma y el fuerte compromiso de la Compañía.</p>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-blue-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-water text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-blue-600 mb-2">AZUL</h3>
                <p class="text-gray-600">Representa el agua que simboliza los cimientos de la Compañía.</p>
                <div class="mt-3 pt-3 border-t border-blue-200">
                    <p class="text-sm text-gray-600"><strong>Las líneas azules:</strong> Simbolizan la fuente de poder y el ímpetu del desarrollo del negocio.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: CERTIFICACIONES (CARRUSEL)
     ======================================== -->
<section id="certificaciones" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-certificate text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">RECONOCIMIENTOS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Certificaciones y Reconocimientos
                </span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                DXN cuenta con múltiples certificaciones internacionales que avalan la calidad de sus productos
            </p>
        </div>
        
        <div class="relative">
            <button id="cert-prev" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-azul-oscuro hover:text-white w-10 h-10 rounded-full shadow-lg transition-all duration-300 flex items-center justify-center">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="cert-next" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-azul-oscuro hover:text-white w-10 h-10 rounded-full shadow-lg transition-all duration-300 flex items-center justify-center">
                <i class="fas fa-chevron-right"></i>
            </button>
            
            <div class="overflow-hidden mx-8">
                <div id="certificados-carrusel" class="flex gap-6 transition-transform duration-500 ease-out">
                    <?php
                    $certificados = [
                        ['img' => 'certificadoHACCP.avif', 'titulo' => 'Certificación HACCP', 'descripcion' => 'Industrias DXN (M) Sdn Bhd ha otorgado el Certificado HACCP por el Ministerio de Salud de Malasia.'],
                        ['img' => 'brandYearAward.avif', 'titulo' => 'Marcas de la concesión del año 2010', 'descripcion' => 'DXN Spirulina ha sido seleccionado como el mejor suplemento de alimentos en Pakistán.'],
                        ['img' => 'iso9001.avif', 'titulo' => 'ISO 9001', 'descripcion' => 'Concedido a DXN Farmacéutico Sdn. Bhd para su cumplimiento y sistemática.'],
                        ['img' => 'iso14001.avif', 'titulo' => 'ISO 14001', 'descripcion' => 'Reconocimiento en la gestión de producción con respecto a la conservación del medio ambiente.'],
                        ['img' => 'halal.avif', 'titulo' => 'Certificación Halal', 'descripcion' => 'Productos certificados Halal por el Departamento de Desarrollo Islámico de Malasia.'],
                        ['img' => 'tgaAustralia.avif', 'titulo' => 'GMP Certificado TGA Australia', 'descripcion' => 'Cumple los requisitos de la Australian Therapeutic Goods Act 1989.'],
                        ['img' => 'goodManufacturingNFC.avif', 'titulo' => 'Good Manufacturing (NCF)', 'descripcion' => 'Cumplimiento de la actual Good Manufacturing Practise.'],
                        ['img' => 'msc.avif', 'titulo' => 'MSC Malasia', 'descripcion' => 'Multimedia Super Corridor situación en Malasia.'],
                    ];
                    
                    foreach($certificados as $cert): 
                    ?>
                        <div class="certificado-item flex-shrink-0 w-80 bg-white rounded-xl shadow-md overflow-hidden">
                            <img src="<?= BASE_URL ?>/assets/img/<?= $cert['img'] ?>" 
                                 alt="<?= $cert['titulo'] ?>"
                                 class="w-full h-48 object-cover"
                                 onerror="this.src='<?= BASE_URL ?>/assets/img/placeholder.avif'">
                            <div class="p-4">
                                <h3 class="font-bold text-azul-oscuro text-lg mb-2"><?= $cert['titulo'] ?></h3>
                                <p class="text-gray-600 text-sm"><?= $cert['descripcion'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <div id="cert-indicadores" class="flex justify-center gap-2 mt-6"></div>
    </div>
</section>




<!-- Script para el carrusel de certificados -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carrusel = document.getElementById('certificados-carrusel');
    const prevBtn = document.getElementById('cert-prev');
    const nextBtn = document.getElementById('cert-next');
    const indicatorsContainer = document.getElementById('cert-indicadores');
    const items = document.querySelectorAll('.certificado-item');
    
    let currentIndex = 0;
    let itemsPerPage = getItemsPerPage();
    
    function getItemsPerPage() {
        const width = window.innerWidth;
        if (width < 640) return 1;
        if (width < 768) return 1;
        if (width < 1024) return 2;
        if (width < 1280) return 3;
        return 3;
    }
    
    function updateCarrusel() {
        const itemWidth = items[0]?.offsetWidth + 24;
        const offset = -currentIndex * itemWidth * itemsPerPage;
        carrusel.style.transform = `translateX(${offset}px)`;
        updateIndicators();
    }
    
    function updateIndicators() {
        const totalPages = Math.ceil(items.length / itemsPerPage);
        indicatorsContainer.innerHTML = '';
        
        for (let i = 0; i < totalPages; i++) {
            const indicator = document.createElement('button');
            indicator.className = `w-2 h-2 rounded-full transition-all duration-300 ${i === currentIndex ? 'bg-cian w-6' : 'bg-gray-300 hover:bg-gray-400'}`;
            indicator.onclick = () => {
                currentIndex = i;
                updateCarrusel();
            };
            indicatorsContainer.appendChild(indicator);
        }
    }
    
    function nextSlide() {
        const totalPages = Math.ceil(items.length / itemsPerPage);
        if (currentIndex < totalPages - 1) {
            currentIndex++;
            updateCarrusel();
        }
    }
    
    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarrusel();
        }
    }
    
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
    
    window.addEventListener('resize', function() {
        const newItemsPerPage = getItemsPerPage();
        if (newItemsPerPage !== itemsPerPage) {
            itemsPerPage = newItemsPerPage;
            currentIndex = 0;
            updateCarrusel();
            updateIndicators();
        }
    });
    
    updateIndicators();
    setTimeout(() => updateCarrusel(), 100);
});
</script>

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
    
    .certificado-item {
        transition: all 0.3s ease;
    }
    
    .certificado-item:hover {
        transform: translateY(-5px);
    }
</style>

<?php include 'includes/footer.php'; ?>