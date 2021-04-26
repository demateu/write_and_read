<?php
require_once 'view/layout/header.php';


if (isset($pages)) : ?>


    <div class="row">
        <div class="col-md-3 mt-3">

            <!-- Tab navs -->
            <ul class="nav nav-pills flex-column" id="llibreTab" role="tablist">
                <?php for ($i = 1; $i < sizeof($pages); $i++) : ?>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?= ($i == 1 ? 'active' : '') ?>" id="nav<?= $i ?>" data-bs-toggle="tab" data-bs-target="#tab<?= $i ?>" type="button" role="tab" aria-controls="tab<?= $i ?>" aria-selected=<?= ($i == 1 ? "true" : "false"); ?>>
                            <p>Pagina <?= $i ?></p>
                        </button>
                    </li>
                <?php endfor; ?>
            </ul>


        </div>

        <div class="col-md-9 text-center">
            <div class="row">
                <div class="col">
                    <h3 class="card-header">Llibre: <?= $llibre->titol?></h3>
                </div>


                <!-- Tabs contingut -->
                <div class="tab-content mt-3">
                    <?php for ($i = 1; $i < sizeof($pages); $i++) : ?>
                        <div class="tab-pane <?= ($i == 1 ? 'active' : '') ?>" id="tab<?= $i ?>" role="tabpanel" aria-labelledby="nav<?= $i ?>">
                            <pre><?= $pages[$i]->getText() ?></pre>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <?php include 'view/layout/footer.php'; ?>