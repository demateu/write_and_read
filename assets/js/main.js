$(document).ready(function () {
    var URLactual = window.location;

    //Constants
    const imgUrl = "assets/img/cover_books/";
    const altFitxa = "Imatge del llibre";
    const altVeureMes = "Icona de veure mes";
    const urlLookIcon = "assets/img/icons/look_icon.png";
    const baseURL = "http://localhost:8888/write_and_read/"; //en lugar de 127.0.0.1 ponia localhost (demateu)
    var titols = [];

    /** 
    * Fa la peticio AJAX d'acord amb els parametres
    * 
    * @param int idCat : Nombre de la categoria que s'ha de buscar
    * @param boolean novetats : Indica si s'ha de buscar els llibres mes nous
    */
    function ferAjax(idCat, novetats, valorats, buscador) {
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
        } else if (buscador) {
            //AJAX buscador 
            $.ajax({
                url: 'http://localhost:8888/write_and_read/api-rest/',  //http://127.0.0.1:8888/write_and_read/api-rest/   //https://cors-anywhere.herokuapp.com/ 
                type: 'GET',
                data: { 'buscador': true },
                dataType: 'json',
                success: function (resp) {
                    for(i=0; i<resp.length; i++){
                        titols[i] = [resp[i].titol, resp[i].id, resp[i].portada_url];
                    }
                }
            }); 
        }else {
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
                <div class="col-sm-12 col-md-6 col-lg-3 my-2 card_categories" id="fitxa_llibres">
                    
                        <a href="${baseURL}llibre/fitxa&id=${id_llibre}" class="cover_book">
                            <div class="contenedor_img_fitxa">
                                <img src="${imgUrl + portada_url + '.jpeg'}" alt="${altFitxa}" class="card-img-top" />
                            </div>
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
                    <div class="row my-5">
                    </div>                
                </div>
            `);
        } else {
            carouselItem = (`
                <div class="carousel-item" >
                    <div class="row my-5">
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

    /**
     * BUSCADOR 
     * 
     * @param objecte inp : L'element input del search bar
     * @param array arr : L'array de les dades dels llibres (titol, id, imgUrl)
    */
    function autocomplete(inp, arr) {
        
        var currentFocus;

        //Executa aquesta funcion quan s'escriu al search bar:
        inp.on("input", function (e) {
            var a, b, i, val = this.value;
            /*Si havia llistes de busquedas anteriors les tanca*/
            closeAllLists();
            if (!val) { return false; }
            currentFocus = -1;

            //Crea un div que tindra tots l'elements (values):
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");

            //Afegeix el DIV element com fill del contenidor
            this.parentNode.append(a);

            //for per cada element dels llibres
            for (i = 0; i < arr.length; i++) {
                //Revisa si l'element comença amb les mateixes lletres que el valor del input
                if (arr[i][0].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            
                    //Crea un element d'enllaç per cada element que coincideix
                    b = document.createElement("a");
                    div = document.createElement("div");
                    p = document.createElement("p");

                    //Crea l'element imatge 
                    img = document.createElement("img");
                    img.src= `${baseURL}/assets/img/cover_books/${arr[i][2]}`;
                    

                    //Afegir enllaç
                    var url = `${baseURL}llibre/fitxa&id=${arr[i][1]}`;
                    b.href = url;

                    //Les lletres que coincideixen amb el valor del input es posen en strong
                    p.innerHTML = "<strong>" + arr[i][0].substr(0, val.length) + "</strong>";
                    p.innerHTML += arr[i][0].substr(val.length);

                    //Afegir els elements al html 
                    div.append(p); //Dins al div va lo que escriu l'usuari
                    div.append(img)//Dins al div va l'imatge
                    b.append(div);// dins l'etiqueta a va al div 
                    a.append(b);//Dins al div de la llista va l'enllaç
                }
            }
        });

        //Executa aquesta funcion quan es premi un dels botons de direccio del teclat
        inp.on("keydown", function (e) {
            var x = $('#' + this.id + "autocomplete-list")[0];
            if (x) x = x.getElementsByTagName("a");
            if (e.keyCode == 40) {
                /*Si es prem la tecla DOWN,
                increment la variable currentFocus que es on estem:*/
                currentFocus++;
                //i posa l'element actual com active:
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*Si es prem la tecla UP,
                baixa la variable currentFocus :*/
                currentFocus--;
                /*i fa l'element actual com active:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*Si es pre ENTER prevé que faci submit al form,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*i simula un click al element actiu:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        /**
         * Fa que un element tingui la classe active
         * 
         * @param {*} x : Element que deixara de tenir la classe active
         * 
         */
        function addActive(x) {
            
            if (!x) return false;
            //Treu la classe active de tots els que la tinguin
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);

            x[currentFocus].classList.add("autocomplete-active");
        }

        /**
         * Treu la classe active de l'element passat per parametre
         * 
         * @param {*} x : Element que deixara de tenir la classe active
         */
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        /**
         * Tanca totes les llistes del document excepte del passat per parametre
         * @param {*} elmnt : Element que romandra a la llista
         */
        function closeAllLists(elmnt) {
            
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        
    }

    //Pagina index: 
    ferAjax(); //Ajax inicial
    ferAjax(undefined, true); //Ajax novetats
    ferAjax(undefined, false, true); //Ajax valorats
    ferAjax(undefined, false, false, true); //Ajax Buscador 

    autocomplete($("#cercaTitol"), titols); //Autocomplete buscador

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