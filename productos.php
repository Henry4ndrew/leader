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
        ?>
        <div class="p-6">
            <div class="text-center mb-8">
                <h1 class="text-lg md:text-xl font-semibold text-azul-oscuro mt-4 capitalize">
                    Serie: <?= htmlspecialchars($serie) ?>
                </h1>
                <div class="w-20 h-1 bg-gradient-to-r from-cian to-indigo mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="bg-gradient-to-br from-seccion-suave to-cian/20 border border-cian/30 p-8 rounded-xl text-center shadow-lg">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-white rounded-xl shadow-md flex items-center justify-center mb-4">
                        <i class="fas fa-box-open text-4xl text-cian opacity-80"></i>
                    </div>
                    <p class="text-gray-700 text-base md:text-lg font-medium">
                        No hay productos disponibles para la categoría "<?= htmlspecialchars($serie) ?>"
                    </p>
                    <a href="<?= BASE_URL ?>/tienda-virtual"
                       class="group/btn mt-6 inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-5 py-2.5 rounded-lg font-semibold transition-all duration-300 shadow-md active:scale-95">
                        <i class="fas fa-arrow-left group-hover/btn:-translate-x-1 transition-transform"></i>   
                        <span>Volver a la tienda</span>
                    </a>
                </div>
            </div>
        </div>
        <?php
    } elseif(!empty($productos)) {
        ?>
        <div class="p-6">
            <div class="text-center mb-8">
                <h1 class="text-lg md:text-xl font-semibold text-azul-oscuro mt-4 capitalize">
                    Serie: <?= htmlspecialchars($serie) ?>
                </h1>
                <div class="w-20 h-1 bg-gradient-to-r from-cian to-indigo mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach($productos as $producto): ?>
                    <div class="group relative bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden efect3">
                        <div class="absolute inset-0 bg-gradient-to-r from-cian via-indigo to-azul-oscuro opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl blur-sm -z-10"></div>
                        
                        <div class="bg-white rounded-2xl p-0 relative z-10">
                            <a href="<?= BASE_URL ?>/producto/<?= $producto['id'] ?>" class="block">
                                <div class="relative h-56 overflow-hidden bg-gradient-to-br from-seccion-suave to-cian/20 rounded-t-2xl">
                                    <?php 
                                    $imgPath = $producto['imagen'] ?? '';
                                    $fullImgPath = $_SERVER['DOCUMENT_ROOT'] . BASE_URL . $imgPath;
                                    $hasImage = !empty($imgPath) && file_exists($fullImgPath);
                                    ?>
                                    <?php if($hasImage): ?>
                                        <img src="<?= BASE_URL . htmlspecialchars($imgPath) ?>" 
                                            alt="<?= htmlspecialchars($producto['nombre']) ?>"
                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                            onerror="this.onerror=null; this.style.display='none'; this.parentElement.querySelector('.fallback-icon').style.display='flex';">
                                        <div class="fallback-icon w-full h-full items-center justify-center hidden absolute inset-0">
                                            <i class="fas fa-box-open text-6xl text-cian/40"></i>
                                        </div>
                                    <?php else: ?>
                                        <div class="w-full h-full flex items-center justify-center">
                                            <i class="fas fa-box-open text-6xl text-cian/30 group-hover:text-cian/50 transition-colors"></i>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if(isset($producto['precio']) && $producto['precio'] !== null): ?>
                                        <div class="absolute top-3 right-3 bg-gradient-to-r from-azul-oscuro to-indigo text-white px-3 py-1.5 rounded-xl text-sm font-bold shadow-lg transform group-hover:scale-105 transition-transform">
                                            S/ <?= number_format($producto['precio'], 2) ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                            
                            <div class="p-5">
                                <div class="mb-2">
                                    <span class="text-xs text-cian font-semibold uppercase tracking-wider">
                                        <i class="fas fa-tag mr-1"></i>
                                        <?= ucfirst($serie) ?>
                                    </span>
                                </div>
                                
                                <a href="<?= BASE_URL ?>/producto/<?= $producto['id'] ?>" class="block">
                                    <h2 class="font-bold text-xl text-azul-oscuro mb-2 line-clamp-1 group-hover:text-cian transition-colors">
                                        <?= htmlspecialchars($producto['nombre']) ?>
                                    </h2>
                                    <p class="text-texto text-sm mb-4 line-clamp-2 leading-relaxed">
                                        <?= htmlspecialchars($producto['descripcion']) ?>
                                    </p>
                                </a>
                                
                                <?php if(isset($producto['beneficios']) && is_array($producto['beneficios'])): ?>
                                    <div class="mb-4">
                                        <div class="space-y-1">
                                            <?php foreach(array_slice($producto['beneficios'], 0, 2) as $beneficio): ?>
                                                <div class="flex items-start text-xs">
                                                    <i class="fas fa-check-circle text-cian mt-0.5 mr-1.5 flex-shrink-0"></i>
                                                    <span class="text-texto"><?= htmlspecialchars($beneficio) ?></span>
                                                </div>
                                            <?php endforeach; ?>
                                            <?php if(count($producto['beneficios']) > 2): ?>
                                                <div class="text-xs text-cian mt-1">
                                                    <i class="fas fa-plus-circle mr-1"></i>
                                                    + <?= count($producto['beneficios']) - 2 ?> beneficios más
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                                <button class="btn-add-to-cart w-full bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-4 py-2.5 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center gap-2 group/btn"
                                        data-producto='<?= json_encode([
                                            'id' => $producto['id'],
                                            'nombre' => $producto['nombre'],
                                            'precio' => $producto['precio'] ?? null,
                                            'imagen' => !empty($producto['imagen']) ? BASE_URL . $producto['imagen'] : BASE_URL . '/assets/img/placeholder.avif',
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
        </div>
        <?php
    } else {
        ?>
        <div class="p-6">
            <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded-lg">
                <div class="flex">
                    <i class="fas fa-exclamation-circle text-red-400 mr-3 text-lg"></i>
                    <p class="text-sm text-red-700">
                        Error: No se especificó una categoría válida
                    </p>
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
<div class="text-center mb-8">
    <h1 class="text-lg md:text-xl font-semibold text-azul-oscuro mt-4 capitalize">
        Serie: <?= htmlspecialchars($serie) ?>
    </h1>
    <div class="w-20 h-1 bg-gradient-to-r from-cian to-indigo mx-auto mt-3 rounded-full"></div>
</div>

<?php if(!empty($productos)): ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach($productos as $producto): ?>
            <div class="group relative bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden efect3">
                <div class="absolute inset-0 bg-gradient-to-r from-cian via-indigo to-azul-oscuro opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl blur-sm -z-10"></div>
                
                <div class="bg-white rounded-2xl p-0 relative z-10">
                    <a href="<?= BASE_URL ?>/producto/<?= $producto['id'] ?>" class="block">
                        <div class="relative h-56 overflow-hidden bg-gradient-to-br from-seccion-suave to-cian/20 rounded-t-2xl">
                            <?php 
                            $imgPath = $producto['imagen'] ?? '';
                            $fullImgPath = $_SERVER['DOCUMENT_ROOT'] . BASE_URL . $imgPath;
                            $hasImage = !empty($imgPath) && file_exists($fullImgPath);
                            ?>
                            <?php if($hasImage): ?>
                                <img src="<?= BASE_URL . htmlspecialchars($imgPath) ?>" 
                                    alt="<?= htmlspecialchars($producto['nombre']) ?>"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    onerror="this.onerror=null; this.style.display='none'; this.parentElement.querySelector('.fallback-icon').style.display='flex';">
                                <div class="fallback-icon w-full h-full items-center justify-center hidden absolute inset-0">
                                    <i class="fas fa-box-open text-6xl text-cian/40"></i>
                                </div>
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center">
                                    <i class="fas fa-box-open text-6xl text-cian/30 group-hover:text-cian/50 transition-colors"></i>
                                </div>
                            <?php endif; ?>
                            
                            <?php if(isset($producto['precio']) && $producto['precio'] !== null): ?>
                                <div class="absolute top-3 right-3 bg-gradient-to-r from-azul-oscuro to-indigo text-white px-3 py-1.5 rounded-xl text-sm font-bold shadow-lg transform group-hover:scale-105 transition-transform">
                                    S/ <?= number_format($producto['precio'], 2) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </a>
                    
                    <div class="p-5">
                        <div class="mb-2">
                            <span class="text-xs text-cian font-semibold uppercase tracking-wider">
                                <i class="fas fa-tag mr-1"></i>
                                <?= ucfirst($serie) ?>
                            </span>
                        </div>
                        
                        <a href="<?= BASE_URL ?>/producto/<?= $producto['id'] ?>" class="block">
                            <h2 class="font-bold text-xl text-azul-oscuro mb-2 line-clamp-1 group-hover:text-cian transition-colors">
                                <?= htmlspecialchars($producto['nombre']) ?>
                            </h2>
                            <!-- 🔽 CAMBIADO: line-clamp-2 → line-clamp-1 (solo UNA línea) -->
                            <p class="text-texto text-sm mb-4 line-clamp-1 leading-relaxed">
                                <?= htmlspecialchars($producto['descripcion']) ?>
                            </p>
                        </a>
                        
                        <?php if(isset($producto['beneficios']) && is_array($producto['beneficios'])): ?>
                            <div class="mb-4">
                                <div class="space-y-1">
                                    <?php foreach(array_slice($producto['beneficios'], 0, 2) as $beneficio): ?>
                                        <div class="flex items-start text-xs">
                                            <i class="fas fa-check-circle text-cian mt-0.5 mr-1.5 flex-shrink-0"></i>
                                            <span class="text-texto"><?= htmlspecialchars($beneficio) ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php if(count($producto['beneficios']) > 2): ?>
                                        <div class="text-xs text-cian mt-1">
                                            <i class="fas fa-plus-circle mr-1"></i>
                                            + <?= count($producto['beneficios']) - 2 ?> beneficios más
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <button class="btn-add-to-cart w-full bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-4 py-2.5 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center gap-2 group/btn"
                        data-producto='<?= json_encode([
                            'id' => $producto['id'],
                            'nombre' => $producto['nombre'],
                            'precio' => $producto['precio'] ?? null,
                            'imagen' => $producto['imagen'] ?? '/assets/img/placeholder.avif',  // ← CORREGIDO (sin BASE_URL)
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
    <div class="bg-gradient-to-br from-seccion-suave to-cian/20 border border-cian/30 p-8 rounded-xl text-center shadow-lg">
        <div class="flex flex-col items-center">
            <div class="w-20 h-20 bg-white rounded-xl shadow-md flex items-center justify-center mb-4">
                <i class="fas fa-box-open text-4xl text-cian opacity-80"></i>
            </div>
            <p class="text-gray-700 text-base md:text-lg font-medium">
                No hay productos disponibles para esta categoría.
            </p>
            <a href="<?= BASE_URL ?>/tienda-virtual"
               class="group/btn mt-6 inline-flex items-center gap-2 bg-gradient-to-r from-azul-oscuro to-indigo hover:from-indigo hover:to-azul-oscuro text-white px-5 py-2.5 rounded-lg font-semibold transition-all duration-300 shadow-md active:scale-95">
                <i class="fas-fa-arrow-left group-hover/btn:-translate-x-1 transition-transform"></i>   
                <span>Volver a la tienda</span>
            </a>
        </div>
    </div>
<?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
