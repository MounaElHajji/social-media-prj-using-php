
<!doctype html>  
<html>
<head>
<meta charset="UTF-8">
<title>twitter</title>
<link rel="stylesheet" type="text/css" href="styles/connecter.css">
</head>
<body>
    

	
	<div class="container">
		<div id="img">
		<img src="images/6Sans titre.png"></div>
		<h2>Se connecter à Twitter</h2>
	<form id="book-form" action="" method="POST">
		<input type="text" name="mailnom" placeholder = "Telephone, email, ou nom d'utilisateur" id="nom"><br/>
		<input type="password" name="pass" placeholder ="Mot de pass" id="nom"><br/>
		<input type="submit" name="connecter" value="se connecter" id="ok"><br/>
		<a href="#">Mot de passe oublié ?</a>
		<a href="sinscrire.php">s'inscrire</a>
		
	</div>
   </form>
   
<?php
session_start();
$user_id=$_SESSION['id_us'];
 ?>

<?php
if(isset($_POST['connecter'])){
    if($_POST['mailnom']!="" && $_POST['pass']!=""){
    	$pass=$_POST['pass'];
       $login=$_POST['mailnom'];
	include("include/dbh.php");
	$sql="SELECT * FROM user INNER JOIN motdepasss ON user.id_pren=motdepasss.id_pren WHERE Nometprenom='".$login."'  and mdp='".$pass."' ";
	$result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
	if( $num==1 ){
		$_SESSION['id_us']=$row['id_pren'];
	header("Location: accueill.php?signup=success");
}
else{
	echo "<script>alert ('Mot de passe ou login incorrect!')</script>";
    echo "<script>location.href='../se_connecter.php'</script>";
}
}
else{
	  print"Saisissez votre login et mot de passe"."<br>";
	   print "<a href='javascript:history.go(-1)'>Retour</a>";
}
}
?>

</body>
</html>
