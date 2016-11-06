<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php 
include '../script/ConBanco.php';
conectaBaco();
?>
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
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="../jquery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="../jquery/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery-3.1.1.min.js"></script>
    <script src="../script/validator.min.js"></script>

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


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <legend> Registre-se!</legend>
            <form action="../script/cadUser.php" method="post" class="form" role="form">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="firstname" placeholder="Primeiro Nome" type="text"
                               required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input class="form-control" name="lastname" placeholder="Último Nome" type="text" required />
                    </div>
                </div>
                <input class="form-control" name="youremail" placeholder="Seu email" type="email" />
                <input class="form-control" name="reenteremail" placeholder="Confirme seu email" type="email" />
                <input class="form-control" name="cpf" placeholder="Informe seu CPF" />
                <input class="form-control" name="carteira" placeholder="Informe numero da carteira do plano" />
                <input class="form-control" name="password" placeholder="Senha" type="password" />
                <input class="form-control" name="password" placeholder="Confirmar senha" type="password" />
                <label for="">
                    Data de Nascimento</label>
                <div class="row">
                    <div class="col-xs-4 col-md-4">
                        <select class="form-control" name="dia">
                            <option>Dia</option>
                            <?php for($i=1; $i<=31; $i++){ echo "<option value='$i'>$i</option>";} ?>
                        </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <select class="form-control" name="mes">
                            <option>Mês</option>
                            <option value="Janeiro">Janeiro</option>
                            <option value="Fevereiro">Fevereiro</option>
                            <option value="Março">Março</option>
                            <option value="Abril">Abril</option>
                            <option value="Maio">Maio</option>
                            <option value="Junho">Junho</option>
                            <option value="Julho">Julho</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Setembro">Setembro</option>
                            <option value="Outubro">Outubro</option>
                            <option value="Novembro">Novembro</option>
                            <option value="Dezembro">Dezembro</option>
                        </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <select class="form-control" name="ano">
                            <option>Ano</option>
                            <?php $year = date("Y"); while ($year > 1899) {
                            echo '<option value="'.$year.'">'.$year.'</option>';
                            $year = $year - '1';}
                            ?>
                        </select>
                    </div>
                </div>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineCheckbox1" value="masculino" />
                    Masculino
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineCheckbox2" value="feminino" />
                    Feminino
                </label>
                <br />
                <br />
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Cadastrar</button>
            </form>
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