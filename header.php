<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Logibres</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="/logibres/css/jquery-ui.css">
		<link rel="stylesheet" href="/logibres/css/bootstrap.css">
		<link rel="stylesheet" href="/logibres/css/style.css">	
		<link rel="stylesheet" href="/logibres/css/jquery-ui.theme.css">	
		<!-- jQuery library -->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="/logibres/js/jquery-ui.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="/logibres/js/bootstrap.min.js"></script>
		<?php wp_head();?>
		<style>
			.barrasuperior{
				background:#bc2224;
				height:40px;
				border-bottom: 5px solid #F21D2F;
				
			}
			.barrasuperior2{
			
			}
			body{
				background:#fafafa;
				
				background-image: -webkit-gradient(
					linear,
					right top,
					right bottom,
					color-stop(0.21, #FFFFFF),
					color-stop(0.8, #DADADA)
				);
				background-image: -o-linear-gradient(bottom, #FFFFFF 21%, #DADADA 80%);
				background-image: -moz-linear-gradient(bottom, #FFFFFF 21%, #DADADA 80%);
				background-image: -webkit-linear-gradient(bottom, #FFFFFF 21%, #DADADA 80%);
				background-image: -ms-linear-gradient(bottom, #FFFFFF 21%, #DADADA 80%);
				background-image: linear-gradient(to bottom, #FFFFFF 21%, #DADADA 80%);
		}
			.logo{
				
				height:90px;
				background:blue;
			}
			.buscar{
				width: 240px;
				height: 40px;
				margin: 0 auto;
				margin-top: 30px;
			}
			.buscar input{
				border-color:#F21D2F;
				background-color: rgb(255,224,224);
			}
			.slidecabecera{
				padding. 0px !important;
			}
			.carusel.slide{
				width: 980px;
				margin 0px auto;
				
			}
			
			
			.barra{
				border-top: 5px solid #62B7D9;
				width:1030px;
				background-color:#4982A6;
			}
			.barra ul li a{
				color:silver;
				font-size:15px;
				
			}
			.barra ul li{
				border-right-color:1px solid gray;
			}
			
		</style>
		
	</head>
	<body>
		
				<div class="col-md-12 barrasuperior">
					
				</div>
				
			
		<div class="container">
			
			<header class="row encabezado1">
				
				<div class="col-md-6 logo"></div>
						
					<div class="col-md-6">
						<form id="search " class="buscar" action="/search" method="get" autocomplete="off">
							<input name="q" type="text" placeholder="buscar" value="" tabindex="1" autocomplete="off" maxlength="240" style="width: 188px; max-width: 188px;">
						</form>
					</div>
					<br>
					<!--slidecabezera-->
					<div class="col-md-12 slidecabezera">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
							 <ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
							</ol>
							<!-- Wrapper for slides -->
							 <div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="http://alianzalogisticajc.com/images/Slide3a.jpg" alt="Chania">
								</div>
								<div class="item">
									 <img src="http://alianzalogisticajc.com/images/Slide3a.jpg" alt="Chania">
								</div>
								<div class="item">
									 <img src="http://alianzalogisticajc.com/images/Slide3a.jpg" alt="Flower">
								</div>
								<div class="item">
									 <img src="http://alianzalogisticajc.com/images/Slide3a.jpg" alt="Flower">
								</div>
							 </div>
							 <!-- Left and right controls -->
							 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							 </a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>	
					</div>
					<!--slidecabezera-->
					<div class="col-md-12 barra">
						<nav class="navbar navbar navbar-static-top " role="navigation">
 							<ul class="nav navbar-nav">
								<li class="text-center rightspan active"><a href="#">Inicio</a></li>
								<li ><a href="#">Quienes Somos</a></li>
								<li><a href="#">Productos</a></li>
								<li><a href="#">Servicios</a></li>
								<li><a href="#">Noticias</a></li>
								<li><a href="#">Contacto</a></li>
 							</ul>
						</nav>
					</div>
				</div>	
			</header>
			
		</div>
	</body>
</html>