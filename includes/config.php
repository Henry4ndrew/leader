<?php
define('BASE_URL', '/leader'); //Nombre del archivo base

define('WHATSAPP_NUMBER', '59165505506'); //(código país + número)

define('FACEBOOK_URL', 'https://www.facebook.com/tu-pagina'); 
define('INSTAGRAM_URL', 'https://www.instagram.com/tu-usuario'); 
define('TIKTOK_URL', 'https://www.tiktok.com/@tu-usuario'); 
define('CONTACT_EMAIL', 'henryandrew777@gmail.com');

// Código de distribuidor DXN
define('DXN_CODE', '610099281'); 




// Retorna el tipo de llamada de acción para afiliación deacuerdo al tipo de página que ons encontramos
function getCTAVersion() {
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    $salud_pages = ['salud', 'tienda-virtual'];
    if (in_array($current_page, $salud_pages)) {
        return 'salud';
    }
    return 'general';
}
?>



