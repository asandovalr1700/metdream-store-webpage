<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
?>

<html>
<head>
<meta charset="UTF-8">
<title>Compra completada - Met Dream</title>
</head>
<body style="background-color:black; color:white; text-align:center; font-family:BordaBold;">
<h1>¡Gracias por tu compra!</h1>
<p>Simulación temporal de compra completada.</p>
<a href="products.php" style="color:white;">Volver a productos</a>
<?php
$_SESSION['cart'] = []; // Vaciar carrito
?>
</body>
</html>
