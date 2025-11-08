<?php 
// --- Conexión a la base de datos ---
$servername ="sql312.infinityfree.com";
$username = "if0_40302812";
$password = "Bua0p48j8mWGc";
$dbname = "if0_40302812_playeras";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
?>