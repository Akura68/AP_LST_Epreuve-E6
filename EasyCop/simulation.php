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
  $idCoPro = $_GET['$id'];
  $lesDevis2 = getLesDevis2($bdd, $idCoPro);
  ?>
		

  <div class="jumbotron">
    <div class="container">
      <section>
        <h1>Simulation de quote-part : </h1>
        <div class="row">
			<?php
				foreach ($lesDevis2 as $unDevis2)
				{
					$idDevis = $unDevis2['idDevis'];
			?>
					<article class="col-md-4">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title"><?php echo "Devis N°" . $idDevis ?></h5>
								<a method="GET" href="simuler.php?$devis=<?php echo $idDevis ?>&$id=<?php echo $idCoPro ?>">Calculer quote-part</a>
							</div>
						</div>
					</article>
			<?php }?>
        </div>
      </section>
    </div>
  </div>
  
  <?php include('include/footer.php'); ?>

</body>

</html>