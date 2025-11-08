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
<?php 
   include("Conexion.php"); 
 
   $id=$_GET['id']; 
    $borra="delete from datos_personales where numero_de_cta = $id"; 
       
mysql_query ($borra);

if (mysql_query($borra))
            {

 echo "<br>"."<center><P><H1>Se elimino el registro satisfactoriamente</P>";

              echo "<div id=content>";
			 echo "Porfavor presiona continuar para regresar al menu y consultar tus pedido."."<br>"."<br>";
			 echo "<center>"."<form method=POST>"."<input type=submit value=&nbsp;Continuar&nbsp; class=btn formaction=Recibo.php>";
			 echo "</form>";
			 echo "</div>";
            }
          else
            {
               echo "<P>Se ha producido un error, Posiblemente hay datos  ligados</P>";
               
            }
         
          mysql_close($link);

    ?>