<?php
session_start();
include('dbh.php');
if(isset($_POST['envoyer'])){

$sql="SELECT * FROM user";
$res=mysqli_query($conn, $sql);
ob_start();


$sql = "SELECT * FROM user where id_pren= '".$_SESSION['id_us']."'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$id = $row['id_pren'];
$message = $_POST['msg'];

 $sql2= "INSERT INTO `message` (`id_msg`, `id_pren`, `message`) VALUES (NULL, '$id', '$message');";
  mysqli_query($conn, $sql2);
  header("location: ../message.php?succes");
}
?>