<!-- View per mostrar un boto que porta al usuari al contingut del llibre si esta loguejat i subscrit 
    o bè porta al usuari a la pagina del login.
 -->
<?php if(isset($_SESSION['usuari'])) : ?>
    <form action="http://localhost:8888/write_and_read/llibre/llegirLlibre" method="POST">
        <input type="hidden" name="titol" value="<?= $llibre->titol ?>" />
        <input type="hidden" name="contingut_url" value="<?= $llibre->contingut_url ?>" />
        <input type="hidden" name="id" value="<?= $llibre->id ?>" />
        <input type="submit" value="Llegir" class="btn boto_llegeix" />
    </form>
<?php else : ?>
    <a  href="<?=base_url?>usuari/login" class="btn boto_llegeix" role="button">Llegir</a>
<?php endif; ?>