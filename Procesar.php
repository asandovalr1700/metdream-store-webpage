<html>
<title>Procesar</title>
<head>
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

		#content {
			font-size: 20px;
			background-image: url(bgnfix.jpg);
			background-attachment: fixed;
			padding: 50px;
			margin: 20px auto;
			max-width: 600px;
			color: white;
			
			-webkit-box-shadow:  1px 1px 5px 3px rgba(0, 0, 0, 0.2);
     		box-shadow:  1px 1px 5px 3px rgba(0, 0, 0, 0.2);
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
</head>

<body>
<?php 
   include("Conexion.php");
   
  $nombre=$_GET['nombre'];
  $apellidos=$_GET['apellidos'];
  $email=$_GET['email'];
  $dir=$_GET['direccion'];
  $cp=$_GET['cp'];
  $tel=$_GET['telefono'];
  $cant=$_GET['cant'];
  $subtotal=$cant*80;
  $iva=$subtotal*0.16;
  $total=$subtotal+$iva;
  $ncuenta=$_GET['ncuenta'];
  
  if ($_GET['talla']=="a1")
	{
		$talla="Chica";
	}
	else
	{
		if ($_GET['talla']=="a2")
		{
			$talla="Mediana";
		}
		else
		{
			if ($_GET['talla']=="a3")
			{
				$talla="Grande";
			}
		}
	}
  
  if ($_GET['fpago']=="a")
	{
		$formapago="Visa";
	}
	else
	{
		if ($_GET['fpago']=="b")
		{
			$formapago="MasterCard";
		}
		else
		{
			if ($_GET['fpago']=="c")
			{
				$formapago="PayPal";
			}
		}
	}

  
  
  
 if ($_GET['nprod']=="1")
	{
		$nprod="Linea 1";
	}
	else
	{
		if ($_GET['nprod']=="2")
		{
			$nprod="Linea 2";
		}
		else
		{
			if ($_GET['nprod']=="3")
			{
				$nprod="Linea 3";
			}
			else
			{
				if ($_GET['nprod']=="4")
				{
					$nprod="Linea 4";
				}
				else
				{
					if ($_GET['nprod']=="5")
					{
						$nprod="Linea 5";
					}
					else
					{
						if ($_GET['nprod']=="6")
						{
							$nprod="Linea 6";
						}
						else
						{
							if ($_GET['nprod']=="7")
							{
								$nprod="Linea 7";
							}
							else
							{
								if ($_GET['nprod']=="8")
								{
									$nprod="Linea 8";
								}
								else
								{
									if ($_GET['nprod']=="9")
									{
										$nprod="Linea 9";
									}
									else
									{
										if ($_GET['nprod']=="10")
										{
											$nprod="Linea 10";
										}
										else
										{
											if ($_GET['nprod']=="11")
											{
												$nprod="Linea 11";
											}
											else
											{
												if ($_GET['nprod']=="12")
												{
													$nprod="Linea 12";
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
  
  
  if ($_GET['nprod']=="1")
	{
		$id_p=187268;
	}
	else
	{
		if ($_GET['nprod']=="2")
		{
			$id_p=278328;
		}
		else
		{
			if ($_GET['nprod']=="3")
			{
				$id_p=391823;
			}
			else
			{
				if ($_GET['nprod']=="4")
				{
					$id_p=491038;
				}
				else
				{
					if ($_GET['nprod']=="5")
					{
						$id_p=592830;
					}
					else
					{
						if ($_GET['nprod']=="6")
						{
							$id_p=603984;
						}
						else
						{
							if ($_GET['nprod']=="7")
							{
								$id_p=737824;
							}
							else
							{
								if ($_GET['nprod']=="8")
								{
									$id_p=803639;
								}
								else
								{
									if ($_GET['nprod']=="9")
									{
										$id_p=941268;
									}
									else
									{
										if ($_GET['nprod']=="10")
										{
											$id_p=103468;
										}
										else
										{
											if ($_GET['nprod']=="11")
											{
												$id_p=117389;
											}
											else
											{
												if ($_GET['nprod']=="12")
												{
													$id_p=121224;
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
		
  

	  
   
   $insertar = "insert into datos_personales (numero_de_cta, nombre, apellidos, email, direccion, cp, telefono, forma_pago, nombre_prod, talla, cantidad,iva, subtotal, total) 
   values ('$ncuenta', '$nombre', '$apellidos', '$email', '$dir', '$cp', '$tel', '$formapago', '$nprod', '$talla', '$cant', '$iva', '$subtotal', '$total')";
   
   $insertar2 = "insert into playera(id_producto)values('$id_p')";
if (mysql_query($insertar) && mysql_query($insertar2))
            {					
			 echo "<div id=content>";
			 echo "Transaccion exitosa...."."<br>"."Porfavor presiona continuar para regresar al menu y consultar tu pedido."."<br>"."<br>";
			 echo "<center>"."<form method=POST>"."<input type=submit value=&nbsp;Contrinuar&nbsp; class=btn formaction=Recibo.php>";
			 echo "</form>";
			 echo "</div>";
			 //header ("Location: Recibo.php");
            }
          	else
				{
				   header("HTTP/1.0 404 Not Found");
				}
         
          mysql_close($link);
     ?>
</body>
</html>