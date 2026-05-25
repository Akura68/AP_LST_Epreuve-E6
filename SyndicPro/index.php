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
  $lesCoProPri = getLesCoproprietes($bdd);
  ?>

  <div class="jumbotron">
    <div class="container">
      <section>
        <h1>Les copropriétés</h1>
        <div class="row">

          <?php
			foreach ($lesCoProPri as $uneCoProPri) {
            $idCo = $uneCoProPri['idCopropriete'];
            $nomImm = $uneCoProPri['nomImmeuble'];
			$rue = $uneCoProPri['rue'];
			$cp = $uneCoProPri['cp'];
			$ville = $uneCoProPri['ville'];
          ?>

            <article class="col-md-4">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo "Copropriété n°" . $idCo ?></h5>
                  <p class="card-text"><?php echo $nomImm . "<br>" . $rue . "<br>" . $cp . ", " . $ville ?></p>
				  <a method="GET" href="Lots.php?$id=<?php echo $idCo ?>" class="card-link">Voir les lots</a>
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