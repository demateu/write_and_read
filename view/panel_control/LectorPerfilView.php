<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<?php require_once 'view/layout/header.php';
?>
<div class="row profile">

    <div class="col-md-3">
        <div class="perfil-sidebar text-center">
            <!-- SIDEBAR FOTO AVATAR -->
            <div class="perfil-userpic">
                <img src="<?= $usuari->avatar_url_imagen ?>" alt="Imatge de <?= $usuari->nom_i_cognoms ?>" />
            </div>
            <!-- FI FOTO AVATAR -->
            <!-- SIDEBAR USER TITOL -->
            <div class="perfil-usertitol">
                <div class="perfil-usertitol-nom">
                    <?= $usuari->nom_i_cognoms ?>
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
                
                <form class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label" for="autoSizingInputGroup">Username</label>
                        <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" id="autoSizingInputGroup" value="<?= $usuari->nickname ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" value="<?= $usuari->email ?> ">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="specificSizeInputName">Nom i cognoms</label>
                        <input type="text" class="form-control" id="specificSizeInputName" value="<?= $usuari->nom_i_cognoms ?> ">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" value="<?= $usuari->password ?>">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="specificSizeInputName">DNI</label>
                        <input type="text-area" class="form-control" id="specificSizeInputName" value="<?= $usuari->dni ?> ">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="specificSizeInputName">Data de Naixement</label>
                        <input type="date" class="form-control" id="specificSizeInputName" value="<?= $usuari->data_naixement ?> ">
                    </div>

                    <!--  Para lecctor no 
                    <div class="col-12 mb-3">
                        <label for="inputAddress" class="form-label">Biografia</label>
                        <textarea maxlength="50" type="text" class="form-control" id="inputAddress" ></textarea>
                    </div>
                     -->


                    <fieldset class="row mb-3" id="avatar_escriptor_area">
                        <legend class="col-form-label col-sm-2 pt-0">Escull el teu avatar</legend>
                        <!-- Imatges d'avatar dinamiques -->
                        <div class="col-sm-10">
                            <?php foreach($imatgesAvatar as $urlAvatar): ?>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" checked>
                                    <img src="<?= base_url ?>assets/img/avatar/<?= $urlAvatar ?>" alt="Imatge de l'escriptor" width="50px" height="auto" />
                                </div>

                            <?php endforeach; ?>
                            <!-- 
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2">
                                <img src="<?= base_url ?>assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto" />
                            </div>
                             -->
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