/*TAULA CATEGORIA*/

INSERT INTO categoria VALUES (1, 'Acció', "Són aquells en què l'argument ressalta pel risc, la sorpresa i el misteri.");
INSERT INTO categoria VALUES (2, 'Romanç', "És el gènere que tracta d'històries d'amor i relacions amoroses.");
INSERT INTO categoria VALUES (3, 'Fantasia', "Són relats en què participen fenòmens sobrenaturals i extraordinaris, com la màgia o la intervenció de criatures inexistents a la vida real.");
INSERT INTO categoria VALUES (4, 'Sci-fi', "Presenten els efectes dels avenços científics i tecnològics, presents o futurs, en la societat o en els individus, i tot això acompanyat d'aventures i de situacions commovedores i sorprenents.");
INSERT INTO categoria VALUES (5, 'Drama', "Ès una ficció o una situació de la vida real que resulta complexa i difícil però amb un final favorable o feliç.");
INSERT INTO categoria VALUES (6, 'Horror', "Té la capacitat d'espantar, causar por o atemorir els seus lectors o espectadors en induir sentiments d'horror i terror.");
INSERT INTO categoria VALUES (7, 'Suspens', "El seu objectiu principal és mantenir al lector a l'expectativa, generalment en un estat de tensió, del que pugui passar als personatges i, per tant, atent a el desenvolupament del conflicte.");

/*TAULA TIPUS USUARIS NOMES 2 TIPUS */
INSERT INTO tipus_usuari VALUES (1,"lector");
INSERT INTO tipus_usuari VALUES (2,"escriptor");

