<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?> charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" media="all" />
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="container">
            <div id="header" class="container">
                <div class="navbar navbar-fixed-top">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li><a href="#">Artistas</a></li>
                                <li><a href="#">Contato</a></li>
                            </ul>
                            <form action="/" class="pull-right" id="form-busca">
                                <input type="search" class="search-query span3" placeholder="pesquise pelo nome do seu artista..." name="s" />
                            </form>
                        </div>
                    </div>
                </div>

                <div id="logo" class="pull-left">
                    <img src="http://placehold.it/200x100" alt="logotipo" />
                </div>
                <div id="social-media" class="pull-right">
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="Visite nosso facebook" width="64" />
                        <img src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="Visite nosso twitter" width="64" />
                    </a>
                </div>

            </div>
            <!-- Inicio do Conte�do -->
            <div id="content" class="container">