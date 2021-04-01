<!-- Banner carousel publicitari -->
<div class="row justify-content-center mx-auto">
    <div class="col-11">
        <div id="banner" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=base_url?>assets/img/banner/banner1.jpg" class="d-block w-100" alt="El millor lloc per a disfrutar histories emocionants">
                    <div class="carousel-caption trickcenter">
                        <h5>Gaudeix les teves històries favorites allà on vagis</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="<?=base_url?>assets/img/banner/banner2.jpg" class="d-block w-100" alt="Vols ser un scriptor? Ara pots amb nosaltres">
                    <div class="carousel-caption trickcenter">
                        <h5>Vols ser escriptor? Ara pots amb nosaltres.</h5>
                        <button type="button" class="btn mt-3" id="btn_subcr">Subscriu-te</button>
                    </div>

                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Enrere</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Següent</span>
            </button>
        </div>
    </div>
</div>