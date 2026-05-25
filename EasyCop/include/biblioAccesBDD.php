<?php

function seConnecter()
{// port 3306 si mysql et 3307 si mariadb
   $serveur = 'mysql:host=localhost;port=3306';
   $bdd = 'dbname=syndiclst-sd';
   $user = 'root';
   $mdp = '';
   try {
      $pdo = new PDO($serveur . ';' . $bdd . ';charset=UTF8', $user, $mdp);
   } catch (PDOException $e) {
      echo ('Erreur : ' . $e->getMessage());
   }
   return $pdo;
};

function verifLogin($bdd, $login)
{
	$req = "SELECT * from coproprietaire WHERE login = '$login'";
	$res = $bdd->query($req);
	$verif = $res->fetch();
	return $verif;
}

function getLesDevis($bdd, $idCoPro)
{
	$req = "SELECT idDevis,dateDev,MontantTTC,vote,nomPrestataire,libelleTravaux,devis.idCopropriete,SUM(tantieme) from devis
			JOIN lot ON devis.idCopropriete = lot.idCopropriete
			JOIN prestataire ON devis.idPrestataire = prestataire.idPrestataire
			JOIN travaux ON devis.idTravaux = travaux.idTravaux
			WHERE idCoproprietaire = '$idCoPro'
            GROUP BY idDevis,dateDev,MontantTTC,vote,nomPrestataire,libelleTravaux,devis.idCopropriete";
	$res = $bdd->query($req);
	$lesDevis = $res->fetchAll();
	return $lesDevis;
}

function getLesTravaux($bdd, $idCoPro)
{
	$req = "SELECT libelleTravaux,MontantTTC,nomImmeuble,SUM(tantieme) FROM travaux
			JOIN devis ON travaux.idTravaux = devis.idTravaux
			JOIN copropriete ON devis.idCopropriete = copropriete.idCopropriete
			JOIN lot ON devis.idCopropriete = lot.idCopropriete
			WHERE vote = '1' AND idCoproprietaire = '$idCoPro'
			GROUP BY libelleTravaux,MontantTTC,nomImmeuble";
	$res = $bdd->query($req);
	$lesTravaux = $res->fetchAll();
	return $lesTravaux;
}

function getLesFonds($bdd, $idCoPro, $devis)
{
	$req = "SELECT SUM(tantieme),MontantTTC FROM lot
			JOIN devis ON lot.idCopropriete = devis.idCopropriete
			WHERE idCoproprietaire = '$idCoPro' AND idDevis = '$devis'
			GROUP BY MontantTTC";
	$res = $bdd->query($req);
	$lesFonds = $res->fetchAll();
	return $lesFonds;
}

function getLesDevis2($bdd, $idCoPro)
{
	$req = "SELECT idDevis,SUM(tantieme) from devis
			JOIN lot ON devis.idCopropriete = lot.idCopropriete
			WHERE idCoproprietaire = '$idCoPro' AND vote = 1
            GROUP BY idDevis";
	$res = $bdd->query($req);
	$lesDevis = $res->fetchAll();
	return $lesDevis;
}