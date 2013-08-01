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
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

        <script src="js/vendor/modernizr-2.6.2.min.js"></script> 
    </head>

    <body>
        <header>
            <h1>
                <a href="?pag=principal" class="logo"><abbr title="Instituto Federal de Mato Grosso do Sul">IFMS</abbr>UI</a>
            </h1>

            <nav>
                <ul>
                    <li><a href="index.php?pag=sobre">Sobre <i class="icon-code"></i></a></li>
                    <li><a href="index.php?pag=grids">Grids <i class="icon-puzzle-piece"></i></a></li>
                    <li><a href="index.php?pag=formularios">Formulários <i class="icon-list-alt"></i></a></li>
                    <li><a href="index.php?pag=botoes">Botões <i class="icon-check"></i></a></li>
                    <li><a href="index.php?pag=tabelas">Tabelas <i class="icon-table"></i></a></li>
                    <li><a href="index.php?pag=menus">Menus <i class="icon-reorder"></i></a></li>
                    <li><a href="index.php?pag=paginacao">Paginação <i class="icon-chevron-sign-right"></i></a></li>
                    <li><a href="index.php?pag=alertas">Alertas <i class="icon-chevron-sign-right"></i></a></li>
                </ul>
            </nav>
        </header>

    <main>
        <?php
            !isset($_GET["pag"]) ? include("inc/principal.php") : include("inc/" . $_GET["pag"] . ".php");
        ?>
    </main>

    <!-- Javascript -->
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=html"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>