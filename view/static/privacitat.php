<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<?php require_once 'view/layout/header.php'; ?>

    <div id="privacitat_file">
        <!--banner title-->
        <div class="container-fluid" id="banner_privacitat">
            <div class="row">
                <div class="col">
                    <h3>Política de Privacitat</h3>
                </div>
            </div>
        </div>
        <!--content-->
        <div class="container">
            <!--serveis de la societat-->
            <div class="row" id="row0">
                <div class="col-lg-4 p-5 col-sm-12">
                    <h4 class="text-center">
                    Benvingut a WRITE&READ!
                    </h4>
                </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                    La present Política de Protecció de Dades de WRITE&READ s'aplicarà a la navegació pel nostre lloc web,
                    <a href="<?=base_url?>"> www.write&read.com</a>, així com a la compra dels nostres productes a través del mateix.
                    </p>
                </div>
            </div>
            <!--1 Objecte-->
            <div class="row" id="row1">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">1</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row0"><i class="fas fa-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row2"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>¿Quién es el responsable del tratamiento de sus datos personales?</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>WRITE&READ, amb domicili a Reus (Tarragona) 43204, C/Nicaragua, 36, 
                        inscrita al Registre Mercantil de Tarragona al Tom 2.899, Foli 18, Full número T-48.804, 
                        C.I.F. número B-55666143, i adreça de correu electrònic <a href="mailto:info@writeandread.cat">info@writeandread.cat</a>
                        (en endavant, "WRITE&READ").
                    </p>
                    <p>
                    Delegat de Protecció de Dades: <a href="mailto:dades@writeandread.cat">dades@writeandread.cat</a>.
                    </p>
                </div>
            </div>
            <!--2 Condicions d'accés i ús de la web.-->
            <div class="row" id="row2">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">2</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row1"><i class="fas fa-chevron-up "></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row3"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Quines dades personals recollim sobre vostè?</h4>
                    </div>
                </div>
            </div>

                <div class="col-lg-8 p-5 col-sm-12">
                    <li>Dades d'identificació. Nom i cognoms, adreça postal i electrònica i telèfon.</li>
                    <li>Informació de pagaments. Els pagaments dels nostres productes es gestionen 
                        a través de la plataforma de l'entitat Adyen B.V, PayPal, Bizum i Aplazame 
                        (passarel·les de pagament segures), de manera que WRITE&READ no recull 
                        cap dada personal d'aquesta naturalesa.</li>
                    <li>Informació sobre les seves visites a la pàgina web <a href="<?=base_url?>">www.write&read.com</a> , adreça IP del seu dispositiu, data i hora d'accés. 
                        Per a més informació sobre aquest tractament, consulti la nostra Política de Cookies.</li>
                    <li>Qualsevol dubte que vostè de manera voluntària, ens envïi a la nostra adreça de correu electrònic <a href="mailto:info@writeandread.cat">info@writeandread.cat</a>.</li>
                    <li>Qualsevol informació que vostè, de manera voluntària, comparteixi públicament a les xarxes socials de WRITE&READ. 
                        Aquesta informació estarà subjecta a la política de privacitat de la xarxa social en la que vostè la comparteixi, 
                        pel que li recomanem que revisi la configuració de privacitat del seu perfil.</li>
                </div>
            </div>
            <!--3 Exclusió de garanties i responsabilitat-->
            <div class="row" id="row3">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">3</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row2"><i class="fas fa-chevron-up "></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row4"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Com obtenim les seves dades personals?</h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                    Les dades que tractem són:
                    </p>
                    <li>Les que vostè ens facilita en el moment d'adquirir els nostres productes</li>
                    <li>Les que vostè ens enviï voluntàriament a la nostra adreça de correu electrònic <a href="mailto:info@writeandread.cat">info@writeandread.cat</a></li>
                    <li>Els que vostè ens facilita voluntàriament en subscriure's a la nostra newsletter</li>
                    <li>Les que vostè comparteix voluntàriament a les xarxes socials.</li>
                </div>
            </div>
            <!--4 Cookies-->
            <div class="row" id="row4">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">4</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row3"><i class="fas fa-chevron-up "></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row5"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Tractem dades de menors?</h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                        La venda dels nostres productes no està dirigida a menors d'edat. 
                        No obstant això, aquells menors de 16 anys que es desitgin registrar 
                        al nostre web i / o adquirir els nostres productes han de tenir l'autorització 
                        del pare / mare / tutor o representant legal.      
                   </p>
                   <p>Així mateix, en cas que vostè comparteixi a les nostres xarxes socials imatges 
                       en què apareguin menors de 16 anys, s'ha d'assegurar de comptar prèviament amb 
                       l'autorització del pare / mare / tutor o representant legal del menor.
                    </p>
                   <p>
                   WRITE&READ es reserva el dret de sol·licitar-li en qualsevol moment l'acreditació de l'autorització.
                   </p>
                </div>
            </div>
            <!--5 Enllaços (Links)-->
            <div class="row" id="row5">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">5</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row4"><i class="fas fa-chevron-up "></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row6"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Per a què tractem les seves dades personals?</h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                    WRITE&READ podrà utilitzar les seves dades personals amb les finalitats següents:
                    </p>
                    <li>Facilitar-li la informació que vostè sol·liciti sobre els nostres productes.</li>
                    <li>Donar-lo d'alta com a usuari del nostre lloc web.</li>
                    <li>Garantir la correcta tramitació de la seva comanda, en cas que vostè adquireixi algun dels nostres productes.</li>
                    <li>WRITE&READ utilitza les seves xarxes socials per publicitar els seus productes. En aquest sentit, 
                        en compartir les seves dades a les nostres xarxes socials, vostè consenteix expressament 
                        i ens autoritza a reproduir-los i comunicar-los públicament en aquestes xarxes amb les finalitats abans expressades.
                    </li>
                    <br>
                    <p>Vostè podrà revocar aquest consentiment en qualsevol moment, mitjançant l'enviament d'un correu electrònic a la següent adreça: <a href="mailto:dades@writeandread.cat">dades@writeandread.cat</a>.</p>
                    <p>En cas de no estar interessat en el tractament de les seves dades a través de les xarxes socials de WRITE&READ en els termes expressats amb anterioritat, 
                        preguem s'abstingui de compartir-los.</p>
                    <p>En cas que WRITE&READ precisi tractar les seves dades amb finalitats diferents a les esmentades anteriorment, sol·licitarà el seu consentiment exprés per a això, 
                        que podrà revocar en qualsevol moment de forma unilateral.</p>
                </div>
            </div>
            <!--6 Protecció de dades personals-->
            <div class="row" id="row6">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">6</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row5"><i class="fas fa-chevron-up "></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row7"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Butlletins informatius i comunicacions comercials</h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                    WRITE&READ podrà enviar butlletins informatius i comunicacions comercials a aquells usuaris 
                    que hagin atorgat prèviament el seu consentiment exprés per a això. 
                    La informació d'aquests butlletins i comunicacions consistirà en informació comercial, 
                    continguts destacats, consells rellevants sobre el funcionament del sistema i promocions.
                    </p>
                    <p>L'usuari tindrà la possibilitat de sol·licitar el cessament de l'enviament d'aquests butlletins 
                        i comunicacions en els termes que preveu la Llei 34/2002, de 11 de juliol, 
                        de Serveis de la Societat de la Informació, i de revocar el seu consentiment de forma unilateral, 
                        també en qualsevol moment, mitjançant l'enviament d'un correu electrònic a la següent adreça: 
                        <a href="mailto:dades@writeandread.cat">dades@writeandread.cat</a> o donant-se de baixa directament al peu dels butlletins enviats a l'apartat unsubscribe.
                    </p>
                </div>
            </div>
            <!--7 Xarxes socials-->
            <div class="row" id="row7">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">7</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row6"><i class="fas fa-chevron-up "></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row8"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Qui té accés a les seves dades personals?</h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                        Les seves dades personals només es comunicaran a aquelles persones o entitats que necessitin accedir-hi 
                        per tal de gestionar les comandes dels nostres productes.
                    </p>
                   <p>
                   WRITE&READ contracta la infraestructura virtual de la plataforma accessible 
                   a través del nostre web segons un model de computació en el núvol, a través d'Amazon Web Services, 
                   i a l'empara de l'acord EU-US Privacy Shield. Per a més informació, poden dirigir-se a: 
                    https://www.privacyshield.gov/participant?id=a2zt0000000TOWQAA4&status=Active.
                   </p>
                </div>
            </div>
            <!--8 Propietat intel·lectual i industrial-->
            <div class="row" id="row8">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">8</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row7"><i class="fas fa-chevron-up "></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row9"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Per quant de temps conservem les seves dades?</h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                    Les seves dades personals seran conservades pel temps que sigui necessari per complir amb les 
                    finalitats per a les quals van ser recollides. Transcorregut aquest temps, 
                    WRITE&READ procedirà a suprimir dels seus sistemes, sense perjudici de la 
                    possibilitat de conservar-los, limitant el seu tractament a l'exercici i defensa de reclamacions, 
                    en els termes previstos per la legislació aplicable.
                    </p>
                </div>
            </div>
            <!--9 Llei aplicable i jurisdicció-->
            <div class="row" id="row9">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">9</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row8"><i class="fas fa-chevron-up "></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row10"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Quines mesures de seguretat apliquem al tractament de les seves dades?</h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                    WRITE&READ aplica mesures de seguretat per garantir la confidencialitat, 
                    disponibilitat i resiliència dels sistemes de tractament de dades personals. 
                    Així mateix, duem a terme processos de verificació i avaluació de les mesures tècniques 
                    i organitzatives implementades, a fi de garantir en tot moment la seguretat de les dades personals.
                    </p>
                </div>
            </div>

            <!--10 Llei aplicable i jurisdicció-->
            <div class="row" id="row10">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">10</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row9"><i class="fas fa-chevron-up "></i></a>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row11"><i class="fas fa-chevron-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Quins són els seus drets?</h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                    Vostè podrà exercitar els drets que s'enumeren a continuació, 
                    mitjançant l'enviament d'un correu electrònic a la següent adreça: <a href="mailto:dades@writeandread.cat">dades@writeandread.cat</a>
                    </p>
                    <li>Sol·licitar, en qualsevol moment, que WRITE&READ li confirmi si està tractant les seves dades personals o no.</li>
                    <li>Accedir a les seves dades personals, sol·licitar la rectificació d'aquelles que siguin inexactes o, si escau, 
                        sol·licitar la seva supressió quan, entre altres causes, ja no siguin necessàries per a les finalitats per a les quals es van demanar.</li>
                    <li>En determinats casos, sol·licitar la limitació del tractament de les seves dades. En aquest supòsit, 
                        només conservarem les seves dades per a l'exercici o defensa de reclamacions.</li>
                    <li>En determinades circumstàncies, oposar-se al tractament de les seves dades.</li>
                    <li>Sol·licitar la portabilitat de les seves dades.Revocar el consentiment que, 
                        si escau, vostè hagi atorgat pel tractament de les seves dades per part de WRITE&READ.</li>
                    <li>Presentar una reclamació davant l'Agència Espanyola de Protecció de Dades.</li>
                </div>
            </div>

            <!--11 Llei aplicable i jurisdicció-->
            <div class="row" id="row11">
                <div class="col-lg-4 p-5 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="legals_number">11</span>
                        </div>
                        <div class="col fletxes_legals">
                            <div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <a href="#row10"><i class="fas fa-chevron-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <h4>Quina és la legitimació pel tractament de les seves dades personals?</h4>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 p-5 col-sm-12">
                    <p>
                    En funció del tractament de les seves dades personals que WRITE&READ faci a cada moment, 
                    la legitimació podrà ser:
                    </p>
                    <li>El compliment de les obligacions de WRITE&READ quan vostè realitza una comanda dels nostres productes a través del nostre lloc web.</li>
                    <li>El compliment de les obligacions legals de WRITE&READ.</li>
                    <li>L'interès legítim de WRITE&READ a millorar els nostres productes i l'atenció als nostres clients, o gestionar les seves consultes.</li>
                    <li>El consentiment que, en el seu cas, vostè ens hagi atorgat per a l'elaboració de perfils comercials a partir de dades personals anonimizades, 
                        i l'enviament de comunicacions comercials amb informació sobre els nostres productes.</li>
                </div>
            </div>            

        </div>
        <!--FI content-->

    </div>

<?php require_once 'view/layout/footer.php'; ?>