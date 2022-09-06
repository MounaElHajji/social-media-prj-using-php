<?php 
session_start();
?>
<?php include('include/dbh.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="styles/modifie.css">
</head>
<body>
	<form action="" method="POST" >
		<fieldset>
			<?php 
			$sql ="SELECT * FROM user where id_pren =  '".$_SESSION['id_us']."'";
			$res = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($res);
			echo "<p id='modif'> '".$row['Nometprenom']."' vous pouver modifier les donnees</p>";

			?>
			<table>
				<tr>
					<td><label>Nom</label></td>
					<td><input type="text" name="nom"></td>
				</tr>

				<tr>
					<td><label>Email</label></td>
					<td><input type="text" name="email"></td>
				</tr>

				<tr>
					<td><label>Date de naissance</label></td>
					<td><input type="text" name="jour" placeholder="jour"></td>
					<td><input type="text" name="mois" placeholder="mois"></td>
					<td><input type="text" name="annee" placeholder="annee"></td>
				</tr>

				<tr>
					<td><label>biography</label></td>
					<td><input type="text" name="bio"></td>
				</tr>

				<tr>
					<td><label>mot de pass</label></td>
					<td><input type="text" name="pass"></td>
				</tr>

				<tr>
					<td><input type="submit" name="modifier" value="Modifier les Donnes" id="moif"></td>
				</tr>


			</table>
		</fieldset>
	</form>
<?php 
if(isset($_POST['modifier'])){
$nom = $_POST['nom'];
$email=$_POST['email'];
$jour = $_POST['jour'];
$mois = $_POST['mois'];
$year = $_POST['annee'];
$bio = $_POST['bio'];
$pass = $_POST['pass'];



$sql ="UPDATE user set Nometprenom = '$nom', Email = '$email', jour = '$jour', annee = '$year', mois = '$mois' where id_pren = '".$_SESSION['id_us']."'";
$res = mysqli_query($conn, $sql);

$sql2 = "UPDATE biography set bio = '$bio' where id_pren = '".$_SESSION['id_us']."'";
$res2 = mysqli_query($conn, $sql2);

$sql3 = "UPDATE motdepasss set pass = '$pass' where id_pren = '".$_SESSION['id_us']."'";
$res2 = mysqli_query($conn, $sql3);

echo "Les donnees sont parfaitement modifier";
print"<a href='profile.php'>Profile<a>";	
}
?>

</body>
</html>