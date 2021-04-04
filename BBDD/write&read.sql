
/*arreglo tipus_usuari*/

DROP DATABASE writeyread;

CREATE DATABASE IF NOT EXISTS writeyread;

USE writeyread;

/*
DROP TABLE IF EXISTS usuari;
DROP TABLE IF EXISTS interactllibre;
DROP TABLE IF EXISTS llibre;
DROP TABLE IF EXISTS escriptor;
DROP TABLE IF EXISTS tipusuari;
DROP TABLE IF EXISTS avatar;
DROP TABLE IF EXISTS lector;
DROP TABLE IF EXISTS categoria;
*/

CREATE TABLE tipus_usuari(
id int,
tipus varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE avatar(
id int,
avatar_url_imagen varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE usuari (
	id int AUTO_INCREMENT,
	nickname varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	nom_i_cognoms varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	dni varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL UNIQUE,
	email varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL UNIQUE,
	data_alta date,
	avatar_id int,
	password varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	subscrit boolean,
	data_naixement date,
	id_tipus_usuari int NOT NULL,
	biografia varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
	PRIMARY KEY (id),
CONSTRAINT FK_Tipus_Usuari
  FOREIGN KEY (id_tipus_usuari) REFERENCES tipus_usuari(id),
CONSTRAINT FK_Avatar
  FOREIGN KEY (avatar_id) REFERENCES avatar(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE categoria(
id tinyint,
nom_cat varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
descripcio_cat varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE llibre(
id int AUTO_INCREMENT,
id_escriptor int NOT NULL,
titol varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
descripcio_curta varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
sinopsis text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
contingut_url varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
data_alta date,
cops_llegit int,
portada_url varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
id_categoria tinyint NOT NULL,
mitja_vots tinyint,
cops_votat int,
PRIMARY KEY (id),
CONSTRAINT FK_Escriptor
  FOREIGN KEY (id_escriptor) REFERENCES usuari(id),
CONSTRAINT FK_Categoria
  FOREIGN KEY (id_categoria) REFERENCES categoria(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE interactllibre(
id_lector int,
id_llibre int,
id int AUTO_INCREMENT,
llegit boolean,
puntuacio tinyint, 
critica varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
preferit boolean, 
PRIMARY KEY (id),
CONSTRAINT FK_lector
  FOREIGN KEY (id_lector) REFERENCES usuari(id),
CONSTRAINT FK_llibre
  FOREIGN KEY (id_llibre) REFERENCES llibre(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
