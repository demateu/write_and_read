CREATE DATABASE IF NOT EXISTS writeyread;

USE writeyread;

DROP TABLE IF EXISTS red_social;
DROP TABLE IF EXISTS opciones_cobro;
DROP TABLE IF EXISTS opciones_pago;
DROP TABLE IF EXISTS escritor;
DROP TABLE IF EXISTS lector;
DROP TABLE IF EXISTS usuario;
DROP TABLE IF EXISTS categoria;
DROP TABLE IF EXISTS sub_categoria;
DROP TABLE IF EXISTS libro;

CREATE TYPE usuario AS (
	id int,
	dni varchar(9),
	email varchar(20),
	red_social_id int,
	fecha_alta date
);

CREATE TABLE red_social(
id int,
nombre varchar(20),
url varchar(20),
password varchar(20),
PRIMARY KEY (id)
);

CREATE TABLE opciones_cobro(
id int,
nombre varchar(20),
password varchar(20),
PRIMARY KEY (id)
);

CREATE TABLE opciones_pago(
id int,
nombre varchar(20),
password varchar(20),
PRIMARY KEY (id)
);

CREATE TABLE escritor(
puntuacion int,
opciones_cobro_id int,
PRIMARY KEY (id),
CONSTRAINT FK_Red_Social
  FOREIGN KEY (red_social_id) REFERENCES red_social(id),
CONSTRAINT FK_Cobro
  FOREIGN KEY (opciones_cobro_id) REFERENCES opciones_cobro(id)
)INHERITS (usuario);

CREATE TABLE lector(
opciones_pago_id int,
PRIMARY KEY (id),
CONSTRAINT FK_Red_Social
  FOREIGN KEY (red_social_id) REFERENCES red_social(id),
CONSTRAINT FK_Pago
  FOREIGN KEY (red_pago_id) REFERENCES opciones_pago(id)
)INHERITS (usuario);

CREATE TABLE categoria(
id int,
nombre varchar(20),
PRIMARY KEY (id)
);

CREATE TABLE sub_categoria(
id int,
nombre varchar(20),
PRIMARY KEY (id)
);

CREATE TABLE libro(
id int,
titulo varchar(20),
escritor int,
idioma varchar(20),
precio decimal(4,2),
etiquetas varchar(20),
ventas int, 
comparticiones int,
lecturas int, 
sinopsis varchar(50),
paginas int,
categoria int, 
sub_categoria int,
votos int,
urimagen varchar(50),
PRIMARY KEY (id),
CONSTRAINT FK_Escritor
  FOREIGN KEY (escritor) REFERENCES escritor(id),
CONSTRAINT FK_Categoria
  FOREIGN KEY (categoria) REFERENCES categoria(id),
CONSTRAINT FK_Sub_categoria
  FOREIGN KEY (sub_categoria) REFERENCES sub_categoria(id)
);