/*TAULA CATEGORIA*/

INSERT INTO categoria VALUES (1, 'Acció', "Són aquells en què l'argument ressalta pel risc, la sorpresa i el misteri.");
INSERT INTO categoria VALUES (2, 'Romanç', "És el gènere que tracta d'històries d'amor i relacions amoroses.");
INSERT INTO categoria VALUES (3, 'Fantasia', "Són relats en què participen fenòmens sobrenaturals i extraordinaris, com la màgia o la intervenció de criatures inexistents a la vida real.");
INSERT INTO categoria VALUES (4, 'Sci-fi', "Presenten els efectes dels avenços científics i tecnològics, presents o futurs, en la societat o en els individus, i tot això acompanyat d'aventures i de situacions commovedores i sorprenents.");
INSERT INTO categoria VALUES (5, 'Drama', "Ès una ficció o una situació de la vida real que resulta complexa i difícil però amb un final favorable o feliç.");
INSERT INTO categoria VALUES (6, 'Horror', "Té la capacitat d'espantar, causar por o atemorir els seus lectors o espectadors en induir sentiments d'horror i terror.");
INSERT INTO categoria VALUES (7, 'Suspens', "El seu objectiu principal és mantenir al lector a l'expectativa, generalment en un estat de tensió, del que pugui passar als personatges i, per tant, atent a el desenvolupament del conflicte.");

/*TAULA TIPUS USUARIS NOMES 2 TIPUS */
INSERT INTO tipusuari VALUES (1,"lector");
INSERT INTO tipusuari VALUES (2,"escriptor");

/*TAULA AVATAR*/
INSERT INTO avatar VALUES (01, "https://cdn1.iconfinder.com/data/icons/avatars-1-5/136/87-512.png");
INSERT INTO avatar VALUES (02, "https://cdn0.iconfinder.com/data/icons/social-media-network-4/48/male_avatar-512.png");


/*TAULA USUARI */
INSERT INTO usuari VALUES (null, 'Agath', 'Agatha Christie', '31928758Q', 'agatha@gmail.com',
 CURDATE(),01, 'contrasenya',
  1,'1890-09-15', 2, 
  "Va ser una escriptora i dramaturga britànica especialitzada en el gènere policial, per el treball va tenir reconeixement a nivell internacional");

INSERT INTO usuari VALUES (null, 'Miguel', 'Miguel Cervantes', '12328758A', 'migui@gmail.com',
 CURDATE(),02, 'contrasenya',
  1,'1547-09-29', 2,
  "Està considerat la màxima figura de la literatura espanyola i és universalment conegut per haver escrit L'enginyós gentilhome el Quixot de la Manxa");

INSERT INTO usuari VALUES (null, 'Jake', 'Jackson Ray', '24343658E', 'jackson@gmail.com',
 CURDATE(),02, 'contrasenya',1,'1998-04-15', 1, null) ;

INSERT INTO usuari VALUES (null, 'Katty', 'Katty Perry', '43543620K', 'katty@gmail.com',
 CURDATE(),01, 'contrasenya',1,'1984-10-25', 1, null) ;


/*TAULA LLIBRE*/
INSERT INTO llibre VALUES 
(null, 1, 'Assassinat a Mesopotàmia', "És un llibre de l'escriptora britànica Agatha Christie, publicat el 1936",
"De visita a una excavació arqueològica a Mesopotàmia, Hèrcules Poirot accepta fer-se càrrec de la investigació de l'assassinat de Louise Leidner, l'esposa de el director de la mateixa", 
'https://www.elejandria.com/libro/descargar/asesinato-en-mesopotamia/christie-agatha/234/308', CURDATE(), 
null, 'man-4152273_640',5, null, null);

INSERT INTO llibre VALUES 
(null, 1, 'El misteriós cas de Styles', "Va ser escrita durant la Primera Guerra Mundial, el 1916.",
"Poirot, un refugiat belga de la Gran Guerra, s'està assentant a Anglaterra, prop de la casa d'Emily Cavendish, qui l'ajuda en la seva nova vida. El seu amic Hastings arriba com a hoste a casa seva. Però quan la dona apareix morta, Poirot usa les seves habilitats de detectiu per resoldre el misteri.", 
'https://www.elejandria.com/libro/misterio-en-el-caribe/christie-agatha/116', CURDATE(), 
null, 'portrait-4364166_640',2, null, null);

INSERT INTO llibre VALUES 
(null, 1, 'Les pomes', "Ès una novel·la de ficció detectivesca.",
"L'escriptora Ariadne Oliver està de visita a casa d'una amiga seva a la vigília de Halloween. Enmig de tots els preparatius per a la terrorífica vetllada per a adolescents, Joyce Reynolds, una noia a la qual tots prenen per mentidera diu haver presenciat un assassinat. De moment queda per una mentida més de la joveneta, però la cosa adquireix importància quan aquesta apareix morta amb el cap enfonsat en un gibrell de pomes.", 
'https://www.elejandria.com/libro/las-manzanas/christie-agatha/216', CURDATE(), 
null, 'portrait-4998544_640',7, null, null);

INSERT INTO llibre VALUES 
(null, 2, 'El Quixot', "Ès la primera obra desmitificadora de la novel·la cavalleresca i de l'amor cortès; parodiant els llibres de cavalleries Cervantes va escriure la primera novel·la moderna",
"El llibre narra les aventures per terres de Castella - la Manxa i la Corona d'Aragó del gentilhome Alonso Quijano, que és descrit en el capítol I com un home de la baixa noblesa castellana", 
'https://www.elejandria.com/libro/descargar/don-quijote-de-la-mancha/cervantes-miguel/77/92', CURDATE(), 
null, 'knight-4205154_640',1, null, null);

INSERT INTO llibre VALUES 
(null, 2, "A la conquesta d'un imperi", "És una novel·la fantàstica publicada el 1907",
"Índia, 1869. Surama, filla de l'legítim rajà de l'Assam, va ser venuda com a esclava a un grup de thugs perquè la convertissin en devadasi després que el seu oncle, Sindhia, matés a tota la seva família i usurpara el tron. Yáñez, amb l'ajuda de Sandokan, de Tremal-Naik i de Kammamuri, decideix imposar justícia.", 
'https://www.elejandria.com/libro/a-la-conquista-de-un-imperio/emilio-salgari/477', CURDATE(), 
null, 'landscape-4383460_640',3, null, null);

INSERT INTO llibre VALUES 
(null, 2, "A la deriva", "Ès un conte de supervivència davant la salvatge vida al bosc.",
"Paulino va ser mossegat per una yararacusú, una serp verinosa.Inicia un viatge en la seva canoa pel riu Paraná cap Tacurú Pucú per intentar sobreviure.", 
'https://www.elejandria.com/libro/a-la-deriva/horacio-quiroga/965', CURDATE(), 
null, 'landscape-4369108_640',4, null, null);


