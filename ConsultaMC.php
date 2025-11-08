<html>
<head>
	<title>Consultas con pago con tarjeta Mastercard</title>
</head>
<style>
*{
			
			font-family:BordaBold;
			color: white; text-shadow: black 0.1em 0.1em 0.2em
			
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
		
		h5 {
			text-align: center;
			font-size: 36px;
		}

		.content {
			font-size: 20px;
			background-image: url(bgnfix.jpg);
			background-attachment: fixed;
			padding: 20px;
			margin: 20px auto;
			max-width: 700px;
			color: white;
			
			-webkit-box-shadow:  1px 1px 5px 3px rgba(0, 0, 0, 0.2);
     		box-shadow:  1px 1px 5px 3px rgba(0, 0, 0, 0.2);
		}
		
		.tabla {
			font-size: 20px;
		}
		
		
		.btn {
			font-size: 20px;
			background-color: rgba(0,0,0,0.6);
			padding: 8px 0;
			border-radius: 6px;
    		border: 2px solid black;
		}
		
		.btn:hover {
			background-color: rgba(99,140,134,0.6);
			color: white;
			box-shadow: inset 0 0 0 3px white;
		}
		

		#titulo {
			background-color: rgba(0,0,0,0.6);
			padding: 10px;
			margin: 10px auto;
			max-width: 900px;
			text-align: center;
			font-family:BordaBold;
			color: white;
			font-size: 100px; 
		}
		
		.go {
			background-color: rgba(0,0,0,0.6);
			padding: 8px 0;
			font-size: 20px;
		}
		
		.go:hover {
			background-color: rgba(99,140,134,0.6);
			color: white;
		}
		
		#map {
        height: 400px;
        width: 100%;
       }
</style>
<Body>
<h1><center>Pagos con tarjeta Mastercard</h1>
<font color="#FFFFFF">
<?php
	include("Conexion.php");
	
	$result=mysql_query("select * from datos_personales where forma_pago='Mastercard'",$link);
?>
<table border width="100%" cellpadding="7px" align="center" class="content">
		<tr><td><b>Numero de cuenta:</b></td><td><b>Nombre:</b></td><td><b>Apellidos:</b></td><td><b>E-mail:</b></td><td><b>Dirección:</b></td><td><b>C.P.</b></td><td><b>Teléfono:</b></td><td><b>Forma de pago:</b></td><td><b>Nombre del producto:</b></td><td><b>Talla:</b></td><td><b>Cantidad:</b></td><td><b>IVA:</b></td><td><b>Subtotal: </b></td><td><b>Total a pagar:</b></td></tr>
	
	<?php		

	while($row = mysql_fetch_array($result )) {  
	
	echo "<tr>";
	echo "<td>".$row['numero_de_cta'];
	echo "<td>".$row['nombre'];
	echo "<td>".$row['apellidos'];
	echo "<td>".$row['email'];
	echo "<td>".$row['direccion'];
	echo "<td>".$row['cp'];
	echo "<td>".$row['telefono'];
	echo "<td>".$row['forma_pago'];
	echo "<td>".$row['nombre_prod'];
	echo "<td>".$row['talla'];
	echo "<td>".$row['cantidad'];
	echo "<td>".$row['iva'];
	echo "<td>".$row['subtotal'];
	echo "<td>".$row['total'];
	echo "</tr>";
	}


	mysql_free_result($result); 

	mysql_close($link);
	?>
</table>
<center>
<form> 
<input type='button' onclick='window.print();' value='Imprimir' class="btn"></form>
</body>
</html>