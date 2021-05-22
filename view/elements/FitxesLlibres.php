<!--View que mostra els llibres des de la BD en format de fitxa -->
<?php while ($llibre = $llibres->fetch_object()) : ?>
    <div class="row mt-5" id="llistat_categories_section">
        <div class="col-md-3 col-sm-12">
            <img src="<?= $llibre->portada_url ?>" alt="Imatge del llibre" width="100%" height="auto">
        </div>
        <div class="col-md-9 col-sm-12">
            <h2 class="card-header"><?= $llibre->titol ?></h2>
            <div class="card-body">
                <p class="card-text"><?= $llibre->sinopsis ?></p>

                <!-- valoracions FALTA PERSONALITZAR-->
                <div class="valoracions">
                    <?php
                    $star = "<span class='fa fa-star'></span>";
                    $starChecked = "<span class='fa fa-star checked'></span>";
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= ($llibre->mitja_vots)) {
                            echo $starChecked;
                        } else {
                            echo $star;
                        }
                    }
                    ?>
                    <?php if ($llibre->mitja_vots == null) : ?>
                        <p><strong> Puntuació:</strong> 0/5</p>
                    <?php else : ?>
                        <p><strong> Puntuació:</strong> <?= $llibre->mitja_vots ?>/5</p>
                    <?php endif; ?>

                </div>
                <!--FI valoracions -->

                <!--cor per guardar a favorits-->
                <button type="button" class="btn" id="cor_favcorits">
                    <i class="far fa-heart"></i>
                </button>
                <!--Fi cor per guardar a favorits-->

                <!-- Boto llegir -->
                <?php require 'view/elements/botoLlegir.php'; ?>

            </div>
        </div>
    </div>

<?php endwhile; ?>
<!--Fi card llibre-->