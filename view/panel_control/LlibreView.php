<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<?php require_once 'view/layout/header.php'; ?>


<!--Contingut principal -->
<main class="container-fluid" id="llibre_view">
	<!--Titol del llibre-->
	<?php if ((isset($id))&&($llibre!==NULL)) : ?>
		<div class="row" id="title_llibre_area">
			<div class="col">
				<h1 class="text-center mt-5 font_title"><?= $llibre->titol ?></h1>
			</div>
		</div>
	<!--FI titol-->
	
	<!--Informació del llibre-->
	<div class="row justify-content-md-center mt-4" id="info_llibre_area">
		<!--Portadada de Llibre-->
		<div class="col-4">
			<div class="imatge-llibre">
				<img src="/write_and_read/assets/img/cover_books/<?= $llibre->portada_url ?>.jpeg" alt="Imatge del llibre" />
			</div>	
		</div>
		<!--Fi Portada de Llibre-->
		<div class="col-7 p-3">
			<div class="row dades_autor_llibre">
				<div class="col">
				<p>Autor: <span><?= $llibre->nom_i_cognoms ?></span></p>
				<p>Gènere: <span><?= $llibre->nom_cat ?></span></p>
				<p>Data de Publicació: <span>
				<?php 	$date = date_create($llibre->data_alta);
						echo date_format($date,"d/m/Y"); ?></span></p>
				</div>
			</div>
			<hr>
			<div class="row dades_autor_llibre">
				<div class="col">
					<p>Sinopsis: <span id="sinopsis"><?= $llibre->sinopsis ?></span></p>
				</div>
			</div>

			<!-- valoracions -->
			<div class="rows" id="valoracions_llibre">
				<div class="col">
					<div class="valoracions">
						<?php $star = "<span class='fa fa-star'></span>";
							$starChecked = "<span class='fa fa-star checked'></span>";
							for ($i = 1; $i <= 5; $i++) {
								if ($i <= ($llibre->mitja_vots)) {
									echo $starChecked;
								} else {
									echo $star;
								}
							}

							if (($llibre->mitja_vots) == NULL) {
								echo "<p><strong> Puntuació:</strong> encara no puntuat</p>";
							} else {
								echo "<p><strong> Puntuació:</strong> ";
								echo $llibre->mitja_vots;
								echo "/5</p>";
							}	
							
							if (($llibre->cops_votat) == NULL) {
								echo "<p><strong> Cops votat:</strong> 0</p>";
							} else {
								echo "<p><strong> Cops votat:</strong> ";
								echo $llibre->cops_votat;
								echo "</p>";
							}	
						?>
						
						<p><strong>Cops llegit: </strong><?=$llibre->cops_llegit?></p>
					</div>
				</div>
			</div>
			<!--FI valoracions -->	

			<!-- view boto llegir -->
			<div class="row">
				<div class="col py-3">
					<?php require_once 'view/elements/botoLlegir.php'; ?>
				</div>
			</div>
			<!-- Fi view boto llegir -->

		</div>
	</div>
	<div class="row justify-content-md-center mt-5">
		<!--POSAR EL TITOL BACKGROUND LILA !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
		<div class="col-10">
			<!--COMENTARIS-->
			<h4>Comentaris</h4>
			<!--llistat de comentaris-->
			<?php require_once 'view/elements/comentarisLlistat.php'; ?>
			<!--Fi llistat de comentaris-->
			<div style="margin:30px">
				<?php if (isset($_SESSION['usuari'])) : ?>
						<!--Si l'usuari està loguejat, veu aquesta part-->
					<form class="row g-3" action="http://localhost:8888/write_and_read/interactllibre/comenta" name="vform" method="post">
						<input id="id_llibre" type="hidden" name="id_llibre" value="<?= $llibre->id ?>">
						<textarea maxlength="250" type="text" class="form-control" name="critica" id="critica" placeholder="Si has llegit el llibre escriu que t'ha semblat" required></textarea>
						<button type="submit" class="btn boto_llegeix">Enviar comentari</button>
					</form>
				<?php else : ?>
					<span>Per comentar fes 
						<a href="<?= base_url ?>usuari/login">login </a>
					o 
						<a href="<?= base_url ?>usuari/registre"> registra't</a>
					.</span>	
				<?php endif; ?>
			</div>
			<!--FI de COMENTARIS-->
		</div>
	</div>
	
	<?php 
		else : require_once 'view/static/error404.php'; 
		endif; 
	?>

</main>

<?php require_once 'view/layout/footer.php'; ?>