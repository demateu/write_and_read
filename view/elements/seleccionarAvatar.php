<!-- Vista que crea els avatars i selecciona el que es troba a la bd del usuari -->
<div class="row">
    <div class="col mb-3">
        <label>Canvia el teu avatar:</label>
    </div>
</div>

<fieldset class="row mb-3" id="avatar_lector_area">
    <div class="col-12">
        <?php while ($avatar = $avatars->fetch_object()) : ?>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="avatarType[]" id="avatar<?= $avatar->id ?>" value="<?= $avatar->id ?>" <?= $_SESSION['usuari']->avatar_id == $avatar->id ? 'checked' : null ?>>
                <img src="<?= $avatar->avatar_url_imagen ?>" alt="Imatge de perfil avatar" width="40px" height="auto" />
            </div>

        <?php endwhile; ?>
    </div>
</fieldset>