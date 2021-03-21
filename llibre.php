<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitxa del llibre</title>

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

        </header>

        
        <!--Contingut principal -->
        <main>   
            <h1 align="center">Don Quijote de la Mancha</h1>
    
<div class="container border border-secondary">
  <div class="row">
<div class="col-md-auto">
    <br>
     <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                                                <!-- valoracions -->
                                                <div class="valoracions" align="center">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
													<p><strong> Puntuació: </strong> 3/5</p>
													<p><strong> Cops votat: </strong> 1</p>
                                                </div>
      </div>
<div class="col"><br>
     <p class="card-title"><strong>Títol: </strong>Don Quijote de la Mancha</p>
	 <p class="card-title"><strong>Autor: </strong>Miguel de Cervantes</p>
	 <p class="card-title"><strong>Gènere: </strong>Fantasia</p>
	 <p class="card-title"><strong>Data de Publicació: </strong>1605</p>
	 <hr>
	  <h4 class="card-title">Sinopsis</h4>
      <p class="card-text">El llibre narra les aventures per terres de Castella - la Manxa i la Corona d'Aragó del gentilhome Alonso Quijano, que és descrit en el capítol I com un home de la baixa noblesa castellana (castellano viejo), esprimatxat i esgrogueït que havia gastat tots els seus recursos i energies en l'adquisició i lectura de llibres de cavalleries. El protagonista embogeix perquè confon ficció i realitat en les seves lectures i volent-ne emular els protagonistes, es fa nomenar cavaller en el capítol III. Per armar-se cavaller Don Quixot entra en un hostal que confon amb un castell, pren dues prostitutes com a donzelles, el porquerol pel trompeter que anuncia la seva arribada i l'hostaler sorneguer com el governador del castell. La cerimònia és una autèntica burla perquè no compleix cap requisit d'una ordenació cavalleresca, però Don Quixot en marxa satisfet.</p>
	<button type="button" class="btn btn-outline-secondary">Llegir</button>	
      </div>
</div><br>
      </div>  
    </div>
<br>
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