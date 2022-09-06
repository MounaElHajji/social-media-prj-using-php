


<?php  
session_start();
?>
<?php
 include('dbh.php')
?>

<!DOCTYPE html>
<html>
<head>
  <title>accueil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Les personnes cherchee</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
  <link rel="stylesheet" type="text/css" href="../styles/search.css">
</head>
<body>


  <nav>
      <div class="nav"><a><img src="../images/home.png" style="width: 40px;"><a href="../accueill.php">Accuiel</a></div>
      <div class="nav"><a><img src="../images/hashtag (1).png" style="width: 40px;"><a href="#">Explorer</a></div>
      <div class="nav"><a><img src="../images/alarm.png" style="width: 40px;"><a href="#">Notification</a></div>
      <div class="nav"><a><img src="../images/messagans titre.png" style="width: 40px;"><a href="../message.php">Messages</a></div>
      <div class="nav"><a><img src="../images/vcxz titre.png" style="width: 40px;"><a href="#">Signets</a></div>
      <div class="nav"><a><img src="../images/clipboard.png" style="width: 40px;"><a href="#">Listes</a></div>
      <div class="nav"><a><img src="../images/user.png" style="width: 40px;"><a href="../profile.php">Profil</a></div>
      <div class="nav"><a><img src="../images/add.png" style="width: 40px;"><a href="../modifier.php">Plus</a></div>

      <div id="mm">
            <a href="#" onclick="toggle()">Tweet</a>
          </div>
     <div><img src="../images/user.png"  style="border-radius: 30px; width: 50px; height: 50px; transform: translateY(80px);"><a href="#">
      </a></div>
        
<?php   
   $SQL="SELECT * FROM user, image where user.id_pren=image.id_pren AND user.id_pren= '".$_SESSION['id_us']."'"; 
   $result=mysqli_query($conn, $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];

        echo "<div id='sala'>";
       echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."</div>";
       echo "<img id='img2' src=\"../pthh/$photo\" alt=\"image\" height=60 width=60 />";
       echo "</div>";
      }

      }  
    ?>
          
  </nav>


<div class="container">

<?php
include('dbh.php');
if(isset($_POST['chercher'])){
  $nom= $_POST['Nom'];

	$sql = "SELECT * FROM user, image, biography where user.id_pren= image.id_pren and user.id_pren = biography.id_pren and Nometprenom like '".$nom."%'";

  $res=mysqli_query($conn, $sql);
  $num=mysqli_num_rows($res);
  if($num>0){
  while($row= mysqli_fetch_assoc($res)){
  $photo=$row['photo'];
  echo "<a href='../profilerechrche.php'><img id='img1' src=\"../pthh/$photo\" alt=\"image\" height=40 width=40/></a>";
  $_SESSION['id']= $row['id_pren'];
  $_SESSION['nom'] = $row['Nometprenom'];
  $_SESSION['pth'] = $row['photo'];
  echo "<input type='submit' value='suivre' name='suivre' id='suivre'>";
   echo $row['Nometprenom']."<br>"; 
   echo $row['bio']. "<br><br>";
   echo "<hr>";
  }
}

  else{
    echo "<p id='user'>l'utilisateur n'est pas trouvee</p>";
  }

}
?>
</div>

</body>
</html>

