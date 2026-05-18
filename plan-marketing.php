<?php 
include 'includes/header.php'; 
?>

<!-- ========================================
     SECCIÓN HERO - PLAN DE MARKETING
     ======================================== -->
<section class="relative overflow-hidden bg-gradient-to-br from-white to-gray-50">
    <div class="container mx-auto px-4 py-8 md:py-12 lg:py-16">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 md:gap-12">
            
            <!-- Columna izquierda - Texto -->
            <div class="flex-1 text-center lg:text-left z-10">
                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4 md:mb-6">
                    <span class="w-2 h-2 bg-cian rounded-full animate-pulse"></span>
                    <span class="text-xs font-semibold text-azul-oscuro tracking-wide">OPORTUNIDAD DE NEGOCIO</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4 md:mb-6">
                    <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                        Plan de
                    </span>
                    <br>
                    <span class="text-gray-800">
                        Marketing
                        <span class="text-cian relative inline-block">
                            DXN
                            <svg class="absolute -bottom-2 left-0 w-full h-2 text-cian" viewBox="0 0 200 8" fill="currentColor">
                                <path d="M0,4 Q50,0 100,4 T200,4" stroke="currentColor" stroke-width="2" fill="none"/>
                            </svg>
                        </span>
                    </span>
                </h1>
                
                <p class="text-gray-600 text-base md:text-lg lg:text-xl mb-6 md:mb-8 max-w-2xl mx-auto lg:mx-0">
                    El plan de marketing de DXN está diseñado para recompensar el esfuerzo y la constancia, 
                    incluyendo bonos, comisiones y crecimiento en red.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center lg:justify-start">
                    <a href="#bonos" 
                       class="group bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center justify-center gap-2 text-sm md:text-base">
                        <span>Conocer bonos</span>
                        <i class="fas fa-arrow-down group-hover:translate-y-1 transition-transform"></i>
                    </a>
                    <a href="#descargas" 
                       class="border-2 border-indigo text-indigo hover:bg-indigo hover:text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center gap-2 text-sm md:text-base">
                        <i class="fas fa-download"></i>
                        <span>Descargar PDF</span>
                    </a>
                </div>
            </div>
            
            <!-- Columna derecha - Imagen -->
            <div class="flex-1 flex justify-center">
                <img src="<?= BASE_URL ?>/assets/img/Riqueza.avif" 
                     alt="Plan de Marketing DXN" 
                     class="w-full max-w-sm md:max-w-md lg:max-w-lg rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: BONOS DEL PLAN DE MARKETING
     ======================================== -->
