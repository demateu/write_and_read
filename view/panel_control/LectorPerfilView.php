<?php require_once 'view/layout/header.php'; ?>
<div class="row profile">

    <div class="col-md-3">
        <div class="perfil-sidebar text-center">
            <!-- SIDEBAR FOTO AVATAR -->
            <div class="perfil-userpic">
                <img src="https://cdn0.iconfinder.com/data/icons/social-media-network-4/48/male_avatar-512.png" class="img-responsive" alt="">
            </div>
            <!-- FI FOTO AVATAR -->
            <!-- SIDEBAR USER TITOL -->
            <div class="perfil-usertitol">
                <div class="perfil-usertitol-nom">
                    Eren Jaeger
                </div>
                <div class="perfil-usertitol-rol">
                    Lector
                </div>
            </div>
            <!-- FI SIDEBAR USER TITOL -->
            <!-- SIDEBAR MENU -->
            <div class="perfil-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="fas fa-user-circle"></i>
                            El meu compte </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-heart"></i>
                            Els meus preferits </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fas fa-question-circle"></i>
                            Ajuda </a>
                    </li>

                </ul>
            </div>
            <!-- FI MENU -->
        </div>
    </div>

    <div class="col-md-9">
        <div class="perfil-content">
            Contingut com llibres favorits
        </div>
    </div>
</div>
<?php require_once 'view/layout/footer.php'; ?>