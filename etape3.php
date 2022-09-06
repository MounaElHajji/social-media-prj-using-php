<?php
include_once 'include/dbh.php';
?>

<!doctype html>  
<html>
<head>
<meta charset="UTF-8">
<title>twitter</title>
<link rel="stylesheet" type="text/css" href="styles/etape3.css">
</head>
<body>
	
	<section>
	<img src="images/6Sans titre.png" width="10%" id="image">
    <p><h1>Étape 3/5</h1></p>
	<p><h1>Créer votre compte</h1></p>

	<p>
	<?php session_start(); ?>
		<input type="text" name="nom" value="<?php  
    if(isset($_SESSION['id_us'])){
      echo $_SESSION['nom'];
    }
    ?>">
	</p>
	<p>
		<input type="Email" name="Email" value="<?php   
    if(isset($_SESSION['id_us'])){
       echo $_SESSION['mail'];
       }
     ?>">
	</p>
	<p>
		<input   value="<?php  
		if(isset($_SESSION['id_us'])){
   		 echo $_SESSION['jr']."-", $_SESSION['ms']. "-",$_SESSION['an']; 
		}
    	 ?>">
	</p>
	<p class="para">
		En vous inscrivant, vous acceptez les <a href="#">Conditions d'utilisation</a> et la <a href="#">Politique de confidentialité</a>, ainsi que l'<a href="#">utilisation des cookies</a>. Les utilisateurs pourront vous trouver grâce à votre adresse email et à votre numéro de téléphone, si vous les avez fournis · <a href="#">Options de confidentialité</a>
		
	</p>
<a href="mdp.php"><center><input type="submit" name="submit" value="sinscrire" class="suiv"></center></a>

</section>
</body>
</html>