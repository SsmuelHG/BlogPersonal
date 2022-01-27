<!doctype html>
<!--
	Author by FreeHTML5.co
	Twitter: https://twitter.com/fh5co
	Facebook: https://fb.com/fh5co
	URL: https://freehtml5.co
-->
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slick.css">
	<title>Blog Personal</title>
</head>
<body>

	<!-- Navigation -->
	<nav class="site-navigation">
		<div class="site-navigation-inner site-container">
			<img src="./images/site-logo.png" alt="site logo">
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><a href="#">Homepage</a></li>
					<li><a href="#">Page 1</a></li>
					<li><a href="#">Page 2</a></li>
					<li><a href="#">Page 3</a></li>
					<li><a href="#">Page 4</a></li>
				</ul>
			</div>
			<div id="myBtn" class="burger-container" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<script>
				function myFunction(x) {
					x.classList.toggle("change");
				}
			</script>

		</div>
	</nav>
	<!-- Navigation end -->

	<!-- Top banner -->
	<section class="fh5co-top-banner">
		<div class="top-banner__inner site-container">
			<div class="top-banner__image">
				<img src="./images/43.jpg" alt="author image">
			</div>
			<div class="top-banner__text">
				<div class="top-banner__text-up">
					<span class="brand-span">Hola soy</span>
					<h2 class="top-banner__h2">Samuel</h2>
				</div>
				<div class="top-banner__text-down">
					<h2 class="top-banner__h2">Hernandez</h2>
                    @yield('Default')
					
				
	</section>
	<!-- Top banner end -->

	<!-- About me -->
	<section class="fh5co-about-me">
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				<div class="portfolio__img">
					<img src="./images/321.jpg" class="about-me__profile" alt="about me profile picture">
				</div>
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<span></span>
						<h2 class="universal-h2">Erik Samuel Hernandez Garcia</h2>
					
			</article>
			<div class="about-me__text">
				<div class="about-me-slider">
					<div class="about-me-single-slide">

                        @Yield('Titulo')
						@yield('Informacion')
						
                        @yield('estatico')
						
					</div>
					<div class="about-me-single-slide">
		
                        @Yield('Titulo2')
					
						@yield('InformacionExtra')
                        @yield('estatico')
                        
						
					</div>
				</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
	</section>
	

	<!-- Blog -->
	<section class="fh5co-blog">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">My Hobbies</h2>
			<div class="blog-slider blog-inner">
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/videojuego.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>Jugar Videojuegos</h4>
						<p>Una de las cosas que me gustan hacer en mi tiempo libre es jugar videojuegos con mis amigos, aunque cabe aclara que la mayor parte de mi tiempo no puedo por diversas actividades pero cuando encuentro el tiempo es cuando juego  </p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/guitar.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
                        <h4>Tocar Guitarra</h4>
						<p>Tocar la Guitarra sin duda es mi Hobbi favorito debido a que es algo que me disfruto hacer, anteriormente estaba en un grupo en el cual podia disfrutar mas de mi Hobbie actualmente simplemente lo hago cuando tengo tiempo de sobra </p>
					</div>
				</div>
				
	</section>
	<!-- Blog end -->

	<!-- Quotes -->
	<section class="fh5co-quotes">
		<div class="site-container">
			<div class="about-me-slider">
				<div>
					<h2 class="universal-h2 universal-h2-bckg">Bibliografia</h2>
					<p>Soy originario del Estado de mexico hasta el momento estoy cursando la carrera de Ingenieria en Software en la Universidad ya antes mencionada. Tengo 1 hermana y a mis dos padres</p>
					<p>Esperen la actualizacion del blog muchas gracias por visitar</p>
                   
					
				</div>
				
		</div>
	</section>
	<!-- Quotes end -->

	<!-- Social -->
	<section class="fh5co-social">
		<div class="site-container">
			<div class="social">
				<h5>Sigueme!!</h5>
				<div class="social-icons">
					<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
					<a href="#" target="_blank"><img src="./images/social-pinterest.png" alt="social icon"></a>
					<a href="#" target="_blank"><img src="./images/social-youtube.png" alt="social icon"></a>
					<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
				</div>
				<h5>Comparte para crecer en la comunidad!</h5>
			</div>
		</div>
	</section>
	<!-- Social -->

	<!-- Footer -->
	<footer class="site-footer">
		<div class="site-container">
			<div class="footer-inner">
				<div class="footer-info">
					<div class="footer-info__left">
						<img src="./images/insta.jpg" alt="about me image">
						<p>Sigueme en instagram</p>
                        
					</div>
					<div class="footer-info__right">
						<h5>Medios de Contacto</h5>
						<p class="footer-phone">Telefono: 5547074139</p>
						<p>Correo Electronico: samuel@gmail.com</p>
						<div class="social-icons">
						
						</div>
					</div>
				</div>

				<div class="footer-contact-form">
					<h5>Dejame tu comentario</h5>
					<form class="contact-form">
						<div class="contact-form__input">
							<input type="text" nombre="nombre" placeholder="Nombre">
							<input type="email" name="email" placeholder="Email">
						</div>
						<textarea></textarea>
						<input type="enviar" name="enviar" value="enviar" class="submit-button">
					</form>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- Footer end -->

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>