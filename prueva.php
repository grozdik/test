<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
	
	<header>
		
	</header>
	<div class="main">
		<div class="container">
			<?php 

				class test 

				{
					function hacerEsto()
					{
						echo "Estoy haciendo un test";
					}
				}


				$test = new test;
				$test ->hacerEsto();
			 ?>
		</div>
	</div>
	
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
		<?php 

		$host = "localhost";
		$user = "root";
		$pass = "";
		$db   = "deltawars";

		$conexion = mysql_connect($host,$user,$pass);

		if ($conexion == true){
			$dbconect =mysql_select_db($db);
			if($dbconect == true){
				echo "conexion exitosa";
			}
			

		}else{
			echo "no conecto";
		}

		$query = mysql_query('SELECT * FROM user');
		
		echo "<table border = '1'> \n"; 
echo "<tr><td>ID</td><td>User<td>Personaje</td></td></tr> \n"; 
while ($row = mysql_fetch_row($query)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</tr> \n"; 
} 
echo "</table> \n"; 
		
		$Sql="insert into infor (ID,User,Personaje,Correo) values('','hola1', 'hola2', 'hola3')"; 
		


		 ?>



</body>
</html>