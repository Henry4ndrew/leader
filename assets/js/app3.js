// Toggle menú móvil con animación mejorada
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const body = document.body;
    
    let isMenuOpen = false;
    
    if (menuBtn && mobileMenu) {
        function toggleMenu() {
            isMenuOpen = !isMenuOpen;
            
            if (isMenuOpen) {
                mobileMenu.classList.add('open');
                const icon = menuBtn.querySelector('i');
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
                body.classList.add('menu-open');
            } else {
                mobileMenu.classList.remove('open');
                const icon = menuBtn.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
                body.classList.remove('menu-open');
            }
        }
        
        menuBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            toggleMenu();
        });
        
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (isMenuOpen) {
                    setTimeout(() => {
                        toggleMenu();
                    }, 100);
                }
            });
        });
        
        document.addEventListener('click', (e) => {
            if (isMenuOpen && !menuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                toggleMenu();
            }
        });
        
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth >= 768 && isMenuOpen) {
                    toggleMenu();
                }
            }, 250);
        });
    }
    

    
    // Detectar si es dispositivo táctil
    const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    
    if (isTouchDevice) {
        // Agregar feedback táctil a los enlaces del menú móvil
        const touchElements = document.querySelectorAll('.mobile-nav-link');
        
        touchElements.forEach(element => {
            element.addEventListener('touchstart', function() {
                this.style.backgroundColor = 'rgba(255, 255, 255, 0.2)';
                this.style.transform = 'translateX(5px)';
            });
            
            element.addEventListener('touchend', function() {
                setTimeout(() => {
                    this.style.backgroundColor = '';
                    this.style.transform = '';
                }, 150);
            });
            
            element.addEventListener('touchcancel', function() {
                this.style.backgroundColor = '';
                this.style.transform = '';
            });
        });
    }
});









// Funciones globales para el carrito
window.agregarAlCarrito = function(productoData) {
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
    
    // Actualizar contador del carrito
    actualizarContadorCarrito();
};

window.mostrarNotificacion = function(mensaje, tipo = 'success') {
    const notificacion = document.createElement('div');
    notificacion.className = `fixed top-20 right-4 z-50 px-6 py-3 rounded-lg shadow-lg text-white ${
        tipo === 'success' ? 'bg-green-500' : 'bg-red-500'
    } transition-opacity duration-300 flex items-center space-x-2`;
    
    const icono = tipo === 'success' ? '<i class="fas fa-check-circle"></i>' : '<i class="fas fa-exclamation-circle"></i>';
    notificacion.innerHTML = `${icono} <span>${mensaje}</span>`;
    
    document.body.appendChild(notificacion);
    
    setTimeout(() => {
        notificacion.style.opacity = '0';
        setTimeout(() => notificacion.remove(), 300);
    }, 3000);
};

window.actualizarContadorCarrito = function() {
    const carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
    const totalItems = carrito.reduce((sum, item) => sum + item.cantidad, 0);
    const contador = document.getElementById('cart-counter');
    
    if (contador) {
        if (totalItems > 0) {
            contador.textContent = totalItems;
            contador.classList.remove('hidden');
        } else {
            contador.classList.add('hidden');
            contador.textContent = '0';
        }
    }
};

// Inicializar contador al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    actualizarContadorCarrito();
});












// ========================================
// EFECTOS DE APARICIÓN MODERNOS (ACTUALIZADO CON EFECTO 3)
// ========================================

// Configuración de efectos
const efectosConfig = {
    efect1: {
        // Efecto fade-in con desplazamiento hacia arriba
        initial: {
            opacity: '0',
            transform: 'translateY(30px)'
        },
        final: {
            opacity: '1',
            transform: 'translateY(0)'
        },
        duration: '0.6s',
        timing: 'cubic-bezier(0.4, 0, 0.2, 1)',
        disappear: false // No desaparece
    },
    efect2: {
        // Efecto fade-in con escala y desplazamiento lateral
        initial: {
            opacity: '0',
            transform: 'scale(0.95) translateX(-20px)'
        },
        final: {
            opacity: '1',
            transform: 'scale(1) translateX(0)'
        },
        duration: '0.5s',
        timing: 'cubic-bezier(0.34, 1.2, 0.64, 1)',
        disappear: false // No desaparece
    },
    efect3: {
        // EFECTO CON ESCALA AL ENFOCAR Y DESENFOCAR
        initial: {
            opacity: '0',
            transform: 'scale(0.7)',
            filter: 'blur(4px)'
        },
        final: {
            opacity: '1',
            transform: 'scale(1)',
            filter: 'blur(0)'
        },
        duration: '0.7s',
        timing: 'cubic-bezier(0.34, 1.2, 0.64, 1)',
        disappear: true, // Permite desaparecer al salir del viewport
        disappearDuration: '0.5s',
        disappearTiming: 'cubic-bezier(0.4, 0, 0.2, 1)',
        disappearTransform: 'scale(0.85)',
        disappearOpacity: '0.5'
    }
};

// Almacenar observers por elemento para control individual
const elementosObservados = new Map();

// Función para aplicar estilos iniciales a los elementos
function aplicarEstilosIniciales(elemento, efecto) {
    const config = efectosConfig[efecto];
    if (!config) return;
    
    elemento.style.opacity = config.initial.opacity;
    elemento.style.transform = config.initial.transform;
    if (config.initial.filter) {
        elemento.style.filter = config.initial.filter;
    }
    elemento.style.transition = `all ${config.duration} ${config.timing}`;
    elemento.style.willChange = 'opacity, transform, filter';
}

