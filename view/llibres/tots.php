<!--
    Contingut que es carrega per Ajax
    Aqui es carreguen tots els llibres per defecte
    També es poden carregar per tipus de categoria
-->



<!-- Menu categorias -->
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
                            <a class="nav-link active" aria-current="page" href="<?=base_url?>">Totes</a><!--repassar-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>accio">Acció</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>roman&ccedil;">Romanç</a><!--no tengo claro si va asi roman&ccedil;-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>fantasia">Fantasia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>sci-fi">Sci-fi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>drama">Drama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>horror">Horror</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>suspens">Suspens</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
</nav>


<!--Contingut principal | Tots els llibres per categories -->
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
                                        <img class="lookIcon" src="<?=base_url?>assets/img/look_icon.png" alt="Icona de veure mes">
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
                                        <img class="lookIcon" src="<?=base_url?>assets/img/look_icon.png" alt="Icona de veure mes">
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
                                        <img class="lookIcon" src="<?=base_url?>assets/img/look_icon.png" alt="Icona de veure mes">
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
                                        <img class="lookIcon" src="<?=base_url?>assets/img/look_icon.png" alt="Icona de veure mes">
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
                                        <img class="lookIcon" src="<?=base_url?>assets/img/look_icon.png" alt="Icona de veure mes">
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
                                        <img class="lookIcon" src="<?=base_url?>assets/img/look_icon.png" alt="Icona de veure mes">
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
                                        <img class="lookIcon" src="<?=base_url?>assets/img/look_icon.png" alt="Icona de veure mes">
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
                                        <img class="lookIcon" src="<?=base_url?>assets/img/look_icon.png" alt="Icona de veure mes">
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
                <a href="<?=base_url?>llib_cat" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="<?=base_url?>llib_cat" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
