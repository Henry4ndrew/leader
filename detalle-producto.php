<?php
require 'includes/funciones.php';
include 'includes/header.php';

$productoId = $_GET['id'] ?? '';
$producto = null;
$serieEncontrada = '';

// Buscar el producto por ID en todas las series
if (!empty($productoId)) {
    $rutasJson = __DIR__ . '/data/productos.json';
    if (file_exists($rutasJson)) {
        $data = json_decode(file_get_contents($rutasJson), true);
        foreach ($data as $serie => $productos) {
            foreach ($productos as $prod) {
                if ($prod['id'] === $productoId) {
                    $producto = $prod;
                    $serieEncontrada = $serie;
                    break 2;
                }
            }
        }
    }
}

// Si no se encuentra el producto, redirigir a tienda virtual
if (!$producto) {
    header('Location: /tienda-virtual');
    exit;
}
?>

<div class="container mx-auto px-4 py-4">
    <!-- Botón de volver -->
    <div class="mb-3">
        <a href="<?= BASE_URL ?>/tienda-virtual?serie=<?= $serieEncontrada ?>" 
        class="border-2 border-indigo text-indigo hover:bg-indigo hover:text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center gap-2 text-sm md:text-base inline-flex">
            <i class="fas fa-arrow-left transition-transform group-hover:-translate-x-1"></i>
            <span>Volver a <?= ucfirst($serieEncontrada) ?></span>
        </a>
    </div>

    <!-- Detalle del producto -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="md:flex">
            <!-- Imagen del producto -->
                        <!-- Imagen del producto -->
            <div class="md:w-1/2 bg-gradient-to-br from-seccion-suave to-cian/20 p-8 flex items-center justify-center">
                <?php 
                $imgPath = $producto['imagen'] ?? '';
                $fullImageUrl = BASE_URL . $imgPath;
                $fullImagePath = $_SERVER['DOCUMENT_ROOT'] . $fullImageUrl;
                ?>
                <?php if(!empty($imgPath) && file_exists($fullImagePath)): ?>
                    <img src="<?= $fullImageUrl ?>" 
                        alt="<?= htmlspecialchars($producto['nombre']) ?>"
                        class="w-full max-w-md h-auto object-contain rounded-lg shadow-xl">
                <?php else: ?>
                    <div class="w-full max-w-md h-96 bg-white rounded-lg shadow-xl flex items-center justify-center">
                        <i class="fas fa-box-open text-8xl text-cian opacity-70"></i>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Información del producto -->
            <div class="md:w-1/2 p-8">
                <!-- Categoría -->
                <div class="mb-2">
                    <span class="text-sm text-cian font-semibold uppercase tracking-wide">
                        <?= ucfirst($serieEncontrada) ?>
                    </span>
                </div>

                <!-- Nombre -->
                <h1 class="text-3xl md:text-4xl font-bold text-azul-oscuro mb-4">
                    <?= htmlspecialchars($producto['nombre']) ?>
                </h1>

                <!-- Descripción -->
                <p class="text-gray-600 text-lg mb-6">
                    <?= htmlspecialchars($producto['descripcion']) ?>
                </p>

                <!-- Precio -->
                <?php if(isset($producto['precio'])): ?>
                <div class="mb-6">
                    <span class="text-3xl font-bold text-indigo">
                        S/ <?= number_format($producto['precio'], 2) ?>
                    </span>
                    <span class="text-texto ml-2 text-sm md:text-base opacity-70">
                        Soles
                    </span>
                </div>
                <?php endif; ?>

                <!-- Beneficios completos -->
                <?php if(isset($producto['beneficios']) && is_array($producto['beneficios'])): ?>
                <div class="mb-8 bg-seccion-suave/60 rounded-xl p-6 md:p-8">
                    <h3 class="text-xl font-semibold text-azul-oscuro mb-4 flex items-center">
                        <i class="fas fa-star text-yellow-500 mr-2"></i>
                        Beneficios del producto
                    </h3>
                    <div class="space-y-3">
                        <?php foreach($producto['beneficios'] as $beneficio): ?>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-indigo mt-1 mr-3"></i>
                                <span class="text-texto"><?= htmlspecialchars($beneficio) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Botón de agregar al carrito -->
                <button id="btn-add-to-cart" 
                    class="group/btn w-full bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-6 md:px-8 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg flex items-center justify-center gap-2 text-sm md:text-base"
                    data-producto='<?= json_encode([
                        'id' => $producto['id'],
                        'nombre' => $producto['nombre'],
                        'precio' => $producto['precio'],
                        'imagen' => $producto['imagen'] ?? '/assets/img/placeholder.jpg',
                        'cantidad' => 1
                    ]) ?>'>
                    
                    <i class="fas fa-cart-plus group-hover/btn:scale-110 transition-transform"></i>
                    <span>Agregar al carrito</span>
                    <i class="fas fa-arrow-right opacity-0 group-hover/btn:opacity-100 group-hover/btn:translate-x-1 transition-all"></i>
                </button>

                <!-- Enlace para seguir comprando -->
                <div class="mt-4 text-center">
                    <a href="<?= BASE_URL ?>/tienda-virtual?serie=<?= $serieEncontrada ?>" 
                    class="border-2 border-indigo text-indigo hover:bg-indigo hover:text-white px-6 md:px-8 py-2.5 md:py-3 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center gap-2 text-sm md:text-base inline-flex">
                        
                        <i class="fas fa-shopping-bag"></i>
                        <span>Seguir comprando</span>
                    </a>
                </div>
            </div>
        </div>
    </div>



