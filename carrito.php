<?php include 'includes/header.php'; ?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center">
        <i class="fas fa-shopping-cart text-green-600 mr-2"></i>
        Mi Carrito de Compras
    </h1>
    
    <div id="carrito-contenido" class="bg-white rounded-lg shadow-md p-6">
        <!-- El carrito se cargará dinámicamente aquí -->
    </div>
</div>

<script>
function mostrarCarrito() {
    const carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
    const container = document.getElementById('carrito-contenido');
    
    if (carrito.length === 0) {
        container.innerHTML = `
            <div class="text-center py-12">
                <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-4"></i>
                <p class="text-gray-500 text-lg">Tu carrito está vacío</p>
                <a href="<?= BASE_URL ?>/tienda-virtual" class="mt-6 inline-flex items-center bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
                    <i class="fas fa-store mr-2"></i>
                    Ir a la tienda
                </a>
            </div>
        `;
        return;
    }
    
    let html = '<div class="space-y-4">';
    let total = 0;
    
    carrito.forEach((item, index) => {
        total += item.precio * item.cantidad;
        html += `
            <div class="flex flex-col md:flex-row items-center justify-between border-b pb-4 gap-4">
                <div class="flex items-center space-x-4 w-full md:w-auto">
                    <img src="${item.imagen}" alt="${item.nombre}" class="w-20 h-20 object-cover rounded">
                    <div>
                        <h3 class="font-semibold text-gray-800">${item.nombre}</h3>
                        <p class="text-gray-600">$${item.precio.toFixed(2)}</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="btn-update-quantity bg-gray-200 hover:bg-gray-300 w-8 h-8 rounded-full transition" data-index="${index}" data-change="-1">
                        <i class="fas fa-minus text-sm"></i>
                    </button>
                    <span class="font-semibold w-8 text-center">${item.cantidad}</span>
                    <button class="btn-update-quantity bg-gray-200 hover:bg-gray-300 w-8 h-8 rounded-full transition" data-index="${index}" data-change="1">
                        <i class="fas fa-plus text-sm"></i>
                    </button>
                    <button class="btn-remove text-red-500 hover:text-red-700 ml-2 transition" data-index="${index}">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        `;
    });
    
    html += `
        <div class="pt-4 border-t">
            <div class="flex justify-between items-center mb-4">
                <span class="font-bold text-lg">Total:</span>
                <span class="font-bold text-2xl text-green-600">$${total.toFixed(2)} USD</span>
            </div>
            <div class="flex flex-col md:flex-row gap-4">
                <a href="<?= BASE_URL ?>/tienda-virtual" class="text-center bg-gray-200 hover:bg-gray-300 text-gray-800 py-3 px-6 rounded-lg font-semibold transition">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Seguir comprando
                </a>
                <button id="btn-checkout" class="flex-1 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white py-3 px-6 rounded-lg font-semibold transition transform hover:scale-105">
                    <i class="fas fa-credit-card mr-2"></i>
                    Proceder al pago
                </button>
            </div>
        </div>
    </div>`;
    
    container.innerHTML = html;
    
    // Event listeners para botones
    document.querySelectorAll('.btn-update-quantity').forEach(btn => {
        btn.addEventListener('click', function() {
            const index = parseInt(this.dataset.index);
            const change = parseInt(this.dataset.change);
            actualizarCantidad(index, change);
        });
    });
    
    document.querySelectorAll('.btn-remove').forEach(btn => {
        btn.addEventListener('click', function() {
            const index = parseInt(this.dataset.index);
            eliminarProducto(index);
        });
    });
    
    document.getElementById('btn-checkout')?.addEventListener('click', function() {
        alert('💰 Función de pago en desarrollo. Próximamente disponible.');
    });
}

function actualizarCantidad(index, change) {
    let carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
    const newCantidad = carrito[index].cantidad + change;
    
    if (newCantidad <= 0) {
        eliminarProducto(index);
    } else {
        carrito[index].cantidad = newCantidad;
        localStorage.setItem('carrito', JSON.stringify(carrito));
        mostrarCarrito();
        actualizarContadorCarrito();
    }
}

function eliminarProducto(index) {
    let carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
    carrito.splice(index, 1);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    mostrarCarrito();
    actualizarContadorCarrito();
}

function actualizarContadorCarrito() {
    const carrito = JSON.parse(localStorage.getItem('carrito') || '[]');
    const totalItems = carrito.reduce((sum, item) => sum + item.cantidad, 0);
    const contador = document.getElementById('cart-counter');
    
    if (contador) {
        if (totalItems > 0) {
            contador.textContent = totalItems;
            contador.classList.remove('hidden');
        } else {
            contador.classList.add('hidden');
        }
    }
}

document.addEventListener('DOMContentLoaded', mostrarCarrito);
</script>

<?php include 'includes/footer.php'; ?>