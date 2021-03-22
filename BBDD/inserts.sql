/*TAULA CATEGORIA*/

INSERT INTO categoria VALUES (1, 'Acció');
INSERT INTO categoria VALUES (2, 'Romanç');
INSERT INTO categoria VALUES (3, 'Fantasia');
INSERT INTO categoria VALUES (4, 'Sci-fi');
INSERT INTO categoria VALUES (5, 'Drama');
INSERT INTO categoria VALUES (6, 'Horror');
INSERT INTO categoria VALUES (7, 'Suspens');

/*TAULA TIPUS USUARIS NOMES 2 TIPUS */
INSERT INTO tipusuari VALUES (1,"lector");
INSERT INTO tipusuari VALUES (2,"escriptor");

/*TAULA USUARI */
INSERT INTO usuari VALUES (1, 'Agath', 'Agatha Christie', '31928758Q', 'agatha@gmail.com',
 CURDATE(),'https://cdn1.iconfinder.com/data/icons/avatars-1-5/136/87-512.png', 'contrasenya',
  TRUE,'1890-09-15', 2) ;

INSERT INTO usuari VALUES (2, 'Miguel', 'Miguel Cervantes', '12328758A', 'migui@gmail.com',
 CURDATE(),'https://cdn0.iconfinder.com/data/icons/social-media-network-4/48/male_avatar-512.png', 'contrasenya',
  TRUE,'1547-09-29', 2) ;

INSERT INTO usuari VALUES (3, 'Jake', 'Jackson Ray', '24343658E', 'jackson@gmail.com',
 CURDATE(),'https://cdn0.iconfinder.com/data/icons/social-media-network-4/48/male_avatar-512.png', 'contrasenya',
  TRUE,'1998-04-15', 1) ;

INSERT INTO usuari VALUES (4, 'Katty', 'Katty Perry', '43543620K', 'katty@gmail.com',
 CURDATE(),'https://cdn1.iconfinder.com/data/icons/avatars-1-5/136/87-512.png', 'contrasenya',
  TRUE,'1984-10-25', 1) ;

  /*TAULA ESCRIPTOR*/
  /*COMO SE HARA PARA COINCIDIR EL ID DE ESTA TABLA CON LA DE USUARI?*/
INSERT INTO escriptor VALUES (1, "Va ser una escriptora i dramaturga britànica especialitzada en el gènere policial, per el treball va tenir reconeixement a nivell internacional");
INSERT INTO escriptor VALUES (2, "Està considerat la màxima figura de la literatura espanyola i és universalment conegut per haver escrit L'enginyós gentilhome el Quixot de la Manxa, que molts crítics han descrit com la primera novel·la moderna i una de les millors obres de la literatura universal, a més de ser el segon llibre de la història en nombre d'edicions i traduccions, només superat per la Bíblia");

/*TAULA LECTOR*/
INSERT INTO lector VALUES (3);
INSERT INTO lector VALUES (4);


/*TAULA LLIBRE*/
INSERT INTO llibre VALUES 
(null, 1, 'Assassinat a Mesopotàmia', "És un llibre de l'escriptora britànica Agatha Christie, publicat el 1936",
"De visita a una excavació arqueològica a Mesopotàmia, Hèrcules Poirot accepta fer-se càrrec de la investigació de l'assassinat de Louise Leidner, l'esposa de el director de la mateixa", 
'https://www.elejandria.com/libro/descargar/asesinato-en-mesopotamia/christie-agatha/234/308', CURDATE(), 
null, 'https://www.elejandria.com/covers/Asesinato_en_mesopotamia-Christie_Agatha-md.png',
5, null, null);

INSERT INTO llibre VALUES 
(null, 2, 'El Quixot', "Ès la primera obra desmitificadora de la novel·la cavalleresca i de l'amor cortès; parodiant els llibres de cavalleries Cervantes va escriure la primera novel·la moderna",
"El llibre narra les aventures per terres de Castella - la Manxa i la Corona d'Aragó del gentilhome Alonso Quijano, que és descrit en el capítol I com un home de la baixa noblesa castellana", 
'https://www.elejandria.com/libro/descargar/don-quijote-de-la-mancha/cervantes-miguel/77/92', CURDATE(), 
null, 'https://www.elejandria.com/covers/Don_Quijote_de_la_Mancha-Cervantes_Miguel-md.png',
1, null, null);