// Función para activar la animación de entrada
function activarAnimacionEntrada(elemento, efecto) {
    const config = efectosConfig[efecto];
    if (!config) return;
    
    // Forzar reflow para asegurar que la transición funcione
    void elemento.offsetHeight;
    
    elemento.style.opacity = config.final.opacity;
    elemento.style.transform = config.final.transform;
    if (config.final.filter) {
        elemento.style.filter = config.final.filter;
    }
    
    // Agregar clase para estado visible
    elemento.classList.add('efect-visible');
    elemento.classList.remove('efect-hidden');
}

// Función para activar la animación de salida (solo para efect3)
function activarAnimacionSalida(elemento, efecto) {
    const config = efectosConfig[efecto];
    if (!config || !config.disappear) return;
    
    // Cambiar la transición para la salida
    elemento.style.transition = `all ${config.disappearDuration} ${config.disappearTiming}`;
    
    // Aplicar estilos de desaparición
    elemento.style.opacity = config.disappearOpacity;
    elemento.style.transform = config.disappearTransform;
    if (config.initial.filter) {
        elemento.style.filter = config.initial.filter;
    }
    
    // Agregar clase para estado oculto
    elemento.classList.add('efect-hidden');
    elemento.classList.remove('efect-visible');
}

// Función para crear observer con comportamiento específico por efecto
function crearObserverPersonalizado(umbral = 0.2) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const elemento = entry.target;
            let efecto = null;
            
            if (elemento.classList.contains('efect1')) efecto = 'efect1';
            else if (elemento.classList.contains('efect2')) efecto = 'efect2';
            else if (elemento.classList.contains('efect3')) efecto = 'efect3';
            
            if (!efecto) return;
            
            const config = efectosConfig[efecto];
            
            if (entry.isIntersecting) {
                // Elemento entra en viewport - ANIMACIÓN DE ENTRADA
                activarAnimacionEntrada(elemento, efecto);
            } else if (config.disappear) {
                // Solo efect3 desaparece al salir del viewport
                activarAnimacionSalida(elemento, efecto);
            }
        });
    }, {
        threshold: umbral,
        rootMargin: '0px 0px -50px 0px'
    });
    
    return observer;
}

// Función para inicializar todos los efectos
function inicializarEfectosAparicion() {
    // Seleccionar todos los elementos con efectos
    const elementosEfecto1 = document.querySelectorAll('.efect1');
    const elementosEfecto2 = document.querySelectorAll('.efect2');
    const elementosEfecto3 = document.querySelectorAll('.efect3');
    const todosLosElementos = [...elementosEfecto1, ...elementosEfecto2, ...elementosEfecto3];
    
    if (todosLosElementos.length === 0) return;
    
    // Limpiar observers anteriores
    elementosObservados.forEach((observer, elemento) => {
        observer.unobserve(elemento);
    });
    elementosObservados.clear();
    
    // Crear nuevo observer
    const observer = crearObserverPersonalizado(0.2);
    
    // Aplicar estilos iniciales y observar
    todosLosElementos.forEach(elemento => {
        let efecto = null;
        if (elemento.classList.contains('efect1')) efecto = 'efect1';
        else if (elemento.classList.contains('efect2')) efecto = 'efect2';
        else if (elemento.classList.contains('efect3')) efecto = 'efect3';
        
        if (efecto) {
            const config = efectosConfig[efecto];
            
            // Solo aplicar estilos iniciales si no es efect3 o si no ha sido animado
            if (!config.disappear || !elemento.classList.contains('efect-hidden')) {
                aplicarEstilosIniciales(elemento, efecto);
            }
            
            observer.observe(elemento);
            elementosObservados.set(elemento, observer);
        }
    });
}

// Función específica para actualizar elementos efect3 que ya están visibles
function actualizarEfectosDinamicos() {
    const elementosEfecto3 = document.querySelectorAll('.efect3');
    
    elementosEfecto3.forEach(elemento => {
        const rect = elemento.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        const isVisible = rect.top < windowHeight - 100 && rect.bottom > 100;
        
        if (isVisible && !elemento.classList.contains('efect-visible')) {
            activarAnimacionEntrada(elemento, 'efect3');
        } else if (!isVisible && elemento.classList.contains('efect-visible')) {
            activarAnimacionSalida(elemento, 'efect3');
        }
    });
}

// Inicializar cuando el DOM esté listo
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        inicializarEfectosAparicion();
        
        // Para efect3, también escuchar scroll para actualizar dinámicamente
        window.addEventListener('scroll', () => {
            requestAnimationFrame(actualizarEfectosDinamicos);
        });
    });
} else {
    inicializarEfectosAparicion();
    window.addEventListener('scroll', () => {
        requestAnimationFrame(actualizarEfectosDinamicos);
    });
}

// Opcional: Re-evaluar después de cargas dinámicas (para contenido AJAX)
if (window.MutationObserver) {
    const observerDOM = new MutationObserver((mutations) => {
        let needsUpdate = false;
        mutations.forEach(mutation => {
            if (mutation.addedNodes.length) {
                mutation.addedNodes.forEach(node => {
                    if (node.nodeType === 1 && (node.classList?.contains('efect1') || node.classList?.contains('efect2') || node.classList?.contains('efect3') || node.querySelectorAll)) {
                        needsUpdate = true;
                    }
                });
            }
        });
        
        if (needsUpdate) {
            inicializarEfectosAparicion();
        }
    });
    
    observerDOM.observe(document.body, {
        childList: true,
        subtree: true
    });
}