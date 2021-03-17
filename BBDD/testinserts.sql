INSERT INTO tipusuari values (1,"lector");
INSERT INTO tipusuari values (2,"escriptor");

INSERT INTO usuari values (null,'pepito','Pepito de los Palotes','47123456W','pepito@gmail.com','2021-03-17','https://vimas.store/attachments/shop_images/Pepito_180g1.png','contrasenya',TRUE,'1993-07-17',1);
INSERT INTO usuari values (null,'perico','Perico de las Narices','37123456X','perico@gmail.com','2021-03-17','http://estag.fimagenes.com/img/3/1/Q/1Q_900.jpg','contrasenya',FALSE,'1983-07-16',2);

INSERT INTO lector values (1);
INSERT INTO escriptor values (2,'Nació el 16 de julio de 1983 entre los dolores duodenales de la gloria de su madre, jaaaarl, no puido puido');

INSERT INTO categoria values (1,'terror','libros de pasar miedico');
INSERT INTO categoria values (2,'policiaco','libros de polis y pistolicas, pum pum');
INSERT INTO categoria values (3,'ciencia-ficción','libros del futuro, con roboces y rayos laser y naves interestelares y toh eso');

INSERT INTO llibre values (null,2,'La casa de Tarradellas', 'En una casa de payeses solo el patriarca corta el fuet', 'En la casa de Tarradellas, una casa de payeses de la comarca de Vic, solo el patriarca corta el fuet. Don Jordi no dejará que nadie más use su navaja','https://casatarradellas.es/ca/','2021-03-17',null,'http://lapiscinadetorello.cat/wp-content/uploads/2018/11/logo-vector-casa-tarradellas.jpg',2,null,null);

INSERT INTO interactllibre values (1,1,null,TRUE,3,'Le doy un treh',TRUE);

UPDATE llibre
SET 
    cops_llegit = 1,
    mitja_vots = 3,
    cops_votat = 1
WHERE
    id=1;