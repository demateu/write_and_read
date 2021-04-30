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

                        <li class="nav-item p-2" role="presentation">
                            <button class="nav-link <?= ($i == 1 ? 'active' : '') ?>" id="nav<?= $i ?>" data-bs-toggle="tab" data-bs-target="#tab<?= $i ?>" type="button" role="tab" aria-controls="tab<?= $i ?>" aria-selected=<?= ($i == 1 ? "true" : "false"); ?>>
                                <p><?= $i ?></p>
                            </button>
                        </li>

                    <?php endfor; ?>
                </ul>

            </div>


            <div class="row">
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
        <div class="col bg-light text-center">
            <a href="<?= base_url ?>assets/img/llibres/<?= $_POST['contingut_url'] ?>" class="btn boto_llegeix m-2" role="button" download>Descarregar</a>
        </div>
    </div>

<?php endif; ?>



<!-- ja lo afegire al main.js es per fer proves -->
<script type="text/javascript">
    document.querySelectorAll('.nav-pills').forEach(linkItem => {
        linkItem.addEventListener('click', _ => {
            window.scrollTo(0, 160);
        });
    });
</script>




<?php include 'view/layout/footer.php'; ?>