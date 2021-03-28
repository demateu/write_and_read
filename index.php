<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Plataforma d'escriptors amateurs">
    <meta name="keywords" content="escriptors, llibres">
    <meta name="author" content="demateu, ronny, apossai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div class="container-fluid px-auto">

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

            

            <!--Logo i buscador de la web -->
            <div class="row pt-3" id="logo_search">
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
            <div class="row justify-content-center mx-auto">
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
        <nav class="navbar navbar-expand-sm navbar-light bg-light mt-5">
            <div class="row mx-auto">

                <div class="col-12">

            
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
            
            </div>
        </nav>
        
        <!--Contingut principal -->
        <main>   
            <div class="row justify-content-center mx-auto">
                <div class="col-11">
                        
                    <!--Grid 4x2 Carousel llibres per categoria -->
                    <div id="llib_cat" class="carousel carousel-dark slide" data-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#llib_cat" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#llib_cat" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- fila 1 -->
                                <div class="row">

                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->
                                        
                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->

                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->

                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->
                                        
                                </div>  

                                <!-- fila2 -->
                                <div class="row">
                                    
                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->
                                        
                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->

                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->

                                   <!-- Les cards de fitxes de llibre -->
                                   <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->
                                        
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
            <div class="row justify-content-center mx-auto">
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
                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->
                                    
                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->

                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->

                                    <!-- Les cards de fitxes de llibre -->
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->
                                    
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
            </div>

            <!--Grid 4x1 Carousel llibres per novetat -->
            <div class="row justify-content-center mx-auto">
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
                                <!-- Les cards de fitxes de llibre -->
                                <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->
                                    
                                <!-- Les cards de fitxes de llibre -->
                                <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->

                                <!-- Les cards de fitxes de llibre -->
                                <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->

                                <!-- Les cards de fitxes de llibre -->
                                <div class="col-sm-6 col-lg-3">
                                        <div class="card">
                                            <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                            <div class="card-body">
                                                <!-- valoracions -->
                                                <div class="valoracions">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <h4 class="card-title">Don Quijote de la Mancha</h4>
                                                <p class="card-text">Miguel Cervantes</p>

                                                <!-- icones-->
                                                <img class="lookIcon" src="assets/img/look_icon.png" alt="Icona de veure mes"> 
                                                <button type="button" class="btn">
                                                    <i class="far fa-heart"></i>
                                                </button>      
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <!-- fi card -->
                                    
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
        </main>


        <!--Peu de la pagina -->
        <footer id="footer" class="text-center text-lg-start mt-5">
            <div class="row mx-auto p-5"> 
                <!-- Grid colummn -->
                <div class="col-lg-3 col-md-12 mb-4 mb-md-0">         
                    <!-- Logo -->
                    <a href="index.php">
                        <img src="#" alt="logo" />
                    </a>
                    <p>
                        El teu lloc ideal per publicar els teus llibres per a escriptors i gaudir d'una àmplia gamma d'històries per a lectors.
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h5>Informació</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!">Avis legal</a>
                        </li>
                        <li>
                            <a href="#!">Politica de cookies</a>
                        </li>
                        <li>
                            <a href="#!" >Politica de privacitat</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h5>Compte</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">El meu compte</a>
                        </li>
                        <li>
                            <a href="#!">Els meus preferits</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h5>Segueix-nos</h5>
                    <div id="social">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-instagram-square"></i>
                        <i class="fab fa-google-plus-square"></i>
                    </div>
                        
                </div>
                <!--Grid column-->    
            </div> 

            <div class="row">
                <div class="col-lg-12 p-0">
                    <!-- Copyright -->
                    <div id="copyright" class="text-center p-3">
                        &COPY <?= date('Y') ?> | 
                        <a href="index.php">write&read.com</a>
                    </div>
                    <!-- Copyright -->
                </div>
            </div>
                
        </footer>
        <!-- Fi peu de pagina -->
    </div>
</body>
</html>