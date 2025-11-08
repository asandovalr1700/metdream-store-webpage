<html>
<head>
<title>Recibo</title>
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
			font-size: 30px;
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
</head>
<body>
<div id="titulo">
  <left><img src="logo.png" width="125" height="102"  ></left>&quot;Met Dream&quot;
  </div> 
<div id="content">
<form metod="POST">
<center>Pedidos</center>
<img src="Consulta.png" align="left" width="290px" height="205px"> <br><br>
<input type="submit" value="&nbsp;MasterCard&nbsp;" class="btn" formaction="ConsultaMC.php"> 
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="&nbsp;Visa&nbsp;" class="btn" formaction="ConsultaVisa.php">
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="&nbsp;PayPal&nbsp;" class="btn" formaction="ConsultaPP.php"><br><br><br>
</form>
</div>
<br>
<div id="content">
<form metod="POST">
<center>Cancelar pedidos</center>
<img src="borrar.png" align="left" width="230px" height="205px" hspace="40px"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="&nbsp;Borrar&nbsp;" class="btn" formaction="BorrarD.php"><br><br><br>
</form>
</div>
<form metod="POST">
<center><input type="submit" value="&nbsp;Regresar&nbsp;" class="btn" formaction="pA.php"></form>
</body> 
</html>