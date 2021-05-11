<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Plataforma d'escriptors amateurs">
    <meta name="author" content="demateu, ronny, apossai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write&amp;Read</title>


    <!--favicon-->
    <link rel="icon" href="<?= base_url ?>assets/img/identity/favicon_99px.ico">

    <!-- Jquery CDN-->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <!-- JS ha d'anar després de la decñaracio del CDN del jquery-->
    <script src="<?= base_url ?>assets/js/main.js" type="text/javascript"></script>

    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- CSS propio + script para que vaya cargando version nueva y solucione el almacenado en cache-->
    <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css?v=<?php echo time(); ?>" />

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/d10f252433.js" crossorigin="anonymous"></script>
    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container-fluid">

        <!-- Capçalera de la web -->
        <header id="capçalera">

            <div class="row primary" id="first_line">
                <!--Logo i buscador de la web -->
                <div class="col-sm-12 col-md-9 p-2" id="logo_search">
                    <a href="<?= base_url ?>index.php">
                        <img src="<?= base_url ?>assets/img/identity/wr_logo_250px.png" alt="logo" width="190" height="auto" class="ms-2" />
                    </a>
                </div>
                <!--Fi Logo-->
                <!-- User icona-->
                <div class="col-sm-12 col-md-3 p-2" id="user_area">
                    <?php if (isset($_SESSION['usuari'])) : ?>
                        <!--Si l'usuari està loguejat, veu aquesta part-->
                        <span>Hola
                            <?= $_SESSION['usuari']->nickname; ?>
                        </span>
                        <span> | </span>
                        <a href="<?= base_url ?>usuari/logoutUser">Logout</a>
                        <div class="imatge-header">
                            <a href="<?= base_url ?>usuari/perfilUser">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_<?= $_SESSION['usuari']->avatar_id; ?>.jpg" alt="avatar de l'usuari" />
                            </a>
                        </div>
                    <?php else : ?>
                        <a href="<?= base_url ?>usuari/login">Entra</a>
                        <span>|</span>
                        <a href="<?= base_url ?>usuari/registre">Registra't</a>

                        <button type="button" class="btn mt-1 m-0" id="user_button">
                            <i class="far fa-user"></i>
                        </button>
                    <?php endif; ?>
                </div>
                <!--Fi User icona-->
            </div>

            <!--MENU NAV-->
            <nav class="navbar navbar-expand-lg navbar-light" id="menu-nav">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url ?>index.php">INICI</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Com funciona</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?=base_url?>llibre/categoria&id=1">Acció</a></li>
                            <li><a class="dropdown-item" href="<?=base_url?>llibre/categoria&id=2">Romanç</a></li>
                            <li><a class="dropdown-item" href="<?=base_url?>llibre/categoria&id=3">Fantasia</a></li>
                            <li><a class="dropdown-item" href="<?=base_url?>llibre/categoria&id=4">Sci-fi</a></li>
                            <li><a class="dropdown-item" href="<?=base_url?>llibre/categoria&id=5">Drama</a></li>
                            <li><a class="dropdown-item" href="<?=base_url?>llibre/categoria&id=6">Horror</a></li>
                            <li><a class="dropdown-item" href="<?=base_url?>llibre/categoria&id=7">Suspens</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            El meu compte
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">El meu panell</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Desloga'm</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contacta'ns</a>
                        </li>
                    </ul>
                    <!--Buscador-->
                    <form class="d-flex" id="navbar_buscador">
                        <input class="form-control" type="search" placeholder="Cerca per titol" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Busca<i class="fas fa-search"></i></button>
                    </form>
                    <!--Fi Buscador-->
                    </div>
                </div>
            </nav>
            <!-- FI MENU NAV -->

        </header>