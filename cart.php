<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
?>

<html>
<head>
<meta charset="UTF-8">
<title>Tu carrito - Met Dream</title>
<style>
body {
  background-image: url('bgnfix.jpg');
  color: white;
  font-family: BordaBold;
}
table {
  width: 70%;
  margin: 40px auto;
  border-collapse: collapse;
  background-color: rgba(0,0,0,0.6);
}
th, td {
  border: 2px solid black;
  padding: 10px;
  text-align: center;
}
.btn {
  background-color: rgba(99,140,134,0.8);
  border: 2px solid black;
  color: white;
  padding: 8px 15px;
  border-radius: 6px;
  text-decoration: none;
}
.btn:hover {
  background-color: rgba(99,140,134,1);
}
</style>
</head>
<body>
<center>
<h1>🛒 Tu carrito</h1>
<a href="products.php" class="btn">⬅ Seguir comprando</a><br><br>

<?php
if (empty($_SESSION['cart'])) {
    echo "<p>Tu carrito está vacío.</p>";
} else {
    echo "<table>";
    echo "<tr><th>Producto</th><th>Precio</th><th>Acción</th></tr>";

    $total = 0;
    foreach ($_SESSION['cart'] as $index => $item) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($item['nombre']) . "</td>";
        echo "<td>$" . number_format($item['precio'], 2) . "</td>";
        echo "<td><a class='btn' href='remove_from_cart.php?index=$index'>Eliminar</a></td>";
        echo "</tr>";
        $total += $item['precio'];
    }

    echo "<tr><th>Total</th><th colspan='2'>$" . number_format($total, 2) . "</th></tr>";
    echo "</table>";

    echo "<br><a href='checkout.php' class='btn'>Finalizar compra</a>";
}
?>
</center>
</body>
</html>
