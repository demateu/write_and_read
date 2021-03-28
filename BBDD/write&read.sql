CREATE DATABASE IF NOT EXISTS writeyread;

USE writeyread;

DROP TABLE IF EXISTS usuari;
DROP TABLE IF EXISTS interactllibre;
DROP TABLE IF EXISTS llibre;
DROP TABLE IF EXISTS escriptor;
DROP TABLE IF EXISTS tipusuari;
DROP TABLE IF EXISTS avatar;
DROP TABLE IF EXISTS lector;
DROP TABLE IF EXISTS categoria;

CREATE TABLE tipusuari(
id int,
tipus_usuari varchar(15),
PRIMARY KEY (id)
);

CREATE TABLE avatar(
id int,
avatar_url_imagen varchar(250),
PRIMARY KEY (id)
);

CREATE TABLE usuari (
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
);

CREATE TABLE categoria(
id tinyint,
nom_cat varchar(20),
descripcio_cat varchar(250),
PRIMARY KEY (id)
);

CREATE TABLE llibre(
id int AUTO_INCREMENT,
id_escriptor int NOT NULL,
titol varchar(50) NOT NULL,
descripcio_curta varchar(250) NOT NULL,
sinopsis text NOT NULL,
contingut_url varchar(100) NOT NULL,
data_alta date,
cops_llegit int,
portada_url varchar(250) NOT NULL,
id_categoria tinyint NOT NULL,
mitja_vots tinyint,
cops_votat int,
PRIMARY KEY (id),
CONSTRAINT FK_Escriptor
  FOREIGN KEY (id_escriptor) REFERENCES usuari(id),
CONSTRAINT FK_Categoria
  FOREIGN KEY (id_categoria) REFERENCES categoria(id)
);

CREATE TABLE interactllibre(
id_lector int,
id_llibre int,
id int AUTO_INCREMENT,
llegit boolean,
puntuacio tinyint, 
critica varchar(250),
preferit boolean, 
PRIMARY KEY (id),
CONSTRAINT FK_lector
  FOREIGN KEY (id_lector) REFERENCES usuari(id),
CONSTRAINT FK_llibre
  FOREIGN KEY (id_llibre) REFERENCES llibre(id)
);

