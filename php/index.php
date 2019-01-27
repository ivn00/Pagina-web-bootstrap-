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
							<a class="navbar-brand" href="#">Equipos de Futbol </a>
						</div>
						
						<div id="navbar" class="navbar-collapse collapse" >
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


    <!-- Carousel -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img class="first-slide" src="img/camp nou.jpg" alt="First slide">
				  <div class="container">
					<div class="carousel-caption">
					  <h1>Barcelona vs Madrid</h1>
					  <p>El talento depende de la inspiración, pero el esfuerzo depende de cada uno(Pep Guardiola)</p>					 
					</div>
				  </div>
				</div>
				<div class="item">
				  <img class="second-slide" src="img/futbolc.jpg" alt="Second slide">
				  <div class="container">
					<div class="carousel-caption">
					  <h1>Futbol Chino</h1>
					  <p>La Superliga de la Asociación China de Fútbol, conocida comúnmente como Superliga de China y actualmente llamada Superliga </p>
					</div>					
				  </div>
				</div>
				<div class="item">
				  <img class="third-slide" src="img/fot.jpg" alt="Third slide">
				  <div class="container">
					<div class="carousel-caption">
					  <h1>Boca Junior</h1>
					  <p>Uno de los equipos más grandes y cononidos de la copa America,junto al River.</p>
					</div>
				  </div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
	<!-- /.carousel -->
	
	<!-- jumbotron -->
	
		<div class="jumbotron jumbotron-fluid">
		  <div class="container">
			<h1 class="display-3"> jumbotron</h1>
			<p class="lead">Esta Pagina de Futbol contiene alguno de los equipos de la liga santander y de la liga 1,,3</p>
		  </div>
		</div>

	<!-- /jumbotron -->
	
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

		<div class="container marketing">

		  <!-- Three columns of text below the carousel -->
		  <div class="row">
			<div class="col-lg-4">
			  <img class="img-circle" src="/AW/php/img/insta.png" alt="Generic placeholder image" width="140" height="140">
			  <h2>Instagram</h2>
			  <p>Sigue nuestra pagina en instagram</p>
			 
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
			  <img class="img-circle" src="/AW/php/img/facebook.jpg" alt="Generic placeholder image" width="140" height="140">
			  <h2>Facebook</h2>
			  <p>Sigue nuestra pagina en facebook</p>
			 
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
			  <img class="img-circle" src="/AW/php/img/twitter.png" alt="Generic placeholder image" width="140" height="140" >
			  <h2>Twiter</h2> 
			  
			  <p>Sigue nuestra pagina en twitter</p>
			 <href="http://www.twitter.com">
			</div><!-- /.col-lg-4 -->
		  </div><!-- /.row -->   
			
		</div>
		<!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
   
	</body>
</html>
