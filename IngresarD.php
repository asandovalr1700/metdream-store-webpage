<html>
<head>
<title>Ingresar datos</title>
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body>


<div id="content">
<center><h2>Datos personales</h2></center>
<br>
<br>
<form action="Procesar.php">
Nombre: <input type="text" name="nombre" class="go"> Apellidos: <input type="text" name="apellidos" class="go">
<br><br>
E-mail: <input type="text" name="email" class="go">
<br><br>
Dirección: <input type="text" name="direccion" class="go"> C.P. <input type="text" name="cp" class="go">
<br><br>
Teléfono: <input type="text" name="telefono" class="go">
<br><br>
Forma de pago:
	<select name="fpago" class="go">
    	<option value="a">Visa</option>
    	<option value="b">Mastercard</option>
        <option value="c">PayPal</option>
    </select> 
<br><br>
Numero de cuenta: <input type="text" name="ncuenta" class="go">
<br><br>
Confirmar: <input type="text" name="ncuenta2" class="go">
<br><br>
Nombre del producto: 
	<select name="nprod" class="go">
    	<option value="1">Playera "Línea 1"</option>
    	<option value="2">Playera "Línea 2"</option>
        <option value="3">Playera "Línea 3"</option>
		<option value="4">Playera "Línea 4"</option>
		<option value="5">Playera "Línea 5"</option>
		<option value="6">Playera "Línea 6"</option>
		<option value="7">Playera "Línea 7"</option>
		<option value="8">Playera "Línea 8"</option>
		<option value="9">Playera "Línea 9"</option>
		<option value="10">Playera "Línea A"</option>
		<option value="11">Playera "Línea B"</option>
		<option value="l2">Playera "Línea 12"</option>
    </select> 
<br><br>
Talla: 
<select name="talla" class="go">
<option value="a1">Chica</option>
<option value="a2">Mediana</option>
<option value="a3">Grande</option>
</select>
<br><br>
Cantidad: <input type="text" name="cant" class="go">
<br><br>
<input type="checkbox" name="acepto" class="go" required><a href="cA.php"> Acepto términos y condiciones</a>
<br><br>
<center>
<input type="button" value="Regresar" class="btn" formaction="pB.php">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="&nbsp;Guardar&nbsp;" class="btn">
</form>
</center>
</div>


</body>
</html>
