<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Plataforma d'escriptors amateurs">
    <meta name="keywords" content="escriptors, llibres">
    <meta name="author" content="demateu, ronny, apossai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write&Read</title>

    <link rel="icon" href="<?=base_url?>assets/img/identity/favicon_99px.ico">
    <!-- Favicon    
    <link rel="icon" href="../../assets/img/identity/wr_favicon_32px.png" type="image/png" sizes="32x32">
    Para incluir un favicon en formato .ico , debemos utilizar la siguiente línea:
    <link rel="icon" type="image/x-icon" href="/RUTA/FICHERO_FAVICON.ico">
    Para incluir un favicon en formato .gif , debemos utilizar la siguiente línea:
    <link rel="icon" type="image/gif" href="/RUTA/FICHERO_FAVICON.gif">
    Para incluir un favicon en formato .png , debemos utilizar la siguiente línea:
    <link rel="icon" type="image/png" href="../../assets/img/identity/wr_favicon_32px.png">-->

    <!-- Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <!-- JS -->
    <script src="assets/js/main.js" type="text/javascript"></script>

    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- CSS 
    script para que vaya cargando version nueva y solucione el almacenado en cache-->
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>" />
</head>

<body>

    <div class="container-fluid">

        <!-- Capçalera de la web -->
        <header id="capçalera">

            <div class="row">
                <div class="col-12 p-0">
                    <!-- User icona -->
                    <div id="user">
                        <button type="button" class="btn mt-1">
                            <i class="far fa-user"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!--  MENU NAV  -->
            <div class="row pt-3" id="menu-nav">
                <!--Logo i buscador de la web -->
                <div class="col-2" id="logo_search">
                    <a href="<?=base_url?>index.php">
                        <img src="<?=base_url?>assets/img/identity/wr_logo_250px.png" alt="logo" width="250" height="auto"/>
                    </a>
                </div>
                <!--  MENU  -->
                <nav id="menu" class="col">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">INICI</a>
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