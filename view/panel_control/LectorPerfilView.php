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
    <link rel="icon" href="../../assets/img/identity/favicon_99px.ico">

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
    <link rel="stylesheet" href="../../assets/css/styles.css" />

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/d10f252433.js" crossorigin="anonymous"></script>


</head>

<body>
    <div class="container-fluid">
        <div class="row profile">

            <div class="col-md-3">
                <div class="perfil-sidebar text-center">
                    <!-- SIDEBAR FOTO AVATAR -->
                    <div class="perfil-userpic">
                        <img src="https://cdn0.iconfinder.com/data/icons/social-media-network-4/48/male_avatar-512.png" class="img-responsive" alt="">
                    </div>
                    <!-- FI FOTO AVATAR -->
                    <!-- SIDEBAR USER TITOL -->
                    <div class="perfil-usertitol">
                        <div class="perfil-usertitol-nom">
                            Eren Jaeger
                        </div>
                        <div class="perfil-usertitol-rol">
                            Lector
                        </div>
                    </div>
                    <!-- FI SIDEBAR USER TITOL -->
                    <!-- SIDEBAR MENU -->
                    <div class="perfil-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">
                                    <i class="fas fa-user-circle"></i>
                                    El meu compte </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-heart"></i>
                                    Els meus preferits </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fas fa-question-circle"></i>
                                    Ajuda </a>
                            </li>
            
                        </ul>
                    </div>
                    <!-- FI MENU -->
                </div>
            </div>

            <div class="col-md-9">
                <div class="perfil-content">
                    Contingut com llibres favorits
                </div>
            </div>
        </div>
    </div>
</body>
</html>