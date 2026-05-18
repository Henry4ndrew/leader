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

<footer class="bg-gradient-to-r from-azul-oscuro via-indigo to-cian text-white mt-0">
    <div class="container mx-auto px-4 py-8">
        <!-- Contenido principal del footer - 2 columnas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            
            <!-- Columna 1: Logo y marca -->
            <div class="text-center md:text-left">
                <div class="flex flex-col items-center md:items-start gap-4">
                    <!-- Logo y nombre -->
                    <a href="<?= BASE_URL ?>/" class="flex items-center justify-center md:justify-start gap-3 hover:opacity-90 transition-opacity efect2">
                        <img src="<?= BASE_URL ?>/assets/img/logoDXN.avif" 
                             alt="Logo Leader DXN" 
                             class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 object-contain rounded-lg bg-white/10 backdrop-blur-sm p-1.5">
                        <div>
                            <h1 class="text-base sm:text-lg md:text-xl font-bold tracking-tight whitespace-nowrap">
                                Leader DXN
                            </h1>
                            <p class="text-sm text-cyan-200 hidden sm:block">
                                Formando profesionales
                            </p>
                        </div>
                    </a>
                    
                    <!-- Descripción -->
                    <p class="text-base text-cyan-100 max-w-sm mx-auto md:mx-0 efect2">
                        Productos naturales con Ganoderma, calidad y confianza para tu bienestar.
                    </p>
                </div>
            </div>
            
            <!-- Columna 2: Redes Sociales y contacto -->
            <div class="text-center md:text-right">
                <div class="flex flex-col items-center md:items-end gap-4">
                    <!-- Título Redes Sociales -->
                    <div class="flex items-center justify-center md:justify-end gap-2 efect2">
                        <i class="fas fa-share-alt text-2xl text-cyan-200"></i>
                        <h3 class="text-xl font-bold">Síguenos</h3>
                    </div>
                    
                    <!-- Iconos Redes Sociales -->
                    <div class="flex justify-center md:justify-end gap-4">
                        <a href="<?= FACEBOOK_URL ?>" target="_blank" 
                        class="bg-white/10 hover:bg-white w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 group efect3">
                            <i class="fab fa-facebook-f text-xl text-white group-hover:text-azul-oscuro transition-colors"></i>
                        </a>

                        <a href="<?= INSTAGRAM_URL ?>" target="_blank" 
                        class="bg-white/10 hover:bg-white w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 group efect3">
                            <i class="fab fa-instagram text-xl text-white group-hover:text-azul-oscuro transition-colors"></i>
                        </a>

                        <a href="<?= TIKTOK_URL ?>" target="_blank" 
                        class="bg-white/10 hover:bg-white w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 group efect3">
                            <i class="fab fa-tiktok text-xl text-white group-hover:text-azul-oscuro transition-colors"></i>
                        </a>

                        <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" 
                        class="bg-white/10 hover:bg-white w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 group efect3">
                            <i class="fab fa-whatsapp text-xl text-white group-hover:text-azul-oscuro transition-colors"></i>
                        </a>
                    </div>
                    
                    <!-- Contacto WhatsApp y Email -->
                    <div class="flex flex-col items-center md:items-end gap-2 efect2">
                        <div class="flex items-center gap-2">
                            <i class="fab fa-whatsapp text-cyan-200 text-sm"></i>
                            <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" class="text-sm hover:text-cyan-200 transition">
                                +<?= WHATSAPP_NUMBER ?>
                            </a>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-envelope text-cyan-200 text-sm"></i>
                            <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-sm hover:text-cyan-200 transition">
                                <?= CONTACT_EMAIL ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Línea divisoria -->
        <div class="border-t border-white/20 pt-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-cyan-100">
                    &copy; <?= date('Y') ?> Leader DXN. Todos los derechos reservados.
                </p>
                <div class="flex gap-4 text-xs text-cyan-200">
                    <a href="#" class="hover:text-white transition">Términos y condiciones</a>
                    <span>|</span>
                    <a href="#" class="hover:text-white transition">Política de privacidad</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>