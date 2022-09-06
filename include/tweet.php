<?php
session_start();
 include("dbh.php");
$sql="SELECT * FROM user";
$res=mysqli_query($conn, $sql);
ob_start();

$sql1="SELECT * FROM user where id_pren='".$_SESSION['id_us']."';";
$resultat=mysqli_query($conn, $sql1);
$data=mysqli_fetch_assoc($resultat);
$id=$data['id_pren'];
$twet=$_POST['twiter'];

$sql="INSERT INTO tweet (id_tweet, id_pren, twett) values('0', '$id', '$twet');";
mysqli_query($conn, $sql);

$sql2="SELECT * FROM tweet where id_pren='$id';";
	    $res=mysqli_query($conn,$sql2);
		$row=mysqli_fetch_assoc($res);
		$_SESSION['twt']=$row['twett'];

if(isset($_POST['tweety'])){
  header("location:../accueil.php?succes");
}

	?>