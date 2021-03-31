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
                    <img src="assets/img/banner/banner2.jpg" class="d-block w-100" alt="Vols ser un scriptor? Ara pots amb nosaltres">
                    <div class="carousel-caption trickcenter">
                        <h5>Vols ser escriptor? Ara pots amb nosaltres.</h5>
                        <button type="button" class="btn mt-3" id="btn_subcr">Subscriu-te</button>
                    </div>

                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Enrere</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Següent</span>
            </button>
        </div>
    </div>
</div>


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
    <hr />

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