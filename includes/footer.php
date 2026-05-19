<?php
// Determinar qué versión mostrar
$cta_version = getCTAVersion();
?>

<?php if ($cta_version === 'salud'): ?>
    <!-- SECCIÓN DE AFILIACIÓN - Versión SALUD (para /salud y /tienda-virtual) -->
    <section class="pt-16 pb-8 bg-gradient-to-br from-white via-seccion-suave to-white mt-8 efect1">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-4xl mx-auto">
                <i class="fas fa-quote-left text-4xl text-azul-oscuro/30 mb-4"></i>
                <h3 class="text-xl md:text-2xl text-gray-700 leading-relaxed mb-8">
                    Cuidar nuestra salud sin la necesidad de estar enferma(o) es tan esencial como respirar, 
                    después de todo solo tenemos un lugar para vivir: <strong class="text-azul-oscuro">NUESTRO CUERPO</strong>.
                </h3>
                
                <div class="bg-gradient-to-r from-azul-oscuro/5 via-indigo/5 to-cian/5 rounded-2xl p-6 mb-8 efect1">
                    <h3 class="text-2xl font-bold text-azul-oscuro mb-4">Beneficios de adquirir un código DXN:</h3>
                    <div class="grid md:grid-cols-2 gap-3 text-left">
                        <div class="flex items-center gap-2 text-gray-700">
                            <i class="fas fa-check-circle text-cian"></i>
                            <span>Acceso a Productos Exclusivos con descuentos</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-700">
                            <i class="fas fa-check-circle text-cian"></i>
                            <span>Oportunidad de Ingresos por referidos</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-700">
                            <i class="fas fa-check-circle text-cian"></i>
                            <span>Creación de Red de Distribuidores</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-700">
                            <i class="fas fa-check-circle text-cian"></i>
                            <span>Formación y Apoyo de la comunidad DXN</span>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://eworld.dxn2u.com/index.php?r=account/register&mc=<?= DXN_CODE ?>&dlang=es-ES" 
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro to-indigo text-white px-6 py-3 rounded-lg font-semibold hover:shadow-xl transition-all duration-300 efect3">
                        <i class="fas fa-user-plus"></i>
                        <span>Afiliación gratuita</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="<?= BASE_URL ?>/tienda-virtual" 
                       class="inline-flex items-center gap-2 border-2 border-azul-oscuro text-azul-oscuro hover:bg-azul-oscuro hover:text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 efect3">
                        <i class="fas fa-store"></i>
                        <span>Ver más productos</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php else: ?>
    <!-- SECCIÓN DE AFILIACIÓN - Versión GENERAL (para el resto de páginas) -->
    <section class="py-16 bg-gradient-to-br from-white via-seccion-suave to-white mt-8 efect1">
        <div class="container mx-auto px-4 text-center">
            <!-- Elemento decorativo sutil -->
            <div class="relative mb-8">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-24 h-24 bg-azul-oscuro/5 rounded-full blur-2xl"></div>
                </div>
                <div class="relative">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-azul-oscuro to-indigo rounded-2xl shadow-lg mb-4 transform rotate-3 efect1">
                        <i class="fas fa-handshake text-4xl text-white"></i>
                    </div>
                </div>
            </div>
            
            <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-gradient-to-r from-azul-oscuro via-indigo to-cian bg-clip-text text-transparent efect1">
                ¿Quieres ser parte de DXN?
            </h2>
            
            <p class="text-texto text-lg mb-8 max-w-2xl mx-auto efect1">
                Únete a nuestra familia de distribuidores y comienza tu camino hacia el éxito
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://eworld.dxn2u.com/index.php?r=account/register&mc=<?= DXN_CODE ?>&dlang=es-ES" 
                   target="_blank"
                   class="group inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro to-indigo text-white px-8 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 efect3">
                    <i class="fas fa-user-plus group-hover:animate-pulse"></i>
                    <span>Afiliarme ahora</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
                
                <a href="<?= BASE_URL ?>/tienda-virtual" 
                   class="group inline-flex items-center gap-2 border-2 border-azul-oscuro/20 bg-white text-azul-oscuro hover:bg-gradient-to-r hover:from-azul-oscuro hover:to-indigo hover:text-white hover:border-transparent px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-md hover:shadow-xl efect3">
                    <i class="fas fa-store"></i>
                    <span>Conocer productos</span>
                    <i class="fas fa-arrow-right opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300"></i>
                </a>
            </div>
            
            <div class="flex flex-wrap justify-center gap-3 mt-10">
                <span class="inline-flex items-center gap-2 px-3 py-1 bg-azul-oscuro/10 rounded-full text-sm text-azul-oscuro">
                    <i class="fas fa-check-circle text-cian text-xs"></i>
                    Sin inversión inicial
                </span>
                <span class="inline-flex items-center gap-2 px-3 py-1 bg-azul-oscuro/10 rounded-full text-sm text-azul-oscuro">
                    <i class="fas fa-check-circle text-cian text-xs"></i>
                    Capacitación incluida
                </span>
                <span class="inline-flex items-center gap-2 px-3 py-1 bg-azul-oscuro/10 rounded-full text-sm text-azul-oscuro">
                    <i class="fas fa-check-circle text-cian text-xs"></i>
                    Comisiones atractivas
                </span>
            </div>
        </div>
    </section>
