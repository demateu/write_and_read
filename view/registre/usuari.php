
<!--
    Form de pruba para comprobar que el MVC esta funcionando bien
-->
<h3>Registra't a Write&Read</h3>

<?php
/**
 * Si el registro va bien saldrá un mensaje diciendolo
 * sino, saldra otro mensaje diciendo lo contrario
 */
if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
    <strong class="alert_green">Registre completat correctament</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <strong class="alert_red">Registre fallit, introdueix bé les dades</strong>
<?php endif; ?>

<!--para borrar esta sesion-->
<?php Utils::deleteSession('register'); ?>


<form action="<?=base_url?>usuari/save" method="post">

    <label for="nickname">Nickname</label>
    <input type="text" name="nickname" required="required"/>

    <label for="nom_i_cognoms">Nom i cognoms</label>
    <input type="text" name="nom_i_cognoms" required="required" pattern="[A-Za-z]+"/>

    <label for="dni">Dni</label>
    <input type="text" name="dni" required="required"/>

    <label for="email">Email</label>
    <input type="email" name="email" required="required"/>

    <!--cambiar despues por un checkbox de fotos de avatares
    <label for="avatar">Avatar</label>
    <input type="radio" id="avatar1" name="avatar" value="1" required>
    <label for="avatar1">Avatar 1</label><br>
    <input type="radio" id="avatar2" name="avatar" value="2" required>
    <label for="femavatar2ale">Avatar 2</label><br>  
    -->  

    <label for="password">Contrasenya</label>
    <input type="password" name="password" required="required"/>

    <label for="naixement">Data de naixement</label>
    <input type="date" name="naixement" />

    <!--
    <label for="avatar">Lector o Escriptor</label>
    <input type="radio" id="lector" name="tipus" value="1" required>
    <label for="lector">Lector</label><br>
    <input type="radio" id="escriptor" name="tipus" value="2" required>
    <label for="escriptor">Escriptor</label><br>   
    -->  

    <!--desplegar solo si ha marcado escriptor//ya se hará en Sprint 2-->
    <label for="biografia">Biografia</label>
    <textarea name="biografia"></textarea>

    <input type="submit" value="Enregistra't"/>

</form>


<?php

/**
 * FORM GENERAL PARA LECTOR Y ESCRITOR
 *
 * CHECKBOX (required) a escojer entre 2 fotos/iconos: escribir-escritor / leer-lector para registrarse
 * Si se marca el checkbox de Escritor, se habilitará con Javascript un campo nuevo para poner la biografia
 */

 /*


biografia varchar(250),
PRIMARY KEY (id),
CONSTRAINT FK_Tipus_Usuari
FOREIGN KEY (id_tipusuari) REFERENCES tipusuari(id),
CONSTRAINT FK_Avatar
FOREIGN KEY (avatar_id) REFERENCES avatar(id)
*/
