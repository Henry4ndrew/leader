<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leader DXN</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/styles.css">
    
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
    <div class="container mx-auto px-2 sm:px-3 md:px-3 lg:px-4 py-2 md:py-3">
        <div class="flex justify-between items-center gap-1 md:gap-2 lg:gap-3">
            
            <!-- Logo y nombre con imagen - padding reducido -->
            <a href="<?= BASE_URL ?>/" class="flex items-center gap-1 md:gap-2 hover:opacity-90 transition-opacity flex-shrink-0">
                <img src="<?= BASE_URL ?>/assets/img/logoDXN.avif" 
                     alt="Logo Leader DXN" 
                     class="logo-img w-7 h-7 sm:w-8 sm:h-8 md:w-9 md:h-9 lg:w-10 lg:h-10 object-contain rounded-lg bg-white/10 backdrop-blur-sm p-0.5">
                <div>
                    <h1 class="text-xs sm:text-sm md:text-sm lg:text-lg font-bold tracking-tight whitespace-nowrap">Leader DXN</h1>
                    <p class="text-xs text-cyan-200 hidden lg:block">Formando profesionales</p>
                </div>
            </a>
            
            <!-- Menú desktop - padding reducido en enlaces -->
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
            
            <!-- Botones de acción - padding reducido -->
            <div class="hidden md:flex items-center gap-1 lg:gap-2">
                <button class="bg-white/10 hover:bg-white/20 px-2 lg:px-3 py-1 md:py-1.5 rounded-lg transition-all duration-300 flex items-center gap-1 whitespace-nowrap text-xs md:text-sm">
                    <i class="fas fa-user-plus text-xs"></i>
                    <span class="hidden lg:inline">Unirme</span>
                </button>
                <button class="bg-cyan-500 hover:bg-cyan-600 px-2 lg:px-3 py-1 md:py-1.5 rounded-lg transition-all duration-300 flex items-center gap-1 shadow-lg whitespace-nowrap text-xs md:text-sm">
                    <i class="fas fa-phone-alt text-xs"></i>
                    <span class="hidden lg:inline">Contacto</span>
                </button>
            </div>
            
            



            <div class="flex items-center space-x-4">
                <!-- Carrito de compras -->
                <a href="<?= BASE_URL ?>/carrito" class="relative text-gray-700 hover:text-green-600 transition">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span id="cart-counter" class="hidden absolute -top-2 -right-3 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5 min-w-[18px] text-center">
                        0
                    </span>
                </a>

                <!-- Botón menú móvil -->
                <button id="menuBtn" class="md:hidden text-gray-700 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>



        </div>
        
        <!-- Menú móvil -->
        <div class="md:hidden mobile-menu-container" id="mobileMenu">
            <div class="mt-2 pt-2 border-t border-white/20">
                <nav class="flex flex-col gap-1">
                    <a href="<?= BASE_URL ?>/" class="mobile-nav-link nav-link py-2 px-2 hover:bg-white/10 rounded-lg flex items-center gap-2 transition-all text-sm">
                        <i class="fas fa-home w-4"></i>
                        <span>Inicio</span>
                    </a>
                    <a href="<?= BASE_URL ?>/mi_empresa.php" class="mobile-nav-link nav-link py-2 px-2 hover:bg-white/10 rounded-lg flex items-center gap-2 transition-all text-sm">
                        <i class="fas fa-building w-4"></i>
                        <span>Mi Empresa</span>
                    </a>
                    <a href="<?= BASE_URL ?>/oportunidad.php" class="mobile-nav-link nav-link py-2 px-2 hover:bg-white/10 rounded-lg flex items-center gap-2 transition-all text-sm">
                        <i class="fas fa-rocket w-4"></i>
                        <span>Oportunidad</span>
                    </a>
                    <a href="<?= BASE_URL ?>/plan_marketing.php" class="mobile-nav-link nav-link py-2 px-2 hover:bg-white/10 rounded-lg flex items-center gap-2 transition-all text-sm">
                        <i class="fas fa-chart-simple w-4"></i>
                        <span>Plan</span>
                    </a>
                    <a href="<?= BASE_URL ?>/salud.php" class="mobile-nav-link nav-link py-2 px-2 hover:bg-white/10 rounded-lg flex items-center gap-2 transition-all text-sm">
                        <i class="fas fa-heartbeat w-4"></i>
                        <span>Salud</span>
                    </a>
                    <a href="<?= BASE_URL ?>/sobre_mi.php" class="mobile-nav-link nav-link py-2 px-2 hover:bg-white/10 rounded-lg flex items-center gap-2 transition-all text-sm">
                        <i class="fas fa-user w-4"></i>
                        <span>Sobre mí</span>
                    </a>
                    <div class="flex gap-2 mt-2 pt-2 border-t border-white/20">
                        <button class="mobile-nav-link flex-1 bg-white/10 hover:bg-white/20 py-2 rounded-lg flex items-center justify-center gap-2 transition-all text-xs">
                            <i class="fas fa-user-plus"></i>
                            <span>Unirme</span>
                        </button>
                        <button class="mobile-nav-link flex-1 bg-cyan-500 hover:bg-cyan-600 py-2 rounded-lg flex items-center justify-center gap-2 transition-all text-xs">
                            <i class="fas fa-phone-alt"></i>
                            <span>Contacto</span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- JavaScript -->
<script src="<?= BASE_URL ?>/assets/js/app.js"></script>