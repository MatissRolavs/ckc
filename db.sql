CREATE DATABASE ckc_rolavs;

USE ckc_rolavs;

CREATE TABLE pasakumi (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    datums DATETIME NOT NULL,
    nosaukums VARCHAR(255) NOT NULL,
    vieta VARCHAR(255) NOT NULL
);

INSERT INTO pasakumi
(datums, nosaukums, vieta)
VALUES
("2024.03.31 13:00","Lieldienas Cēsīs","Rožu laukums"),
("2024.04.04 18:00","Leļļu teātra izrāde 'Gangsteromīte'","Koncertzāle 'Cēsis'"),
("2024.07.19 08:00","Cēsu pilsētas svētki 818","Cēsis")

SELECT * FROM pasakumi;

CREATE TABLE kolektivi(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
name VARCHAR(80) NOT NULL,
description VARCHAR(500) NOT NULL
);

INSERT INTO kolektivi
(name,description)
VALUES
("Cēsis","Pūtēju orķestris"),
("Raitais solis","Tautu deju ansamblis"),
("Vidzeme","Jauktais koris"),
("Dzieti","Tautas vērtes kopa");

SELECT * FROM kolektivi;
