<!--Peu de la pagina -->
<footer class="text-center text-lg-start mt-5 p-0">
    <div class="row mx-auto p-5">
        <!-- Grid colummn -->
        <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
            <!-- Logo -->
            <a href="index.php">
                <img src="<?=base_url?>assets/img/identity/wr_logo_250px.png" alt="logo" width="250" height="auto"/>
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
                    <a href="<?=base_url?>view/static/avis_legal.php">Avis legal</a>
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



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Jquery CDN-->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <!-- JS ha d'anar després de la decñaracio del CDN del jquery-->
    <script src="assets/js/main.js" type="text/javascript"></script>

</body>

</html>