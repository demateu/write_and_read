<!--
    Contingut que es carrega per Ajax
    Aqui es carreguen tots els llibres per defecte
    També es poden carregar per tipus de categoria
-->


<div id="main_title" class="container-fluid">

<?php if( isset($_SESSION['usuari']) ): ?>
	<div>
		<h3>test d'usuari loguejat:
			<?= $_SESSION['usuari']->nickname; ?>
		</h3>
	</div>
<?php endif; ?>

    <h3 class="text-center mt-5 font_title">Llibres per categoria</h3>
    <h2 class="text-center mt-5 font_subtitle">Fes click a la categoria que busques</h2>
    <!-- Menu categorias -->
    <!-- canviar class active a cada li s'ha de fer amb jquery -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light mt-5 row mx-auto" id="menu_categories">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="nav_content" class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#navbarSupportedContent" >Totes</a><!--repassar-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbarSupportedContent" data-idCat="1">Acció</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbarSupportedContent" data-idCat="2">Romanç</a><!--no tengo claro si va asi roman&ccedil;-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbarSupportedContent" data-idCat="3">Fantasia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbarSupportedContent" data-idCat="4">Sci-fi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbarSupportedContent" data-idCat="5">Drama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbarSupportedContent" data-idCat="6">Horror</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbarSupportedContent" data-idCat="7">Suspens</a>
                </li>
            </ul>
        </div>
       
    </nav>
</div>

<main class="container">

    <!--Contingut principal | Tots els llibres per categories -->
    <section class="row justify-content-center mx-auto mt-5" id="top_principal_section">
        <div class="col-12">

            <!--Grid 4x2 Carousel llibres per categoria -->
            <div id="llib_cat" class="carousel carousel-dark slide" data-ride="carousel">
                <div id="fitxes_main" class="carousel-inner"></div>
                <a class="carousel-control-prev" href="#llib_cat" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#llib_cat" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>
    <!--Fi Contingut principal | Tots els llibres per categories-->


    <!--Grid 4x1 Carousel llibres per votos -->
    <section class="row justify-content-center mx-auto" id="top_valorats_section">
        <div class="col-12">

            <h3 class="text-center mt-5 font_title">Top valorats</h3>
            <h2 class="text-center mt-5 font_subtitle">Llegeix el que més agrada a tothom</h2>

            <div class="row mt-5">
                <div class="col-12">

                    <div id="llib_votos" class="carousel carousel-dark slide" data-ride="carousel">
                        <!--<div class="carousel-indicators"></div>-->
                        <div id="fitxes_valorats" class="carousel-inner"></div>
                        <a class="carousel-control-prev" href="#llib_votos" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#llib_votos" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Fi Grid 4x1 Carousel llibres per votos-->

    <!--Grid 4x1 Carousel llibres per novetat -->
    <section class="row justify-content-center mx-auto" id="novetat_section">
        <div class="col-12">

            <h3 class="text-center mt-5 font_title">Novetats</h3>
            <h2 class="text-center mt-5 font_subtitle">Llegeix el més nou</h2>

            <div class="row mt-5">
                <div class="col-12">

                    <div id="llib_nous" class="carousel carousel-dark slide" data-ride="carousel">
                        <!--<div class="carousel-indicators"></div>-->
                        <div id="fitxes_nous" class="carousel-inner"></div>
                        <a class="carousel-control-prev" href="#llib_nous" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#llib_nous" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--Fi Grid 4x1 Carousel llibres per novetat -->    

</main>