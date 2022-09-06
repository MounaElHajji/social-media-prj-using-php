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
$pass1=$_POST['pass'];
$pass2=$_POST['pass2'];

$sql="INSERT INTO motdepasss(id_mdp, id_pren, mdp, vmdp) values('0', '$id', '$pass1', '$pass2');";
mysqli_query($conn, $sql);
if(isset($_POST['submit'])){

	if ($pass1!=$pass2) {
		header("location: ../mdp.php?error=mdpincorect" );
	    exit();
	}
	else{
       $sql2="SELECT * FROM motdepasss where id_pren='".$_SESSION['id_us']."';";
		 	$res=mysqli_query($conn,$sql2);
		 	$row=mysqli_fetch_assoc($res);
		 	$_SESSION['map']=$row['mdp'];

  header("location:../pth.php");
    }
}


?>