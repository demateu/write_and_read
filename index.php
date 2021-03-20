<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Write&Read</title>

    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" />

</head>
<body>

    <div class="container-fluid p-0">

        <!-- Capçalera de la web -->
        <header id="capçalera">
            <!-- User icona -->
            <div id="user">
                <button type="button" class="btn mt-1">
                    <i class="far fa-user"></i> 
                </button>       
            </div>

            <!--Logo i buscador de la web -->
            <div id="logo_search" class="row p-3 float-left">
                <div class="col-2">
                    <a href="index.php">
                        <img src="#" alt="logo" />
                    </a>
                </div>
                

                <!--Buscador-->
                <div class="col-10">
                    <div class="input-group justify-content-end">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" placeholder="Cerca per titol"/>
                        </div>
                        <button type="button" class="btn" id="btn_search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    
                </div>
                
                
            </div>

            

            <!-- Banner carousel publicitari -->
            <div class="row justify-content-center">
                <div class="col-11">
                    <div id="banner" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/banner/banner1.jpg" class="d-block w-100" alt="El millor lloc per a disfrutar histories emocionants">
                                <div class="carousel-caption trickcenter">
                                    <h5>Gaudeix les teves històries favorites allà on vagis</h5>
                                </div>
                            </div>
                         
                            <div class="carousel-item">
                                <img src="assets/img/banner/banner2.jpg" class="d-block w-100" alt="Vols ser un scriptor? Ara pots com nosaltres">
                                <div class="carousel-caption trickcenter">
                                    <h5>Vols ser escriptor? Ara pots amb nosaltres.</h5>
                                    <button type="button" class="btn mt-3" id="btn_subcr">Subscriu-te</button>
                                </div>
                                
                            </div>
                             
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#banner"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Enrere</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#banner"  data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Següent</span>
                        </button>
                    </div>
                </div>
            </div>
            
            
                

        </header>

        <!-- Menu nav -->
        <!-- canviar class active a cada li s'ha de fer amb jquery -->
        <div class="row ">

            <div class="col-12">

            <nav class="navbar navbar-expand-sm navbar-light bg-light mt-5">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Totes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Acció</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Romanç</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Fantasia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sci-fi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Drama</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Horror</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Suspens</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        
        <!--Contingut principal -->
        <main>
            <!--Grid 4x2 Carousel llibres per categoria -->
            <div class="row justify-content-center">
                <div class="col-11">
                    <div id="llib_cat" class="carousel carousel-dark slide" data-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#llib_cat" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#llib_cat" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- fila 1 -->
                                <div class="row">
                                    <!-- Les targetes de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- fila2 -->
                                <div class="row">
                                    <!-- Les targetes de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#llib_cat" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#llib_cat" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>

            <!-- linia de separacio de llibres per categoria -->
            <hr/>

            <!--Grid 4x1 Carousel llibres per votos -->
            <div class="row justify-content-center">
                <h3 class="text-center mt-5">Top valorats: </h3>
                <div class="col-11">
                    <div id="llib_votos" class="carousel carousel-dark slide" data-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#llib_votos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#llib_votos" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                
                                <div class="row">
                                    <!-- Les targetes de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <a href="#llib_votos" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#llib_votos" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>

            <!--Grid 4x1 Carousel llibres per novetat -->
            <div class="row justify-content-center">
                <h3 class="text-center mt-5">Novetats: </h3>
                <div class="col-11">
                    <div id="llib_nous" class="carousel carousel-dark slide" data-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#llib_nous" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#llib_nous" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                
                                <div class="row">
                                    <!-- Les targetes de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="images.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <h4 class="card-title">Titol</h4>
                                                <p class="card-text">Autor</p>
                                                <!-- icones i valoracions -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <a href="#llib_nous" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#llib_nous" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>

        </main>

        <!--Peu de la pagina -->
        <footer id="footer">
            <p class="text-center mt-2">Tots els drets reservats  &COPY; <?= date('Y') ?></p>
            <div id="social" class="text-center">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-google-plus-square"></i>
            </div>
            
        </footer>
    
    </div>
</body>
</html>