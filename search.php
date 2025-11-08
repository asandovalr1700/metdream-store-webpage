<?php
// --------------------
// Configuración inicial
// --------------------
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');

// Credenciales de conexión
$servername ="sql312.infinityfree.com";
$username = "if0_40302812";
$password = "Bua0p48j8mWGc";
$dbname = "if0_40302812_playeras";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

// --------------------
// Procesar búsqueda
// --------------------
$query = isset($_GET['q']) ? trim($_GET['q']) : "";
?>
<html> 
  <head> 
  <title>Resultados de búsqueda - Met Dream</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <style>
    *{
      font-family:BordaBold;
      color: white; 
      text-shadow: black 0.1em 0.1em 0.2em;
    }

    @font-face{
      font-family: BordaBold;
      src:url(fuentes/BordaBold.ttf);
    }

    body {
      background-image: url(bgn.jpg);
      background-attachment: fixed;
      margin: 0;
    }

    #menu {
      background-color: rgba(0,0,0,0.6);
      padding: 20px;
      margin: 10px auto;
      max-width: 1800px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    #menu:hover{
      background-color: rgba(99,140,134,0.6);
    }

    .btn {
      font-size: 20px;
      background-color: rgba(0,0,0,0.6);
      padding: 8px 15px;
      border-radius: 6px;
      border: 2px solid black;
      cursor: pointer;
      text-decoration: none;
      color: white;
    }

    .btn:hover {
      background-color: rgba(99,140,134,0.6);
      box-shadow: inset 0 0 0 3px white;
    }

    #titulo {
      background-color: rgba(0,0,0,0.6);
      padding: 10px;
      margin: 10px auto;
      max-width: 900px;
      text-align: center;
      font-size: 100px; 
    }

    .search-bar {
      display: flex;
      align-items: center;
      background-color: rgba(0,0,0,0.6);
      border: 2px solid black;
      border-radius: 6px;
      padding: 5px;
    }

    .search-bar input {
      background: transparent;
      border: none;
      color: white;
      font-size: 18px;
      padding: 5px;
      width: 200px;
      outline: none;
    }

    .search-bar button {
      background-color: rgba(99,140,134,0.8);
      border: none;
      color: white;
      font-size: 18px;
      padding: 5px 10px;
      border-radius: 4px;
      cursor: pointer;
    }

    .search-bar button:hover {
      background-color: rgba(99,140,134,1);
    }

    #content {
      font-size: 20px;
      background-image: url(bgnfix.jpg);
      background-attachment: fixed;
      padding: 30px;
      margin: 20px auto;
      max-width: 1200px;
      box-shadow: 1px 1px 5px 3px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    /* ----- Tarjetas de producto con hover ----- */
    .producto {
      background-color: rgba(0,0,0,0.6);
      border: 2px solid black;
      border-radius: 10px;
      padding: 15px;
      margin: 15px;
      width: 250px;
      text-align: center;
      display: inline-block;
      vertical-align: top;
      position: relative;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .producto:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px rgba(255,255,255,0.4);
    }

    .producto img {
      width: 200px;
      height: 200px;
      border-radius: 8px;
      object-fit: cover;
    }

    .botones {
      position: absolute;
      bottom: 10px;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-evenly;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .producto:hover .botones {
      opacity: 1;
    }

    .boton-accion {
      background-color: rgba(99,140,134,0.8);
      border: 2px solid black;
      color: white;
      font-size: 16px;
      border-radius: 6px;
      padding: 5px 10px;
      cursor: pointer;
      text-decoration: none;
    }

    .boton-accion:hover {
      background-color: rgba(99,140,134,1);
    }

  </style>
  </head> 
  <body> 

  <!-- Menú superior -->
  <div id="menu"> 
    <form action="pA.php" method="post">
      <input type="submit" value="Inicio" class="btn" formaction="index1.html">
      <input type="submit" value="Productos" class="btn" formaction="products.php">
      <input type="submit" value="Conócenos" class="btn" formaction="about.php">
      <input type="submit" value="Contacto" class="btn" formaction="contact.php">
      <!--<input type="submit" value="Pedidos" class="btn" formaction="Recibo.php">-->
    </form>

    <!-- Barra de búsqueda -->
    <form class="search-bar" action="search.php" method="get">
      <input type="text" name="q" placeholder="Buscar productos..." value="<?php echo htmlspecialchars($query); ?>" required>
      <button type="submit">🔍</button>
    </form>

    <!-- Botón de carrito -->
    <button class="btn" onclick="window.location.href='cart.php'">
  🛒 Carrito (<span id="cart-count">0</span>)
</button>

  </div>

  <div id="titulo">
    <img src="logo.png" width="125" height="102">
    "Met Dream"
  </div>

  <div id="content">
    <?php
    if ($query !== "") {
        echo "<h2>Resultados para: " . htmlspecialchars($query) . "</h2>";

        // Consulta segura
        $sql = "SELECT nombre_prod, precio, imagen_url, descripcion 
                FROM playera 
                WHERE nombre_prod LIKE CONCAT('%', ?, '%') 
                   OR descripcion LIKE CONCAT('%', ?, '%')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $query, $query);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='producto'>";
                if (!empty($row["imagen_url"])) {
                    echo "<img src='" . htmlspecialchars($row["imagen_url"]) . "' alt='" . htmlspecialchars($row["nombre_prod"]) . "'><br>";
                }
                echo "<h3>" . htmlspecialchars($row["nombre_prod"]) . "</h3>";
                echo "<p>Precio: $" . number_format($row["precio"], 2) . "</p>";
                echo "<p>" . htmlspecialchars($row["descripcion"]) . "</p>";

                // Botones de acción
                echo "<div class='botones'>";
                echo "<a class='boton-accion' href='checkout.php?producto=" . urlencode($row["nombre_prod"]) . "'>Comprar</a>";
                echo "<a class='boton-accion' href='add_to_cart.php?nombre=" . urlencode($row["nombre_prod"]) . "&precio=" . urlencode($row["precio"]) . "'>Añadir al carrito</a>";
                echo "</div>";

                echo "</div>";
            }
        } else {
            echo "<p>No se encontraron productos con ese término.</p>";
        }

        $stmt->close();
    } else {
        echo "<p>No se ingresó ningún término de búsqueda.</p>";
    }

    $conn->close();
    ?>
  </div>
      
      <script>
function actualizarContadorCarrito() {
  fetch('cart_count.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('cart-count').textContent = data;
    });
}

// Actualiza el contador automáticamente cada 3 segundos
setInterval(actualizarContadorCarrito, 3000);
actualizarContadorCarrito();
</script>


 </body> 
</html>