<!-- Productos relacionados -->
<div class="mt-16">
    <!-- Título decorativo -->
    <div class="text-center mb-10">
        <div class="relative inline-block">
            <div class="absolute inset-0 bg-gradient-to-r from-cian/20 to-indigo/20 blur-xl rounded-full"></div>
            <div class="relative bg-white px-6 py-3 rounded-full shadow-md">
                <i class="fas fa-heart text-cian mr-2"></i>
                <span class="text-azul-oscuro font-semibold">También te puede interesar</span>
            </div>
        </div>
        <h2 class="text-2xl md:text-3xl font-bold text-azul-oscuro mt-8">
            Productos relacionados
        </h2>
        <div class="w-20 h-1 bg-gradient-to-r from-cian to-indigo mx-auto mt-3 rounded-full"></div>
    </div>
    
    <?php
    $productosRelacionados = obtenerProductosPorSerie($serieEncontrada);
    $relacionados = array_filter($productosRelacionados, function($prod) use ($productoId) {
        return $prod['id'] !== $productoId;
    });
    $relacionados = array_slice($relacionados, 0, 3);
    ?>
    
    <?php if(count($relacionados) > 0): ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach($relacionados as $rel): ?>
                <div class="group relative bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    <!-- Efecto de borde gradiente -->
                    <div class="absolute inset-0 bg-gradient-to-r from-cian via-indigo to-azul-oscuro opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl blur-sm -z-10"></div>
                    
                    <div class="bg-white rounded-2xl p-0 relative z-10">
                        <a href="<?= BASE_URL ?>/producto/<?= $rel['id'] ?>" class="block">
                            <!-- Imagen con efecto zoom -->
                            <div class="relative h-52 overflow-hidden bg-gradient-to-br from-seccion-suave to-cian/20 rounded-t-2xl">
                                <?php 
                                $relImgPath = $rel['imagen'] ?? '';
                                $fullRelPath = $_SERVER['DOCUMENT_ROOT'] . BASE_URL . $relImgPath;
                                $hasRelImage = !empty($relImgPath) && file_exists($fullRelPath);
                                ?>
                                <?php if($hasRelImage): ?>
                                    <img src="<?= BASE_URL . htmlspecialchars($relImgPath) ?>" 
                                        alt="<?= htmlspecialchars($rel['nombre']) ?>"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <?php else: ?>
                                    <div class="w-full h-full flex items-center justify-center">
                                        <i class="fas fa-box-open text-6xl text-cian/30 group-hover:text-cian/50 transition-colors"></i>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Etiqueta de precio -->
                                <?php if(isset($rel['precio'])): ?>
                                    <div class="absolute top-3 right-3 bg-gradient-to-r from-azul-oscuro to-indigo text-white px-3 py-1.5 rounded-xl text-sm font-bold shadow-lg transform group-hover:scale-105 transition-transform">
                                        S/ <?= number_format($rel['precio'], 2) ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Contenido -->
                            <div class="p-5">
                                <!-- Categoría -->
                                <div class="mb-2">
                                    <span class="text-xs text-cian font-semibold uppercase tracking-wider">
                                        <i class="fas fa-tag mr-1"></i>
                                        <?= ucfirst($serieEncontrada) ?>
                                    </span>
                                </div>
                                
                                <!-- Título -->
                                <h3 class="font-bold text-xl text-azul-oscuro mb-2 line-clamp-1 group-hover:text-cian transition-colors">
                                    <?= htmlspecialchars($rel['nombre']) ?>
                                </h3>
                                
                                <!-- Descripción -->
                                <p class="text-texto text-sm mb-4 line-clamp-2 leading-relaxed">
                                    <?= htmlspecialchars($rel['descripcion']) ?>
                                </p>
                            </div>
                        </a>
                        
                        <!-- Botón de acción -->
                        <div class="px-5 pb-5">
                            <button type="button" class="btn-add-related-cart w-full bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-4 py-2.5 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center gap-2 group/btn"
                                    data-producto='<?= json_encode([
                                        'id' => $rel['id'],
                                        'nombre' => $rel['nombre'],
                                        'precio' => $rel['precio'],
                                        'imagen' => $rel['imagen'] ?? '/assets/img/placeholder.avif',  // ← CORREGIDO (sin BASE_URL)
                                        'cantidad' => 1
                                    ]) ?>'>
                                <i class="fas fa-cart-plus group-hover/btn:scale-110 transition-transform"></i>
                                <span>Agregar al carrito</span>
                                <i class="fas fa-arrow-right opacity-0 group-hover/btn:opacity-100 group-hover/btn:translate-x-1 transition-all"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <!-- Mensaje cuando no hay productos relacionados -->
        <div class="bg-gradient-to-br from-seccion-suave to-cian/10 rounded-2xl p-12 text-center shadow-md">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-full shadow-lg mb-4">
                <i class="fas fa-store text-4xl text-cian"></i>
            </div>
            <h3 class="text-xl font-semibold text-azul-oscuro mb-2">
                No hay productos relacionados
            </h3>
            <p class="text-texto mb-6">
                Descubre más productos en nuestra tienda virtual
            </p>
            <a href="<?= BASE_URL ?>/tienda-virtual?serie=<?= $serieEncontrada ?>" 
               class="inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-md hover:shadow-lg">
                <i class="fas fa-shopping-bag"></i>
                <span>Ver todos los productos</span>
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    <?php endif; ?>
</div>


</div>

















<script>
document.addEventListener('DOMContentLoaded', function() {
    // Botón principal del producto
    const btnAddToCart = document.getElementById('btn-add-to-cart');
    if (btnAddToCart) {
        btnAddToCart.addEventListener('click', function() {
            const productoData = JSON.parse(this.getAttribute('data-producto'));
            agregarAlCarrito(productoData);
        });
    }
    
    // Botones de productos relacionados
    const btnsRelatedCart = document.querySelectorAll('.btn-add-related-cart');
    btnsRelatedCart.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault(); // Prevenir cualquier comportamiento por defecto
            e.stopPropagation(); // Evitar que el evento burbujee
            
            const productoData = JSON.parse(this.getAttribute('data-producto'));
            agregarAlCarrito(productoData);
        });
    });
    
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
        
        // Actualizar contador del carrito
        actualizarContadorCarrito();
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
            setTimeout(() => notificacion.remove(), 300);
        }, 3000);
    }
    
    // Función para actualizar el contador del carrito
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
                contador.textContent = '0';
            }
        }
    }
    
    // Inicializar contador
    actualizarContadorCarrito();
});
</script>




<?php include 'includes/footer.php'; ?>