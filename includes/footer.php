<footer class="bg-gradient-to-r from-azul-oscuro via-indigo to-cian text-white mt-16">
    <div class="container mx-auto px-4 py-8">
        <!-- Contenido principal del footer - 2 columnas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            
            <!-- Columna 1: Logo y marca -->
            <div class="text-center md:text-left">
                <div class="flex flex-col items-center md:items-start gap-4">
                    <!-- Logo y nombre -->
                    <a href="<?= BASE_URL ?>/" class="flex items-center justify-center md:justify-start gap-3 hover:opacity-90 transition-opacity">
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
                    
                    <!-- Botón Unirme a DXN -->
                    <a href="https://eworld.dxn2u.com/index.php?r=account/register&mc=<?= DXN_CODE ?>&dlang=es-ES"
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg transition-all duration-300 text-sm">
                        <i class="fas fa-user-plus text-xs"></i>
                        <span>Unirme a DXN</span>
                    </a>
                    
                    <!-- Descripción -->
                    <p class="text-base text-cyan-100 max-w-sm mx-auto md:mx-0">
                        Productos naturales con Ganoderma, calidad y confianza para tu bienestar.
                    </p>
                </div>
            </div>
            
            <!-- Columna 2: Redes Sociales y contacto -->
            <div class="text-center md:text-right">
                <div class="flex flex-col items-center md:items-end gap-4">
                    <!-- Título Redes Sociales -->
                    <div class="flex items-center justify-center md:justify-end gap-2">
                        <i class="fas fa-share-alt text-2xl text-cyan-200"></i>
                        <h3 class="text-xl font-bold">Síguenos</h3>
                    </div>
                    
                    <!-- Iconos Redes Sociales -->
                    <div class="flex justify-center md:justify-end gap-4">
                        <a href="<?= FACEBOOK_URL ?>" target="_blank" 
                           class="bg-white/10 hover:bg-white/20 w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="<?= INSTAGRAM_URL ?>" target="_blank" 
                           class="bg-white/10 hover:bg-white/20 w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="<?= TIKTOK_URL ?>" target="_blank" 
                           class="bg-white/10 hover:bg-white/20 w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <i class="fab fa-tiktok text-xl"></i>
                        </a>
                        <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank" 
                           class="bg-white/10 hover:bg-white/20 w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                    </div>
                    
                    <!-- Contacto WhatsApp y Email -->
                    <div class="flex flex-col items-center md:items-end gap-2">
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