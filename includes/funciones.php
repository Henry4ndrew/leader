<?php

function obtenerProductosPorSerie($serie) {
    $ruta = __DIR__ . '/../data/productos.json';

    if (!file_exists($ruta)) {
        return [];
    }

    $data = json_decode(file_get_contents($ruta), true);

    return $data[$serie] ?? [];
}