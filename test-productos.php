<?php
require 'includes/funciones.php';

echo "<h2>Prueba de funciones.php</h2>";

// Probar función
$productos = obtenerProductosPorSerie('bebidas');
echo "<pre>";
print_r($productos);
echo "</pre>";

// Probar lectura del JSON
$ruta = __DIR__ . '/data/productos.json';
echo "Ruta del JSON: " . $ruta . "<br>";
echo "¿Existe el archivo? " . (file_exists($ruta) ? "Sí" : "No") . "<br>";

if(file_exists($ruta)) {
    echo "Contenido del JSON:<br>";
    echo "<pre>";
    echo file_get_contents($ruta);
    echo "</pre>";
}
?>