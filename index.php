<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page == 'home') {
    include 'home.php';
} else {
    // Aquí puedes manejar otras páginas si las tuvieras
    echo "Página no encontrada.";
}
?>
