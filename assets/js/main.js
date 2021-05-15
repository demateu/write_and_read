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
                    console.log(titols);
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

    /**
     * BUSCADOR 
    */
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function (e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false; }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i][0].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    div = document.createElement("div");
                    b = document.createElement("a");
                    img = document.createElement("img");

                    var urlImg = `${baseURL}/assets/img/cover_books/${arr[i][2]}`;
                    img.src= urlImg;
                    /**Afegir enllaç */
                    var url = `${baseURL}llibre/fitxa&id=${arr[i][1]}`;
                    b.href = url;
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i][0].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i][0].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i][0] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    //b.addEventListener("click", function (e) {
                        /*insert the value for the autocomplete text field:*/
                       // inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        //closeAllLists();
                    //});
                    
                    div.appendChild(b);
                    div.appendChild(img);
                    a.appendChild(div);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function (e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    //Pagina index: 
    ferAjax(); //Ajax inicial
    ferAjax(undefined, true); //Ajax novetats
    ferAjax(undefined, false, true); //Ajax valorats
    ferAjax(undefined, false, false, true); //Ajax Buscador 

    autocomplete(document.getElementById("cercaTitol"), titols); //Autocomplete buscador

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