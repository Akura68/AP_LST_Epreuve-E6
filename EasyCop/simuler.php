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
  $devis = $_GET['$devis'];
  $idCoPro = $_GET['$id'];
  $lesFonds = getLesFonds($bdd, $idCoPro, $devis);
  ?>
		

  <div class="jumbotron">
    <div class="container">
      <section>
        <h1>Quote-part pour devis : <?php echo $devis ?> </h1>
        <div class="row">
			<table class="table">
			<thead class="table-dark">
				<tr>
					<th>Décembre 2023</th>
					<th>Janvier 2024</th>
					<th>Mars 2024</th>
					<th>Mai 2024</th>
				</tr>
			</thead>
			<?php foreach($lesFonds as $unFond){
					$tantieme = $unFond['SUM(tantieme)'];
					$TTC = $unFond['MontantTTC'];
			}
            ?>
			<tbody>
				<tr>
					<td><?php echo $TTC*0.1*($tantieme/10000) . "€"; ?></td>
					<td><?php echo $TTC*0.3*($tantieme/10000) . "€"; ?></td>
					<td><?php echo $TTC*0.4*($tantieme/10000) . "€"; ?></td>
					<td><?php echo $TTC*0.2*($tantieme/10000) . "€"; ?></td>
				</tr>
			</tbody>
          </table>
        </div>
      </section>
    </div>
  </div>
  
  <?php include('include/footer.php'); ?>

</body>

</html>