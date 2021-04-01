<?php

/**
 * veure després si creem una superclasse
 * per tenir en classes separades: escritor i lector
 * de moment ho poso tot juntç
 * 
 * seran propiedades privadas porque solo podremos acceder a ellos mediante metodos
 */
class Usuari{

    private $id;//PK autoincrement (pasar NULL)
    private $nickname;
    private $nom_i_cognoms;
    private $dni;
    private $email;
    private $data_alta;//definir un current date en el constructor o en el insert?
    private $avatar_id;//FK
    private $password;//aplicar encriptacion!
    private $subscrit;//boolean
    private $data_naixement;
    private $id_tipususuari; //FK
    private $biografia;//nomes per escriptors

}

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