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
  ?>

  <div class="jumbotron">
    <div class="container col-md-3">
      <section>
		<p><b>Veuillez vous connectez : </b></p>
        <div class="row">
			<form method="POST" name="frm_Passwd" action="Accueil.php">
				<p>Login: <input type="text" name="user" value=""></p>
				
				<p>Mot de passe: <input type="password" name="pass" value=""></p>
				
				<input type="submit" value="Envoyer">
			</form>
        </div>
      </section>
    </div>
  </div>

  <?php include('include/footer.php'); ?>

</body>

</html>