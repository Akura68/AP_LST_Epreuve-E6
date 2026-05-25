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
  $idCopro = $_GET['$id'];
  $lesLots2 = getLesLots2($bdd, $idCopro);
  ?>

  <div class="jumbotron">
    <div class="container">
      <section class="col-sm-8 offset-2">
        <h1>Lot du copropriétaire: </h1><br>
		<h2><?php echo "Copropriétaire n°" . $idCopro; ?></h2>
        <div class="row">
          
          <table class="table">
			<thead class="table-dark">
				<tr>
					<th>idLot</th>
					<th>localisation</th>
					<th>tantieme</th>
				</tr>
			</thead>
			<?php foreach($lesLots2 as $unLot2){
			  $idLot = $unLot2['idLot'];
			  $loc = $unLot2['localisation'];
			  $tantieme = $unLot2['tantieme'];
            ?>
			<tbody>
				<tr>
					<td><?php echo $idLot; ?></td>
					<td><?php echo $loc; ?></td>
					<td><?php echo $tantieme; ?></td>
				</tr>
			</tbody>
          <?php } ?>
          </table>
        </div>
      </section>
    </div>
  </div>

  <?php

  include('include/footer.php'); ?>

</body>

</html>