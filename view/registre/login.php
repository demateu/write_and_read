<?php
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
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Mai compartirem el teu email amb tercers.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contrassenya</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label form-text" for="exampleCheck1">Dono el meu consentiment perquè guardeu les meves dades</label>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Entra</button>
            </form>
            <div>
                <a href="<?=base_url?>usuari/registre"><p>No tens compte? Registra't</p></a>
            </div>
        </div>
        <div class="col-6"></div>
    </div>


</div>


<?php require_once 'view/layout/footer.php';?>