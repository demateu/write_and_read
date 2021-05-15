<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<?php require_once 'view/layout/header.php'; ?>

<!--Contingut principal -->
<main>
	<!--Titol del llibre-->
	<?php if ((isset($id))&&($llibre!==NULL)) : ?>
		<h1 class="text-center"><?= $llibre->titol ?></h1>
	<!--FI titol-->
	
	<div class="container border border-secondary" style="margin-bottom:30px;">
		<div class="row">
			<div class="col-md-auto">

				<!--Portadada de Llibre-->
				<div class="imatge-llibre">
					<img src="/write_and_read/assets/img/cover_books/<?= $llibre->portada_url ?>.jpeg" alt="Imatge del llibre" />
				</div>	
				<!--FI Portada de Llibre-->
				
				<!-- valoracions -->
				<div class="valoracions text-center">
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
				<!--FI valoracions -->
				
			</div>
			<div class="col" style="padding-top: 30px;">
				<!--FITXA del llibre -->
					<p class="card-title"><strong> Autor:</strong> <?= $llibre->nom_i_cognoms ?></p>
				
					<p class="card-title"><strong> Gènere:</strong> <?= $llibre->nom_cat ?></p>

					<p class="card-title"><strong> Data de Publicació:</strong> 
					<?php 	$date = date_create($llibre->data_alta);
							echo date_format($date,"d/m/Y"); ?></p>
				<hr>
				<h4>Sinopsis</h4>
					<p class="card-title" style="padding-bottom : 30px "><?= $llibre->sinopsis ?></p>
			
				<!-- view boto llegir -->
				<?php require_once 'view/elements/botoLlegir.php'; ?>
				<hr>
				<!--FI de FITXA -->
				
				<!--COMENTARIS-->
				<h4>Comentaris</h4>
				
				<form class="row g-3" action="http://localhost:8888/write_and_read/interactllibre/comenta" name="vform" method="post">
					<input id="id_llibre" type="hidden" name="id_llibre" value="<?= $llibre->id ?>">
					<textarea maxlength="250" type="text" class="form-control" name="critica" id="critica" placeholder="Si has llegit el llibre escriu que t'ha semblat" required></textarea>
					<button type="submit" class="btn boto_llegeix">Enviar comentari</button>
				</form>
				<!--FI de COMENTARIS-->
				
				
				
			</div>
		</div>
	</div>
	
	<?php 
		else : require_once 'view/static/error404.php'; 
		endif; 
	?>

</main>

<?php require_once 'view/layout/footer.php'; ?>