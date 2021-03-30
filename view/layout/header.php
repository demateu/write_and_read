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