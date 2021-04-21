<?php require_once 'view/layout/header.php';
var_dump($usuari);
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


        <!-- Tabs contingut -->
        <div class="tab-content">
            <div class="tab-pane active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
                <form action="<?= base_url ?>usuari/save" method="post">

                    <label for="nickname">Nickname</label>
                    <input type="text" name="nickname" required="required" value="<?= $usuari->nickname ?>  "/>

                    <label for="nom_i_cognoms">Nom i cognoms</label>
                    <input type="text" name="nom_i_cognoms" required="required" pattern="[A-Za-z]+" value="<?= $usuari->nom_i_cognoms ?> "/>

                    <label for="dni">Dni</label>
                    <input type="text" name="dni" required="required" value="<?= $usuari->dni ?> " />

                    <label for="email">Email</label>
                    <input type="email" name="email" required="required" value="<?= $usuari->email ?> " />

                    <!--cambiar despues por un checkbox de fotos de avatares
                    <label for="avatar">Avatar</label>
                    <input type="radio" id="avatar1" name="avatar" value="1" required>
                    <label for="avatar1">Avatar 1</label><br>
                    <input type="radio" id="avatar2" name="avatar" value="2" required>
                    <label for="femavatar2ale">Avatar 2</label><br>  
                    -->

                    <label for="password">Contrasenya</label>
                    <input type="password" name="password" required="required" value="<?= $usuari->password ?>" />

                    <label for="naixement">Data de naixement</label>
                    <input type="date" name="naixement" value="<?= $usuari->data_naixement ?> " />

                    <!--
                    <label for="avatar">Lector o Escriptor</label>
                    <input type="radio" id="lector" name="tipus" value="1" required>
                    <label for="lector">Lector</label><br>
                    <input type="radio" id="escriptor" name="tipus" value="2" required>
                    <label for="escriptor">Escriptor</label><br>   
                    -->

                    <!--desplegar solo si ha marcado escriptor//ya se hará en Sprint 2
                    <label for="biografia">Biografia</label>
                    <textarea name="biografia" disabled></textarea>
                    -->
                    <input type="submit" value="Actualitzar" />

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