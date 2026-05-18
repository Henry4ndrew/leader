<?php 
session_start();
include 'includes/header.php';

// Obtener la serie de la URL (para persistencia al recargar)
$serieInicial = $_GET['serie'] ?? 'bebidas';
?>

<div class="container mx-auto px-4 py-8">
    <!-- Título decorativo -->
    <div class="text-center mb-8">
        <div class="flex items-center justify-center gap-2 text-azul-oscuro">
            <i class="fas fa-store text-[1.8rem]"></i>
            <h1 class="text-2xl md:text-3xl font-bold">
                Tienda virtual
            </h1>
        </div>

        <div class="w-20 h-1 bg-gradient-to-r from-cian to-indigo mx-auto mt-3 rounded-full"></div>
    </div>
    
    <!-- Botones de series con paleta de colores -->
    <div class="flex flex-wrap justify-center gap-3 mb-8">
        <button class="btn-serie bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md" data-serie="bebidas">
            <i class="fas fa-glass-water mr-2"></i> Bebidas
        </button>

        <button class="btn-serie bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md" data-serie="te">
            <i class="fas fa-mug-hot mr-2"></i> Té
        </button>

        <button class="btn-serie bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md" data-serie="varios">
            <i class="fas fa-leaf mr-2"></i> Varios
        </button>

        <button class="btn-serie bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-md" data-serie="ootea">
            <i class="fas fa-seedling mr-2"></i> OoTea
        </button>
    </div>

    <!-- Contenedor donde se mostrarán los productos -->
    <div id="productos-container" class="min-h-[400px]">
        <div class="text-center py-12">
            <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-cian"></div>
            <p class="mt-4 text-texto">Cargando productos...</p>
        </div>
    </div>
</div>

<script>
// Variable global para la serie actual
let serieActual = '<?= $serieInicial ?>';

