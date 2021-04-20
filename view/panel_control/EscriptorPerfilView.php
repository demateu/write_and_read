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
                                <h2>Lula Wallace</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <p>@nickname</p>
                            </div>
                        </div>
                    </aside>
                    <!--Fi area noms-->
                    <aside id="menu_options_escriptor">
                        <!--cada row llevará un background hover-->
                        <div class="row px-3 py-2">
                            <div class="col-3 text_cent_vert text-center">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            <div class="col-9 text_cent_vert text-center">
                                <span>Edita perfil</span>
                            </div>
                        </div>
                        <div class="row px-3 py-2">
                            <div class="col-3 text_cent_vert text-center">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="col-9 text_cent_vert text-center">
                                <span>Mis Obras</span>
                            </div>
                        </div>
                        <div class="row px-3 py-2">
                            <div class="col-3 text_cent_vert text-center">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="col-9 text_cent_vert text-center">
                                <span>Crear Obra</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!--Fi columna izquierda-->
        <!--Columna dreta-->
        <section class="col-9" id="content_profile">
            Columna derecha
        </section>
        <!--Fi Columna dreta-->
    </div>
</div>





<?php require_once 'view/layout/footer.php';?>