<section id="bonos" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-gift text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">COMPENSACIÓN</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Bonos y Compensaciones
                </span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Conoce todos los beneficios que DXN tiene para ti como distribuidor
            </p>
        </div>
        
        <!-- Tarjeta 1: Ventas de Menudeo -->
        <div class="flex flex-col lg:flex-row items-center gap-8 mb-12">
            <div class="flex-1 order-2 lg:order-1">
                <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-2xl p-6">
                    <div class="inline-flex items-center gap-2 bg-green-500 text-white px-3 py-1 rounded-full text-sm mb-3">
                        <i class="fas fa-tag"></i>
                        <span>Ganancia Directa</span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Ventas de Menudeo (&gt;15%)</h3>
                    <p class="text-gray-600">
                        Ganancia Directa para los Distribuidores cuando venden los productos a personas que no sean distribuidores. 
                        Venta de Menudeo es la diferencia entre el precio de distribuidor y el precio de menudeo.
                    </p>
                </div>
            </div>
            <div class="flex-1 order-1 lg:order-2">
                <img src="<?= BASE_URL ?>/assets/img/Riqueza.avif" 
                     alt="Ventas de Menudeo"
                     class="rounded-2xl shadow-lg w-full">
            </div>
        </div>
        
        <!-- Tarjeta 2: Bono Grupal -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-8 mb-12">
            <div class="flex-1">
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl p-6">
                    <div class="inline-flex items-center gap-2 bg-blue-500 text-white px-3 py-1 rounded-full text-sm mb-3">
                        <i class="fas fa-users"></i>
                        <span>Bono Grupal</span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Bono Grupal (6% - 21%)</h3>
                    <p class="text-gray-600">
                        Si un (SA) Agente Estrella (21%) mantiene 100 PPV, se convertirá en un (QSA) Agente Estrella Calificado (25%).
                    </p>
                </div>
            </div>
            <div class="flex-1">
                <img src="<?= BASE_URL ?>/assets/img/equipo.avif" 
                     alt="Bono Grupal"
                     class="rounded-2xl shadow-lg w-full">
            </div>
        </div>
        
        <!-- Tarjeta 3: Bono Estrella Grupal -->
        <div class="flex flex-col lg:flex-row items-center gap-8 mb-12">
            <div class="flex-1">
                <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-2xl p-6">
                    <div class="inline-flex items-center gap-2 bg-purple-500 text-white px-3 py-1 rounded-full text-sm mb-3">
                        <i class="fas fa-star"></i>
                        <span>Bono Estrella</span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Bono Estrella Grupal (25% - 37%)</h3>
                    <p class="text-gray-600">
                        Para poder obtener su Bono de Estrella Grupal, usted debe ser Agente Estrella (SA) y mantener 100 PPV (QSA).
                    </p>
                </div>
            </div>
            <div class="flex-1">
                <img src="<?= BASE_URL ?>/assets/img/equipo.avif" 
                     alt="Bono Estrella Grupal"
                     class="rounded-2xl shadow-lg w-full">
            </div>
        </div>
        
        <!-- Tarjeta 4: Bono de Desarrollo -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-8 mb-12">
            <div class="flex-1">
                <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-2xl p-6">
                    <div class="inline-flex items-center gap-2 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm mb-3">
                        <i class="fas fa-chart-line"></i>
                        <span>Bono de Desarrollo</span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Bono de Desarrollo (15%)</h3>
                    <p class="text-gray-600">
                        Para obtener el Bono de Desarrollo usted debe ser Agente Estrella (SA) y mantener 100 PPV (QSA).
                    </p>
                </div>
            </div>
            <div class="flex-1">
                <img src="<?= BASE_URL ?>/assets/img/Riqueza.avif" 
                     alt="Bono de Desarrollo"
                     class="rounded-2xl shadow-lg w-full">
            </div>
        </div>
        
        <!-- Tarjeta 5: Ganancia Compartida Internacional -->
        <div class="flex flex-col lg:flex-row items-center gap-8 mb-12">
            <div class="flex-1">
                <div class="bg-gradient-to-r from-indigo-50 to-indigo-100 rounded-2xl p-6">
                    <div class="inline-flex items-center gap-2 bg-indigo-500 text-white px-3 py-1 rounded-full text-sm mb-3">
                        <i class="fas fa-globe"></i>
                        <span>Internacional</span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Ganancia Compartida Internacional (2%)</h3>
                    <p class="text-gray-600">
                        Para tener derecho a esta Ganancia Compartida Internacional (IPS) usted deberá ser Estrella Diamante Calificada (QSD).
                    </p>
                </div>
            </div>
            <div class="flex-1">
                <img src="<?= BASE_URL ?>/assets/img/viajes.avif" 
                     alt="Ganancia Internacional"
                     class="rounded-2xl shadow-lg w-full">
            </div>
        </div>
        
        <!-- Tarjeta 6: Bono de Dirigentes -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-8 mb-12">
            <div class="flex-1">
                <div class="bg-gradient-to-r from-red-50 to-red-100 rounded-2xl p-6">
                    <div class="inline-flex items-center gap-2 bg-red-500 text-white px-3 py-1 rounded-full text-sm mb-3">
                        <i class="fas fa-crown"></i>
                        <span>Dirigentes</span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-azul-oscuro mb-3">Bono de Dirigentes (15%)</h3>
                    <p class="text-gray-600">
                        Para tener derecho a este bono de Dirigentes, usted deberá ser Estrella Diamante Calificado (QSD).
                    </p>
                </div>
            </div>
            <div class="flex-1">
                <img src="<?= BASE_URL ?>/assets/img/equipo.avif" 
                     alt="Bono de Dirigentes"
                     class="rounded-2xl shadow-lg w-full">
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: INCENTIVOS ADICIONALES
     ======================================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-trophy text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">RECOMPENSAS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Incentivos Especiales
                </span>
            </h2>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Incentivo 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-azul-oscuro to-indigo rounded-full flex items-center justify-center">
                    <i class="fas fa-plane text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Incentivo de Viaje de Formación (2%)</h3>
                <p class="text-gray-600 text-center text-sm">
                    Deberá ser usado por calificado para viajar a los seminarios organizados por la Compañía únicamente. 
                    No es intercambiable por efectivo.
                </p>
            </div>
            
            <!-- Incentivo 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-indigo to-cian rounded-full flex items-center justify-center">
                    <i class="fas fa-mobile-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Incentivo de Teléfono Celular</h3>
                <p class="text-gray-600 text-center text-sm">
                    Cuando usted tiene 3 líneas inmediatas que hayan alcanzado el rango de SA y acumulen 2,400 GPV, 
                    recibirá este Incentivo en Efectivo.
                </p>
            </div>
            
            <!-- Incentivo 3 -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-cian to-azul-oscuro rounded-full flex items-center justify-center">
                    <i class="fas fa-globe-americas text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 text-center mb-2">Incentivo de Viaje al Extranjero</h3>
                <p class="text-gray-600 text-center text-sm">
                    Cuando usted tiene 5 líneas directas que hayan recibido su Incentivo de Teléfono Celular, 
                    recibirá este Incentivo de Viaje al Extranjero.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: DESCARGAR PDF
     ======================================== -->
