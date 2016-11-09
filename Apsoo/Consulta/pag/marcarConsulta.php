<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<meta charset="ISO-8859-1">

<title>Login</title>

<link href="../css/bootstrap.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../css/index.css">
<link href="../css/criarLogin.css" rel="stylesheet">
<link href="../css/stylish-portfolio.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/stylish-portfolio.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet"
	type="text/css">
<link
	href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
	rel="stylesheet" type="text/css">

<script type="text/javascript" src="../jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="../jquery/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-3.1.1.min.js"></script>
<script src="../script/validator.min.js"></script>

</head>
<body>


	<!-- Navigation -->
	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i
		class="fa fa-bars"></i></a>
	<nav id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<a id="menu-close" href="#"
				class="btn btn-light btn-lg pull-right toggle"><i
				class="fa fa-times"></i></a>
			<li class="sidebar-brand"><a href="#top" onclick=$("#menu-close").click();></a>
			</li>
			<li><a href="#top" onclick=$("#menu-close").click();>Menu 01</a></li>
			<li><a href="#about" onclick=$("#menu-close").click();>Menu 02</a></li>
			<li><a href="#services" onclick=$("#menu-close").click();>Menu 03</a>
			</li>
			<li><a href="#portfolio" onclick=$("#menu-close").click();>Menu 04</a>
			</li>
			<li><a href="#contact" onclick=$("#menu-close").click();>Menu 05</a>
			</li>
		</ul>
	</nav>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div id="topo"><?php include 'topo.php';?></div>
				<div class="row">

					<div id='menu' class="col-md-10 col-md-push-1 ">
						<div>MARCAÇÃO DE CONSULTA - MARCAR CONSULTA</div>
						<ul id="barra_navegacao" class="nav nav-tabs">
							<li class=""><a onclick="carregar('pag/paginacao.php?cod=100')">Marcacao
									de Consultas</a></li>
							<li class=""><a onclick="carregar('pag/paginacao.php?cod=101')">Visualizacao
									de consultas marcadas</a></li>

						</ul>

						<div class="rown">
							<div id="conteudo2" class="col-md-12">
								<div>
									OLÁ, USUARIO##<BR>BEM VINDO(A) A MARCAÇÃO DE CONSULTAS..
								</div>
								<div class="col-md-7 form-group row">
									<label name>TELEFONE FIXO:</label> <input type="text" name=""
										class="form-control"> <label name>TELEFONE CELULAR:</label> <input
										type="text" name="" class="form-control"> <label name>EMAIL:</label>
									<input type="text" name="" class="form-control"> <label name>ESTADO:</label>
									<select class="form-control">
										<option>Acre - AC</option>
										<option>Alagoas - AL</option>
										<option>Amapá - AP</option>
										<option>Amazonas - AM</option>
										<option>Bahia - BA</option>
										<option>Ceará - CE</option>
										<option>Distrito Federal - DF</option>
										<option>Espírito Santo - ES</option>
										<option>Goiás - GO</option>
										<option>Maranhão - MA</option>
										<option>Mato Grosso - MT</option>
										<option>Mato Grosso do Sul - MS</option>
										<option>Minas Gerais - MG</option>
										<option>Pará - PA</option>
										<option>Paraíba - PB</option>
										<option>Paraná - PR</option>
										<option>Pernambuco - PE</option>
										<option>Piauí - PI</option>
										<option>Rio de Janeiro - RJ</option>
										<option>Rio Grande do Norte - RN</option>
										<option>Rio Grande do Sul - RS</option>
										<option>Rondônia - RO</option>
										<option>Roraima - RR</option>
										<option>Santa Catarina - SC</option>
										<option>São Paulo - SP</option>
										<option>Sergipe - SE</option>
										<option>Tocantins - TO</option>
									</select>
								</div>
								<div class="row" name="">
									<div class="col-md-5 ">
										<button type="button" class="btn btn-primary">Trocar usuario</button>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div id="rodape"><?php include 'rodape.php';?></div>

			</div>
		</div>
	</div>




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


