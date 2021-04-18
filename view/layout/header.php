<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Plataforma d'escriptors amateurs">
    <meta name="keywords" content="escriptors, llibres">
    <meta name="author" content="demateu, ronny, apossai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write&amp;Read</title>
    

    <!--favicon-->
    <link rel="icon" href="<?=base_url?>assets/img/identity/favicon_99px.ico">

    <!-- Jquery CDN-->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <!-- JS ha d'anar després de la decñaracio del CDN del jquery-->
    <script src="assets/js/main.js" type="text/javascript"></script>

    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- CSS propio + script para que vaya cargando version nueva y solucione el almacenado en cache-->
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css?v=<?php echo time();?>" />

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/d10f252433.js" crossorigin="anonymous"></script>
    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container-fluid">

        <!-- Capçalera de la web -->
        <header id="capçalera">

            <div class="row primary" id="first_line">
                <!--Logo i buscador de la web -->
                <div class="col-6 p-2" id="logo_search">
                    <a href="<?=base_url?>index.php">
                        <img src="<?=base_url?>assets/img/identity/wr_logo_250px.png" alt="logo" width="190" height="auto" class="ms-2"/>
                    </a>
                </div>
                <!--Fi Logo-->
                <!-- User icona-->
                <div class="col-6" id="user_area">
                    <button type="button" class="btn mt-1" id="user_button">
                        <i class="far fa-user"></i>
                    </button>
                </div>
                <!--Fi sUser icona-->
            </div>

            <!--  MENU NAV  -->
            <div class="row pt-3" id="menu-nav">

                <!--  MENU  -->
                <nav id="menu" class="col">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?=base_url?>index.php">INICI</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Acció</a></li>
                            <li><a class="dropdown-item" href="#">Romanç</a></li>
                            <li><a class="dropdown-item" href="#">Fantasia</a></li>
                            <li><a class="dropdown-item" href="#">Sci-fi</a></li>
                            <li><a class="dropdown-item" href="#">Drama</a></li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                            <li><a class="dropdown-item" href="#">Suspens</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">test</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Com funciona</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Registra't</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacta'ns</a>
                        </li>
                    </ul>
                </nav>
                <!--Buscador-->
                <div class="col-3">
                    <div class="input-group justify-content-end">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" placeholder="Cerca per titol" />
                        </div>
                        <button type="button" class="btn" id="btn_search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!--  FI MENU NAV  -->
        
        </header>