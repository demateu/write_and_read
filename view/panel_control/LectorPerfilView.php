<?php require_once 'view/layout/header.php';
?>
<div class="row profile">

    <div class="col-md-3">
        <div class="perfil-sidebar text-center">
            <!-- SIDEBAR FOTO AVATAR -->
            <div class="perfil-userpic">
                <img src="<?= $_SESSION['usuari']->avatar_url_imagen ?>" alt="Imatge de <?= $_SESSION['usuari']->nom_i_cognoms ?>" />
            </div>
            <!-- FI FOTO AVATAR -->
            <!-- SIDEBAR USER TITOL -->
            <div class="perfil-usertitol">
                <div class="perfil-usertitol-nom">
                    <?= $_SESSION['usuari']->nom_i_cognoms ?>
                </div>
                <div class="perfil-usertitol-rol">
                    Lector
                </div>
            </div>
            <hr />
            <!-- FI SIDEBAR USER TITOL -->
            <!-- SIDEBAR MENU -->
            <div class="perfil-usermenu">

                <!-- Tab navs -->
                <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="perfil-tab" data-bs-toggle="tab" data-bs-target="#perfil" type="button" role="tab" aria-controls="perfil" aria-selected="true">
                            <i class="fas fa-user-circle"></i>
                            <p>Perfil</p>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="favorits-tab" data-bs-toggle="tab" data-bs-target="#favorits" type="button" role="tab" aria-controls="favorits" aria-selected="false">
                            <i class="fas fa-heart"></i>
                            <p>Favorits</p>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ajuda-tab" data-bs-toggle="tab" data-bs-target="#ajuda" type="button" role="tab" aria-controls="ajuda" aria-selected="false">
                            <i class="fas fa-question-circle"></i>
                            <p>Ajuda</p>
                        </button>
                    </li>
                </ul>
            </div>

            <!-- FI MENU -->
        </div>
    </div>

    <div class="col-md-9">
        <div class="row" id="title_area_dades_personals">
            <div class="col">
                <h3 class="card-header">Edita aquí les teves dades personals</h3>
            </div>
        </div>

        <!-- Tabs contingut -->
        <div class="tab-content">
            <div class="tab-pane active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">

                <form class="row g-3" action="<?= base_url ?>usuari/saveCanvis" method="POST">

                    <div class="col-md-6">
                        <label class="form-label" for="autoSizingInputGroup">Username</label>
                        <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="text" name="nickname" class="form-control" id="autoSizingInputGroup" value="<?= $_SESSION['usuari']->nickname ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" value="<?= $_SESSION['usuari']->email ?> ">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="specificSizeInputName">Nom i cognoms</label>
                        <input type="text" name="nom_i_cognoms" class="form-control" id="specificSizeInputName" value="<?= $_SESSION['usuari']->nom_i_cognoms ?> ">
                    </div>
                    <!-- 
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Nova contrasenya">
                    </div>
                     -->

                    <div class="col-md-6">
                        <label class="form-label" for="specificSizeInputName">DNI</label>
                        <input type="text-area" name="dni" class="form-control" id="specificSizeInputName" value="<?= $_SESSION['usuari']->dni ?> ">
                    </div>

                    <!-- 
                    <div class="col-md-6">
                        <label class="form-label" for="specificSizeInputName">Data de Naixement</label>
                        <input type="date" class="form-control" id="specificSizeInputName" value="<?= $_SESSION['usuari']->data_naixement ?> ">
                    </div>
                     -->

                    <div class="row">
                        <div class="col mb-3">
                            <label>Canvia el teu avatar:</label>
                        </div>
                    </div>

                    <fieldset class="row mb-3" id="avatar_escriptor_area">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar1" value="1" checked>
                                <img src="<?= base_url ?>assets/img/avatar/avatar_1.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar3" value="3">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_3.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar4" value="4">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_4.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar5" value="5">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_5.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar6" value="6">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_6.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar7" value="7">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_7.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar8" value="8">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_8.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar9" value="9">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_9.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar10" value="10">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_10.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar11" value="11">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_11.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar12" value="12">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_12.jpg" alt="Imatge de l'escriptor" width="40px" height="auto" />
                            </div>
                        </div>
                    </fieldset>



                    <div class="col-12">
                        <button type="submit" class="btn boto_llegeix">Guardar Canvis</button>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                            <label class="form-check-label" for="gridCheck">
                                Subscriu-me
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                            <label class="form-check-label" for="gridCheck">
                                Dono el meu consentiment perquè guardeu les meves dades
                            </label>
                        </div>
                    </div>


                </form>

            </div>
            <div class="tab-pane" id="favorits" role="tabpanel" aria-labelledby="favorits-tab">
                2
            </div>
            <div class="tab-pane" id="ajuda" role="tabpanel" aria-labelledby="ajuda-tab">
                3
            </div>
        </div>



    </div>
</div>
<?php require_once 'view/layout/footer.php'; ?>