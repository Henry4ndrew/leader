<?php 
session_start();
include 'includes/header.php'; 
?>

<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <div class="flex items-center justify-center gap-2 text-azul-oscuro">
            <i class="fas fa-shopping-cart text-2xl md:text-3xl"></i>
            <h1 class="text-2xl md:text-3xl font-bold">
                Mi carrito de compras
            </h1>
        </div>
        <div class="w-20 h-1 bg-gradient-to-r from-cian to-indigo mx-auto mt-3 rounded-full"></div>
    </div>

    
    <div id="carrito-contenido" class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="text-center py-12">
            <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-cian"></div>
            <p class="mt-4 text-texto">Cargando carrito...</p>
        </div>
    </div>
</div>

<script>
    // Función para enviar cotización por WhatsApp
function enviarCotizacionWhatsApp() {
    const carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
    const carritoValido = validarCarrito(carrito);
    if (carritoValido.length === 0) {
        mostrarNotificacion('No hay productos en el carrito', 'error');
        return;
    }
    let mensaje = " *COTIZACIÓN DE PRODUCTOS* \n\n";
    mensaje += " *Fecha:* " + new Date().toLocaleDateString('es-ES') + "\n";
    mensaje += " *Hora:* " + new Date().toLocaleTimeString('es-ES') + "\n";
    mensaje += "━".repeat(30) + "\n\n";
    mensaje += " *DETALLE DEL PEDIDO:*\n\n";
    let total = 0;
    let tienePrecios = carritoValido.some(item => item.precio !== null && item.precio > 0);
    carritoValido.forEach((item, index) => {
        const cantidad = item.cantidad || 1;
        mensaje += `*${index + 1}.* ${item.nombre}\n`;
        mensaje += `   Cantidad: ${cantidad}\n`;
        if (tienePrecios && item.precio !== null && item.precio > 0) {
            const subtotal = item.precio * cantidad;
            total += subtotal;
            mensaje += `   Precio unitario: S/ ${item.precio.toFixed(2)}\n`;
            mensaje += `   Subtotal: S/ ${subtotal.toFixed(2)}\n`;
        } else {
            mensaje += `   Precio: Consultar\n`;
        }
        mensaje += `\n`;
    });
    mensaje += "━".repeat(30) + "\n\n";
    if (tienePrecios) {
        mensaje += `*TOTAL:* S/ ${total.toFixed(2)}\n\n`;
    }
    mensaje += " *¡Gracias por tu compra!* ";
    const mensajeCodificado = encodeURIComponent(mensaje);
    const whatsappNumber = '<?= WHATSAPP_NUMBER ?>';
    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${mensajeCodificado}`;
    window.open(whatsappUrl, '_blank');
    mostrarNotificacion('Redirigiendo a WhatsApp...', 'success');
}

// Función para validar y limpiar datos del carrito
function validarCarrito(carrito) {
    if (!Array.isArray(carrito)) {
        return [];
    }
    return carrito.filter(item => {
        return item && 
               typeof item === 'object' &&
               item.id !== undefined && 
               item.nombre !== undefined &&
               typeof item.cantidad === 'number' &&
               item.cantidad > 0;
    }).map(item => ({
        id: item.id,
        nombre: item.nombre || 'Producto',
        precio: (item.precio !== null && item.precio !== undefined && !isNaN(item.precio)) ? parseFloat(item.precio) : null,
        imagen: item.imagen || '<?= BASE_URL ?>/assets/img/placeholder.avif',
        cantidad: parseInt(item.cantidad) || 1
    }));
}

// Función para verificar si algún producto tiene precio
function tienePrecios(carrito) {
    return carrito.some(item => item.precio !== null && item.precio > 0);
}

// Función para actualizar el contador del carrito en el header
function actualizarContadorCarritoGlobal() {
    try {
        let carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
        carrito = validarCarrito(carrito);
        const totalItems = carrito.reduce((sum, item) => sum + (item.cantidad || 0), 0);
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
        
        localStorage.setItem('carrito', JSON.stringify(carrito));
        return carrito;
    } catch (error) {
        console.error('Error al actualizar contador:', error);
        return [];
    }
}

// Función para mostrar notificaciones
function mostrarNotificacion(mensaje, tipo = 'success') {
    const notificacion = document.createElement('div');
    notificacion.className = `fixed top-20 right-4 z-50 px-6 py-3 rounded-lg shadow-lg text-white ${
        tipo === 'success' ? 'bg-gradient-to-r from-green-500 to-emerald-600' : 'bg-red-500'
    } transition-all duration-300 flex items-center gap-2 animate-slide-in`;
    
    const icono = tipo === 'success' ? '<i class="fas fa-check-circle"></i>' : '<i class="fas fa-exclamation-circle"></i>';
    notificacion.innerHTML = `${icono} <span>${mensaje}</span>`;
    
    document.body.appendChild(notificacion);
    
    setTimeout(() => {
        notificacion.style.opacity = '0';
        notificacion.style.transform = 'translateX(100px)';
        setTimeout(() => notificacion.remove(), 300);
    }, 3000);
}

// Función para actualizar la cantidad de un producto
function actualizarCantidad(index, change) {
    try {
        let carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
        carrito = validarCarrito(carrito);
        
        if (!carrito[index]) return;
        
        const newCantidad = (carrito[index].cantidad || 1) + change;
        
        if (newCantidad <= 0) {
            eliminarProducto(index);
        } else {
            carrito[index].cantidad = newCantidad;
            localStorage.setItem('carrito', JSON.stringify(carrito));
            mostrarCarrito();
            actualizarContadorCarritoGlobal();
            mostrarNotificacion(`Cantidad actualizada: ${newCantidad}`, 'success');
        }
    } catch (error) {
        console.error('Error al actualizar cantidad:', error);
        mostrarNotificacion('Error al actualizar cantidad', 'error');
    }
}

// Función para eliminar un producto del carrito
function eliminarProducto(index) {
    try {
        let carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
        carrito = validarCarrito(carrito);
        
        if (!carrito[index]) return;
        
        const productoNombre = carrito[index].nombre || 'Producto';
        carrito.splice(index, 1);
        localStorage.setItem('carrito', JSON.stringify(carrito));
        mostrarCarrito();
        actualizarContadorCarritoGlobal();
        mostrarNotificacion(`${productoNombre} eliminado del carrito`, 'success');
    } catch (error) {
        console.error('Error al eliminar producto:', error);
        mostrarNotificacion('Error al eliminar producto', 'error');
    }
}

// Función principal para mostrar el carrito
function mostrarCarrito() {
    try {
        const container = document.getElementById('carrito-contenido');
        if (!container) return;
        
        let carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
        carrito = validarCarrito(carrito);
        
        localStorage.setItem('carrito', JSON.stringify(carrito));
        
        if (carrito.length === 0) {
            container.innerHTML = `
                <div class="text-center py-16">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-seccion-suave to-cian/20 rounded-full mb-6">
                        <i class="fas fa-shopping-cart text-5xl text-cian"></i>
                    </div>
                    <p class="text-texto text-lg mb-6">Tu carrito está vacío</p>
                    <a href="<?= BASE_URL ?>/tienda-virtual" class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-md hover:shadow-lg">
                        <i class="fas fa-store"></i>
                        <span>Ir a la tienda</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            `;
            return;
        }
        
        const mostrarPrecios = tienePrecios(carrito);
        let html = '<div class="divide-y divide-gray-100">';
        let totalGeneral = 0;
        
        carrito.forEach((item, index) => {
            const cantidad = parseInt(item.cantidad) || 1;
            let itemTotal = 0;
            let precioTexto = '';
            
            if (mostrarPrecios && item.precio !== null && item.precio > 0) {
                itemTotal = item.precio * cantidad;
                totalGeneral += itemTotal;
                precioTexto = `<p class="text-texto text-sm">Precio unitario: S/ ${item.precio.toFixed(2)}</p>`;
            } else {
                precioTexto = `<p class="text-texto text-sm">-</p>`;
            }
            
            html += `
                <div class="flex flex-col md:flex-row items-center justify-between p-6 gap-4 hover:bg-seccion-suave/30 transition-colors">
                    <!-- Imagen y nombre -->
                    <div class="flex items-center gap-4 w-full md:w-2/5">
                        <div class="w-20 h-20 rounded-xl overflow-hidden bg-gradient-to-br from-seccion-suave to-cian/20 flex-shrink-0">
                            <img src="<?= BASE_URL ?>${escapeHtml(item.imagen)}" 
                                alt="${escapeHtml(item.nombre)}" 
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.parentElement.querySelector('.fallback-icon').style.display='flex';">
                            <div class="fallback-icon w-full h-full flex items-center justify-center" style="display: none;">
                                <i class="fas fa-box-open text-3xl text-cian opacity-70"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-azul-oscuro text-lg">${escapeHtml(item.nombre)}</h3>
                            ${precioTexto}
                        </div>
                    </div>
                    
                    <!-- Cantidad -->
                    <div class="flex items-center gap-3">
                        <button class="btn-update-quantity w-8 h-8 rounded-full bg-seccion-suave hover:bg-cian/20 text-azul-oscuro transition-colors flex items-center justify-center" data-index="${index}" data-change="-1">
                            <i class="fas fa-minus text-sm"></i>
                        </button>
                        <span class="font-semibold text-azul-oscuro w-8 text-center">${cantidad}</span>
                        <button class="btn-update-quantity w-8 h-8 rounded-full bg-seccion-suave hover:bg-cian/20 text-azul-oscuro transition-colors flex items-center justify-center" data-index="${index}" data-change="1">
                            <i class="fas fa-plus text-sm"></i>
                        </button>
                    </div>
                    
                    <!-- Subtotal y eliminar -->
                    <div class="flex items-center justify-between md:justify-end gap-6 w-full md:w-auto">
                        ${mostrarPrecios && item.precio !== null && item.precio > 0 ? `
                            <div class="text-right">
                                <p class="font-bold text-indigo text-lg">S/ ${itemTotal.toFixed(2)}</p>
                                <p class="text-texto text-xs">Subtotal</p>
                            </div>
                        ` : `
                            <div class="text-right">
                                <p class="font-bold text-texto text-lg">-</p>
                                <p class="text-texto text-xs">Sin precio</p>
                            </div>
                        `}
                        <button class="btn-remove text-red-400 hover:text-red-600 transition-colors" data-index="${index}">
                            <i class="fas fa-trash-alt text-lg"></i>
                        </button>
                    </div>
                </div>
            `;
        });
        
        // Footer del carrito
        html += `
            <div class="p-6 bg-gradient-to-r from-seccion-suave/50 to-transparent">
                <div class="max-w-md ml-auto">
                    ${mostrarPrecios ? `
                        <div class="space-y-2 mb-4">
                            <div class="border-t border-gray-200 pt-2">
                                <div class="flex justify-between font-bold text-azul-oscuro">
                                    <span class="text-lg">Total:</span>
                                    <span class="text-2xl text-indigo">S/ ${totalGeneral.toFixed(2)}</span>
                                </div>
                            </div>
                        </div>
                    ` : `
                        <div class="text-center text-texto py-4">
                            <i class="fas fa-tag text-cian mr-2"></i>
                            El costo de tu pedido será calculado y enviado mediante WhatsApp por un distribuidor de la compañia.
                        </div>
                    `}
                    
                    <div class="flex flex-col sm:flex-row gap-3 mt-6">
                        <a href="<?= BASE_URL ?>/tienda-virtual" class="flex-1 text-center border-2 border-indigo text-indigo hover:bg-indigo hover:text-white px-4 py-2.5 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center gap-2">
                            <i class="fas fa-arrow-left"></i>
                            <span>Seguir comprando</span>
                        </a>
                        <button id="btn-checkout" class="flex-1 bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-4 py-2.5 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center gap-2 shadow-md">
                            <i class="fab fa-whatsapp"></i>
                            <span>${mostrarPrecios ? 'Solicitar cotización' : 'Solicitar cotización'}</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>`;
        
        container.innerHTML = html;
        
        // Event listeners para botones de cantidad
        document.querySelectorAll('.btn-update-quantity').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const index = parseInt(this.dataset.index);
                const change = parseInt(this.dataset.change);
                if (!isNaN(index) && !isNaN(change)) {
                    actualizarCantidad(index, change);
                }
            });
        });
        
        // Event listeners para botones de eliminar
        document.querySelectorAll('.btn-remove').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const index = parseInt(this.dataset.index);
                if (!isNaN(index)) {
                    eliminarProducto(index);
                }
            });
        });
        

    // Event listener para el botón de checkout
    const btnCheckout = document.getElementById('btn-checkout');
    if (btnCheckout) {
        btnCheckout.addEventListener('click', function() {
            enviarCotizacionWhatsApp();
        });
    }
        
    } catch (error) {
        console.error('Error al mostrar carrito:', error);
        const container = document.getElementById('carrito-contenido');
        if (container) {
            container.innerHTML = `
                <div class="text-center py-16 text-red-500">
                    <i class="fas fa-exclamation-triangle text-5xl mb-4"></i>
                    <p>Error al cargar el carrito. Por favor, recarga la página.</p>
                    <button onclick="localStorage.removeItem('carrito'); location.reload();" class="mt-4 bg-gradient-to-r from-azul-oscuro to-indigo text-white px-4 py-2 rounded-lg">
                        Limpiar carrito y recargar
                    </button>
                </div>
            `;
        }
    }
}

// Función para escapar HTML
function escapeHtml(text) {
    if (!text) return '';
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

// Función para limpiar el carrito si hay datos corruptos
function limpiarCarritoCorrupto() {
    try {
        const carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
        const carritoValido = validarCarrito(carrito);
        
        if (carrito.length !== carritoValido.length) {
            console.warn('Se encontraron productos inválidos en el carrito. Limpiando...');
            localStorage.setItem('carrito', JSON.stringify(carritoValido));
            mostrarNotificacion('Se eliminaron productos inválidos del carrito', 'success');
        }
        
        return carritoValido;
    } catch (error) {
        console.error('Error al limpiar carrito corrupto:', error);
        localStorage.setItem('carrito', '[]');
        return [];
    }
}

// Inicializar al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    limpiarCarritoCorrupto();
    mostrarCarrito();
    actualizarContadorCarritoGlobal();
});
</script>

<style>
@keyframes spin {
    to { transform: rotate(360deg); }
}
.animate-spin {
    animation: spin 1s linear infinite;
}
</style>

<?php include 'includes/footer.php'; ?>