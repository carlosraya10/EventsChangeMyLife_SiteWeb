-- Añadir cesta
-- Encripter mot de passe

create database EVENTSCHANGELIFE;
use EVENTSCHANGELIFE;

	CREATE TABLE PHOTOS
	(id_photo int auto_increment NOT NULL primary key,
	photo BLOB DEFAULT NULL);

CREATE TABLE PEOPLE
(id_people int auto_increment NOT NULL primary key,
fname varchar (30) NOT NULL,
lname varchar (30) NOT NULL,
email varchar (50) NOT NULL,
sex varchar (1) NOT NULL,
username varchar (30) NOT NULL,
pass varchar (20) NOT NULL);


CREATE TABLE CATEGORIES
(id_category int auto_increment NOT NULL primary key,
category varchar (30) NOT NULL);

CREATE TABLE SUB1CATEGORIES
(id_sub1category int auto_increment NOT NULL primary key,
sub1category varchar (50) NOT NULL);

CREATE TABLE SUB2CATEGORIES
(id_sub2category int auto_increment NOT NULL primary key,
sub2category varchar (50) NOT NULL);

	CREATE TABLE CATEGORIES_SUB1CATEGORIES
	(id_category int NOT NULL REFERENCES CATEGORIES(id_category),
	id_sub1category int NOT NULL REFERENCES SUB1CATEGORIES(id_sub1category));

	CREATE TABLE SUB1CATEGORIES_SUB2CATEGORIES
	(id_sub1category int NOT NULL REFERENCES SUB1CATEGORIES(id_sub1category),
	id_sub2category int NOT NULL REFERENCES SUB2CATEGORIES(id_sub2category));

CREATE TABLE ADS
(id_ad int auto_increment NOT NULL primary key,
id_people int NOT NULL REFERENCES PEOPLE(id_people),
id_sub2category int NOT NULL REFERENCES SUB2CATEGORIES(id_sub2category),
title varchar (100) NOT NULL,
description text (600) DEFAULT NULL,
price double DEFAULT NULL,
iso varchar(50) DEFAULT NULL,
address varchar(100)  DEFAULT NULL,
cellphone varchar (15) DEFAULT NULL,
phone varchar (15) DEFAULT NULL,
-- Le champ"availability" c'est la disponibilité, on va y mettre l'option de cocher les jours de la semaine que la personne est disponible (L, M, M, J, V, S, D) et écrire dans un champ de texte "NOTes" la personne pourra mettre des commentaires optionnels par rapport aux horaires spécifiques.
availability text (600) DEFAULT NULL,
-- Le champ "move" est la posibilité de bouger "1" pour "oui", "0" pour "non".
move int DEFAULT NULL,
rating double DEFAULT NULL,
photo BLOB DEFAULT NULL);

CREATE TABLE QUESTIONS
(id_ad int NOT NULL REFERENCES ADS(id_ad),
question varchar (100) DEFAULT NULL,
answer text (200) DEFAULT NULL);

CREATE TABLE FEEDBACKS
(id_feedback int auto_increment NOT NULL primary key,
id_ad int NOT NULL REFERENCES ADS(id_ad),
id_People int NOT NULL REFERENCES PEOPLE(id_people),
feedback varchar (50) DEFAULT NULL,
rating double DEFAULT NULL,
-- Le champ "available" est pour savoir si la personne est autorisé pour laisser un avis client "1" pour "oui", "0" pour "non".
available int DEFAULT NULL);

CREATE TABLE VIDEOS
(id_video int auto_increment NOT NULL primary key,
video varchar (255) NOT NULL);

	CREATE TABLE PEOPLE_PHOTOS
	(id_people int NOT NULL REFERENCES PEOPLE(id_people),
	id_photo int NOT NULL REFERENCES PHOTOS(id_photo));

	CREATE TABLE PEOPLE_VIDEOS
	(id_people int NOT NULL REFERENCES PEOPLE(id_people),
	id_video int NOT NULL REFERENCES VIDEOS(id_video));

CREATE TABLE MYJOBS
(id_myjob int auto_increment NOT NULL primary key,
id_people_from int NOT NULL REFERENCES PEOPLE(id_people),
id_people_to int NOT NULL REFERENCES PEOPLE(id_people),
id_ad int NOT NULL REFERENCES ADS(id_ad),
date_from date DEFAULT NULL,
date_to date DEFAULT NULL,
hour int DEFAULT NULL,
address varchar(100)  DEFAULT NULL,
description text (600) DEFAULT NULL,
state int DEFAULT NULL,
code varchar(10) DEFAULT NULL);


# ************************************************************
#
#INSERT INTO PROFESORES(Profesor,Titulo,Contrasena)values('ADMINISTRADOR','ADMIN','TICSI');
#
#INSERT INTO TIPOS(Tipo)values('INTRODUCCION');
#INSERT INTO TIPOS(Tipo)values('DESARROLLO');
#INSERT INTO TIPOS(Tipo)values('PRESENTACION DEL PROFESOR');
#INSERT INTO TIPOS(Tipo)values('ASPECTOS DIDACTICOS');
#INSERT INTO TIPOS(Tipo)values('EMPLEO DE EQUIPO Y MATERIALES');
#INSERT INTO TIPOS(Tipo)values('EVALUACIONES APLICADAS POR EL PROFESOR');
#INSERT INTO PEOPLE(fname,lname,email,sex,username,pass) values('Carlos Alberto','RAYA VACA','carlosraya10@gmail.com','h','carlosraya10','root');
# ************************************************************

-- This is a simple comment
INSERT INTO PEOPLE(fname,lname,email,sex,username,pass) values('Carlos Alberto','RAYA VACA','carlosraya10@gmail.com','h','carlosraya10','root');