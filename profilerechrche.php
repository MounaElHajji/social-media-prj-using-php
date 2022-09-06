
<?php  
session_start();
?>
<?php
 include('include/dbh.php');
 $id = $_SESSION['nom'];
 $sql = "SELECT * FROM user, image, biography, tweet where user.id_pren = image.id_pren and image.id_pren = biography.id_pren and biography.id_pren = tweet.id_pren and user.id_pren = '".$_SESSION['id']."'";
?>

<!DOCTYPE html>
<html>
<head>
 
  <link rel="stylesheet" type="text/css" href="styles/profile.css">
</head>
<body>

  <form  method="POST" >
<div class="cotainer" id="blur">  
<div class="content"> 
  <header>
 
    
  </div>


</header>


  <nav>
      <div class="nav"><a><img src="images/home.png"><a href="accueil.php">Accuiel</a></div>
      <div class="nav"><a><img src="images/hashtag (1).png"><a href="#">Explorers</a></div>
      <div class="nav"><a><img src="images/alarm.png"><a href="#">Notification</a></div>
      <div class="nav"><a><img src="images/messagans titre.png"><a href="message.php">Messages</a></div>
      <div class="nav"><a><img src="images/vcxz titre.png"><a href="#">Signets</a></div>
      <div class="nav"><a><img src="images/clipboard.png"><a href="#">Listes</a></div>
      <div class="nav"><a><img src="images/user.png"><a href="profile.php">Profil</a></div>
      <div class="nav"><a><img src="images/add.png"><a href="#">Plus</a></div>

      <div id="mm">
            <a href="#" onclick="toggle()">plus de sujets</a>
          </div>
     <div><img  style="border-radius: 30px; width: 50px; height: 50px; transform: translateY(80px);"><a href="#">
      </a></div>
        
   
  </nav>

   <div id="twitter">
         <?php   
   $sql = "SELECT * FROM user, image, biography, tweet where user.id_pren = image.id_pren and image.id_pren = biography.id_pren and biography.id_pren = tweet.id_pren and user.id_pren = '".$_SESSION['id']."'";
   $result=mysqli_query($conn,  $sql); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
        echo "<div id='sala'>";
       echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."</div>";
       echo $row['bio'];
       echo "<img id='img2' src=\"pthh/$photo\" alt=\"image\" height=60 width=60 />";
       echo "</div>";
      }
}  

      $sql2 = "SELECT* FROM user where id_pren = '".$_SESSION['id']."'";
      $res2 = mysqli_query($conn, $sql2);
      $row = mysqli_fetch_assoc($res2);
      echo "<p id='fise'>Vous etes membre depuis".$row['jourj']."/".$row['moisj']."/".$row['annej'];
    ?>
    <br><br>
    <a href="modifier.php">Modifier les donnees</a>
      </div>
 
     
<form action="include/search.php" method="POST">
  <div id="fifth">
    <input type="text" name="nom"><br>
    <div  id="sixth">
    <input type="submit" name="chercher" value="chercher">
  </div>
  </div>
</form>
</div>
</div>


<form > 
<div id="popup">
   <?php   
       $sql = "SELECT * from topics";
       $res = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_assoc($res)){
        echo "<div id='para'>";
        echo "<center>".$row['sujets']."</center>";
        echo "</div>";
       }
    ?>
  
  
      
      <div id="dd">
     <a href="#" onclick="toggle()">X</a> 
      </div>
</div>

<script type="text/javascript">
  function toggle(){
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
  }
</script>
</form>
</body>
</html>




