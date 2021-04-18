<?php require_once 'view/layout/header.php'; ?>

<!--Contingut principal -->
<main>
            <!--Titol del llibre-->
    <?php if(isset($id)): ?>
        <h1 class="text-center"><?=$llibre->titol?></h1>
    <?php else: ?>
        <h1 class="text-center">El llibre no existeix</h1>
    <?php endif; ?>
    <!--FI titol-->

            <div class="container border border-secondary">
                <div class="row">
                    <div class="col-md-auto">

						<!--Portadada de Llibre-->
                        <?php if(isset($id)): ?>
						<img src="/write_and_read/assets/img/cover_books/<?=$llibre->portada_url?>.jpeg" alt="Imatge del llibre" class="card-img-top" />
						<?php else: ?>
						<img src="https://www.forewordreviews.com/books/covers/obabakoak.jpg" alt="El llibre no existeix" class="card-img-top" />
						<?php endif; ?>
                        <!--FI Portada de Llibre-->
						<!-- valoracions -->
                        <div class="valoracions text-center">
                           <?php if(isset($id)):
							$star = "<span class='fa fa-star'></span>";
							$starChecked = "<span class='fa fa-star checked'></span>";
							for ($i = 1; $i <= 5; $i++) {
								if($i <= ($llibre->mitja_vots)){
									echo $starChecked;
								}else{
									echo $star; 
								}
							} endif; ?>
							<?php if(isset($id)):
								if(($llibre->mitja_vots)==NULL){
									echo "<p><strong> Puntuació:</strong> encara no puntuat</p>";
								}else{
									echo "<p><strong> Puntuació:</strong> ";
									echo $llibre->mitja_vots;
									echo "/5</p>"; 
								}	?>
						    <?php else: ?>
						    <p><strong> Puntuació:</strong> El llibre no existeix</p>
						    <?php endif; ?>
							<?php if(isset($id)): 
						    if(($llibre->cops_votat)==NULL){
									echo "<p><strong> Cops votat:</strong> 0</p>";
								}else{
									echo "<p><strong> Cops votat:</strong> ";
									echo $llibre->cops_votat;
									echo "</p>"; 
								}	?>
						    <?php else: ?>
						    <p><strong> Cops votat:</strong> El llibre no existeix</p>
						    <?php endif; ?>
                        </div>
						<!--FI valoracions -->
                    </div>
                    <div class="col">
					<!--FITXA del llibre -->
						<?php if(isset($id)): ?>
						    <p class="card-title"><strong> Autor:</strong> <?=$llibre->nom_i_cognoms?></p>
						<?php else: ?>
						    <p class="card-title"><strong> Autor:</strong> El llibre no existeix</p>
						<?php endif; ?>
						<?php if(isset($id)): ?>
						    <p class="card-title"><strong> Gènere:</strong> <?=$llibre->nom_cat?></p>
						<?php else: ?>
						    <p class="card-title"><strong> Gènere:</strong> El llibre no existeix</p>
						<?php endif; ?>
						<?php if(isset($id)): ?>
						    <p class="card-title"><strong> Data de Publicació:</strong> <?=$llibre->data_alta?></p>
						<?php else: ?>
						    <p class="card-title"><strong> Data de Publicació:</strong> El llibre no existeix</p>
						<?php endif; ?>
                        <hr>
						<h4>Sinopsis</h4>
						<?php if(isset($id)): ?>
						    <p class="card-title"><?=$llibre->sinopsis?></p>
						<?php else: ?>
						    <p class="card-title">El llibre no existeix</p>
						<?php endif; ?>
						<?php if(isset($id)): ?>
						    <a href="<?=$llibre->contingut_url?>"><button type="button" class="btn boto_llegeix">Llegir</button></a>
						<?php else: ?>
						    <button type="button" class="btn boto_llegeix">Llegir</button>
						<?php endif; ?>
						<!--FI de FITXA -->
                    </div>
                </div>
            </div>

</main>

<?php require_once 'view/layout/footer.php'; ?>
