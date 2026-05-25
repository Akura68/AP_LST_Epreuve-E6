<?php
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  include('include/head.php');
  ?>
</head>

<body>

  <?php
  include('include/header.php');
  include('include/nav.php');
  if (isset($_POST['user']) and isset($_POST['pass'])){
	$login = $_POST['user'];
	$mdp = $_POST['pass'];
	$verif = verifLogin($bdd, $login);
	if (isset($verif[0]) and (password_verify($mdp, $verif['passwd'])))
	{ ?>
		

  <div class="jumbotron">
    <div class="container">
      <section>
        <h1>Accueil</h1>
        <div class="row">
			<h3><?php echo "Bienvenue " . $verif['nom'] . " " . $verif['prenom'] . "." ?></h3>
			<article class="col-md-4">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo "Menu : " ?></h5>
				  <a method="GET" href="devis.php?$id=<?php echo $verif['idCoproprietaire'] ?>" class="card-link">Voir les devis</a>
				  <br>
				  <a method="GET" href="travaux.php?$id=<?php echo $verif['idCoproprietaire'] ?>" class="card-link">Voir les Travaux votés</a>
				  <br>
				  <a method="GET" href="simulation.php?$id=<?php echo $verif['idCoproprietaire'] ?>" class="card-link">Simulation de quote-part</a>
				  <br><br>
				  <a href="index.php" class="card-link">Déconnexion</a>
                </div>
              </div>
            </article>
        </div>
      </section>
    </div>
  </div>
  <?php 
	}
	else {
		?><div class="container"><?php
			echo "<h1>Le login ou mot de passe incorrect.</h1>";
			?><a href="index.php">Retour</a>
		</div>
		<?php
		}
	}
	include('include/footer.php'); ?>

</body>

</html>