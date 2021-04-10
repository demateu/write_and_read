<!--
    Contingut que es carrega per Ajax
    Aqui es carreguen tots els llibres per defecte
    També es poden carregar per tipus de categoria
-->

<main>
<!-- Menu categorias -->
<!-- canviar class active a cada li s'ha de fer amb jquery -->
<nav class="navbar navbar-expand-sm navbar-light bg-light mt-5">
    <!--
    <div class="row mx-auto">
        <div class="col-12">-->
            <div class="container-fluid">
                <!--
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul id="nav_content" class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item" id="totes_categories">
                            <a class="nav-link active" aria-current="page" href="<?=base_url?>index.php">Totes</a><!--repassar-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>index.php" data-idCat="1">Acció</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>index.php" data-idCat="2">Romanç</a><!--no tengo claro si va asi roman&ccedil;-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>index.php" data-idCat="3">Fantasia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>index.php" data-idCat="4">Sci-fi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>index.php" data-idCat="5">Drama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>index.php" data-idCat="6">Horror</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url?>index.php" data-idCat="7">Suspens</a>
                        </li>
                    </ul>
                </div>
            </div> <!--fi container fluid-->
    <!--</div>
    </div>-->
</nav>


<!--Contingut principal | Tots els llibres per categories -->
    <div class="row justify-content-center mx-auto">
        <div class="col-11">

            <!--Grid 4x2 Carousel llibres per categoria -->
            <div id="llib_cat" class="carousel carousel-dark slide" data-ride="carousel">
                <div class="carousel-indicators">
                    <!-- <button type="button" data-bs-target="#llib_cat" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> -->
                </div>
                <div id="fitxes_main" class="carousel-inner">
                    <!-- <div class="carousel-item active" >
                        <div class="row"  >
                        
                        </div>                
                    </div>  -->
                    
                </div>
                <a class="carousel-control-prev" href="#llib_cat" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#llib_cat" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>


    <!--Grid 4x1 Carousel llibres per votos -->
    <div class="row justify-content-center mx-auto">
        <h3 class="text-center mt-5">Top valorats: </h3>
        <div class="col-11">
            <div id="llib_votos" class="carousel carousel-dark slide" data-ride="carousel">
                <div class="carousel-indicators">
                    
                </div>
                <div id="fitxes_valorats" class="carousel-inner">
                    
                </div>
                <a href="<?=base_url?>llib_votos" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="<?=base_url?>llib_votos" class="carousel-control-next" data-slide="next">
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
                    
                </div>
                <div id="fitxes_nous" class="carousel-inner">
                    
                </div>
                <a href="<?=base_url?>llib_nous" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="<?=base_url?>llib_nous" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
        
</main>