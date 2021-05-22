<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<?php require_once 'view/layout/header.php'; ?>

<div class="container-fluid">

    <section class="row justify-content-center p-dark" id="usuari-section">
        <div class="col-md-12 col-lg-6">
            <div class="row justify-content-center">
                <div class="col imatge-avatar" id="imatge-avatar">
                    <!--imatge de l'escriptor (avatar)-->
                    <?php if(isset($id)): ?>
                        <img src="<?=$escriptor->avatar_url_imagen?>" alt="Imatge de <?=$escriptor->nom_i_cognoms?>" class="card-img-top mx-auto d-block" />
                    <?php else: ?>
                        <h1 class="text-center">L'escriptor no existeix</h1>
                    <?php endif; ?>               
                    <!--fi imatge-->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col" id="nom-complert-avatar">
                    <!--Nom i cognoms de l'escriptor-->
                    <?php if(isset($id)): ?>
                        <h1 class="text-center pt-2 font_handwriting"><?=$escriptor->nom_i_cognoms?></h1>
                    <?php else: ?>
                        <h1 class="text-center">L'escriptor no existeix</h1>
                    <?php endif; ?>
                    <!--FI nom i cognoms-->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col" id="nickname-avatar">
                    <!--Nickname de l'escriptor-->
                    <?php if(isset($id)): ?>
                        <h2 class="text-center">@<?=$escriptor->nickname?> | <?=$escriptor->data_naixement?></h2>
                    <?php else: ?>
                        <h2 class="text-center">L'escriptor no existeix</h2>
                    <?php endif; ?>
                    <!--fi nickname-->                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col text-justify" id="biografia_avatar">
                    <!--Biografia de l'escriptor-->
                    <?php if(isset($id)): ?>
                        <p class="card-text text-center"><?=$escriptor->biografia?></p>               
                    <?php else: ?>
                        <p class="card-title text-justify"><strong>Data de Naixement: </strong>L'escriptor no existeix</p>
                    <?php endif; ?>
                    <!--fi biografia-->                        
                </div>
            </div>
        </div>
    </section>


    <!--LLIBRES PUBLICATS-->
    <div class="container">
        <section class="row" id="llibres_publicats">
            <div class="col-10 mx-auto mb-5">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center mt-5 font_title">Llibres Publicats</h2>
                        <p class="text-center mt-5 font_subtitle">Aquests son els llibres que té publicats</p>
                    </div>
                </div>

                <!--card llibre-->
                <?php require_once 'view/elements/FitxesLlibres.php' ?>
                <!--Fi card llibre-->

                
            </div>
        </section>
    </div>
    <!--FI LLIBRES PUBLICATS-->    


</div>

<?php require_once 'view/layout/footer.php';?>