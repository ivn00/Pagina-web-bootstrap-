<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this page -->
		<link href="css/estils.css" rel="stylesheet">
		<link href="css/carousel.css" rel="stylesheet">

	</head>
	
	<body>
		<div class="container">

		  <!-- Static navbar -->
		  <nav class="navbar navbar-default">
			<div class="container-fluid">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Equipos de Futbol</a>
			  </div>
			  <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				  <li class="active"><a href="index.php">Home</a></li>
				  <li><a href="mostrar1.php">Mostrar1</a></li>
				  <li><a href="mostrar2.php">Mostrar2</a></li>
				  <li><a href="formulario1.php">Insertar</a></li>
				  <li><a href="formulario2.php">Eliminar</a></li>
				  <li><a href="formulario3.php">Modificar</a></li>
				</ul>
			  </div>
			</div>
		   </nav>
		</div>
		<?php
			$servidor = "localhost";
			$usuari = "root";
			$password = "";
			$db = "futbol";

			// Create connection
			$conn = new mysqli($servidor, $usuari, $password, $db);
			$conn->set_charset("utf8");
			// Check connection
			if ($conn->connect_error) {
				die("Connexió KO: " . $conn->connect_error);
			} 
			else {

				$sql = "SELECT codi, nom, codiequip FROM titols ";
				$sq2 = "SELECT codi, nom, escut, web, localitat FROM equips ORDER BY nom ASC";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					echo "<table class=\"table table-striped\">";
					echo "<tr><th>codi</th><th>nom</th><th>codiequip</th></tr>";
					while($row = $result->fetch_assoc()) {
						echo "<tr> <td>". $row["codi"]. "</td> <td>". $row["nom"]. "</td> <td>". $row["codiequip"]. "</td> </tr>";					
					}
					echo "</table>";
				}
			}
		?>
		
	</body>
	
</html>