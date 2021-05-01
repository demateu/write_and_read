
<!--
    $_SESSION['register'] == 'complete'
    if($_SESSION['register'] == 'complete')
    get SESSION (cual seria el nombre de la sesion creada?)
    -->


<?php require_once 'view/layout/header.php'; ?>

<?php if( isset($_SESSION['usuari']) ): ?>
    <!--Si l'usuari està loguejat, veu aquesta part-->
    <div>
        <h3>test d'usuari loguejat:
            <?= $_SESSION['usuari']->nickname; ?>
        </h3>

        <div class="container-fluid">
            <div class="row" id="hero_perfil">
                <div class="col-10 mx-auto">
                    <h1 class="text_title_hero">El meu panell de control d'escriptor</h1>
                </div>
            </div>    
        </div>


        <div class="container perfil_escriptor">

            <div class="row">
                <!--columna izquierda-->
                <section class="col-3" id="side_menu">
                    <div class="row">
                        <div class="col mx-auto">
                            <img src="<?= $_SESSION['usuari']->avatar_url_imagen; ?>" alt="Imatge de l'escriptor" width="100%" height="auto"/>
                            <!--area noms-->
                            <aside id="noms_escriptor" class="p-2">
                                <div class="row">
                                    <div class="col text-center">
                                        <h2 class="m-0 p-1"><?= $_SESSION['usuari']->nom_i_cognoms; ?></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <span class="text_nickname p-2">@<?= $_SESSION['usuari']->nickname; ?></span>
                                    </div>
                                </div>
                            </aside>
                            <!--Fi area noms-->
                            <!--aside menu-->
                            <aside id="menu_options_escriptor v-pills-tab" class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                <!--cada row llevará un background hover-->
                                
                                <div class="row px-3 py-2 nav-link active links_menu_escriptor" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <span class="col-3 text_cent_vert">
                                        <i class="fas fa-user-edit"></i>
                                    </span>
                                    <span class="col-9 text_cent_vert text-center">
                                        <span>Edita perfil</span>
                                    </span>
                                </div>
                                
                            
                                <div class="row px-3 py-2 nav-link links_menu_escriptor" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <span class="col-3 text_cent_vert">
                                        <i class="fas fa-book"></i>
                                    </span>
                                    <span class="col-9 text_cent_vert text-center">
                                        <span>Els meus llibres</span>
                                    </span>
                                </div>
                            
                                <div class="row px-3 py-2 nav-link links_menu_escriptor" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    <span class="col-3 text_cent_vert">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="col-9 text_cent_vert text-center">
                                        <span>Crear Obra</span>
                                    </span>
                                </div>

                                <div class="row px-3 py-2 nav-link links_menu_escriptor" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"  role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <span class="col-3 text_cent_vert">
                                        <i class="fas fa-bookmark"></i>
                                    </span>
                                    <span class="col-9 text_cent_vert text-center">
                                        <span>Subscripció</span>
                                    </span>
                                </div>                        
                            
                                <hr>
                                <a href="<?=base_url?>usuari/logoutUser">
                                <div class="row px-3 py-2 nav-link links_menu_escriptor" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">
                                    <span class="col-3 text_cent_vert">
                                        <i class="fas fa-user-edit"></i>
                                    </span>
                                    <span class="col-9 text_cent_vert text-center">
                                        Logout
                                    </span>
                                </div>
                                </a>

                            </aside>
                            <!--Fi aside menu-->
                            
                        </div>
                    </div>

                </section>
                <!--Fi columna izquierda-->

                <!--Columna dreta-->
                <section class="col-8 px-0" id="content_profile">

                    <div class="row" id="title_area_dades_personals">
                        <div class="col">
                            <h3 class="card-header">Edita aquí les teves dades personals</h3>
                        </div>
                    </div>        
                    <!-- Tab panes -->
                    <div class="tab-content p-3" id="v-pills-tabContent">

                        <!--Form Edita Perfil-->  
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <form class="row g-3" action="<?=base_url?>usuari/saveCanvis" method="POST">
                                <div class="col-md-6">
                                    <label class="form-label" for="nickname">Nickname</label>
                                    <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" name="nickname" class="form-control" id="nickname" value="<?= $_SESSION['usuari']->nickname; ?>">
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="<?= $_SESSION['usuari']->email; ?>" >
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="nom_i_cognoms">Nom i cognoms</label>
                                    <input type="text" name="nom_i_cognoms" class="form-control" id="nom_i_cognoms" value="<?= $_SESSION['usuari']->nom_i_cognoms; ?>">
                                </div>

                                <!-- La password no deberia ser mostrada pero si puede ser cambiada
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Introduce un nuevo Password</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                -->

                                <div class="col-md-6">
                                    <label class="form-label" for="dni">DNI</label>
                                    <input type="text" name="dni" class="form-control" id="dni" value="<?= $_SESSION['usuari']->dni; ?>">
                                </div>

                                <!--VEURE COM MOSTRAR LA DATA
                                canvio tipo data per test per a que es visualitzi
                                pero a veure si guarda els camps 
                                
                                <div class="col-md-6">
                                    <label class="form-label" for="specificSizeInputName">Data de Naixement</label>
                                    <input type="text" class="form-control" id="specificSizeInputName" value="">
                                </div>
                                -->

                                <div class="col-12 mb-3">
                                    <label for="biografia" class="form-label">Biografia</label>
                                    <textarea maxlength="50" name="biografia" type="text" class="form-control" id="biografia"><?= $_SESSION['usuari']->biografia; ?></textarea>
                                </div>
                            
                                <div class="row">
                                    <div class="col mb-3">
                                        <label>Canvia el teu avatar:</label>
                                    </div>
                                </div>

                                <fieldset class="row mb-3" id="avatar_escriptor_area">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar1" value="1" checked>
                                                <img src="<?=base_url?>assets/img/avatar/avatar_1.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar2" value="2">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar3" value="3">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_3.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar4" value="4">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_4.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar5" value="5">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_5.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar6" value="6">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_6.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar7" value="7">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_7.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar8" value="8">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_8.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar9" value="9">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_9.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar10" value="10">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_10.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar11" value="11">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_11.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar12" value="12">
                                                <img src="<?=base_url?>assets/img/avatar/avatar_12.jpg" alt="Imatge de l'escriptor" width="40px" height="auto"/>
                                            </div>
                                        </div>
                                </fieldset>


                                <div class="col-12">
                                    <button type="submit" id="boto_guarda" class="btn btn-primary">Guardar Canvis</button>
                                </div>


                                <div class="col-12">
                                    <div class="form-check">
                                    <input class="form-check-input" name="consentiment_privacitat" type="checkbox" id="consentiment_privacitat" checked required>
                                    <label class="form-check-label" for="consentiment_privacitat">
                                        Dono el meu consentiment perquè guardeu les meves dades
                                    </label>
                                    </div>
                                </div>


                            </form>           
                        </div>
                        <!--Fi Form Edita Perfil-->  

                        <!--ELS MEUS LLIBRES-->
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                            <!--LLIBRES PUBLICATS-->
                            <div class="container">
                                <section class="row" id="llibres_publicats">
                                    <div class="col-10 mx-auto">
                                        <div class="row">
                                            <div class="col">
                                                <h2 class="text-center mt-5 font_title">Llibres Publicats</h2>
                                                <p class="text-center mt-5 font_subtitle">Aquests son els llibres que té publicats</p>
                                            </div>
                                        </div>

                                        <!--card llibre-->
                                        <?php while($llibre = $escriptorLlibres->fetch_object()): ?>
                                            <div class="row mt-5">
                                                <div class="col-3">
                                                    <img src="<?=base_url?>assets/img/cover_books/<?=$llibre->portada_url?>.jpeg" alt="Imatge del llibre" width="100%" height="auto">
                                                </div>
                                                <div class="col-9">
                                                    <h3 class="card-header"><?=$llibre->titol?></h3>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Subtítol test</h5>
                                                        <p class="card-text"><?=$llibre->sinopsis?></p>

                                                        <!-- valoracions FALTA PERSONALITZAR-->
                                                        <div class="valoracions">
                                                            <?php 
                                                            $star = "<span class='fa fa-star'></span>";
                                                            $starChecked = "<span class='fa fa-star checked'></span>";
                                                            for ($i = 1; $i <= 5; $i++) {
                                                                if($i <= ($llibre->mitja_vots)){
                                                                    echo $starChecked;
                                                                }else{
                                                                    echo $star; 
                                                                }
                                                            }
                                                            ?>
                                                            <?php if($llibre->mitja_vots == null): ?>
                                                                <p><strong> Puntuació:</strong> 0/5</p>
                                                            <?php else: ?>
                                                                <p><strong> Puntuació:</strong> <?=$llibre->mitja_vots?>/5</p>
                                                            <?php endif; ?>
                                                        
                                                        </div>
                                                        <!--FI valoracions -->

                                                        <a href="#" class="btn boto_llegeix">Llegeix</a>
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
                            <!--FI LLIBRES PUBLICATS B-->    

                        </div>
                        <!--Fi Lista ver mis Obras-->

                        <!--Form CREAR NOVA OBRA-->
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        

                            <div class="row">
                                <div class="col">
                                    <h3>Puja aquí la teva propera obra mestra...</h3>
                                </div>
                            </div>

                            
                        <!--Form Edita Perfil-->  
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <form class="row g-3" action="<?=base_url?>llibre/save" method="POST" enctype="multipart/form-data">
                           
                                <div class="col-md-6">
                                    <label class="form-label" for="nickname">Nickname</label>
                                    <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" name="nickname" class="form-control" id="nickname" value="<?= $_SESSION['usuari']->nickname; ?>">
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="<?= $_SESSION['usuari']->email; ?>" >
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="nom_i_cognoms">Nom i cognoms</label>
                                    <input type="text" name="nom_i_cognoms" class="form-control" id="nom_i_cognoms" value="<?= $_SESSION['usuari']->nom_i_cognoms; ?>">
                                </div>

                                <!-- La password no deberia ser mostrada pero si puede ser cambiada
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Introduce un nuevo Password</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                -->

                                <div class="col-md-6">
                                    <label class="form-label" for="dni">DNI</label>
                                    <input type="text" name="dni" class="form-control" id="dni" value="<?= $_SESSION['usuari']->dni; ?>">
                                </div>

                                <!--VEURE COM MOSTRAR LA DATA
                                canvio tipo data per test per a que es visualitzi
                                pero a veure si guarda els camps 
                                
                                <div class="col-md-6">
                                    <label class="form-label" for="specificSizeInputName">Data de Naixement</label>
                                    <input type="text" class="form-control" id="specificSizeInputName" value="">
                                </div>
                                -->

                                <div class="col-12 mb-3">
                                    <label for="biografia" class="form-label">Biografia</label>
                                    <textarea maxlength="50" name="biografia" type="text" class="form-control" id="biografia"><?= $_SESSION['usuari']->biografia; ?></textarea>
                                </div>
                


                                <div class="col-12">
                                    <button type="submit" id="boto_guarda" class="btn btn-primary">Guardar Canvis</button>
                                </div>


                                <div class="col-12">
                                    <div class="form-check">
                                    <input class="form-check-input" name="consentiment_privacitat" type="checkbox" id="consentiment_privacitat" checked required>
                                    <label class="form-check-label" for="consentiment_privacitat">
                                        Dono el meu consentiment perquè guardeu les meves dades
                                    </label>
                                    </div>
                                </div>

                                <!--escull categoria-->                      
                                <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                                </div>
                                
         
                        </div>
                        <!--Fi Form Edita Perfil-->  


                            
                                <label class="col-12" for="fileToUpload">Select a file:</label>
                                <div class="row">
                                    <input class="col-12" type="file" name="fileToUpload" id="fileToUpload">
                                </div>
                                <div class="row">
                                 <input class="col-12" type="submit" value="CARREGAR" name="submit">
                                </div>
                            </form>


                        
                        </div>
                        <!--Fi Form CREAR NOVA OBRA-->

                        <!--de retén por si falta algo más-->
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                            <h5 class="card-title">Canvia la teva subscripció</h5>

                            <div class="card-group">
                                <div class="card m-0">
                                <div class="card-header border-success">MODALITAT MES</div>
                                    <div class="card-body">
                                    <h5 class="card-title">32€</h5>
                                    <p class="card-text">Pagament mensual</p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <button class="btn btn-primary" type="button">Selecciona</button>
                                    </div>
                                </div>
                                <div class="card m-0">
                                <div class="card-header border-success">MODALITAT TRIMESTRE</div>
                                    <div class="card-body">
                                    <h5 class="card-title">19€</h5>
                                    <p class="card-text">Un pagament trimestral de...</p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                    <button class="btn btn-primary" type="button">Selecciona</button>
                                    </div>
                                </div>
                                <div class="card m-0">
                                <div class="card-header border-success">MODALITAT ANUAL</div>
                                    <div class="card-body">
                                    <h5 class="card-title">27€</h5>
                                    <p class="card-text">Un pagament anual de...</p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                    <button class="btn btn-primary" type="button">Selecciona</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" name="subscriu" type="checkbox" id="subscriu" checked>
                                    <label class="form-check-label" for="subscriu">
                                        Subscriu-me
                                    </label>
                                </div>
                            </div>                
                        </div>
                        <!--Fi de retén por si falta algo más-->

                    </div>
                    <!-- Fi Tab panes -->            
                </section>
                <!--Fi Columna dreta-->
            </div>
        </div>
    </div>
<!--Si l'usuari NO està loguejat, veu aquesta part: -->
<?php else: ?>
    <h3>T'has desloguejat!</h3>
<?php endif; ?>

<?php require_once 'view/layout/footer.php';?>