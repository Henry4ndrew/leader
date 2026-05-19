<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead DXN</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles3.css">
    
    <!-- Personalizar la paleta de colores de Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'azul-oscuro': '#1E3A8A',
                        'indigo': '#4338CA',
                        'cian': '#06B6D4',
                        'texto': '#374151',
                        'seccion-suave': '#E5E7EB',
                    }
                }
            }
        }
    </script>

</head>
<body class="bg-gray-50">







<header class="bg-degradado-profesional text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-3 md:px-3 lg:px-4 py-3 md:py-3">
        <div class="flex justify-between items-center gap-1 md:gap-2 lg:gap-3">
            
            <!-- Logo y nombre -->
            <a href="<?= BASE_URL ?>/" class="flex items-center gap-2 hover:opacity-90 transition-opacity flex-shrink-0">
                <img src="<?= BASE_URL ?>/assets/img/logoDXN.avif" 
                    alt="Logo Lead DXN" 
                    class="w-10 h-10 object-contain rounded-lg bg-white/10 backdrop-blur-sm p-1">
                <div>
                    <h1 class="text-lg font-bold tracking-tight whitespace-nowrap">Lead DXN</h1>
                </div>
            </a>
            
            <!-- Menú desktop -->
            <nav class="hidden md:flex gap-1 lg:gap-2 xl:gap-4 mx-0">
                <a href="<?= BASE_URL ?>/mi-empresa.php" class="nav-link font-medium whitespace-nowrap text-xs md:text-sm lg:text-base">
                    <i class="fas fa-building"></i>
                    <span>Mi Empresa</span>
                </a>
                <a href="<?= BASE_URL ?>/oportunidad.php" class="nav-link font-medium whitespace-nowrap text-xs md:text-sm lg:text-base">
                    <i class="fas fa-rocket"></i>
                    <span>Oportunidad</span>
                </a>
                <a href="<?= BASE_URL ?>/plan-marketing.php" class="nav-link font-medium whitespace-nowrap text-xs md:text-sm lg:text-base">
                    <i class="fas fa-chart-simple"></i>
                    <span>Plan de marketing</span>
                </a>
                <a href="<?= BASE_URL ?>/salud.php" class="nav-link font-medium whitespace-nowrap text-xs md:text-sm lg:text-base">
                    <i class="fas fa-heartbeat"></i>
                    <span>Salud</span>
                </a>
                <a href="<?= BASE_URL ?>/tienda-virtual.php" class="nav-link font-medium whitespace-nowrap text-xs md:text-sm lg:text-base">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Tienda virtual</span>
                </a>
            </nav>
            
            <!-- Botones de acción desktop -->
            <div class="hidden md:flex items-center gap-1 lg:gap-2">
                <a href="https://eworld.dxn2u.com/index.php?r=account/register&mc=<?= DXN_CODE ?>&dlang=es-ES&fbclid=IwAR3tyZHQnhXZG7hYu8xUF8QNJ-dKvPMtkvLrjFv23l3kuQJ_6KP-gjW7GKA"
                target="_blank"
                class="bg-white/10 hover:bg-white/20 px-2 lg:px-3 py-1.5 md:py-1.5 rounded-lg transition-all duration-300 flex items-center gap-1 whitespace-nowrap text-xs md:text-sm">
                    <i class="fas fa-user-plus text-xs"></i>
                    <span class="hidden lg:inline">Unirme</span>
                </a>
            </div>
            
            <!-- Iconos de acción móvil + carrito + menú -->
            <div class="flex items-center gap-3">
                <!-- Carrito de compras - más grande -->
                <a href="<?= BASE_URL ?>/carrito" class="relative text-white transition block">
                    <i class="fas fa-shopping-cart text-2xl animate-cart-glow"></i>
                    
                    <span id="cart-counter"
                        class="hidden absolute -top-2 -right-3 bg-red-500 text-white text-xs 
                                rounded-full px-1.5 py-0.5 min-w-[20px] text-center">
                        0
                    </span>
                </a>
                <!-- Botón menú móvil - más grande -->
                <button id="menuBtn" class="md:hidden text-white focus:outline-none p-1">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Menú móvil - más padding y mejor espaciado -->
        <div class="md:hidden mobile-menu-container" id="mobileMenu">
            <div class="mt-3 pt-3 border-t border-white/20">
                <nav class="flex flex-col gap-2">
                    <a href="<?= BASE_URL ?>/mi-empresa.php" class="mobile-nav-link nav-link py-3 px-3 hover:bg-white/10 rounded-lg flex items-center gap-3 transition-all text-base">
                        <i class="fas fa-building w-5"></i>
                        <span>Mi Empresa</span>
                    </a>
                    <a href="<?= BASE_URL ?>/oportunidad.php" class="mobile-nav-link nav-link py-3 px-3 hover:bg-white/10 rounded-lg flex items-center gap-3 transition-all text-base">
                        <i class="fas fa-rocket w-5"></i>
                        <span>Oportunidad</span>
                    </a>
                    <a href="<?= BASE_URL ?>/plan-marketing.php" class="mobile-nav-link nav-link py-3 px-3 hover:bg-white/10 rounded-lg flex items-center gap-3 transition-all text-base">
                        <i class="fas fa-chart-simple w-5"></i>
                        <span>Plan de marketing</span>
                    </a>
                    <a href="<?= BASE_URL ?>/salud.php" class="mobile-nav-link nav-link py-3 px-3 hover:bg-white/10 rounded-lg flex items-center gap-3 transition-all text-base">
                        <i class="fas fa-heartbeat w-5"></i>
                        <span>Salud</span>
                    </a>
                    <a href="<?= BASE_URL ?>/tienda-virtual.php" class="mobile-nav-link nav-link py-3 px-3 hover:bg-white/10 rounded-lg flex items-center gap-3 transition-all text-base">
                         <i class="fas fa-shopping-cart w-5"></i>
                         <span>Tienda virtual</span>
                    </a>
                    <div class="flex gap-2 mt-3 pt-3 border-t border-white/20">
                        <a href="https://eworld.dxn2u.com/index.php?r=account/register&mc=<?= DXN_CODE ?>&dlang=es-ES&fbclid=IwAR3tyZHQnhXZG7hYu8xUF8QNJ-dKvPMtkvLrjFv23l3kuQJ_6KP-gjW7GKA"
                        target="_blank"
                        class="bg-white/10 hover:bg-white/20 px-4 py-3 rounded-lg transition-all duration-300 flex items-center gap-2 whitespace-nowrap text-sm w-full justify-center">
                            <i class="fas fa-user-plus"></i>
                            <span>Unirme al proyecto</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


<a href="https://wa.me/<?= WHATSAPP_NUMBER ?>" target="_blank"
   class="fixed bottom-5 right-5 z-50 bg-green-500 hover:bg-green-600 text-white 
          w-14 h-14 rounded-full flex items-center justify-center 
          shadow-lg hover:scale-110 transition-all duration-300">

    <i class="fab fa-whatsapp text-2xl"></i>
</a>

<!-- JavaScript -->
<script src="<?= BASE_URL ?>/assets/js/app6.js"></script>