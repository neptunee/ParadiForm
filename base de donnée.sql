create database salle_musculation;
use salle_musculation;

create table abonne(id_abonne int(5) auto_increment not NULL,
nom varchar(50),
password varchar(50),
pseudo varchar(50),
prenom varchar(50),
date_naissance date,
sexe varchar(2),
adresse varchar (100),
ville varchar(10),
code_postal varchar(10),
tel_portable float(20),
mail varchar(50),
type varchar(50),
date_inscription date,
parrain varchar(50),
primary key(id_abonne)
);
create table donnee(id_donnee int(5) auto_increment not NULL,
id_abonne int(5)not NULL,
poids float(5.2),
taille float(5),
pb_sante varchar(250),
objectif varchar(250),
date_saisie date,
mensuration_bras float(5.2),
mensuration_cou float(5.2),
mensuration_epaules float(5.2),
mensuration_poitrine float(5.2),
mensuration_taille float(5.2),
mensuration_hanches float(5.2),
mensuration_cuisses float(5.2),
mensuration_mollets float(5.2),
mensuration_avant_bras float(5.2),
primary key (id_donnee),
foreign key (id_abonne) REFERENCES abonne (id_abonne)
);

create table exercice(id_exercice int(5) auto_increment not NULL,
nom varchar(50),
commentaire varchar(100),
biceps varchar(25),
quadriceps varchar(25),
pectoraux varchar(25),
cuisses varchar(25),
mollets varchar(25),
dos varchar(25),
abdominaux varchar(25),
triceps varchar(25),
epaules varchar(25),
primary key(id_exercice)
);

create table programme (id_programme int(5) auto_increment not NULL, 
nom varchar(10),
muscle_travaille varchar (255),
difficulte varchar(10),
type varchar(20), 
primary key (id_programme)
);

create table wiki (id_wiki int(5) auto_increment not NULL,
definition varchar (200),
primary key(id_wiki),
titre varchar(100),
illustration varchar (100)
);

create table employe(id_employe int(5) auto_increment not NULL,
nom varchar(50),
password varchar(50),
pseudo varchar(50),
prenom varchar(50),
date_naissance date,
sexe varchar(2),
adresse varchar (100),
ville varchar(10),
code_postal varchar(10),
tel_portable float(20),
mail varchar(50),
type varchar(50),
date_inscription date,
fonction varchar(50),
date_embauche date,
salaire float(5),
diplome varchar(50),
primary key (id_employe)
);

create table effectuer( id_programme int (5)not NULL,
id_exercice int(5) not NULL,
foreign key(id_programme) REFERENCES programme(id_programme),
foreign key (id_exercice) REFERENCES exercice(id_exercice)
);

INSERT INTO `abonne` (`id_abonne`, `nom`, `password`, `pseudo`, `prenom`, `date_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `tel_portable`, `mail`, `type`, `date_inscription`, `parrain`) VALUES
(2, 'utilisateur', 'utilisateur', 'utilisateur', 'utilisateur', '2013-12-31', '', '', '', '', NULL, '', 'abonne', '2013-12-31', ''),
(3, 'cherot', 'cherot', 'cherot', 'damien', '1992-07-22', 'm', NULL, NULL, NULL, NULL, NULL, 'abonne', NULL, NULL),
(4, 'croze', 'croze', 'croze', 'nicolas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abonne', NULL, NULL),
(5, 'blaireau', 'blaireau', 'blaireau', 'thomas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abonne', NULL, NULL),
(6, 'Nguyen', 'nguyen', 'nguyen', 'enji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abonne', NULL, NULL);

INSERT INTO `donnee` (`id_donnee`, `id_abonne`, `poids`, `taille`, `pb_sante`, `objectif`, `date_saisie`, `mensuration_bras`, `mensuration_cou`, `mensuration_epaules`, `mensuration_poitrine`, `mensuration_taille`, `mensuration_hanches`, `mensuration_cuisses`, `mensuration_mollets`, `mensuration_avant_bras`) VALUES
(1, 2, 60, 170, 'genou', 'souplesse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 3, 70, 180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 4, 67, 174, 'aducteurs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 5, 80, 184, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 6, 72, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


INSERT INTO `employe` (`id_employe`, `nom`, `password`, `pseudo`, `prenom`, `date_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `tel_portable`, `mail`, `type`, `date_inscription`, `fonction`, `date_embauche`, `salaire`, `diplome`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'employe', NULL, NULL, NULL, NULL, NULL),
(2, 'kheos', 'admin', 'kheos', 'nicolas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'employe', NULL, NULL, NULL, NULL, NULL),
(3, 'neptune', 'neptune', 'neptune', 'damien', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'employe', NULL, NULL, NULL, NULL, NULL),
(4, 'nurgle', 'nurgle', 'nurgle', 'thomas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'employe', NULL, NULL, NULL, NULL, NULL),
(5, 'trannguyen', 'trannguyen', 'trannguyen', 'enji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'employe', NULL, NULL, NULL, NULL, NULL);

INSERT INTO `exercice` (`id_exercice`, `nom`, `commentaire`, `biceps`, `quadriceps`, `pectoraux`, `cuisses`, `mollets`, `dos`, `abdominaux`, `triceps`, `epaules`) VALUES
(2, 'exercice1', 'commentaire1', NULL, 'quadriceps', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'exercice2', 'commentaire2', NULL, NULL, NULL, NULL, NULL, 'dos', NULL, NULL, NULL),
(4, 'exercice3', 'commentaire3', NULL, NULL, NULL, 'cuisses', NULL, NULL, NULL, NULL, NULL),
(5, 'exercice4', 'commentaire4', NULL, NULL, NULL, NULL, 'mollets', NULL, NULL, NULL, NULL);

INSERT INTO `programme` (`id_programme`, `nom`, `muscle_travaille`, `difficulte`, `type`) VALUES
(2, 'programme1', 'quadriceps', 'moyen', 'abonne'),
(3, 'programme2', 'biceps', 'facile', 'abonne'),
(4, 'programme3', 'triceps', 'moyen', 'abonne'),
(5, 'programme4', 'dos', 'dur', 'abonne'),
(6, 'programme5', 'dos', 'dur', 'abonne'),
(7, 'programme7', 'mollets', 'facile', 'employe'),
(8, 'programme8', 'biceps', 'dur', 'employe');

INSERT INTO `effectuer` (`id_programme`, `id_exercice`) VALUES
(2, 2),
(2, 3),
(3, 5),
(4, 3),
(5, 5),
(6, 4),
(7, 4),
(8, 5);