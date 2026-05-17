<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fidel DXN</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header class="bg-green-600 text-white p-4">
    <nav class="flex gap-4">
        <a href="<?= BASE_URL ?>/">Inicio</a>
        <a href="<?= BASE_URL ?>/mi-empresa">Mi Empresa</a>
        <a href="<?= BASE_URL ?>/oportunidad">Oportunidad</a>
        <a href="<?= BASE_URL ?>/plan-marketing">Plan</a>
        <a href="<?= BASE_URL ?>/salud">Salud</a>
        <a href="<?= BASE_URL ?>/sobre-mi">Sobre mí</a>
    </nav>
</header>