<?php session_start(); ?>

<!--
    $_SESSION['register'] == 'complete'
    if($_SESSION['register'] == 'complete')
    get SESSION (cual seria el nombre de la sesion creada?)
    -->


<?php require_once 'view/layout/header.php'; ?>

<div class="container-fluid">
    <div class="row" id="hero_perfil">
        <div class="col-10 mx-auto">
            <h1 class="text_title_hero">Mi sitio personal</h1>
        </div>
    </div>    
</div>


<div class="container perfil_escriptor">
    <div class="row">
        <!--columna izquierda-->
        <section class="col-2" id="side_menu">
            <div class="row">
                <div class="col mx-auto">
                    <!--test src, cambiar despues-->
                    <img src="<?=base_url?>assets/img/avatar/avatar_1.jpg" alt="Imatge de l'escriptor" width="100%" height="auto"/>
                    <!--area noms-->
                    <aside id="noms_escriptor" class="p-2">
                        <div class="row">
                            <div class="col text-center">
                                <h2 class="m-0 p-2">Lula Wallace</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <span class="text_nickname p-2">@nickname</span>
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
                                <span>Mis Obras</span>
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
                    
                    </aside>
                    <!--Fi aside menu-->
                </div>
            </div>
            <!--logout-->
            <div class="row mt-3" id="logout_panell">
                <div class="col mx-auto">
                    <aside id="menu_options_escriptor v-pills-tab" class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                        <!--cada row llevará un background hover-->
                        <div class="row px-3 py-2 nav-link links_menu_escriptor" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">
                            <span class="col-3 text_cent_vert">
                                <i class="fas fa-user-edit"></i>
                            </span>
                            <span class="col-9 text_cent_vert text-center">
                                <span>Logout</span>
                            </span>
                        </div>
                    </aside>
                </div>
            </div>
            <!--Fi logout-->

        </section>
        <!--Fi columna izquierda-->
        <!--Columna dreta-->
        <section class="col-9 px-0" id="content_profile">

            <div class="row" id="title_area_dades_personals">
                <div class="col">
                    <h3 class="card-header">Edita aquí les teves dades personals</h3>
                </div>
            </div>        
            <!-- Tab panes -->
            <div class="tab-content p-3" id="v-pills-tabContent">

                <!--Form Edita Perfil-->  
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <form class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label" for="autoSizingInputGroup">Nickname</label>
                            <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Nickname">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="specificSizeInputName">Nom i cognoms</label>
                            <input type="text" class="form-control" id="specificSizeInputName" placeholder="Nom i cognoms">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="specificSizeInputName">DNI</label>
                            <input type="text-area" class="form-control" id="specificSizeInputName" placeholder="Jane Doe">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="specificSizeInputName">Data de Naixement</label>
                            <input type="date" class="form-control" id="specificSizeInputName">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="inputAddress" class="form-label">Biografia</label>
                            <textarea maxlength="50" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"></textarea>
                        </div>
                    


                        <fieldset class="row mb-3" id="avatar_escriptor_area">
                            <legend class="col-form-label col-sm-2 pt-0">Escull el teu avatar</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" checked>
                                        <img src="<?=base_url?>assets/img/avatar/avatar_1.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                        <img src="<?=base_url?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                </div>
                        </fieldset>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Guardar Canvis</button>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Subscriu-me
                            </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Dono el meu consentiment perquè guardeu les meves dades
                            </label>
                            </div>
                        </div>


                    </form>           
                </div>
                <!--Fi Form Edita Perfil-->  

                <!--Lista ver mis Obras-->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...2</div>
                <!--Fi Lista ver mis Obras-->

                <!--Form Crear/Subir Obra-->
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...3</div>
                <!--Fi Form Crear/Subir Obra-->

                <!--de retén por si falta algo más-->
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...4</div>
                <!--Fi de retén por si falta algo más-->

            </div>
            <!-- Fi Tab panes -->            
        </section>
        <!--Fi Columna dreta-->
    </div>
</div>





<?php require_once 'view/layout/footer.php';?>