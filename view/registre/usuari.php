


<!--
    Form de pruba para comprobar que el MVC esta funcionando bien
-->
<h3>Registra't a Write&Read</h3>
<form action="<?=base_url?>usuari/save" method="post">

    <label for="nickname">Nickname</label>
    <input type="text" name="nickname" required/>

    <label for="noms">Nom i cognoms</label>
    <input type="text" name="noms" required/>

    <label for="dni">Dni</label>
    <input type="text" name="dni" required/>

    <label for="email">Email</label>
    <input type="email" name="email" required/>

    <!--cambiar despues por un checkbox de fotos de avatares
    <label for="avatar">Avatar</label>
    <input type="radio" id="avatar1" name="avatar" value="1" required>
    <label for="avatar1">Avatar 1</label><br>
    <input type="radio" id="avatar2" name="avatar" value="2" required>
    <label for="femavatar2ale">Avatar 2</label><br>  
    -->  

    <label for="password">Contrasenya</label>
    <input type="password" name="password" required/>

    <label for="naixement">Data de naixement</label>
    <input type="date" name="naixement" required/>

    <!--
    <label for="avatar">Lector o Escriptor</label>
    <input type="radio" id="lector" name="tipus" value="1" required>
    <label for="lector">Lector</label><br>
    <input type="radio" id="escriptor" name="tipus" value="2" required>
    <label for="escriptor">Escriptor</label><br>   
    -->  

    <!--desplegar solo si ha marcado escriptor//ya se hará en Sprint 2-->
    <label for="biografia">Biografia</label>
    <input type="text" name="biografia"/>

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
