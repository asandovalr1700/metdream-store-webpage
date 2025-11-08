<html> 
<head> 
   <title>Eliminar Registros</title>
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
</head> 
<body> 
<H1> <CENTER>Pedidos</H1> 

<?php 
   include("Conexion.php"); 
   $result=mysql_query("select numero_de_cta, nombre, apellidos, direccion, nombre_prod from datos_personales= id",$link); 
?> 
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="content"> 
      <TR> <TD>&nbsp;<B>Nombre</b></TD> 
 <TD>&nbsp;<B>Apellidos</B>&nbsp;</TD><TD>&nbsp;<B>Direccion</b></TD><TD>&nbsp;<B>Nombre del producto</B>&nbsp;</TD><TD>&nbsp;<B>Borrar</B>&nbsp;</TD></TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td>&nbsp;%s&nbsp;</td>
	  <td>&nbsp;%s&nbsp;</td>
	  <td>&nbsp;%s&nbsp;</td>
	  <td>&nbsp;%s&nbsp;</td>
	  <td><a href=\"borra.php?id=%d\">Borrar</a></td></tr>", $row['nombre'], $row['apellidos'], $row['direccion'], $row['nombre_prod'], $row['numero_de_cta']); 
   } 
   mysql_free_result($result); 
   mysql_close($link); 
?> 
</table> 
<form metod="POST">
<center><input type="submit" value="&nbsp;Regresar&nbsp;" class="btn" formaction="Recibo.php"></form> 

</body> 
</html> 