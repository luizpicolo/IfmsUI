<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>IFMS User Interface</title>

        <meta name="description" content="">

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script> 
    </head>

    <body>
        <header>
            <h1 class="logo"><abbr title="Instituto Federal de Mato Grosso do Sul">IFMS</abbr>UI</h1>
            <a id="nav-btn" href="#"><i class="icon-reorder"></i></a>
        </header>

        <nav id="nav">
            <ul>
                <li><a href="index.php?pag=sobre">Sobre <i class="icon-code"></i></a></li>
                <li><a href="index.php?pag=grids">Grids <i class="icon-puzzle-piece"></i></a></li>
                <li><a href="index.php?pag=formularios">Formulários <i class="icon-list-alt"></i></a></li>
                <li><a href="index.php?pag=botoes">Botões <i class="icon-check"></i></a></li>
                <li><a href="index.php?pag=tabelas">Tabelas <i class="icon-table"></i></a></li>
                <li><a href="index.php?pag=menus">Menus <i class="icon-reorder"></i></a></li>
            </ul>
        </nav>

    <main>
        <?php
            !isset($_GET["pag"]) ? include("inc/principal.php") : include("inc/".$_GET["pag"] . ".php");
        ?>
    </main>

    <!-- -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>