/*TAULA AVATAR*/
INSERT INTO avatar VALUES (01, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_1.jpg");
INSERT INTO avatar VALUES (02, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_2.jpg");
INSERT INTO avatar VALUES (03, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_3.jpg");
INSERT INTO avatar VALUES (04, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_4.jpg");
INSERT INTO avatar VALUES (05, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_5.jpg");
INSERT INTO avatar VALUES (06, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_6.jpg");
INSERT INTO avatar VALUES (07, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_7.jpg");
INSERT INTO avatar VALUES (08, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_8.jpg");
INSERT INTO avatar VALUES (09, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_9.jpg");
INSERT INTO avatar VALUES (10, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_10.jpg");
INSERT INTO avatar VALUES (11, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_11.jpg");
INSERT INTO avatar VALUES (12, "http://localhost:8888/write_and_read/assets/img/avatar/avatar_12.jpg");


/*TAULA USUARI */
INSERT INTO usuari VALUES (null, 'Agath', 'Agatha Christie', '31976758Q', 'agatha@gmail.com',
 CURDATE(),01, 'contrasenya',
  1,'1890-09-15', 2, 
  "Va ser una escriptora i dramaturga britànica especialitzada en el gènere policial, per el treball va tenir reconeixement a nivell internacional");

INSERT INTO usuari VALUES (null, 'Miguel', 'Miguel Cervantes', '12345758A', 'migui@gmail.com',
 CURDATE(),02, 'contrasenya',
  1,'1547-09-29', 2,
  "Està considerat la màxima figura de la literatura espanyola i és universalment conegut per haver escrit L'enginyós gentilhome el Quixot de la Manxa");

INSERT INTO usuari VALUES (null, 'Veroth', 'Veronica Roth', '56028712T', 'vero@gmail.com',
 CURDATE(),02, 'contrasenya',
  1,'1988-08-19', 2,
  "Escriptora de Divergent que va ser el llibre favorit de Goodreads el 2011 i el millor llibre de Literatura Juvenil de Fantasia i Ciència Ficció.");

INSERT INTO usuari VALUES (null, 'Willy', 'William Shakespeare', '12568122A', 'willy@gmail.com',
 CURDATE(),01, 'contrasenya',
  1,'1616-05-03', 2,
  "Molts el consideren el dramaturg més gran de tots els temps, Les seves obres es representen en major nombre de nacions que les de qualsevol altre escriptor.");

INSERT INTO usuari VALUES (null, 'Lau', 'Laura Gallego', '56712399G', 'laura@hotmail.com',
 CURDATE(),02, 'contrasenya',
  1,'1616-05-03', 2,
  "Ès una escriptora valenciana de literatura juvenil i infantil especialitzada en temàtica fantàstica.");

/*  LECTORS
INSERT INTO usuari VALUES (null, 'Jake', 'Jackson Ray', '24343658E', 'jackson@gmail.com',
 CURDATE(),02, 'contrasenya',1,'1998-04-15', 1, null) ;

INSERT INTO usuari VALUES (null, 'Katty', 'Katty Perry', '43543620K', 'katty@gmail.com',
 CURDATE(),01, 'contrasenya',1,'1984-10-25', 1, null) ;

*/

/*TAULA LLIBRE*/
INSERT INTO llibre VALUES 
(null, 1, 'Assassinat a Mesopotàmia', "És un llibre de l'escriptora britànica Agatha Christie, publicat el 1936",
"De visita a una excavació arqueològica a Mesopotàmia, Hèrcules Poirot accepta fer-se càrrec de la investigació de l'assassinat de Louise Leidner, l'esposa de el director de la mateixa", 
'llibre_prova', CURDATE(), 
null, 'man-4152273_640',5, null, null);

INSERT INTO llibre VALUES 
(null, 1, 'El misteriós cas de Styles', "Va ser escrita durant la Primera Guerra Mundial, el 1916.",
"Poirot, un refugiat belga de la Gran Guerra, s'està assentant a Anglaterra, prop de la casa d'Emily Cavendish, qui l'ajuda en la seva nova vida. El seu amic Hastings arriba com a hoste a casa seva. Però quan la dona apareix morta, Poirot usa les seves habilitats de detectiu per resoldre el misteri.", 
'llibre_prova', CURDATE(), 
null, 'portrait-4364166_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 1, 'Les pomes', "Ès una novel·la de ficció detectivesca.",
"L'escriptora Ariadne Oliver està de visita a casa d'una amiga seva a la vigília de Halloween. Enmig de tots els preparatius per a la terrorífica vetllada per a adolescents, Joyce Reynolds, una noia a la qual tots prenen per mentidera diu haver presenciat un assassinat. De moment queda per una mentida més de la joveneta, però la cosa adquireix importància quan aquesta apareix morta amb el cap enfonsat en un gibrell de pomes.", 
'llibre_prova', CURDATE(), 
null, 'portrait-4998544_640',7, null, null);

INSERT INTO llibre VALUES 
(null, 1, 'Alícia al país de les meravelles', "Ès una novel·la de ficció d'aventures inimaginables.",
"En aquesta increïble novel·la no només t'endinsaràs en un món sorprenent i surrealista on la teva imaginació volarà, sinó que a més, seguiràs de la mà d'Alicia a través del seu camí.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-4386922_640',3, null, null);

INSERT INTO llibre VALUES 
(null, 1, 'Orgull i prejudici', "Un cop d'ull profund a la burgesia de segle XIX.",
"La novel·la ens ensenya com en aquesta època, les relacions personals podien ser mesquines, ja que la seva principal motivació era la riquesa i l'estatus social.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-4391577_640',3, null, null);

INSERT INTO llibre VALUES 
(null, 1, 'La meva lluita', "L'oratòria és un poderós poder que influeix en la gent.",
"Mentre el tracte asocial i indigne donat a l'home provoqui resistències, i mentre no s'hagin instituït autoritats judicials encarregades de reparar els danys, sempre ell més fort vencerà en la lluita.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-4393603_640',6, null, null);

INSERT INTO llibre VALUES 
(null, 1, 'Edipo Rei', "La literatura de l'antiga Grècia de fa 2500 anys.",
"Aquest relat tracta d'Èdip, un rei de Tebes, el qual va assassinar al seu pare, Laios i després va contreure matrimoni amb Iocasta, que era la seva mare sense conèixer Èdip aquesta notícia amb anterioritat.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-4393619_640',7, null, null);

INSERT INTO llibre VALUES 
(null, 1, "L'art de la guerra", "Pot ser aplicat a l'àmbit militar, polític, empresarial i individual de l'actualitat.",
"Ens ajuda a entendre els principis pels quals els éssers humans actuen a la vida, a més de com ser un bon líder i establir les millors tàctiques o estratègies en els treballs.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-4397779_640',4, null, null);

INSERT INTO llibre VALUES 
(null, 1, "Així parlo Zaratustra", "Les frases més cèlebres d'aquest personatge històric.",
"«En veritat els dic que l'individu és un riu nauseabunda. Cal ser un mar per poder recollir un riu nauseabunda sense contaminar » Entre moltes.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-4616610_640',4, null, null);

INSERT INTO llibre VALUES 
(null, 1, "Alícia a través del mirall", "El seu argument es basa en el desenvolupament d'una partida d'escacs.",
"L'increïble és que d'una manera metafòrica, tots els passos que dóna Alícia sembla que es van reflectint en un mirall, relatant així una obra esbojarrada i inesperada que et farà seguir gaudint.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-4616645_640',3, null, null);

/*10 mes */


INSERT INTO llibre VALUES 
(null, 2, 'El Quixot', "Ès la primera obra desmitificadora de la novel·la cavalleresca i de l'amor cortès; parodiant els llibres de cavalleries Cervantes va escriure la primera novel·la moderna",
"El llibre narra les aventures per terres de Castella - la Manxa i la Corona d'Aragó del gentilhome Alonso Quijano, que és descrit en el capítol I com un home de la baixa noblesa castellana", 
'llibre_prova', CURDATE(), 
null, 'knight-4205154_640',1, null, null);

INSERT INTO llibre VALUES 
(null, 2, "A la conquesta d'un imperi", "És una novel·la fantàstica publicada el 1907",
"Índia, 1869. Surama, filla de l'legítim rajà de l'Assam, va ser venuda com a esclava a un grup de thugs perquè la convertissin en devadasi després que el seu oncle, Sindhia, matés a tota la seva família i usurpara el tron. Yáñez, amb l'ajuda de Sandokan, de Tremal-Naik i de Kammamuri, decideix imposar justícia.", 
'llibre_prova', CURDATE(), 
null, 'landscape-4383460_640',3, null, null);

INSERT INTO llibre VALUES 
(null, 2, "A la deriva", "Ès un conte de supervivència davant la salvatge vida al bosc.",
"Paulino va ser mossegat per una yararacusú, una serp verinosa.Inicia un viatge en la seva canoa pel riu Paraná cap Tacurú Pucú per intentar sobreviure.", 
'llibre_prova', CURDATE(), 
null, 'landscape-4369108_640',4, null, null);

INSERT INTO llibre VALUES 
(null, 2, "El gos dels Baskerville", "Una història trepidant d'una enigmàtica família.",
"La casa dels Baskerville amaga un terrible secret, el detectiu Harms haurà de treure a la llum el que s'amaga sota un família comú de barri Pichks.", 
'llibre_prova', CURDATE(), 
null, 'brain-4490836_640',6, null, null);

INSERT INTO llibre VALUES 
(null, 2, "Juliette o les prosperitats del vici", "Analitza les profundes realitats de la vergonya, passió i naturalesa humana.",
"La consciència no és més que l'obra de l'prejudici rebut per l'educació, fins a tal punt que tot el que se li prohibeix a l'infant li causa remordiments quan ho viola, i conserva aquests remordiments fins que el prejudici vençut li hagi demostrat que no existia cap mal real en la cosa prohibida.", 
'llibre_prova', CURDATE(), 
null, 'cascade-4324175_640',7, null, null);

INSERT INTO llibre VALUES 
(null, 2, "Els 120 dies de Sodoma", "És una de les obres més importants de la literatura eròtica.",
"La història se centra al castell de Silling, on un grup de persones es reuneixen durant 120 dies per practicar els seus desitjos sexuals i violents més perversos.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4930422_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 2, "L'interpretació dels somnis", "Les vivències del dia a dia condicionen el que veiem en l'apassionant món oníric.",
"En major o menor grau, el contingut dels somnis queda sempre determinat per la personalitat individual, per l'edat, el sexe, la posició, el grau de cultura i el gènere de vida habitual de l'subjecte, i pels successos i ensenyaments del seu passat individual.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4379818_640',3, null, null);

INSERT INTO llibre VALUES 
(null, 2, "El capital", "La vida dels rics de segle XIX desvetllada en un enfocament objectiu i alhora crític.",
"Perquè les grans fortunes de el segle passat van aconseguir grans coses i com s'han d'aplicar aquests estils en la vida moderna.", 
'llibre_prova', CURDATE(), 
null, 'couple-3367455_640',1, null, null);

INSERT INTO llibre VALUES 
(null, 2, "La vida és somni", "Filosofia sobre la llibertat de l'ésser humà de triar el seu propi camí i destí",
"Basili, encara que és un rei preocupat pel seu poble, és feble i indecís. Tot i ser bo en matemàtiques, ciències i astrologia, no disposa d'habilitats de govern. Això li fa témer a Segismundo des que escolta la predicció de l'oracle sobre el seu fill.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-2904092_640',6, null, null);

INSERT INTO llibre VALUES 
(null, 2, "Donetes", "Es desenvolupa en un ambient de realisme en l'Amèrica de la Guerra de la Secessió",
"A través de cada personatge pots anar coneixent les experiències i dificultats que han d'anar suportant per avançar en les seves vides i en la seva maduresa.", 
'llibre_prova', CURDATE(), 
null, 'faded-4696601_640',3, null, null);


/*10 mes*/

INSERT INTO llibre VALUES 
(null, 3, "L'Educació De la Dona", "Llibre per a les dones joves i adultes.",
"La dona de segle XXI té els reptes de el passat, el present i el futur. La integració a la vida laboral moderna i igualitària.", 
'llibre_prova', CURDATE(), 
null, 'abstract-973766_640',5, null, null);

INSERT INTO llibre VALUES 
(null, 3, "Les forces estranyes", "Llibre de genere fantastic per els joves i adultes.",
"Humans que poden manipular objectes amb la seva ment, estranys successos dins el govern d'Estats units i moltes conspiracions.", 
'llibre_prova', CURDATE(), 
null, 'angel-4383677_640',4, null, null);

INSERT INTO llibre VALUES 
(null, 3, "Sobre l'amistat", "Llibre per els nens i joves a gaudir de relacions sanes.",
"Els nens i joves tenen problemes d'establir relacions sanes i efectives amb els seus amics, comprendre la base d'aquestes relacions i projectar la seva millor versió és el que tracta aquesta obra.", 
'llibre_prova', CURDATE(), 
null, 'ballerina-4291477_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 3, "Odes seculars", "Recull de les odes més cèlebres de la història.",
"Gaudeix de les odes mes importants de tots els temps en aquesta obra que et deixarà un gust poètic dolç amarg.", 
'llibre_prova', CURDATE(), 
null, 'ballerina-4802124_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 3, "La volta de Martín Fierro", "El Gaucho Martín Fierro",
"Les estepes blanques són unes terres que per dret li pertanyen a martin ferro però el seu enemic Nicolas per enveja ha desenvolupat un complot que podria desterrar per sempre.", 
'llibre_prova', CURDATE(), 
null, 'bible-530340_640',1, null, null);

INSERT INTO llibre VALUES 
(null, 3, "Els set infants de Lara", "Tenir família nombrosa no és cosa fàcil.",
"Imagina haver de educar i alimentar set nens que amb les seves enginyoses ocurrències no deixessin que t'avorreixis ni per un moment.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-1950107_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 3, "El Papa de la mar", "Els problemes de portar una església a la costa no poden ser pitjors.",
"Enfrontant-se a la gent que vol eliminar i construir un complex turístic on s'ubica una de les esglésies més antigues de la Costa Brava, el papa ha de donar suport als clergues perquè no es destrueixi el patrimoni de més de 500 anys.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-3507629_640',5, null, null);

INSERT INTO llibre VALUES 
(null, 3, "Pagament Noi", "El pagament que rep Amaia per la seva feina és un noi?",
"Amaia és una doctora de kardia, 1 dia rep un curiós pagament pels seus serveis: un noi que es compromet a ser de la seva propietat per tractar a la seva família.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-3802849_640',2, null, null);


INSERT INTO llibre VALUES 
(null, 3, "El Petó", "No sabia que aquest petó seria l'últim.",
"Noelia té un romanç prohibit amb el millor amic del seu marit, la situació es torna mes critica quan són descoberts.", 
'llibre_prova', CURDATE(), 
null, 'book-cover-4194807_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 3, "L'avet", "L'arbre on vaig trobar el món a Merkendor és un avet.",
"L'avet és un arbre que creix en les profunditats de bosc, Carl s'endinsa en una aventura que tindrà de tot menys tranquil·litat.", 
'llibre_prova', CURDATE(), 
null, 'landscape-4298968_640',3, null, null);

/*10 mes*/

INSERT INTO llibre VALUES 
(null, 4, "Hamlet", "Temes tan profunds com són el desig de venjança, la mort,etc.",
"Anem a descobrir a un jove ple de dubtes existencials que li corroeixen seu ser, debatent-se entre la venjança, l'amor i la mort. Representant perfectament així una crisi psicològica que atraurà tota l'atenció més enllà de la trama.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-2912841_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 4, "Crim i càstig", "El crim i càstig no coneixen d'edats ni classes socials",
"No has vist per aquests barris nens als quals les seves mares envien a pidolar? Jo sé ja on viuen aquestes mares i com viuen. Els nens d'aquests llocs no s'assemblen als altres. Entre ells, els rapinyaires de set anys són ja viciosos i lladres.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-3341539_640',5, null, null);

INSERT INTO llibre VALUES 
(null, 4, "Demian ", "Narra la història d'Emil Sinclair",
"Emil Sinclair és un nen ha viscut tota la seva vida en el que el nomena Scheinwelt, món de somni, fins que una mentida li fa canviar de la seva visió de món i tot el que l'envolta. Això el porta a conèixer a un personatge estrany anomenat Max Demian, que el guiarà quin filòsof en camins de autorrazonamiento i destruint les seves velles creences.", 
'llibre_prova', CURDATE(), 
null, 'smirk-3339274_640',3, null, null);

INSERT INTO llibre VALUES 
(null, 4, "Deu negrets", "Una història de crim sense precedents a l'illa bonica.",
"Un soroll pacífic. Un paisatge plàcid ... -va pensar-. L'avantatge d'una illa consisteix en la impossibilitat que té el viatger d'anar més lluny, com si hagués arribat a la fi de l'món", 
'llibre_prova', CURDATE(), 
null, 'web-2613906_640',5, null, null);

INSERT INTO llibre VALUES 
(null, 4, "La divina comèdia", "És un poema de el viatge sobre el purgatori, infern i paradís.",
"Els cants ens narren el periple de Dante, alter ego de l'poeta, en companyia dels guies Virgili i Beatriz mitjançant l'Infern, el Purgatori i el Paradís. Aquests llocs es descriuen com un conjunt de cercles on s'ubiquen a les persones segons els seus fets i pensaments en vida.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4402888_640',7, null, null);

INSERT INTO llibre VALUES 
(null, 4, "La República", "L'ànima no conserva cap coneixement que hagi penetrat en ella per la força.",
"Que és amo de si mateix és també esclau, i el que és esclau, amo; ja que en tots aquestes dites es parla d'una mateixa persona.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4341912_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 4, "El gat negre", "Potser sigui la pròpia simplicitat de l'assumpte el que ens condueix a l'error",
"Tan segur estic que la meva ànima existeix com que la perversitat és un dels impulsos primordials de el cor humà, una de les facultats primàries indivisibles, un d'aquests sentiments que dirigeixen el caràcter de l'home", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4359903_640',5, null, null);

INSERT INTO llibre VALUES 
(null, 4, "Dràcula", "Una història fantàstica d'un comte que va decidir absorbir l'ànima de la gent per mitjà de la sang.",
"La sang representa la vida de la gent, un comte de l'antiga Valaquia descobreix aquesta troballa i l'utilitza sota el seu propi malefico propòsit.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4344165_640',6, null, null);

INSERT INTO llibre VALUES 
(null, 4, "La nàusea", "Una critica la societat moderna i a el consumisme com el centre de la felicitat.",
"Lents, mandrosos, fastiguejats, els fets s'acomoden en rigor a l'ordre que jo vull donar-los; però aquest segueix sent exterior a ells. Tinc la impressió de fer un treball purament imaginatiu. A més, estic segur que els personatges d'una novel·la semblarien més veritables; en tot cas, serien més agradables.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4326391_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 4, "Els crims del carrer Morgue", "Perquè els assassins maten a sang freda? No tenen consciència dels seus actes, només pensen en la seva meta.",
"Si l'assassinat d'una persona del carrer morgue causa commoció, imagineu el de 50 persones i cap sospitós, simplement no hi ha evidència del que va succeir aquest terrible dia, o això és el que volen que creguem?", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4813204_640',7, null, null);

/*10 mes*/

INSERT INTO llibre VALUES 
(null, 5, "El llop estepari", "Un recorregut per la gràcia de la llibertat, els ideals i la lluita diària com humans.",
"Aquests immortals no van donar l'esquena a la vida si no que van construir mons admirables mitjançant una sublimació amorosa de les menudeses que, també, componen l'existència.", 
'llibre_prova', CURDATE(), 
null, 'goddess-4387662_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 5, "Els rellotges", "Què dir de el temps quan no hi ha vida i que dir de la vida quan no hi ha temps.",
"Si existeix cronos no crec que li importi conservar-nos, el temps corre i no podem fer res per aturar-lo, o si?", 
'llibre_prova', CURDATE(), 
null, 'portrait-4418422_640',3, null, null);

INSERT INTO llibre VALUES 
(null, 5, "El fantasma de Canterville", "La casa dels Canterville ha estat testimoni d'un assassinat horrible.",
"L'ànima que no pot partir cap al mes allà sense revelar la identitat del seu assassí, el més fosc d'aquesta història són les motivacions dels implicats.", 
'llibre_prova', CURDATE(), 
null, 'portrait-4377413_640',6, null, null);

INSERT INTO llibre VALUES 
(null, 5, "El banquet", "El banquet a casa dels Feighsen és una invitació que tots els nobles reben.",
"Si es tracta d'un sopar se suposa que sigui això, el desenllaç d'aquesta història revela el tèrbol origen sectari d'un innocent banquet.", 
'llibre_prova', CURDATE(), 
null, 'gothic-3740388_640',7, null, null);

INSERT INTO llibre VALUES 
(null, 5, "L'origen de les espècies", "D'on venim? Cap a on anem?",
"Les preguntes més importants de la vida humana revelades des de fa quatre mil anys, on? Doncs en la bíblia.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4511623_640',5, null, null);

INSERT INTO llibre VALUES 
(null, 5, "La nit de cap per amunt", "Les màquines ataquen a tots els humans deixant els seus caps cap amunt.",
"Ningú ho creia fins que va passar, acompanya Edmund a lluitar contra un enemic que repta fins al mes intel·ligent de la raça humana.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4618133_640',4, null, null);

INSERT INTO llibre VALUES 
(null, 5, "El cor delator", "Perquè fem coses que no volem? La resposta està en el teu cor.",
"Si la vida és tan senzilla per seguir el que pensem no seria divertit viure, seríem robots. En aquesta obra valorarem la meravellosa capacitat de deixar-nos portar pels nostres instints més primitius.", 
'llibre_prova', CURDATE(), 
null, 'woman-4712526_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 5, "La filosofia al tocador", "Que passa quan un humà i una vampira comparteixen idees sobre la naturalesa dels éssers?",
"La comtessa Rose ha ordenat conversar amb un jove humà Alph, el qual la omplirà de curioses i sorprenents percepcions de les relacions humà-vampir.", 
'llibre_prova', CURDATE(), 
null, 'vampire-4842902_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 5, "Robinson Crusoe", "L'home que lluita per la justícia i els més desfavorits.",
"Els burgesos de la Irlanda medieval afronten un repte que podria llevar-los la seva posició i començar una rebelion, la mes temuda per a qualsevol noble: el propi poble.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4620858_640',1, null, null);

INSERT INTO llibre VALUES 
(null, 5, "El sol daurat", "Els quatre elements sostenen i mantenen l'equilibri del món, mai s'ha de trencar aquest ordre.",
"Una calamitat de proporcions colossals s'aproxima només els elegits dels elements podran encendre els fars elementals del món i portar la pau al continent. Acompanya a Regi, Aster, Mai i Kan en la seva lluita per un món a punt de col·lapsar.", 
'llibre_prova', CURDATE(), 
null, 'temple-4933682_640',3, null, null);

/*UPDATE PROVAR VALORATS I NOVETATS*/

/*VALORATS*/
UPDATE llibre SET mitja_vots = 4 WHERE id=47;
UPDATE llibre SET mitja_vots = 5 WHERE id=48;
UPDATE llibre SET mitja_vots = 4 WHERE id=49;
UPDATE llibre SET mitja_vots = 5 WHERE id=50;

/*NOVETATS*/
UPDATE llibre SET data_alta = '2021-04-30' WHERE id=1;
UPDATE llibre SET data_alta = '2021-04-23' WHERE id=11;
UPDATE llibre SET data_alta = '2021-04-19' WHERE id=15;
UPDATE llibre SET data_alta = '2021-04-27' WHERE id=18;
UPDATE llibre SET data_alta = '2021-04-23' WHERE id=22;
UPDATE llibre SET data_alta = '2021-04-26' WHERE id=25;
UPDATE llibre SET data_alta = '2021-04-19' WHERE id=26;
UPDATE llibre SET data_alta = '2021-04-30' WHERE id=40;

/*UPDATE LLIBRE URL*/
UPDATE llibre SET contingut_url = 'llibre_prova.pdf'


/*INSERT LLIBRE A DEMATEU (USER CREAT PER MI), ES UN TEST*/
INSERT INTO llibre VALUES 
(null, 6, "La filosofia al tocador2", "Que passa quan un humà i una vampira comparteixen idees sobre la naturalesa dels éssers?",
"La comtessa Rose ha ordenat conversar amb un jove humà Alph, el qual la omplirà de curioses i sorprenents percepcions de les relacions humà-vampir.", 
'llibre_prova', CURDATE(), 
null, 'vampire-4842902_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 6, "Robinson Crusoe2", "L'home que lluita per la justícia i els més desfavorits.",
"Els burgesos de la Irlanda medieval afronten un repte que podria llevar-los la seva posició i començar una rebelion, la mes temuda per a qualsevol noble: el propi poble.", 
'llibre_prova', CURDATE(), 
null, 'fantasy-4620858_640',1, null, null);

INSERT INTO llibre VALUES 
(null, 6, "El sol daurat2", "Els quatre elements sostenen i mantenen l'equilibri del món, mai s'ha de trencar aquest ordre.",
"Una calamitat de proporcions colossals s'aproxima només els elegits dels elements podran encendre els fars elementals del món i portar la pau al continent. Acompanya a Regi, Aster, Mai i Kan en la seva lluita per un món a punt de col·lapsar.", 
'llibre_prova', CURDATE(), 
null, 'temple-4933682_640',3, null, null);

/*PER PODER FER COPS_LLEGIT ++ */
UPDATE llibre SET cops_llegit = 0;