
<h3>Registra't a Write&Read</h3>

<?php

/**
 * FORM GENERAL PARA LECTOR Y ESCRITOR
 *
 * CHECKBOX (required) a escojer entre 2 fotos/iconos: escribir-escritor / leer-lector para registrarse
 * Si se marca el checkbox de Escritor, se habilitará con Javascript un campo nuevo para poner la biografia
 */


 /*
id int AUTO_INCREMENT,
nickname varchar(20) NOT NULL,
nom_i_cognoms varchar(50) NOT NULL,
dni varchar(10) NOT NULL UNIQUE,
email varchar(20) NOT NULL UNIQUE,
data_alta date,
avatar_id int,
password varchar(100),
subscrit boolean,
data_naixement date,
id_tipusuari int,
biografia varchar(250),
PRIMARY KEY (id),
CONSTRAINT FK_Tipus_Usuari
FOREIGN KEY (id_tipusuari) REFERENCES tipusuari(id),
CONSTRAINT FK_Avatar
FOREIGN KEY (avatar_id) REFERENCES avatar(id)
*/
