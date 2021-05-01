
<!--
    Form per registrar usuaris
-->

<div class="container-fluid">
    <div class="row" id="hero_perfil">
        <div class="col-10 mx-auto">
            <h1 class="text_title_hero">Registra't a Write&Read</h1>
        </div>
    </div>    
</div>

<div class="container perfil_escriptor">

<div class="row">
        <!--columna izquierda-->
        <section class="col-2" id="side_menu">
            <div class="row">
                <div class="col mx-auto">
                    <div class="row" id="title_area_dades_personals">
						<div class="col">
							<h3 class="card-header">Què vols ser?</h3>
						</div>
					</div> 
                    <!--aside menu-->
                    <aside id="menu_options_escriptor v-pills-tab" class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                        <!--cada row llevará un background hover-->
                      
                        <div class="row px-3 py-2 nav-link links_menu_escriptor" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <span class="col-3 text_cent_vert">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                            <span class="col-9 text_cent_vert text-center">
                                <span>Escriptor</span>
                            </span>
                        </div>
						
						<div class="row px-3 py-2 nav-link active links_menu_escriptor" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <span class="col-3 text_cent_vert">
								<i class="fas fa-book"></i>
                            </span>
                            <span class="col-9 text_cent_vert text-center">
								<span>Lector</span>
                            </span>
                        </div>                        
                    
                    </aside>
                    <!--Fi aside menu-->
                    
                </div>
            </div>
        </section>
        <!--Fi columna izquierda-->
        <!--Columna dreta-->
        <section class="col-9 px-0" id="content_profile">

            <div class="row" id="title_area_dades_personals">
                <div class="col">
                    <h3 class="card-header">Introdueix les teves dades personals</h3>
                </div>
            </div>        
            <!-- Tab panes -->
            <div class="tab-content p-3" id="v-pills-tabContent">

                <!--Form Registra Lector-->  
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                   
					<form class="row g-3" action="http://localhost:8888/write_and_read/usuari/save" onsubmit="return Validate()" name="vform" method="post">

                        <div class="col-md-6">
                            <label class="form-label" for="nick_lector">Username</label>
                            <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="text" minlength="3" maxlength="20" class="form-control" name="nickname" id="nick_lector" placeholder="El nick que més t'agradi" title="El nick ha de tenir entre 3 i 20 caràcters" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email_lector" class="form-label">Email</label>
                            <input type="email" maxlength="50" class="form-control" name="email" id="email_lector" placeholder="La teva adreça de correu electrònic" title="Ha de ser una adreça de correu vàlida" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="nom_lector">Nom i cognoms</label>
                            <input type="text" minlength="5" maxlength="50" class="form-control" name="nom_i_cognoms" id="nom_lector" placeholder="El teu nom i cognoms verdaders" title="El nom i cognom han de tenir entre 5 i 50 caràcters" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password_lector" class="form-label">Password</label>
                            <input type="password" minlength="6" maxlength="20" class="form-control" name="password" id="password_lector" placeholder="Una contrasenya segura" title="Ha de contenir entre 6 i 20 caràcters" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="dni_lector">DNI</label>
                            <input type="text-area" maxlength="9" class="form-control" name="dni" id="dni_lector" placeholder="8 números i una lletra" pattern="[0-9]{8}[A-Za-z]{1}" title="Han de ser 8 números i una lletra sense espais" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="naixement_lector">Data de Naixement</label>
                            <input type="date" class="form-control" name="naixement" id="naixement_lector" placeholder="Quan vas néixer">
                        </div>
						
						<input id="lector" type="hidden" name="id_tipus_usuari" value="1">
						
						<input id="avatar_lector" type="hidden" name="avatar_id" value="1">

                        <div class="col-12">
                            <button type="submit" class="btn boto_llegeix">Enregistra't</button>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="subscrit" id="subscrit_lector">
                            <label class="form-check-label" for="subscrit_lector">
                                Subscriu-me
                            </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="condicions" required checked>
                            <label class="form-check-label" for="condicions">
                                Dono el meu consentiment perquè guardeu les meves dades
                            </label>
                            </div>
                        </div>


                    </form>           
                </div>
                <!--Fi Form Registra Lector-->  

                <!--Form Registra Escriptor-->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <form class="row g-3" action="<?=base_url?>usuari/save" method="post">


                        <div class="col-md-6">
                            <label class="form-label" for="nick_escriptor">Username</label>
                            <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="text" minlength="3" maxlength="20" class="form-control" name="nickname" id="nick_escriptor" placeholder="El nick que més t'agradi" title="El nick ha de tenir entre 3 i 20 caràcters" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email_escriptor" class="form-label">Email</label>
                            <input type="email" maxlength="50" class="form-control" name="email" id="email_escriptor" placeholder="La teva adreça de correu electrònic" title="Ha de ser una adreça de correu vàlida" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="nom_escriptor">Nom i cognoms</label>
                            <input type="text" minlength="5" maxlength="50" class="form-control" name="nom_i_cognoms" id="nom_escriptor" placeholder="El teu nom i cognoms verdaders" title="El nom i cognom han de tenir entre 5 i 50 caràcters" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password_escriptor" class="form-label">Password</label>
                            <input type="password" minlength="6" maxlength="20" class="form-control" name="password" id="password_escriptor" placeholder="Una contrasenya segura" title="Ha de contenir entre 6 i 20 caràcters"  required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="dni_escriptor">DNI</label>
                            <input type="text-area" maxlength="9" class="form-control" name="dni" id="dni_escriptor" placeholder="8 números i una lletra" pattern="[0-9]{8}[A-Za-z]{1}" title="Han de ser 8 números i una lletra sense espais" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="naixement_escriptor">Data de Naixement</label>
                            <input type="date" class="form-control" name="naixement" id="naixement_escriptor" placeholder="Quan vas néixer">
                        </div>
						
						    <input id="escriptor" type="hidden" name="id_tipus_usuari" value="2">
							
							<input id="subscrit_escriptor" type="hidden" name="subscrit" value="1">
							

                        <div class="col-12 mb-3">
                            <label for="biografia_escriptor" class="form-label">Biografia</label>
                            <textarea maxlength="250" type="text" class="form-control" name="biografia" id="biografia_escriptor" placeholder="Una breu biografia per a què et coneixin els teus lectors"></textarea>
                        </div>
                    


                        <fieldset class="row mb-3" id="avatar_escriptor_area">
                            <legend class="col-form-label col-sm-2 pt-0">Escull el teu avatar</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios1" value="1" checked>
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_1.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios2" value="2">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_2.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios3" value="3">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_3.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios4" value="4">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_4.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios5" value="5">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_5.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios6" value="6">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_6.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios7" value="7">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_7.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios8" value="8">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_8.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios9" value="9">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_9.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios10" value="10">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_10.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios11" value="11">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_11.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="avatar_id" id="gridRadios12" value="12">
                                        <img src="http://localhost:8888/write_and_read/assets/img/avatar/avatar_12.jpg" alt="Imatge de l'escriptor" width="50px" height="auto"/>
                                    </div>
                                </div>
                        </fieldset>

                        <div class="col-12">
                            <button type="submit" class="btn boto_llegeix">Enregistra't</button>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked disabled>
                            <label class="form-check-label" for="gridCheck">
                                Subscriu-me
                            </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="condicions_escriptor" required checked>
                            <label class="form-check-label" for="condicions_escriptor">
                                Dono el meu consentiment perquè guardeu les meves dades
                            </label>
                            </div>
                        </div>


                    </form>  </div>
                <!--Fi Registra Escriptor-->

            </div>
            <!-- Fi Tab panes -->            
        </section>
        <!--Fi Columna dreta-->
    </div>
</div>

