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
  $lesDevis = getLesDevis($bdd, $idCoPro);
  ?>
		

  <div class="jumbotron">
    <div class="container">
      <section>
        <h1>Devis : </h1>
        <div class="row">
			<table class="table">
			<thead class="table-dark">
				<tr>
					<th>idDevis</th>
					<th>Date devis</th>
					<th>Montant TTC</th>
					<th>vote</th>
					<th>Prestataire</th>
					<th>Travaux</th>
					<th>Copropriete</th>
					<th>Tantieme</th>
				</tr>
			</thead>
			<?php foreach($lesDevis as $unDevis){
			  $idDevis = $unDevis['idDevis'];
			  $date = $unDevis['dateDev'];
			  $TTC = $unDevis['MontantTTC'];
			  $vote = $unDevis['vote'];
			  if ($vote == 1)
				  $vote = "OUI";
			  else
				  $vote = "NON";
			  $pres = $unDevis['nomPrestataire'];
			  $travaux = $unDevis['libelleTravaux'];
			  $idCo = $unDevis['idCopropriete'];
			  $tantieme = $unDevis['SUM(tantieme)'];
            ?>
			<tbody>
				<tr>
					<td><?php echo $idDevis; ?></td>
					<td><?php echo $date; ?></td>
					<td><?php echo $TTC; ?></td>
					<td><?php echo $vote; ?></td>
					<td><?php echo $pres; ?></td>
					<td><?php echo $travaux; ?></td>
					<td><?php echo $idCo; ?></td>
					<td><?php echo $tantieme; ?></td>
				</tr>
			</tbody>
          <?php } ?>
          </table>
        </div>
      </section>
    </div>
  </div>
  
  <?php include('include/footer.php'); ?>

</body>

</html>