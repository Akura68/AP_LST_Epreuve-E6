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
  $idCo = $_GET['$id'];
  $lesLots = getLesLots($bdd, $idCo);
  ?>

  <div class="jumbotron">
    <div class="container">
      <section class="col-sm-8 offset-2">
        <h1>Lot de la copropriété: </h1><br>
		<h2><?php echo "Copropriété n°" . $idCo; ?></h2>
        <div class="row">
          
          <table class="table">
			<thead class="table-dark">
				<tr>
					<th>idLot</th>
					<th>localisation</th>
					<th>tantieme</th>
				</tr>
			</thead>
			<?php foreach($lesLots as $unLot){
			  $idLot = $unLot['idLot'];
			  $loc = $unLot['localisation'];
			  $tantieme = $unLot['tantieme'];
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