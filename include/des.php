
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
$text=$_POST['des'];

if(isset($_POST['pass'])){
$sql="INSERT INTO biography(id_bio, id_pren, bio) values('0', '$id', '$text');";
mysqli_query($conn, $sql);

$sql2="SELECT * FROM biography";
		 $res2=mysqli_query($conn,$sql2);
		 $row=mysqli_fetch_assoc($res2);
		 	session_start();
		 $_SESSION['bo']=$row['bio'];
  header("location:../sjt.php?succes");
}


?>