
<!-- Mostrara les fitxes segon la categoria -->
<div class="container-fluid">
    <section class="row justify-content-center p-dark" id="usuari-section">
        <div class="col-6">

            <div class="row justify-content-center">
                <div class="col" id="nom-complert-avatar">

                    <h1 class="text-center pt-2 font_handwriting"><?= $nomCat ?></h1>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col text-justify" id="biografia_avatar">
                    <p class="card-text text-center"><?= $descripcioCat ?></p>
                </div>
            </div>
        </div>
    </section>


    <section class="row">
        <div class="col-10 mx-auto">

            <!-- Fitxes dels llibres -->
            <?php require_once 'view/elements/FitxesLlibres.php'; ?>
        </div>
    </section>
</div>
