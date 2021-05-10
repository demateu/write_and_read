$(document).ready(function () {
    var URLactual = window.location;

    //Constants
    const imgUrl = "assets/img/cover_books/";
    const altFitxa = "Imatge del llibre";
    const altVeureMes = "Icona de veure mes";
    const urlLookIcon = "assets/img/icons/look_icon.png";
    const baseURL = "http://localhost:8888/write_and_read/"; //en lugar de 127.0.0.1 ponia localhost (demateu)


    /** 
    * Fa la peticio AJAX d'acord amb els parametres
    * 
    * @param int idCat : Nombre de la categoria que s'ha de buscar
    * @param boolean novetats : Indica si s'ha de buscar els llibres mes nous
    */
    function ferAjax(idCat, novetats, valorats) {
        if (idCat !== undefined) {
            //AJAX per categoria
            $.ajax({
                url: 'http://localhost:8888/write_and_read/api-rest/',  //http://127.0.0.1:8888/write_and_read/api-rest/   //https://cors-anywhere.herokuapp.com/ 
                type: 'GET',
                data: { 'categoria': idCat }, //ponia esto: {'categoria': idCat} -> demateu
                dataType: 'json',
                success: function (resp) {
                    ferFitxes(resp, 8, '#llib_cat', '#fitxes_main');
                }
            });
        } else if (novetats) {
            //AJAX mes nous
            $.ajax({
                url: 'http://localhost:8888/write_and_read/api-rest/',  //http://127.0.0.1:8888/write_and_read/api-rest/   //https://cors-anywhere.herokuapp.com/ 
                type: 'GET',
                data: { 'novetats': true },
                dataType: 'json',
                success: function (resp) {
                    ferFitxes(resp, 4, '#llib_nous', '#fitxes_nous');
                }
            });
        } else if (valorats) {
            //AJAX mes valorats
            $.ajax({
                url: 'http://localhost:8888/write_and_read/api-rest/',  //http://127.0.0.1:8888/write_and_read/api-rest/   //https://cors-anywhere.herokuapp.com/ 
                type: 'GET',
                data: { 'valorats': true },
                dataType: 'json',
                success: function (resp) {
                    ferFitxes(resp, 4, '#llib_votos', '#fitxes_valorats');
                }
            });
        } else {
            //AJAX a totes les categories
            $.ajax({
                url: 'http://localhost:8888/write_and_read/api-rest/',
                type: 'GET',
                dataType: 'json',
                success: function (resp) {
                    ferFitxes(resp, 8, '#llib_cat', '#fitxes_main');
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
        var count = 0;
        var numSlide = 0;
        //Iteracio del array
        fitxeDades.forEach(element => {
            //Agafar les dades 
            var autor = element.autor;
            var cops_votat = element.cops_votat;
            var id_llibre = element.id;
            var id_escriptor = element.id_escriptor;
            var mitja_vots = element.mitja_vots;
            var portada_url = element.portada_url;

            var titol = element.titol;

            //Fer la fitxa
            var fitxa = (`
                <!-- Fitxa de llibre -->
                <div class="col-sm-6 col-lg-3" id="fitxa_llibres">
                    <div class="card">
                        <a href="${baseURL}llibre/fitxa&id=${id_llibre}" class="cover_book">
                            <img src="${imgUrl + portada_url + '.jpeg'}" alt="${altFitxa}" class="card-img-top" />
                        </a>
                        <div class="card-body">
            `);
            fitxa += puntuacioLlibre(mitja_vots);
            fitxa += (`
                            <a href="${baseURL}llibre/fitxa&id=${id_llibre}"> <h4 class="card-title align_text_bottom">${titol}</h4></a>
                            <a href="${baseURL}usuari/fitxa&id=${id_escriptor}"><p class="card-text nom_autor">${autor}</p></a>
        
                            <!-- icones-->
                            <a href="${baseURL}llibre/fitxa&id=${id_llibre}">
                                <img class="lookIcon" src="${urlLookIcon}" alt=${altVeureMes}>
                            </a>
                            <button type="button" class="btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- fi fitxa -->
            `);

            if (count == fitxaperRow) {
                //Crea el carousel-item i el node
                crearCarouselItem(idCarouselInner);
                $(idCarouselInner).children().last().children().append(fitxa);

                //Reinicia el count
                count = 0;

                //Suma el slide
                numSlide++;
                //Carousel-items i indicators inicials
            } else if (count == 0 && numSlide == 0) {
                //Crea el carousel-item i el node
                crearCarouselItem(idCarouselInner, true);
                $(idCarouselInner).children().last().children().append(fitxa);

                //Suma el slide
                numSlide++;
            } else {
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
    function crearCarouselItem(elementPare, active) {
        var carouselItem;
        if (active !== undefined) {
            carouselItem = (`
                <div class="carousel-item active" >
                    <div class="row">
                    </div>                
                </div>
            `);
        } else {
            carouselItem = (`
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
    function esborrarCarouselItems(elementPare) {
        $(elementPare).children().remove();
    }

    /**
     * Fa les valoracions del llibre
     * 
     * @param int mitja_vots : Puntuacio del llibre 
     * @return valoracions : Div de les estrelles d'acord amb la mitja_vots 
     */
    function puntuacioLlibre(mitja_vots) {


        let star = `<span class="fa fa-star"></span>`;
        let starChecked = `<span class="fa fa-star checked"></span>`;

        let valoracions = (`
            <div class="valoracions">
        `);

        for (let i = 1; i <= 5; i++) {
            if (i <= mitja_vots) {
                valoracions += (`
                    ${starChecked}
                `);
            } else {
                valoracions += (`
                    ${star}
                `);
            }
        }

        return valoracions += "</div>";
    }

    //Pagina index: 
    ferAjax(); //Ajax inicial
    ferAjax(undefined, true); //Ajax novetats
    ferAjax(undefined, false, true) //Ajax valorats

    //Afegir listeners nav content (contingut principal nav per categorias)
    $('#nav_content li a').on('click', function () {
        //Fa active on s'ha fet el click
        var active = $(this).parent().parent().find('a.active');
        active.removeClass('active');
        $(this).addClass('active');

        //Netejar el carousel
        esborrarCarouselItems('#fitxes_main');

        //Fa l'ajax de la categoria corresponent
        var idCat = $(this).attr("data-idCat");
        ferAjax(idCat);

    })

    //Vista de llegir llibre
    if (URLactual == baseURL + 'llibre/llegirLlibre') {
        //Fa scroll quan es premi canvi de pagina del llibre
        document.querySelectorAll('.nav-pills').forEach(linkItem => {
            linkItem.addEventListener('click', _ => {
                window.scrollTo(0, 160);
            });
        });

        //Quan premi l'ultima pagina del llibre es tractara com llegit 
        $('#paginaFinal').on('click', function () {
            //Agafa les dades del li
            var idLector = $(this).attr("data-idlector");
            var idLlibre = $(this).attr("data-idllibre");
            var url = "http://localhost:8888/write_and_read/api-rest/?idLector=" + idLector + "&idLlibre=" + idLlibre;
            
            //AJAX per Afegir llegit
            var settings = {
                "url": url,
                "method": "PATCH",
                "timeout": 0,
              };
            $.ajax(settings);
        });
    }


});