<section id="descargas" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro/10 to-cian/10 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-file-pdf text-cian text-sm"></i>
                <span class="text-xs font-semibold text-azul-oscuro tracking-wide">DOCUMENTACIÓN</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <span class="text-gradient bg-gradient-to-r from-azul-oscuro to-indigo bg-clip-text text-transparent">
                    Descargar PDF Plan de Marketing
                </span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Selecciona tu país y descarga el plan de marketing completo
            </p>
        </div>
        
        <div class="relative">
            <!-- Controles del carrusel -->
            <button id="prev-btn" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-azul-oscuro hover:text-white w-10 h-10 rounded-full shadow-lg transition-all duration-300 flex items-center justify-center">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="next-btn" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-azul-oscuro hover:text-white w-10 h-10 rounded-full shadow-lg transition-all duration-300 flex items-center justify-center">
                <i class="fas fa-chevron-right"></i>
            </button>
            
            <!-- Carrusel -->
            <div class="overflow-hidden mx-8">
                <div id="carrusel-paises" class="flex gap-6 transition-transform duration-500 ease-out">
                    <?php
                    $paises = [
                        ['nombre' => 'Perú', 'bandera' => 'BanderaPeru.avif', 'link' => 'https://drive.google.com/uc?export=download&id=18TEaJP8xRorpBlGRCFEKiszh40TxoOrq'],
                        ['nombre' => 'Bolivia', 'bandera' => 'BanderaBolivia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1zrusGaSNRWUspuOy6-5tK_w4IdZCyc6-'],
                        ['nombre' => 'Colombia', 'bandera' => 'BanderaColombia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1hJc4ND5aIY4fCOCSTU1L63Ru1XF78z_5'],
                        ['nombre' => 'México', 'bandera' => 'BanderaMexico.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1axWdwEs1C9gDXFTaz4nxoI5lHRv4gp1q'],
                        ['nombre' => 'España', 'bandera' => 'BanderaEspania.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1HKFx0TDh1KY82hYYSwN2AwY2AYSev01O'],
                        ['nombre' => 'Alemania', 'bandera' => 'BanderaAlemania.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1rTnqG5w16uZPrlx75yTh_n2FFQERFXbT'],
                        ['nombre' => 'Australia', 'bandera' => 'BanderaAustralia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1JbaExQTYQ6qEqAwTTa64lOcl1I2OXsKK'],
                        ['nombre' => 'Bangladesh', 'bandera' => 'BanderaBangladesh.avif', 'link' => 'https://drive.google.com/uc?export=download&id=10AeEx9YAwa2xjG2BqYgRsmQRlAj-nPWF'],
                        ['nombre' => 'EE.UU.', 'bandera' => 'BanderaEEUU.avif', 'link' => 'https://drive.google.com/uc?export=download&id=11ieziN9CJDNtIL-itBhTth1gbuJ9aLbB'],
                        ['nombre' => 'Eslovaquia', 'bandera' => 'BanderaEslovaquia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=16L5LvQF-R5vgE1q9Z55q8NUpamDgGBhZ'],
                        ['nombre' => 'Filipinas', 'bandera' => 'BanderaFilipinas.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1NYjC1XFdgKz4cRxA36EekrGUTt7uwE9G'],
                        ['nombre' => 'Sudáfrica', 'bandera' => 'BanderaSudAfrica.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1xBD2ADyijYTK1rNn27o4vrCYeHmaC4Qa'],
                        ['nombre' => 'Etiopía', 'bandera' => 'BanderaEthiopia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1FQmpT3K0G8jZjpIOevHYCYFIFFaZFbG8'],
                        ['nombre' => 'Mauricio', 'bandera' => 'BanderaMauricio.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1cDtr8T0RObk5dT22aLDbd3ybhmAd0juC'],
                        ['nombre' => 'Kenia', 'bandera' => 'BanderaKenia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=18XDfuipaw4ytlCyUWxESepS4EVPzc0Ow'],
                        ['nombre' => 'Nigeria', 'bandera' => 'BanderaNigeria.webp', 'link' => 'https://drive.google.com/uc?export=download&id=1lTTDhYDf0PDTMFSaPANqJ3W6xDDh3CCg'],
                        ['nombre' => 'Francia', 'bandera' => 'BanderaFrancia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1pMWmg3AEw4-kAVzK5izxDSn8PejGYn-J'],
                        ['nombre' => 'Grecia', 'bandera' => 'BanderaGrecia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=16S1BusKce4PH5g9JnfbULk-F5DpEKAzT'],
                        ['nombre' => 'Hong Kong', 'bandera' => 'BanderaHongKong.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1f-SziP0WkoMdS6IF4cJFBOCfbKJJM_dh'],
                        ['nombre' => 'Hungría', 'bandera' => 'BanderaHungria.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1Ybox8cfezTzT9XpMS-nXC7TFTDmHLBbX'],
                        ['nombre' => 'India', 'bandera' => 'BanderaIndia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1u3VfWlU6n2kiLZNnQj4-cqFwUq1pBQFH'],
                        ['nombre' => 'Indonesia', 'bandera' => 'BanderaIndonesia.webp', 'link' => 'https://drive.google.com/uc?export=download&id=1lrOgJvsCJ3ku_sCHIAK8jc3QX_zcUtn-'],
                        ['nombre' => 'Inglaterra', 'bandera' => 'BanderaInglaterra.webp', 'link' => 'https://drive.google.com/uc?export=download&id=1fQ4H0uP0yCEvfFaTSzgiRq2EHczq0roj'],
                        ['nombre' => 'Italia', 'bandera' => 'BanderaItalia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1xkg0bRVL6iAzczs65txzw7gIQQI18nQ6'],
                        ['nombre' => 'Malasia', 'bandera' => 'BanderaMalasia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1XzutL2_ZFDNtPGDpAAS5kgvMr00LmlYO'],
                        ['nombre' => 'Mongolia', 'bandera' => 'BanderaMongolia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1ebmwdAu5TNiKBaO2mez_DjVhPGcvWgAg'],
                        ['nombre' => 'Pakistán', 'bandera' => 'BanderaPakistan.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1eik6gr9PzYEA2DW9noMuJpjnkMd8LgGh'],
                        ['nombre' => 'Polonia', 'bandera' => 'BanderaPolonia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1eR5It9v973OTo_pbidyj2LnnYQ3NNDFD'],
                        ['nombre' => 'República Checa', 'bandera' => 'BanderaRepublicaCheca.avif', 'link' => 'https://drive.google.com/uc?export=download&id=1fbvoyXs0ooPanBPAhMBLFEDWDn2HIlDi'],
                        ['nombre' => 'Singapur', 'bandera' => 'BanderaSingapur.webp', 'link' => 'https://drive.google.com/uc?export=download&id=1oeYJAgyjX0WOxI9RDZlgI_GbPIQgXEXT'],
                        ['nombre' => 'Tailandia', 'bandera' => 'BanderaTailandia.avif', 'link' => 'https://drive.google.com/uc?export=download&id=19PbPRGgsH3FHwxaiD62oEr45e5Z-J5Co'],
                    ];
                    
                    foreach($paises as $pais): 
                    ?>
                        <div class="Pais flex-shrink-0 w-48 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-4 text-center">
                            <h3 class="font-bold text-gray-800 mb-2"><?= $pais['nombre'] ?></h3>
                            <img src="<?= BASE_URL ?>/assets/img/banderas/<?= $pais['bandera'] ?>" 
                                 alt="<?= $pais['nombre'] ?>"
                                 class="w-full h-24 object-cover rounded-lg mb-3"
                                 onerror="this.src='<?= BASE_URL ?>/assets/img/placeholder.avif'">
                            <a href="<?= $pais['link'] ?>" 
                               target="_blank"
                               class="inline-flex items-center justify-center gap-2 w-full bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-3 py-2 rounded-lg text-sm transition-all duration-300">
                                <i class="fas fa-download"></i>
                                <span>Descargar PDF</span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <!-- Indicadores -->
        <div id="indicadores" class="flex justify-center gap-2 mt-6"></div>
    </div>
