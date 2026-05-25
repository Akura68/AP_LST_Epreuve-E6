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
  $lesCoProPrietaires = getLesCoproprietaires($bdd);
  ?>

  <div class="jumbotron">
    <div class="container">
      <section>
        <h1>Les copropriétaires</h1>
        <div class="row">

          <?php
			foreach ($lesCoProPrietaires as $unCoProPrietaire) {
            $idCopro = $unCoProPrietaire['idCoproprietaire'];
            $civilite = $unCoProPrietaire['civilite'];
			if ($civilite == 1)
				$civilite = "Homme";
			else
				$civilite = "Femme";
			$nom = $unCoProPrietaire['nom'];
			$prenom = $unCoProPrietaire['prenom'];
			$tel = $unCoProPrietaire['tel'];
          ?>

            <article class="col-md-4">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo "Copropriétaire n°" . $idCopro ?></h5>
                  <p class="card-text"><?php echo $nom . ", " . $prenom . "<br>" . $civilite . "<br> tel: " . $tel ?></p>
				  <a method="GET" href="Lots2.php?$id=<?php echo $idCopro ?>" class="card-link">Voir les lots</a>
                </div>
              </div>

              <br>
            </article>
			<?php } ?>
        </div>
      </section>
    </div>
  </div>

  <?php include('include/footer.php'); ?>

</body>

</html>