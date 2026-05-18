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