<?php 
	
	session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
		<form method="post" action="validar.php"><table>
				<tr>
				<td>Usuario:</td>  <td><input name="user"></td>
				</tr>

				<tr>
				<td>Password:</td> <td><input  name="password"></td>
				</tr>
				<tr><td><button name="login">Enviar</button></td><tr>
				
		</table></form>

 </body>
 </html>


 <?php 
		if(isset($_SESSION['user'])){
			echo '<h1> Hablame </h1>';
			echo '<a href="logout.php"><button>Salir</button></a>';
	}
	
 ?>