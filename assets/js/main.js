
  
/**
 * Gestio de fitxes dels carousels
 */
$(document).ready(function () {

    //Constants
    const imgUrl = "assets/img/cover_books/";
    const altFitxa = "Imatge del llibre";
    const altVeureMes = "Icona de veure mes";
    const urlLookIcon = "assets/img/icons/look_icon.png";
    const baseURL= "http://localhost:8888/write_and_read/"; //en lugar de 127.0.0.1 ponia localhost (demateu)

    ferAjax(); //Ajax inicial
    ferAjax(undefined, true); //Ajax novetats
    ferAjax(undefined, false, true ) //Ajax valorats

    //Afegir listeners nav content (contingut principal nav per categorias)
    $('#nav_content li a').on('click', function () {
        //Fa active on s'ha fet el click
        var active = $(this).parent().parent().find('a.active');
        active.removeClass('active');
        $(this).addClass('active');

        //Netejar el carousel
        esborrarCarouselItems('#fitxes_main');
        esborrarIndicatorsCarousel('#llib_cat');

        //Fa l'ajax de la categoria corresponent
        var idCat=$(this).attr("data-idCat");
        ferAjax(idCat);

    })

   
    /** 
    * Fa la peticio AJAX d'acord amb els parametres
    * 
    * @param int idCat : Nombre de la categoria que s'ha de buscar
    * @param boolean novetats : Indica si s'ha de buscar els llibres mes nous
    */
    function ferAjax(idCat, novetats, valorats){
        if(idCat !== undefined){
            //AJAX per categoria
            $.ajax({
                url: 'http://localhost:8888/write_and_read/api-rest/',  //http://127.0.0.1:8888/write_and_read/api-rest/   //https://cors-anywhere.herokuapp.com/ 
                type: 'GET',
                data: {'categoria': idCat}, //ponia esto: {'categoria': idCat} -> demateu
                dataType: 'json',
                success: function (resp) {
                    ferFitxes(resp, 8, '#llib_cat', '#fitxes_main');
                }
            });
        }else if(novetats){
            //AJAX mes nous
            $.ajax({
                url: 'http://localhost:8888/write_and_read/api-rest/',  //http://127.0.0.1:8888/write_and_read/api-rest/   //https://cors-anywhere.herokuapp.com/ 
                type: 'GET',
                data: {'novetats': true}, 
                dataType: 'json',
                success: function (resp) {
                    ferFitxes(resp, 4, '#llib_nous', '#fitxes_nous');
                }
            });
        }else if(valorats){
            //AJAX mes valorats
            $.ajax({
                url: 'http://localhost:8888/write_and_read/api-rest/',  //http://127.0.0.1:8888/write_and_read/api-rest/   //https://cors-anywhere.herokuapp.com/ 
                type: 'GET',
                data: {'valorats': true}, 
                dataType: 'json',
                success: function (resp) {
                    ferFitxes(resp, 4, '#llib_votos', '#fitxes_valorats');
                }
            });
        }else{
            //AJAX a totes les categories
            $.ajax({
                url: 'http://localhost:8888/write_and_read/api-rest/',
                type: 'GET',
                dataType: 'json',
                success: function (resp) {
                    ferFitxes(resp, 8,'#llib_cat', '#fitxes_main');
                }
            });
        }
        
    }

    /** 
    * Crea les fitxes dels llibres
    * 
    * @param json fitxeDades Dades rebuts de la peticio AJAX.
    * @param int fitxaperRow Nombre de fitxes per carousel item
    * @param String idCarousel Nom del carousel on s'han de posar els buttons
    * @param String idCarouselInner Nom del carousel inner on s'han de posar les fitxes
    */
    function ferFitxes(fitxeDades, fitxaperRow, idCarousel, idCarouselInner) {
        var count=0;
        var numSlide=0;
        //Iteracio del array
        fitxeDades.forEach(element => {
            //Agafar les dades 
            var autor = element.autor;
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
                            <img src="${imgUrl+portada_url+'.jpeg'}" alt="${altFitxa}" class="card-img-top" />
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
                            <a href="${baseURL}?id_autor='${id_escriptor}'" ><p class="card-text nom_autor">${autor}</p></a>
        
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

            if(count==fitxaperRow){
                //Crea el carousel-item i el node
                crearCarouselItem(idCarouselInner);
                $(idCarouselInner).children().last().children().append(fitxa);

                //Crea el indicator del nou carousel-item 
                ferIndicatorsCarousel(idCarousel, numSlide);
                 
                //Reinicia el count
                count=0;
                
                //Suma el slide
                numSlide++;
            //Carousel-items i indicators inicials
            }else if(count==0 && numSlide==0){
                //Crea el carousel-item i el node
                crearCarouselItem(idCarouselInner, true);
                $(idCarouselInner).children().last().children().append(fitxa);

                //Crea el indicator del nou carousel-item 
                ferIndicatorsCarousel(idCarousel, numSlide);

                //Suma el slide
                numSlide++;
            }else{
                //Nomes crea el node
                $(idCarouselInner).children().last().children().append(fitxa);
            }
            count++;
        }); 
    }

    /**
     * Crea un carousel Item
     * 
     * @param String elementPare : L'element on s'ha de afegir l'item
     * @param boolean active : Indica si s'ha de crear amb la class active
     */
    function crearCarouselItem(elementPare, active){
        var carouselItem;
        if(active !== undefined){
            carouselItem= (`
                <div class="carousel-item active" >
                    <div class="row">
                    </div>                
                </div>
            `);
        }else{
            carouselItem= (`
                <div class="carousel-item" >
                    <div class="row">
                    </div>                
                </div>
            `);
        }
        
        $(elementPare).append(carouselItem);
    }

    /**
     * Esborra tots els Carousel items creats 
     * 
     * @param String elementPare : L'element on s'ha d'esborrar els items
     */
    function esborrarCarouselItems(elementPare){
        $(elementPare).children().remove();
    }

    /**
     * 
     * @param String elementPare : L'element on s'ha de afegir els indicators
     * @param int numSlide : Indica el nombre de slide per fer el button 
     */
    function ferIndicatorsCarousel(elementPare, numSlide){
        var indicator;
        if(numSlide !== 0){
            indicator = (`
                <button type="button" data-bs-target="${elementPare}" data-bs-slide-to="${numSlide}" aria-label="Slide ${numSlide+1}"></button>
            `);
        }else{
            indicator = (`
                <button type="button" data-bs-target="${elementPare}" data-bs-slide-to="${numSlide}" class="active" aria-current="true" aria-label="Slide ${numSlide+1}"></button>
            `);
        }
        
        $(elementPare + " .carousel-indicators").append(indicator);
    }

    /**
     * Esborra tots els indicators del carousel
     * 
     * @param String elementPare : Indica l'element carousel 
     */
    function esborrarIndicatorsCarousel (elementPare){
        $(elementPare + " .carousel-indicators").children().remove();
    }



   

});