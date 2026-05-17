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