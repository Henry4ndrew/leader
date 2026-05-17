<?php
require 'includes/funciones.php';

$serie = $_GET['serie'] ?? '';

// Obtener productos usando la función
$productos = obtenerProductosPorSerie($serie);

include 'includes/header.php';
?>

<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">
        Productos: <?= htmlspecialchars($serie) ?>
    </h1>

    <?php if(!empty($productos)): ?>
        <?php foreach($productos as $producto): ?>
            <div class="mb-4 p-4 border rounded shadow-sm bg-white">
                <h2 class="font-semibold text-lg">
                    <?= htmlspecialchars($producto['nombre']) ?>
                </h2>
                <p class="text-gray-600">
                    <?= htmlspecialchars($producto['descripcion']) ?>
                </p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-red-500">
            No hay productos disponibles para esta categoría.
        </p>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>