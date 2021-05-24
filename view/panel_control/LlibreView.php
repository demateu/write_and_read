<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<?php require_once 'view/layout/header.php'; ?>

<script src="<?= base_url ?>assets/js/validacioEstrelles.js" type="text/javascript"></script>

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
		<div class="col-sm-12 col-md-4">
			<div class="imatge-llibre">
				<img src="<?= $llibre->portada_url ?>" alt="Imatge del llibre" />
			</div>	
		</div>
		<!--Fi Portada de Llibre-->
		<div class="col-xs-12 col-md-7 p-3 mt-4" id="dades_autor">
			<div class="row dades_autor_llibre">
				<div class="col author_data">
				<p>Autor: <span><?= $llibre->nom_i_cognoms ?></span></p>
				<p>Gènere: <span><?= $llibre->nom_cat ?></span></p>
				<p>Data de Publicació: <span>
				<?php 	$date = date_create($llibre->data_alta);
						echo date_format($date,"d/m/Y"); ?></span></p>
				</div>
			</div>
			
			<div class="row dades_autor_llibre mt-3">
				<div class="col">
					<p class="card-header">Sinopsis:</p>
					<p id="sinopsis"><?= $llibre->sinopsis ?></p>
				</div>
			</div>

			
			<div class="row" id="valoracions_llibre">
				<div class="col">
					<!-- Estrelles -->
	<?php $estrelles="";
			$y=5;
			for ($i = 1; $i <= 5; $i++) {
				$star = '<span>★</span>';
				$starChecked = "<span style='color:orange'>★</span>";			
				if ($y <= ($llibre->mitja_vots)) {
					$estrelles=$estrelles.$starChecked;
				} else {
					$estrelles=$estrelles.$star;
				}
				$y--;
			}
			
		$puntuar="";		
			$y=5;
			for ($i = 1; $i <= 5; $i++) {
				$star = "<input id='radio$i' type='radio' name='puntuacio' value='$y'><label for='radio$i' type='submit'>★</label>";
				$starChecked = "<input id='radio$i' type='radio' name='puntuacio' value='$y' checked><label for='radio$i' type='submit'>★</label>";			
				if ($y == ($llibre->mitja_vots)) {
					$puntuar=$puntuar.$starChecked;
				} else {
					$puntuar=$puntuar.$star;
				}
				$y--;
			}	
	?>
					 <?php if (isset($_SESSION['usuari']) and ($_SESSION['usuari']->id_tipus_usuari)==1) : ?>
                        <!--Si l'usuari està loguejat, veu aquesta part-->
						<form action='http://localhost:8888/write_and_read/interactllibre/puntua' onsubmit="return Validate()" name='vform' method='post'>
							<input id='id_llibre' type='hidden' name='id_llibre' value='<?= $llibre->id ?>'>
							<p class='clasificacion d-flex justify-content-center'>
							<?= $puntuar ?>
							</p>
							<button type="submit" class="btn boto_llegeix mb-1 mx-auto">Enviar puntuació</button>
							<div id="error"></div>
						</form>
						
			
					<?php else : ?>
					<!--Si no veu aquesta part-->
						<form action='' method='post'>
							<p class='clasificacion'>
								<?= $estrelles ?>
							</p>
						</form>	
					<?php endif; ?>		
					<!-- Fi Estrelles -->
					<!--punts-->
					<?php
					if (($llibre->mitja_vots) == NULL) {
						echo "<p class='llibre_punts'>Punts: 0/5</p>";
					} else {
						echo "<p class='llibre_punts'>Punts:";
						echo $llibre->mitja_vots;
						echo "/5</p>";
					}
					?>
					<!--Fi punts-->
				</div>
			</div>

			<div class="row llibre_punts">
				<div class="col-xs-12 col-md-2 lectures_icono">
					<!--Lectures-->
					<p><i class="far fa-eye"></i>  Lectures:<?=$llibre->cops_llegit?></p>
					<!--Fi Lectures-->
				</div>
				<div class="col-xs-12 col-md-2 vots_icono">
					<!--Vots-->
					<?php	
					if (($llibre->cops_votat) == NULL) {
						echo "<p> <i class='far fa-star'></i>  Vots:0</p>";
					} else {
						echo "<p><i class='far fa-star'></i>  Vots:";
						echo $llibre->cops_votat;
						echo "</p>";
					}	
					?>
					<!--Fi Vots-->
				</div>
			</div>
			

			<!-- view boto llegir -->
			<div class="row">
				<div class="col py-3">
					<?php require_once 'view/elements/botoLlegir.php'; ?>
				</div>
			</div>
			<!-- Fi view boto llegir -->

		</div>
		
	</div>


	<div class="row justify-content-md-center mt-5" id="comentaris_area">
		<div class="col-xs-12 col-md-11">
		<hr>
			<!--COMENTARIS-->
			<h4 class="card-header">Comentaris</h4>
			<!--llistat de comentaris-->
			<?php require_once 'view/elements/comentarisLlistat.php'; ?>
			<!--Fi llistat de comentaris-->
			<div class="py-4">
				<?php if (isset($_SESSION['usuari'])) : ?>
					<!--Si l'usuari està loguejat, veu aquesta part-->
					<form class="row g-3" action="http://localhost:8888/write_and_read/interactllibre/comenta" name="vform" method="post">
						<input id="id_llibre" type="hidden" name="id_llibre" value="<?= $llibre->id ?>">
						<textarea maxlength="250" type="text" class="form-control" name="critica" id="critica" placeholder="Si has llegit el llibre escriu que t'ha semblat" required></textarea>
						<button type="submit" class="btn boto_llegeix">Enviar comentari</button>
					</form>
				<!--Si l'usuari NO està loguejat, veu aquesta part-->
				<?php else : ?>
					<span>Per deixar un comentari en aquest llibre 
						<a href="<?= base_url ?>usuari/login">logueja't </a>
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