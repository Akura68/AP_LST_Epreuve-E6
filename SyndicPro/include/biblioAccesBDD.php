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

function getLesCoproprietes($bdd)
{
	$req = "select * from copropriete";
    $res = $bdd->query($req);
    $lesCoProPri = $res->fetchAll();
    return $lesCoProPri;
}

function getLesLots($bdd, $idCo)
{
	$req = "SELECT * FROM lot WHERE idCopropriete = $idCo";
	$res = $bdd->query($req);
	$lesLots = $res->fetchAll();
	return $lesLots;
}

function getLesCoproprietaires($bdd)
{
	$req = "SELECT * FROM coproprietaire";
	$res = $bdd->query($req);
	$lesCoProPrietaires = $res->fetchAll();
	return $lesCoProPrietaires;
}

function getLesLots2($bdd, $idCopro)
{
	$req = "SELECT * FROM lot WHERE idCoproprietaire = $idCopro";
	$res = $bdd->query($req);
	$lesLots2 = $res->fetchAll();
	return $lesLots2;
}