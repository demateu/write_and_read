<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<!--Peu de la pagina -->
<footer class="text-center text-lg-start p-0">
    <div class="row mx-auto p-5 justify-content-md-around">
        <!-- Grid colummn -->
        <div class="col-md-12 col-lg-4 mb-4 mb-md-0">
            <!-- Logo -->
            <a href="index.php">
                <img src="<?=base_url?>assets/img/identity/wr_logo_250px.png" alt="logo" width="250" height="auto"/>
            </a>
            <p>
                El teu lloc ideal per publicar llibres per a escriptors i gaudir d'una àmplia gamma d'històries per a lectors.
            </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-lg-2 mb-4 mb-md-0">
            <h5>Informació</h5>

            <ul class="list-unstyled mb-0">
                <li>
                    <a href="<?=base_url?>usuari/avis">Avis legal</a>
                </li>
                <li>
                    <a href="<?=base_url?>usuari/cookies">Politica de cookies</a>
                </li>
                <li>
                    <a href="<?=base_url?>usuari/privacitat">Politica de privacitat</a>
                </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-lg-2 mb-4 mb-md-0">
            <h5>Compte</h5>

            <ul class="list-unstyled">
                <li>
                    <a href="<?=base_url?>usuari/perfilUser">El meu compte</a>
                </li>
                <li>
                    <a href="#!">Els meus preferits</a>
                </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-lg-2 mb-4 mb-md-0">
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
        <div class="col p-0">
            <!-- Copyright -->
            <div id="copyright" class="text-center p-3">
                Write&amp;Read&COPY; <?= date('Y') ?> |
                <a href="<?=base_url?>index.php">write&amp;read.com</a>
            </div>
            <!-- Copyright -->
        </div>
    </div>

</footer>
<!-- Fi peu de pagina -->

</div><!--FIN CONTAINER FLUID-->


</body>

</html>