<?php
require 'includes/funciones.php';

// Habilitar CORS para desarrollo local
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');

session_start(); // Iniciar sesión para el carrito

$serie = $_GET['serie'] ?? '';
$esAjax = isset($_GET['ajax']) && $_GET['ajax'] == 1;

// Obtener productos usando la función
$productos = obtenerProductosPorSerie($serie);

// Si es una petición AJAX, solo enviamos el contenido de productos
if ($esAjax) {
    // Verificar si hay productos
    if(empty($productos) && !empty($serie)) {
        // Enviar mensaje de no productos
        ?>
        <div class="p-6">
            <h1 class="text-2xl font-bold mb-4 capitalize">
                Productos: <?= htmlspecialchars($serie) ?>
            </h1>
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                       <i class="fa-solid fa-triangle-exclamation text-yellow-400"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-yellow-700">
                            No hay productos disponibles para la categoría "<?= htmlspecialchars($serie) ?>"
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } elseif(!empty($productos)) {
        ?>
        <div class="p-6">
            <h1 class="text-2xl font-bold mb-4 capitalize">
                Productos: <?= htmlspecialchars($serie) ?>
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach($productos as $producto): ?>
                    <div class="producto-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300">
                        <!-- Imagen del producto -->
                        <div class="relative h-48 overflow-hidden bg-gray-100">
                            <?php if(isset($producto['imagen']) && file_exists($_SERVER['DOCUMENT_ROOT'] . $producto['imagen'])): ?>
                                <img src="<?= htmlspecialchars($producto['imagen']) ?>" 
                                     alt="<?= htmlspecialchars($producto['nombre']) ?>"
                                     class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-300">
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-green-400 to-green-600">
                                    <i class="fa-solid fa-box text-white text-4xl"></i>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Precio -->
                            <?php if(isset($producto['precio'])): ?>
                                <div class="absolute top-3 right-3 bg-green-600 text-white px-3 py-1 rounded-full font-bold text-sm">
                                    $<?= number_format($producto['precio'], 2) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Contenido del producto -->
                        <div class="p-4">
                            <h2 class="font-bold text-xl text-gray-800 mb-2">
                                <?= htmlspecialchars($producto['nombre']) ?>
                            </h2>
                            <p class="text-gray-600 text-sm mb-3">
                                <?= htmlspecialchars($producto['descripcion']) ?>
                            </p>
                            
                            <!-- Beneficios -->
                            <?php if(isset($producto['beneficios']) && is_array($producto['beneficios'])): ?>
                                <div class="mb-4">
                                    <h3 class="text-sm font-semibold text-gray-700 mb-2">✨ Beneficios:</h3>
                                    <ul class="space-y-1">
                                        <?php foreach(array_slice($producto['beneficios'], 0, 3) as $beneficio): ?>
                                            <li class="text-xs text-gray-600 flex items-start">
                                               <i class="fa-solid fa-check text-green-500 text-xs mt-0.5 mr-1 flex-shrink-0"></i>
                                                <?= htmlspecialchars($beneficio) ?>
                                            </li>
                                        <?php endforeach; ?>
                                        <?php if(count($producto['beneficios']) > 3): ?>
                                            <li class="text-xs text-green-600">+ <?= count($producto['beneficios']) - 3 ?> beneficios más</li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Botón de agregar al carrito -->
                            <button class="btn-add-to-cart w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 flex items-center justify-center gap-2"
                                    data-producto='<?= json_encode([
                                        'id' => $producto['id'],
                                        'nombre' => $producto['nombre'],
                                        'precio' => $producto['precio'],
                                        'imagen' => $producto['imagen'] ?? '/assets/img/placeholder.avif',
                                        'cantidad' => 1
                                    ]) ?>'>
                                <i class="fa-solid fa-cart-shopping w-5 h-5"></i>
                                Agregar al Carrito
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
    } else {
        // Error: no hay serie especificada
        ?>
        <div class="p-6">
            <div class="bg-red-50 border-l-4 border-red-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-circle-xmark text-red-400 text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700">
                            Error: No se especificó una categoría válida
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    exit; // Terminar la ejecución para peticiones AJAX
}

// Si no es AJAX, mostrar página completa
include 'includes/header.php';
?>

<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">
        Productos: <?= htmlspecialchars($serie) ?>
    </h1>

    <?php if(!empty($productos)): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach($productos as $producto): ?>

                <!-- Dentro del foreach de productos en productos.php (versión AJAX) -->
                <div class="producto-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <a href="<?= BASE_URL ?>/producto/<?= $producto['id'] ?>" class="block">
                        <!-- Imagen del producto -->
                        <div class="relative h-48 overflow-hidden bg-gray-100">
                            <!-- ... contenido de la imagen ... -->
                        </div>
                        
                        <!-- Contenido del producto -->
                        <div class="p-4">
                            <h2 class="font-bold text-xl text-gray-800 mb-2">
                                <?= htmlspecialchars($producto['nombre']) ?>
                            </h2>
                            <p class="text-gray-600 text-sm mb-3">
                                <?= htmlspecialchars($producto['descripcion']) ?>
                            </p>
                            
                            <!-- Precio -->
                            <?php if(isset($producto['precio'])): ?>
                                <p class="text-green-600 font-bold text-lg">
                                    $<?= number_format($producto['precio'], 2) ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </a>
                    
                    <!-- Botón de agregar al carrito (fuera del enlace) -->
                    <div class="px-4 pb-4">
                        <button class="btn-add-to-cart w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 flex items-center justify-center gap-2"
                                data-producto='<?= json_encode([
                                    'id' => $producto['id'],
                                    'nombre' => $producto['nombre'],
                                    'precio' => $producto['precio'],
                                    'imagen' => $producto['imagen'] ?? '/assets/img/placeholder.jpg',
                                    'cantidad' => 1
                                ]) ?>'>
                            <i class="fas fa-cart-plus"></i>
                            Agregar al Carrito
                        </button>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-red-500">
            No hay productos disponibles para esta categoría.
        </p>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>