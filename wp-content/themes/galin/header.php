<!doctype html>
<html lang="en">

<head>
    <title>Cruise &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-lg-4">
                        <nav class="site-navigation text-right ml-auto " role="navigation">
                            <?php
                            wp_nav_menu(
                                [
                                    'theme_location' => 'header-left-menu',
                                    'container' => 'ul',
                                    'menu_class' => 'site-menu main-menu js-clone-nav ml-auto d-none d-lg-block'
                                ]
                            );
                            ?>
                        </nav>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="site-logo">
                            <a href="index.html">
                                <div class="logo-title">Galin Ganchev</div>
                                <div class="logo-subtitle">Concert Pianist</div>
                            </a>
                        </div>


                        <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="site-navigation text-left mr-auto " role="navigation">
                            <?php
                            wp_nav_menu(
                                [
                                    'theme_location' => 'header-right-menu',
                                    'container' => 'ul',
                                    'menu_class' => 'site-menu main-menu js-clone-nav ml-auto d-none d-lg-block'
                                ]
                            );
                            ?>
                        </nav>
                    </div>


                </div>
            </div>

        </header>