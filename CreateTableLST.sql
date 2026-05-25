CREATE TABLE Copropriete(
   idCopropriete INT auto_increment,
   nomImmeuble VARCHAR(50) NOT NULL,
   rue VARCHAR(50) NOT NULL,
   cp CHAR(5),
   ville VARCHAR(20) NOT NULL,
   PRIMARY KEY(idCopropriete)
);

CREATE TABLE Coproprietaire(
   idCoproprietaire INT auto_increment,
   civilite BOOLEAN NOT NULL,
   nom VARCHAR(20) NOT NULL,
   prenom VARCHAR(20) NOT NULL,
   rue VARCHAR(50) NOT NULL,
   cp CHAR(5),
   ville VARCHAR(20) NOT NULL,
   tel CHAR(10),
   login VARCHAR(20) NOT NULL,
   passwd VARCHAR(100) NOT NULL,
   PRIMARY KEY(idCoproprietaire)
);

CREATE TABLE Travaux(
   idTravaux INT,
   libelleTravaux VARCHAR(50) NOT NULL,
   PRIMARY KEY(idTravaux)
);

CREATE TABLE Prestataire(
   idPrestataire INT auto_increment,
   nomPrestataire VARCHAR(20) NOT NULL,
   PRIMARY KEY(idPrestataire)
);

CREATE TABLE Lot(
   idLot INT,
   localisation VARCHAR(50) NOT NULL,
   tantieme INT NOT NULL,
   idCopropriete INT NOT NULL,
   idCoproprietaire INT NOT NULL,
   PRIMARY KEY(idLot),
   FOREIGN KEY(idCopropriete) REFERENCES Copropriete(idCopropriete),
   FOREIGN KEY(idCoproprietaire) REFERENCES Coproprietaire(idCoproprietaire)
);

CREATE TABLE Devis(
   idDevis INT,
   dateDev DATE NOT NULL,
   MontantTTC DECIMAL(8,2) NOT NULL,
   vote BOOLEAN NOT NULL,
   idPrestataire INT NOT NULL,
   idTravaux INT NOT NULL,
   idCopropriete INT NOT NULL,
   PRIMARY KEY(idDevis),
   FOREIGN KEY(idPrestataire) REFERENCES Prestataire(idPrestataire),
   FOREIGN KEY(idTravaux) REFERENCES Travaux(idTravaux),
   FOREIGN KEY(idCopropriete) REFERENCES Copropriete(idCopropriete)
);