document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('productos-container');
    const botones = document.querySelectorAll('.btn-serie');
    
    // Función para actualizar la URL sin recargar la página
    function actualizarURL(serie) {
        const url = new URL(window.location.href);
        url.searchParams.set('serie', serie);
        window.history.pushState({}, '', url);
    }
    
    // Función para marcar el botón activo
    function marcarBotonActivo(serie) {
        botones.forEach(btn => {
            const btnSerie = btn.getAttribute('data-serie');
            if (btnSerie === serie) {
                btn.classList.add('ring-2', 'ring-offset-2', 'ring-green-600', 'scale-105');
                btn.classList.remove('hover:scale-105');
            } else {
                btn.classList.remove('ring-2', 'ring-offset-2', 'ring-green-600', 'scale-105');
                btn.classList.add('hover:scale-105');
            }
        });
    }
    
    // Función para agregar producto al carrito
    function agregarAlCarrito(productoData) {
        let carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
        
        // Verificar si el producto ya existe en el carrito
        const existeIndex = carrito.findIndex(item => item.id === productoData.id);
        
        if (existeIndex !== -1) {
            // Incrementar cantidad
            carrito[existeIndex].cantidad += 1;
        } else {
            // Agregar nuevo producto
            productoData.cantidad = 1;
            carrito.push(productoData);
        }
        
        // Guardar en localStorage
        localStorage.setItem('carrito', JSON.stringify(carrito));
        
        // Mostrar notificación
        mostrarNotificacion(`${productoData.nombre} agregado al carrito`, 'success');
        
        // Actualizar contador del carrito si existe
        actualizarContadorCarrito();
    }
    
    // Función para mostrar notificaciones
    function mostrarNotificacion(mensaje, tipo = 'success') {
        const notificacion = document.createElement('div');
        notificacion.className = `fixed top-20 right-4 z-50 px-6 py-3 rounded-lg shadow-lg text-white ${
    tipo === 'success' ? 'bg-gradient-to-r from-green-500 to-emerald-600' : 'bg-red-500'
} transition-all duration-300 flex items-center gap-2 animate-slide-in`;

const icono = tipo === 'success' 
    ? '<i class="fas fa-check-circle"></i>' 
    : '<i class="fas fa-exclamation-circle"></i>';

notificacion.innerHTML = `${icono} <span>${mensaje}</span>`;
        document.body.appendChild(notificacion);
        
        setTimeout(() => {
            notificacion.style.opacity = '0';
            notificacion.style.transform = 'translateX(100px)';
            setTimeout(() => notificacion.remove(), 300);
        }, 3000);
    }
    
    // Función para actualizar el contador del carrito
    function actualizarContadorCarrito() {
        const carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
        const totalItems = carrito.reduce((sum, item) => sum + item.cantidad, 0);
        
        // Buscar o crear elemento de contador
        let contador = document.getElementById('cart-counter');
        if (!contador && totalItems > 0) {
            const cartIcon = document.querySelector('a[href*="carrito"]');
            if (cartIcon) {
                contador = document.createElement('span');
                contador.id = 'cart-counter';
                contador.className = 'absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5';
                cartIcon.style.position = 'relative';
                cartIcon.appendChild(contador);
            }
        }
        
        if (contador) {
            if (totalItems > 0) {
                contador.textContent = totalItems;
                contador.style.display = '';
            } else {
                contador.style.display = 'none';
            }
        }
    }
    
    // Función para cargar productos de una serie
    function cargarProductos(serie, nombreSerie, guardarHistorial = true) {
        // Actualizar variable global
        serieActual = serie;
        
        // Marcar el botón activo
        marcarBotonActivo(serie);
        
        // Actualizar URL si es necesario
        if (guardarHistorial) {
            actualizarURL(serie);
        }
        
        // Mostrar loading
        container.innerHTML = `
            <div class="text-center text-gray-500 py-12">
                <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-green-600"></div>
                <p class="mt-4">Cargando productos de ${nombreSerie}...</p>
            </div>
        `;
        
        // Usar la URL amigable sin .php
        const url = `productos/${encodeURIComponent(serie)}?ajax=1`;
        // console.log('Cargando URL:', url);
        
        fetch(url)
            .then(response => {
                // console.log('Response status:', response.status);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.text();
            })
            .then(html => {
                // console.log('HTML recibido, longitud:', html.length);
                
                // Extraer solo el contenido de productos del HTML recibido
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const productosContent = doc.querySelector('.p-6');
                
                if (productosContent) {
                    // Añadir animación de fade in
                    container.style.opacity = '0';
                    container.innerHTML = productosContent.innerHTML;
                    container.style.transition = 'opacity 0.3s ease';
                    
                    // Agregar event listeners a los botones de agregar al carrito
                    const addToCartButtons = container.querySelectorAll('.btn-add-to-cart');
                    addToCartButtons.forEach(button => {
                        button.addEventListener('click', function() {
                            const productoData = JSON.parse(this.getAttribute('data-producto'));
                            agregarAlCarrito(productoData);
                        });
                    });
                    
                    setTimeout(() => {
                        container.style.opacity = '1';
                    }, 50);
                } else {
                    console.error('No se encontró .p-6 en la respuesta');
                    container.innerHTML = `
                        <div class="text-center text-red-500 py-12">
                            <svg class="mx-auto h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="mt-2">Error: No se pudo cargar los productos</p>
                            <p class="text-sm mt-2">Por favor, revisa la consola para más detalles</p>
                        </div>
                    `;
                }
            })
            .catch(error => {
                console.error('Error detallado:', error);
                container.innerHTML = `
                    <div class="text-center text-red-500 py-12">
                        <svg class="mx-auto h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <p class="mt-2">Error de conexión: ${error.message}</p>
                        <p class="text-sm mt-2">Verifica que la URL sea correcta</p>
                    </div>
                `;
            });
    }
    
    // Función para obtener el nombre de la serie (para mostrar en loading)
    function getNombreSerie(serie) {
        const nombres = {
            'bebidas': '🥤 Bebidas',
            'te': '🍵 Té',
            'varios': '🌿 Varios',
            'ootea': '🍃 OoTea'
        };
        return nombres[serie] || serie;
    }
    
    // Agregar evento click a cada botón
    botones.forEach(boton => {
        boton.addEventListener('click', function() {
            const serie = this.getAttribute('data-serie');
            const nombreSerie = this.textContent.trim();
            
            // console.log(`Botón clickeado: ${nombreSerie} (${serie})`);
            
            // Cargar productos (guardar en historial)
            cargarProductos(serie, nombreSerie, true);
        });
    });
    
    // Cargar la serie inicial (bebidas por defecto o la de la URL)
    const serieInicial = '<?= $serieInicial ?>';
    const nombreSerieInicial = getNombreSerie(serieInicial);
    // console.log(`Cargando serie inicial: ${serieInicial}`);
    
    // Cargar productos iniciales (sin guardar en historial para no duplicar)
    cargarProductos(serieInicial, nombreSerieInicial, false);
    
    // Manejar botones de atrás/adelante del navegador
    window.addEventListener('popstate', function(event) {
        const urlParams = new URLSearchParams(window.location.search);
        const serie = urlParams.get('serie') || 'bebidas';
        const nombreSerie = getNombreSerie(serie);
        
        if (serie !== serieActual) {
            cargarProductos(serie, nombreSerie, false);
        }
    });
    
    // Inicializar contador del carrito
    actualizarContadorCarrito();
});
</script>

<style>
/* Animación para el spinner */
@keyframes spin {
    to { transform: rotate(360deg); }
}
.animate-spin {
    animation: spin 1s linear infinite;
}

/* Transiciones suaves */
.transition {
    transition: all 0.3s ease;
}

/* Estilo para el botón activo */
.ring-2 {
    box-shadow: 0 0 0 2px rgb(34 197 94);
}
.ring-offset-2 {
    box-shadow: 0 0 0 4px white, 0 0 0 6px rgb(34 197 94);
}

/* Estilo para tarjetas de producto */
.producto-card {
    transform: translateY(0);
    transition: all 0.3s ease;
}
.producto-card:hover {
    transform: translateY(-5px);
}

/* Animación para el botón de agregar al carrito */
.btn-add-to-cart {
    position: relative;
    overflow: hidden;
}
.btn-add-to-cart:active {
    transform: scale(0.95);
}
</style>

<?php include 'includes/footer.php'; ?>