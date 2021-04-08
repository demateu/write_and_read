$(document).ready(function () {

    const imgUrl = "assets/img/cover_books/";
    const altFitxa = "Imatge del llibre";
    const altVeureMes = "Icona de veure mes";
    const urlLookIcon = "assets/img/icons/look_icon.png";
    const baseURL= "http://localhost:8888/write_and_read/";

    //AJAX Inicial
    $.ajax({
        url: 'api-rest/',
        type: 'GET',
        dataType: 'json',
        success: function (resp) {
            ferFitxes(resp);
        }
    });


    /*
    *Crea les fitxes dels llibres
    * 
    * @param json fitxeDades Dades rebuts de la peticio AJAX.
    */
    function ferFitxes(fitxeDades) {
        var count=0;
        var numSlide=1;
        //Iteracio del array
        fitxeDades.forEach(element => {
            //Agafar les dades 
            var autor = element.autor;
            var categoria = element.categoria;
            var cops_votat = element.cops_votat;
            var id_llibre = element.id;
            var id_escriptor = element.id_escriptor;
            var mitja_vots = element.mitja_vots;
            var portada_url= element.portada_url;
            var titol = element.titol;

            //Fer la fitxa
            var fitxa= (`
                <!-- Fitxa de llibre -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="cover_book">
                            <img src="${imgUrl+portada_url}" alt="${altFitxa}" class="card-img-top" />
                        </div>
                        <div class="card-body">
                            <!-- valoracions -->
                            <div class="valoracions">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <a href="${baseURL}?id_llibre='${id_llibre}'"> <h4 class="card-title">${titol}</h4></a>
                            <a href="${baseURL}?id_autor='${id_escriptor}'" ><p class="card-text">${autor}</p></a>
        
                            <!-- icones-->
                            <img class="lookIcon" src="${urlLookIcon}" alt=${altVeureMes}>
                            <button type="button" class="btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- fi fitxa -->
            `);

            if(count==8){
                //Crea el carousel-item i el node
                crearCarouselItem('#fitxes_main');
                $('#fitxes_main').children().last().children().append(fitxa);

                //Crea el indicator del nou carousel-item 
                ferIndicatorsCarousel('#llib_cat', numSlide);
                 
                //Reinicia el count
                count=0;

                //Suma el slide
                numSlide++;
            }else{
                //Nomes crea el node
                $('#fitxes_main').children().last().children().append(fitxa);
            }
            count++;
        }); 
    }

    function crearCarouselItem(elementPare){
        var carouselItem= (`
            <div class="carousel-item" >
                <div class="row">
                </div>                
            </div>
        `);
        $(elementPare).append(carouselItem);
    }

    function ferIndicatorsCarousel(elementPare, numSlide){
        var indicator = (`
            <button type="button" data-bs-target="${elementPare}" data-bs-slide-to="${numSlide}" aria-label="Slide ${numSlide+1}"></button>
        `);
        $(elementPare).children().first().append(indicator);
    }

});