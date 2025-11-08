<html>
<head>
<title>Documento sin t&iacute;tulo</title>
</head>
<style>
body{
	background: url(fondo3.jpg);
	background-repeat: no-repeat;
	background-size: 100% 1000px;
}

#datos{
	margin: auto;
	height: 180px;
	width: 420px;
	padding: 20px;
	border-style: double;
	border-color: #cc9966;
}

#consulta{
	float:left;
	height: 200px;
	width: 420px;
	padding: 20px;
	border-style: double;
	border-color: #cc9966;
	margin-left: 300px;
}

#borrar{
	float:right;
	height: 200px;
	width: 420px;
	padding: 20px;
	border-style: double;
	border-color: #cc9966;
	margin-right: 300px;
}

</style>
<body>

<br /><br /><br /><br />

<div id="datos">
<img src="Datos.jpg" align="left" width="230px" height="160px" hspace="20px"> <br><br><br><br> <input type="button" value="Ingresar Datos" onClick="location.href='IngresarD.php'">
</div>

<br /><br /><br /><br /><br />

<div id="consulta">
<img src="Consulta.png" align="left" width="290px" height="205px"> 
<br> <input type="button" value="De contado" onClick="location.href='ConsultaC.php'"> 
<br><br><br> <input type="button" value="A 3 meses" onClick="location.href='Consulta3m.php'">
<br><br><br> <input type="button" value="A 6 meses" onClick="location.href='Consulta6m.php'">
</div>


<div id="borrar">
<img src="borrar.png" align="left" width="230px" height="205px" hspace="40px"> <br><br><br><br><br> <input type="button" value="Borrar" onClick="location.href='BorrarD.php'"> 
</div>




</body>
</html>
