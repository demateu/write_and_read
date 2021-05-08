<!--View que mostra els llibres des de la BD en format de fitxa -->
<?php while ($llibre = $llibres->fetch_object()) : ?>
    <div class="row mt-5">
        <div class="col-3">
            <img src="<?= base_url ?>assets/img/cover_books/<?= $llibre->portada_url ?>.jpeg" alt="Imatge del llibre" width="100%" height="auto">
        </div>
        <div class="col-9">
            <h3 class="card-header"><?= $llibre->titol ?></h3>
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

                <!-- Boto llegir -->
                <?php require 'view/elements/botoLlegir.php'; ?>

                <!--cor per guardar a favorits-->
                <button type="button" class="btn">
                    <i class="far fa-heart"></i>
                </button>
                <!--Fi cor per guardar a favorits-->

            </div>
        </div>
    </div>

<?php endwhile; ?>
<!--Fi card llibre-->