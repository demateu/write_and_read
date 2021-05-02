<?php
if(!isset($_SESSION)) {
    session_start();
}
?>


<!--
    Form de prueba para comprobar que el MVC esta funcionando bien
-->
<h3>Registra el teu llibre a Write&Read</h3>
<form action="<?=base_url?>llibre/save" method="post">

    <label for="id_escriptor">id_escriptor</label>
    <input type="text" name="id_escriptor" required/>

    <label for="titol">titol</label>
    <input type="text" name="titol" required/>

    <label for="descripcio_curta">descripcio_curta</label>
    <input type="text" name="descripcio_curta" required/>

    <label for="sinopsis">sinopsis</label>
    <input type="text" name="sinopsis" required/>

    <label for="contingut_url">contingut_url</label>
    <input type="text" name="contingut_url" required/>

    <label for="data_alta">data_alta</label>
    <input type="date" name="data_alta" required/>

    <label for="cops_llegit">cops_llegit</label>
    <input type="text" name="cops_llegit" required/>
	
	<label for="portada_url">portada_url</label>
    <input type="text" name="portada_url" required/>

    <label for="id_categoria">id_categoria</label>
    <input type="text" name="id_categoria" required/>

    <label for="mitja_vots">mitja_vots</label>
    <input type="text" name="mitja_vots" required/>

    <label for="cops_votat">cops_votat</label>
    <input type="text" name="cops_votat"/>

    <input type="submit" value="Enregistra'l"/>

</form>