<?php endif; ?>

<footer class="bg-gradient-to-r from-azul-oscuro via-indigo to-cian text-white mt-0 overflow-hidden">
   <div class="container mx-auto px-4 pt-12 pb-6 md:pt-12 md:pb-6">
        <!-- Contenido principal del footer - 3 columnas en desktop para mejor organización -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">
            
            <!-- Columna 1: Logo y marca (más completa) -->
            <div class="text-center md:text-left">
                <div class="flex flex-col items-center md:items-start gap-4">
                    <!-- Logo y nombre -->
                    <a href="<?= BASE_URL ?>/" class="flex items-center gap-3 hover:opacity-90 transition-all duration-300 group flex-shrink-0">
                        <img src="<?= BASE_URL ?>/assets/img/logoDXN.avif" 
                            alt="Logo Lead DXN" 
                            class="w-12 h-12 object-contain rounded-xl bg-white/10 backdrop-blur-sm p-1.5 group-hover:scale-105 transition-transform duration-300">
                        <div>
                            <h1 class="text-xl font-bold tracking-tight bg-gradient-to-r from-white to-cyan-200 bg-clip-text text-transparent">Lead DXN</h1>
                            <p class="text-xs text-cyan-200/70">Networking & Desarrollo</p>
                        </div>
                    </a>
                    
                    <!-- Descripción más detallada -->
                    <p class="text-sm text-cyan-100 leading-relaxed max-w-sm mx-auto md:mx-0">
                        Formando profesionales en Network marketing con más de 5 años de experiencia. 
                        <span class="block mt-2 text-cyan-200/80">¡Tu éxito es nuestra meta!</span>
                    </p>

                    <!-- Badge de confianza -->
                    <div class="flex items-center gap-2 bg-white/5 rounded-full px-3 py-1.5 backdrop-blur-sm">
                        <i class="fas fa-shield-alt text-cyan-200 text-xs"></i>
                        <span class="text-xs text-cyan-100">Certificado en Marketing Digital</span>
                    </div>
                </div>
            </div>
            
            <!-- Columna 2: Enlaces rápidos (NUEVA COLUMNA MEJORADA) -->
            <div class="text-center md:text-left">
                <div class="flex flex-col items-center md:items-start gap-4">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-link text-cyan-200 text-lg"></i>
                        <h3 class="text-lg font-bold uppercase tracking-wide">Enlaces rápidos</h3>
                    </div>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="<?= BASE_URL ?>/" class="text-cyan-100 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASE_URL ?>/tienda-virtual" class="text-cyan-100 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                Tienda Virtual
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASE_URL ?>/productos" class="text-cyan-100 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                Productos DXN
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASE_URL ?>/oportunidad-negocio" class="text-cyan-100 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                                <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                                Oportunidad de Negocio
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Columna 3: Redes Sociales y contacto (mejorada) -->
            <div class="text-center md:text-right">
                <div class="flex flex-col items-center md:items-end gap-4">
                    <!-- Título Redes Sociales -->
                    <div class="flex items-center justify-center md:justify-end gap-2">
                        <div class="w-8 h-px bg-gradient-to-l from-cyan-200/50 to-transparent hidden md:block"></div>
                        <i class="fas fa-share-alt text-2xl text-cyan-200 animate-pulse"></i>
                        <h3 class="text-lg font-bold uppercase tracking-wide">Síguenos</h3>
                    </div>
                    
                    <!-- Iconos Redes Sociales (más grandes y con tooltips) -->
                    <div class="flex justify-center md:justify-end gap-3">
                        <a href="<?= FACEBOOK_URL ?>" target="_blank" 
                           class="bg-white/10 hover:bg-white w-11 h-11 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 hover:rotate-6 group relative"
                           title="Síguenos en Facebook">
                            <i class="fab fa-facebook-f text-xl text-white group-hover:text-azul-oscuro transition-colors"></i>
                        </a>

                        <a href="<?= INSTAGRAM_URL ?>" target="_blank" 
                           class="bg-white/10 hover:bg-white w-11 h-11 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 hover:rotate-6 group relative"
                           title="Síguenos en Instagram">
                            <i class="fab fa-instagram text-xl text-white group-hover:text-azul-oscuro transition-colors"></i>
                        </a>

                        <a href="<?= TIKTOK_URL ?>" target="_blank" 
                           class="bg-white/10 hover:bg-white w-11 h-11 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 hover:rotate-6 group relative"
                           title="Síguenos en TikTok">
                            <i class="fab fa-tiktok text-xl text-white group-hover:text-azul-oscuro transition-colors"></i>
                        </a>

                        <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" 
                           class="bg-white/10 hover:bg-white w-11 h-11 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 hover:rotate-6 group relative"
                           title="Contáctanos por WhatsApp">
                            <i class="fab fa-whatsapp text-xl text-white group-hover:text-azul-oscuro transition-colors"></i>
                        </a>
                    </div>
                    
                    <!-- Contacto WhatsApp y Email (mejorado) -->
                    <div class="space-y-2 w-full">
                        <div class="flex items-center justify-center md:justify-end gap-3 bg-white/5 rounded-lg p-2 transition-all hover:bg-white/10">
                            <div class="w-8 h-8 bg-green-500/20 rounded-full flex items-center justify-center">
                                <i class="fab fa-whatsapp text-cyan-200 text-sm"></i>
                            </div>
                            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" class="text-sm hover:text-cyan-200 transition font-medium">
                                +<?= WHATSAPP_NUMBER ?>
                            </a>
                        </div>
                        <div class="flex items-center justify-center md:justify-end gap-3 bg-white/5 rounded-lg p-2 transition-all hover:bg-white/10">
                            <div class="w-8 h-8 bg-cyan-500/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-envelope text-cyan-200 text-sm"></i>
                            </div>
                            <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-sm hover:text-cyan-200 transition font-medium">
                                <?= CONTACT_EMAIL ?>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <!-- Línea divisoria decorativa -->
        <div class="relative">
            <div class="border-t border-white/20"></div>
            <div class="absolute -top-1 left-1/2 transform -translate-x-1/2 w-20 h-0.5 bg-gradient-to-r from-transparent via-cyan-200 to-transparent"></div>
        </div>
        
        <!-- Copyright (mejorado con más información) -->
        <div class="pt-6 text-center">
            <div class="flex flex-col md:flex-row justify-center items-center gap-2 md:gap-4 text-xs text-cyan-100">
                <a href="#" class="hover:text-white transition-colors flex items-center gap-1">
                    <i class="fas fa-file-contract text-cyan-200 text-xs"></i>
                    Términos y condiciones
                </a>
                <span class="hidden md:inline text-cyan-200/50">•</span>
                <a href="#" class="hover:text-white transition-colors flex items-center gap-1">
                    <i class="fas fa-lock text-cyan-200 text-xs"></i>
                    Política de privacidad
                </a>
                <span class="hidden md:inline text-cyan-200/50">•</span>
                <a href="#" class="hover:text-white transition-colors flex items-center gap-1">
                    <i class="fas fa-cookie-bite text-cyan-200 text-xs"></i>
                    Política de cookies
                </a>
            </div>
            
            <div class="mt-0">
                <a href="https://b1tsoft.kesug.com" target="_blank" 
                   class="text-xs text-cyan-100 hover:text-white transition-colors inline-flex items-center gap-1 group">
                    <span>&copy; <?= date('Y') ?> Henry4ndrew | B1tsoft - Lead DXN</span>
                    <i class="fas fa-external-link-alt text-cyan-200/50 group-hover:text-cyan-200 transition-colors text-xs"></i>
                </a>
                <p class="text-xs text-cyan-200/60 mt-1">Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>