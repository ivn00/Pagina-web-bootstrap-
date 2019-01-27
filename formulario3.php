<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=google">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	
		 <!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		 <!-- Custom styles for this page -->
		<link href="css/carousel.css" rel="stylesheet">
		
	</head>
	
	<!-- NAVBAR-->
    <body>
		<div class="navbar-wrapper">
			<div class="container">

				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							  <span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Equipos de Futbol  </a>
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
		</div>
    <!-- Formulari container
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<br><br><br><br><br><br>
		

		<!-- Formulari -->
			<div class="container marketing">
			
			<form class="form-horizontal" name="formulario3" method="post" action="modificar.php">
				Codi: <input type="text" name="codi" value="">
				Nom: <input type="text" name="nom" value="">
				Localitat: <input type="text" name="localitat" value="">
				Escut: <input type="text" name="escut" value="">
				Web: <input type="text" name="web" value="">
				<input type="submit" value="Modificar">
			</form>
				
			</div>
		<!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
   
	</body>
</html>