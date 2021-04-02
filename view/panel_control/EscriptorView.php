<?= require_once 'view/layout/header.php'; ?>


<!--Contingut principal -->
<main>
    <h1 class="text-center">Miguel de Cervantes</h1>

    <div class="container border border-secondary">
        <div class="row">
            <div class="col-md-auto">
                <br>
                <img src="https://1.bp.blogspot.com/-p3PJYryBJYU/WttM2CVLQDI/AAAAAAAAZvY/kGTP51NUBmMitmGg_QbWzy_6Iuj6e0YVQCLcBGAs/s320/Cervantes.jpg" alt="Imatge del Autor" class="card-img-top" />
            </div>
            <div class="col"><br>
                <h4 class="card-title" style="color:#925279">Miguelillo1547</h4>
                <p class="card-title"><strong>Data de Naixement: </strong>29/9/1547</p>
                <hr>
                <h4 class="card-title">Biografia</h4>
                <p class="card-text">Miguel de Cervantes Saavedra (Alcalá de Henares, 29 de setembre de 1547 - Madrid, 22 d'abril de 1616) fou un escriptor castellà, conegut sobretot per la seva novel·la El Quixot. Es considera un dels autors més influents de la literatura universal, i les seves obres han inspirat adaptacions cinematogràfiques i han modificat la manera d'entendre la novel·la, especialment en l'àmbit hispànic i anglès. En homenatge a l'autor, el seu rostre figura a les monedes de fracció d'euro (10, 20 i 50 cts.) encunyades a Espanya.</p>
            </div>
        </div><br>
        <div class="row">
            <h4 class="card-title text-center">Llibres Publicats</h4>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="card-title">Don Quijote de la Mancha</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="card-title">Don Quijote de la Mancha</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="card-title">Don Quijote de la Mancha</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="card-title">Don Quijote de la Mancha</h4>
                    </div>
                </div><br>
            </div>
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
                    <a href="#!">Politica de privacitat</a>
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