<?php
require_once 'view/layout/header.php';


if (isset($pages)) : ?>


    <div class="row">
        <div class="col-md-12 text-center mt-3" id="llibreContingut">
            <div class="row sticky-top ">
                <h3 class="card-header">Llibre: <?= $_POST['titol'] ?></h3>


                <!-- Tab navs -->
                <ul class="nav nav-pills d-flex justify-content-center bg-light" id="llibreTab" role="tablist">
                    <?php for ($i = 1; $i < sizeof($pages); $i++) : ?>

                        <?php if ($i + 1 == sizeof($pages)) : ?>
                            <li id="paginaFinal" class="nav-item p-2" role="presentation" data-idLector=<?=$_SESSION['usuari']->id?> data-idLlibre= <?=$_POST['id'] ?>>
                                <button class="nav-link <?= ($i == 1 ? 'active' : '') ?>" id="nav<?= $i ?>" data-bs-toggle="tab" data-bs-target="#tab<?= $i ?>" type="button" role="tab" aria-controls="tab<?= $i ?>" aria-selected=<?= ($i == 1 ? "true" : "false"); ?> >
                                    <p><?= $i ?></p>
                                </button>
                            </li>
                        <?php else : ?>
                            <li class="nav-item p-2" role="presentation">
                                <button class="nav-link <?= ($i == 1 ? 'active' : '') ?>" id="nav<?= $i ?>" data-bs-toggle="tab" data-bs-target="#tab<?= $i ?>" type="button" role="tab" aria-controls="tab<?= $i ?>" aria-selected=<?= ($i == 1 ? "true" : "false"); ?>>
                                    <p><?= $i ?></p>
                                </button>
                            </li>
                        <?php endif; ?>

                    <?php endfor; ?>
                </ul>

            </div>


            <div class="row bg-light">
                <!-- Tabs contingut -->
                <div class="tab-content col-xs-12 col-lg-7 mx-auto" id="background_col">
                    <?php for ($i = 1; $i < sizeof($pages); $i++) : ?>
                        <div class="tab-pane <?= ($i == 1 ? 'active' : '') ?>" id="tab<?= $i ?>" role="tabpanel" aria-labelledby="nav<?= $i ?>">
                            <pre><?= $pages[$i]->getText() ?></pre>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!--BOTÓ Descarregar-->
        <div class="col text-center p-5 bg-light">
            <a href="<?= base_url ?>assets/img/llibres/<?= $_POST['contingut_url'] ?>" class="btn boto_llegeix m-2" role="button" download>Descarregar</a>
        </div>
    </div>

<?php endif; ?>

<?php include 'view/layout/footer.php'; ?>