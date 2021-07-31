<!DOCTYPE html>
<html>
	<head>
		<!--permite colocar 'ñ' o tildes sin caracteres extraños-->
		<meta charset="utf-8">
		<!--resumen de 140 caracteres de lo que trata la web.Aparece en el navergador-->
		<meta name="description" content="Pagina de practica inspirada en Coca cola">
		<!--palabras claves usadas por el navegador para mostrar nuestra pagina cuando el usuario busca esas palabras-->
		<meta name="keywords" content="bebida, gaseosa, cola">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Inicio - Coca Cola
		</title>
		<link rel="shortcut icon" href="img/favicon.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<!--Google fonts (para cargar fuentes modernas)-->
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<!--Normalizar las propiedades para que todos los navegadores los interpreten igual-->
		<link rel="stylesheet"  href="css/normalize.css">
		<link rel="stylesheet" href="style.css">
		<!--Fonts Awesome (para cargar iconos)-->
		<script src="https://kit.fontawesome.com/400f9f9b4e.js" crossorigin="anonymous"></script>

	</head>
	<body>
		<header>
			<div class="container">
				<a href="index.php">
					<img src="img/logo.svg" class="logo">
				</a>
				<nav>
					<!--'#inicio' hace referencia a una seccion que tiene como id 'inicio'-->
					<a href="#inicio">Inicio</a>
					<a href="#nosotros">Nosotros</a>
					<a href="#servicios">Servicios</a>
					<a href="#galeria">Galería</a>
					<a href="#contactenos">Contáctenos</a>
				</nav>
				<a href="#" class="hamb"><i class="fas fa-bars"></i></a>
			</div>
		</header>
		<main>
			<section id="inicio">
				<img src="img/bannerprincipal.jpg">
				<div class="bloque-inicio">
					<h1>Bienvenidos a Coca Cola</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis accumsan nunc, aliquet bibendum sem. Ut ornare, ante quis vulputate imperdiet, velit turpis vehicula dui, quis lobortis est est quis lorem.
					</p>
					<a href="#nosotros" class="boton boton-rojo">Ver más</a>
				</div>
			</section>
			<section id="nosotros" class="seccion">
				<div class="container">
					<p>
					 	Nulla dapibus risus vitae pharetra hendrerit. Nam sed mi vel diam volutpat rutrum commodo et eros. Nullam lorem nisi, blandit eget sagittis at, lobortis in ligula. Nulla tincidunt a nibh tristique facilisis. Duis viverra tincidunt purus at condimentum. 
					</p>
				</div>
			</section>
			<section id="servicios" class="seccion">
				<div class="container">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio1.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 1</h3>
									<p>
										Sed quis metus sit amet nibh suscipit mattis. Maecenas varius, metus at cursus lobortis, risus arcu mollis tellus, at faucibus risus odio nec odio. Sed nec sollicitudin risus. Duis tristique lectus at porta semper. Sed in leo sit amet ipsum mollis eleifend. 
									</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio2.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 2</h3>
									<p>
										Sed quis metus sit amet nibh suscipit mattis. Maecenas varius, metus at cursus lobortis, risus arcu mollis tellus, at faucibus risus odio nec odio. Sed nec sollicitudin risus. Duis tristique lectus at porta semper. Sed in leo sit amet ipsum mollis eleifend. 
									</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
									
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio3.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 3</h3>
									<p>
										Sed quis metus sit amet nibh suscipit mattis. Maecenas varius, metus at cursus lobortis, risus arcu mollis tellus, at faucibus risus odio nec odio. Sed nec sollicitudin risus. Duis tristique lectus at porta semper. Sed in leo sit amet ipsum mollis eleifend. 
									</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</section>
			<section id="galeria">
				<div class="container-fluid">
					<div class="row">
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio1.jpg">
								<h4>Imagen 1</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio2.jpg">
								<h4>Imagen 2</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio3.jpg">
								<h4>Imagen 3</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio1.jpg">
								<h4>Imagen 4</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio2.jpg">
								<h4>Imagen 5</h4>
							</div>
						</div>
						<div class=" columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio3.jpg">
								<h4>Imagen 6</h4>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<section id="contactenos" class="seccion">
				<iframe width="520" height="400" frameborder="0"  id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Ramos%20Mejia+(argentina)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> 
				<div class="container-fluid">
					<div class="row">
						<div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
							<form action="index.php" method="post">
								<div class="form-block">
									<input type="text" name="nombre" class="form-control" placeholder="Nombre">
								</div>
								<div class="form-block">
									<input type="email" name="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-block">
									<textarea name="mensaje" placeholder="Mensaje">
									</textarea>
								</div>
								<div class="form-block bloque-ultimo">
									<input type="submit" class="boton boton-negro" value="Enviar">
								</div>
								<?php
									if($_SERVER["REQUEST_METHOD"]=="POST")
									{
										$nombre=$_POST["nombre"];
										$email=$_POST["email"];
										$mensaje=$_POST["mensaje"];

										if(isset($nombre))
										{
											if(isset($email))
											{

												if(isset($mensaje))
												{
													$para="jesica.sieiro@gmail.com";
													$asunto="Esto es una prueba";
													$cuerpo= $nombre."\n".$email."\n".$mensaje;
													$adicional="From: jesica.sieiro@gmail.com";

													mail($para, $asunto, $cuerpo , $adicional);
													?>
													<p>Envio exitoso!</p>
													<?php
												}
											}
										}
									}
								?>
							</form>
						</div>
					</div>
					
				</div>
				
			</section>
		</main>
		<footer >
			<div class="container">
				<div class="row">
					<div class="columna columna-25 columna-mobile-100">
						<img src="img/logo-blanco.png" class="logo-footer">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis accumsan nunc, aliquet bibendum sem. Ut ornare, ante quis vulputate imperdiet, velit turpis vehicula dui, quis lobortis est est quis lorem. 
						</p>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Temas relacionados
						</h3>
						<ul>
							<li><a href="#">Tema 1</a></li>
							<li><a href="#">Tema 2</a></li>
							<li><a href="#">Tema 3</a></li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Datos de contacto
						</h3>
						<ul>
							<li>jesica.sieiro@gmail.com</li>
							<li>+541521742925</li>
							<li>Ramos Mejia - Buenos Aires <br> Argentina</li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Redes Sociales
						</h3>
						<ul class="redes">
							<li>
								<a href="#">
									<i class="fab fa-facebook-square"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter-square"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-instagram-square"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="barra-footer">
				&copy; Derechos reservados - 2021
			</div>
			
		</footer>
		<!--JQUERY-->
		<script src="js/jquery.js"></script>
		<script src="js/funciones.js"></script>

	</body>
</html>