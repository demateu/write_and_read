
<?= require_once 'view/layout/header.php'; ?>


<!--Contingut principal -->
<main>
    <!--Nom i cognoms de l'escriptor-->
    <?php if(isset($id)): ?>
        <h1 class="text-center"><?=$escriptor->nom_i_cognoms?></h1>
    <?php else: ?>
        <h1 class="text-center">L'escriptor no existeix</h1>
    <?php endif; ?>
    <!--FI nom i cognoms-->
    <div class="container border border-secondary">
        <div class="row">
            <div class="col-md-auto">
                <!--imatge de l'escriptor-->
                <?php if(isset($id)): ?>
                    <img src="<?=$escriptor->avatar_url_imagen?>" alt="Imatge de <?=$escriptor->nom_i_cognoms?>" class="card-img-top" />
                <?php else: ?>
                    <h1 class="text-center">L'escriptor no existeix</h1>
                <?php endif; ?>               
                <!--fi imatge-->
            </div>
            <div class="col"><br>
                <!--Nickname de l'escriptor-->
                <?php if(isset($id)): ?>
                    <h4 class="card-title" style="color:#925279"><?=$escriptor->nickname?></h1>
                <?php else: ?>
                    <h4 class="card-title" style="color:#925279">L'escriptor no existeix</h1>
                <?php endif; ?>
                <!--fi nickname-->
                <!--Data de naixement de l'escriptor-->
                <?php if(isset($id)): ?>
                    <p class="card-title"><strong>Data de Naixement: </strong><?=$escriptor->data_naixement?></p>
                <?php else: ?>
                    <p class="card-title"><strong>Data de Naixement: </strong>L'escriptor no existeix</p>
                <?php endif; ?>
                <!--fi data de naixement-->
                <hr>
                <h4 class="card-title">Biografia</h4>
                <!--Biografia de l'escriptor-->
                <?php if(isset($id)): ?>
                    <p class="card-text"><?=$escriptor->biografia?></p>                    
                <?php else: ?>
                    <p class="card-title"><strong>Data de Naixement: </strong>L'escriptor no existeix</p>
                <?php endif; ?>
                <!--fi biografia-->
            </div>
        </div>

        <section class="row" id="llibres_publicats">
            <h4 class="card-title text-center">Llibres Publicats</h4>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="card-title">Don Quijote de la Mancha</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="card-title">Don Quijote de la Mancha</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="card-title">Don Quijote de la Mancha</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <img src="https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png" alt="Imatge del llibre" class="card-img-top" />
                    <div class="card-body">
                        <h4 class="card-title">Don Quijote de la Mancha</h4>
                    </div>
                </div><br>
            </div>
        </section>


    </div>
</main>

<?php require_once 'view/layout/footer.php';?>