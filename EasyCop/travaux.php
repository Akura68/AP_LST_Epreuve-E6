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
  $lesTravaux = getLesTravaux($bdd, $idCoPro);
  ?>
		

  <div class="jumbotron">
    <div class="container">
      <section>
        <h1>Travaux votés : </h1>
        <div class="row">
			<table class="table">
			<thead class="table-dark">
				<tr>
					<th>Travaux</th>
					<th>Montant TTC</th>
					<th>Immeuble</th>
				</tr>
			</thead>
			<?php foreach($lesTravaux as $unTravaux){
			  $travaux = $unTravaux['libelleTravaux'];
			  $TTC = $unTravaux['MontantTTC'];
			  $immeuble = $unTravaux['nomImmeuble'];
            ?>
			<tbody>
				<tr>
					<td><?php echo $travaux; ?></td>
					<td><?php echo $TTC; ?></td>
					<td><?php echo $immeuble; ?></td>
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