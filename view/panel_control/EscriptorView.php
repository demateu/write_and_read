
<?= require_once 'view/layout/header.php'; ?>



<div class="container-fluid">

    <section class="row justify-content-center p-dark" id="usuari-section">
        <div class="col-6">
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
                        <h1 class="text-center pt-2"><?=$escriptor->nom_i_cognoms?></h1>
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

    <!--LLIBRES PUBLICATS B-->
    <section class="row" id="llibres_publicats">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col">
                    <h2 class="text-center mb-5">Llibres Publicats</h2>
                </div>
            </div>
            <div class="row">

                <!-- Fitxa de llibre -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="cover_book">
                            <!--imatge del llibre-->
                            <?php if(isset($id)): ?>
                                <img src="<?=base_url?>assets/img/cover_books/<?=$escriptor->portada_url?>.jpeg" alt="Imatge de <?=$escriptor->titol?>" class="card-img-top" />
                            <?php else: ?>
                                <h1 class="text-center">L'escriptor no existeix</h1>
                            <?php endif; ?>               
                            <!--fi imatge del llibre-->
                        </div>
                        <div class="card-body">
                            <a href="<?=base_url?>llibre/fitxa&id=${id_llibre}"> <h4 class="card-title"><?=$escriptor->titol?></h4></a>
                            <!--<a href="${baseURL}usuari/fitxa&id=${id_escriptor}"><p class="card-text nom_autor"><//?=$escriptor->nom_i_cognoms?></p></a>-->
        
						<!-- valoracions -->
                        <div class="valoracions" align="center">
                           <?php if(isset($id)):
							$star = "<span class='fa fa-star'></span>";
							$starChecked = "<span class='fa fa-star checked'></span>";
							for ($i = 1; $i <= 5; $i++) {
								if($i <= ($escriptor->mitja_vots)){
									echo $starChecked;
								}else{
									echo $star; 
								}
							} endif; ?>
							<?php if(isset($id)): ?>
						    <p><strong> Puntuació:</strong> <?=$escriptor->mitja_vots?>/5</p>
						    <?php else: ?>
						    <p><strong> Puntuació:</strong> El llibre no existeix</p>
						    <?php endif; ?>
							<?php if(isset($id)): ?>
						    <p><strong> Cops votat:</strong> <?=$escriptor->cops_votat?></p>
						    <?php else: ?>
						    <p><strong> Cops votat:</strong> El llibre no existeix</p>
						    <?php endif; ?>
                        </div>
						<!--FI valoracions -->

                            <!-- icones-->
                            <img class="lookIcon" src="<?=base_url?>assets/img/icons/look_icon.png" alt=${altVeureMes}>
                            <button type="button" class="btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- fi fitxa -->

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
            </div>
        </div>
    </section>
    <!--FI LLIBRES PUBLICATS B-->    

    <!--LLIBRES PUBLICATS-->
    <section class="row" id="llibres_publicats">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col">
                    <h2 class="text-center mb-5">Llibres Publicats</h2>
                </div>
            </div>
            <div class="row">

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
                    </div>
                </div>            
            </div>
        </div>
    </section>
    <!--FI LLIBRES PUBLICATS-->



</div>

<?php require_once 'view/layout/footer.php';?>