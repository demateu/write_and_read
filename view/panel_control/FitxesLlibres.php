<?php require_once 'view/layout/header.php'; ?>

<!-- Fitxes llibres -->
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

            <!--card llibre-->
            <?php while ($llibre = $cat->fetch_object()) : ?>
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

                            <form action="http://localhost:8888/write_and_read/llibre/llegirLlibre" method="POST">
                                <input type="hidden" name="titol" value="<?= $llibre->titol ?>" />
                                <input type="hidden" name="contingut_url" value="<?= $llibre->contingut_url ?>" />
                                <input type="submit" value="Llegir" class="btn boto_llegeix" />
                            </form>
                            <!-- <a href="#" class="btn boto_llegeix">Llegeix</a> -->
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
        </div>
    </section>
</div>


<?php require_once 'view/layout/footer.php'; ?>