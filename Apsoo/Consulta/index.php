<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

<meta charset="ISO-8859-1">

<title>Home</title>

	<link href="css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="css/index.2.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/stylish-portfolio.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<script type="text/javascript" src="jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery-3.1.1.min.js"></script>
<script src="script/validator.min.js"></script>
<script type="text/javascript">
	function carregar(pagina) {
		$("#conteudo2").load(pagina);
	}
</script>
</head>
<body>


	<!-- Navigation -->
	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
	<nav id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
			<li class="sidebar-brand">
				<a href="#top" onclick=$("#menu-close").click();></a>
			</li>
			<li>
				<a href="#top" onclick=$("#menu-close").click();>Menu 01</a>
			</li>
			<li>
				<a href="#about" onclick=$("#menu-close").click();>Menu 02</a>
			</li>
			<li>
				<a href="#services" onclick=$("#menu-close").click();>Menu 03</a>
			</li>
			<li>
				<a href="#portfolio" onclick=$("#menu-close").click();>Menu 04</a>
			</li>
			<li>
				<a href="#contact" onclick=$("#menu-close").click();>Menu 05</a>
			</li>
		</ul>
	</nav>

	<!-- Header -->
	<header id="top" class="header">
		<div class="text-vertical-center">
			<h1>Consulta Médica Online</h1>
			<h3>Seja Bem Vindo!</h3>
			<br>
			<a href="#consultar" class="btn btn-dark btn-lg">Consultar</a>
		</div>
	</header>


	<div id="consultar" class="container-fluid">
		<div class="row">
			<div id="div_pri" class="col-md-12">
				<div id="divlogin">
					<div class="row">
						<div id='menu' class="col-md-6 col-md-push-3 ">
							<ul id="barra_navegacao" class="nav nav-tabs">
								<li class=""><a
										onclick="carregar('pag/paginacao.php?cod=100')" >Nome
										de Usuario</a></li>
								<li class=""><a
										onclick="carregar('pag/paginacao.php?cod=101')" >Numero
										de Carteira</a></li>
								<li class=""><a
										onclick="carregar('pag/paginacao.php?cod=102')" >Numero
										de CPF</a></li>
							</ul>

							<div class="rown">
								<div id="conteudo2" class="col-md-12" >
									<?PHP include 'pag/formemailusuario.html'; ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>







	<!-- Map -->
	<section id="contact" class="map">
		<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
		<br />
		<small>
			<a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
		</small>
		</iframe>
	</section>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 text-center">
					<h4><strong>Equipe de Desenvolvimento</strong>
					</h4>
					<p>Jackson Passos
						<br>Josimar
						<br>José
						<br>Alexandre
						<br>Alexsandro Pires
						<br>Rafael
					</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-phone fa-fw"></i> (85) 3011.4345</li>
						<li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">fametro@fametro.com</a>
						</li>
					</ul>
					<br>
					<ul class="list-inline">
						<li>
							<a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
						</li>
					</ul>
					<hr class="small">
					<p class="text-muted">Copyright &copy; Criado desde 2016</p>
				</div>
			</div>
		</div>
		<a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
	</footer>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script>
		// Closes the sidebar menu
		$("#menu-close").click(function(e) {
			e.preventDefault();
			$("#sidebar-wrapper").toggleClass("active");
		});
		// Opens the sidebar menu
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#sidebar-wrapper").toggleClass("active");
		});
		// Scrolls to the selected menu item on the page
		$(function() {
			$('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});
		//#to-top button appears after scrolling
		var fixed = false;
		$(document).scroll(function() {
			if ($(this).scrollTop() > 250) {
				if (!fixed) {
					fixed = true;
					// $('#to-top').css({position:'fixed', display:'block'});
					$('#to-top').show("slow", function() {
						$('#to-top').css({
							position: 'fixed',
							display: 'block'
						});
					});
				}
			} else {
				if (fixed) {
					fixed = false;
					$('#to-top').hide("slow", function() {
						$('#to-top').css({
							display: 'none'
						});
					});
				}
			}
		});
		// Disable Google Maps scrolling
		// See http://stackoverflow.com/a/25904582/1607849
		// Disable scroll zooming and bind back the click event
		var onMapMouseleaveHandler = function(event) {
			var that = $(this);
			that.on('click', onMapClickHandler);
			that.off('mouseleave', onMapMouseleaveHandler);
			that.find('iframe').css("pointer-events", "none");
		}
		var onMapClickHandler = function(event) {
			var that = $(this);
			// Disable the click handler until the user leaves the map area
			that.off('click', onMapClickHandler);
			// Enable scrolling zoom
			that.find('iframe').css("pointer-events", "auto");
			// Handle the mouse leave event
			that.on('mouseleave', onMapMouseleaveHandler);
		}
		// Enable map zooming with mouse scroll when the user clicks the map
		$('.map').on('click', onMapClickHandler);
	</script>
</body>
</html>