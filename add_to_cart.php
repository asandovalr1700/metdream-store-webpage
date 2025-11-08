<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['nombre']) && isset($_GET['precio'])) {
    $producto = [
        'nombre' => $_GET['nombre'],
        'precio' => (float) $_GET['precio']
    ];

    $_SESSION['cart'][] = $producto;
    header("Location: cart.php");
    exit;
}
?>