</section>

<!-- ========================================
     SECCIÓN: LLAMADA A LA ACCIÓN
     ======================================== -->
<section class="py-16 bg-gradient-to-r from-azul-oscuro via-indigo to-cian">
    <div class="container mx-auto px-4 text-center">
        <i class="fas fa-chart-line text-5xl text-white/80 mb-4"></i>
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            ¿Listo para empezar tu negocio?
        </h2>
        <p class="text-white/90 text-lg mb-6 max-w-2xl mx-auto">
            Únete a DXN y comienza a generar ingresos mientras ayudas a otros a mejorar su salud
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://eworld.dxn2u.com/index.php?r=account/register&mc=<?= DXN_CODE ?>&dlang=es-ES" 
               target="_blank"
               class="inline-flex items-center gap-2 bg-white text-azul-oscuro px-6 py-3 rounded-lg font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-user-plus"></i>
                <span>Afiliarme ahora</span>
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="<?= BASE_URL ?>/tienda-virtual" 
               class="inline-flex items-center gap-2 border-2 border-white text-white hover:bg-white/10 px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                <i class="fas fa-store"></i>
                <span>Conocer productos</span>
            </a>
        </div>
    </div>
</section>

<!-- Script para el carrusel -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carrusel = document.getElementById('carrusel-paises');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const indicatorsContainer = document.getElementById('indicadores');
    const items = document.querySelectorAll('.Pais');
    
    let currentIndex = 0;
    let itemsPerPage = getItemsPerPage();
    
    function getItemsPerPage() {
        const width = window.innerWidth;
        if (width < 640) return 1;
        if (width < 768) return 2;
        if (width < 1024) return 3;
        if (width < 1280) return 4;
        return 5;
    }
    
    function updateCarrusel() {
        const itemWidth = items[0]?.offsetWidth + 24; // width + gap
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
    
    // Inicializar
    updateIndicators();
    setTimeout(() => {
        updateCarrusel();
    }, 100);
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
    
    .Pais {
        transition: all 0.3s ease;
    }
    
    .Pais:hover {
        transform: translateY(-5px);
    }
</style>

<?php include 'includes/footer.php'; ?>