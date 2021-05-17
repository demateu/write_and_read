<!--View que mostra els comentaris des de la BD -->

<?php
    $interactLlibre = new interactLlibre();
    $interactLlibre->setId($llibre->id);
    $interactLlibres = $interactLlibre->buscarComentariPerId();
 
 while ($interactLlibre = $interactLlibres->fetch_object()) : ?>
    <div class="row mt-5">
        <div class="col-9">
            <h3 class="card-header"><div class="imatge-header">
                <img src="<?= base_url ?>assets/img/avatar/avatar_<?= $interactLlibre->avatar_id ?>.jpg" alt="avatar de l'usuari" />
				<?= $interactLlibre->nickname ?>
            </div></h3>
            <div class="card-body">
                <p class="card-text"><?= $interactLlibre->critica ?></p>
            </div>
        </div>
    </div>

<?php endwhile; ?>
<!--Fi card llibre-->