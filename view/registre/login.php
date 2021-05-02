<?php

if(!isset($_SESSION)) {
    session_start();
}

/**
 * @author demateu
 * pagina que tindrà el login en el cas que l'usuari
 * ja estigui enregistrat
 */
?>

<?php require_once 'view/layout/header.php'; ?>



<div class="container-fluid" id="login_body">
    <div class="row">
        <div class="col-5 mx-auto p-5">
            <h1>Inicia Sessió</h1>
            <form action="<?=base_url?>usuari/loginUser" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                    <div id="emailHelp" class="form-text">Mai compartirem el teu email amb tercers.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contrassenya</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label form-text" for="consentiment">Dono el meu consentiment perquè guardeu les meves dades</label>
                    <input type="checkbox" class="form-check-input" id="consentiment" name="consentiment" required checked>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Entra</button>
            </form>

            <!--part que aparareix quan l'usuari no s'ha pogut loguejar-->
            <?php if( isset ($_SESSION['error_login'])  ): ?>
            <div id="error_login">
                <p class="text-center">Introdueix un password correcte o registrat</p>
            </div>
            <?php endif; ?>
            <!--FI part que aparareix quan l'usuari no s'ha pogut loguejar-->

            <div>
                <a href="<?=base_url?>usuari/registre"><p>No tens compte? Registra't</p></a>
            </div>

        </div>
        <div class="col-6"></div>
    </div>


</div>


<?php require_once 'view/layout/footer.php';?>