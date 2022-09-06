
<?php
session_start();
?>

<?php
include('include/dbh.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>accueil</title>
	<link rel="stylesheet" type="text/css" href="styles/accueil.css">
</head>
<body>
	<form action="include/tweet.php" method="POST" >
<div class="cotaine" id="blur">  
<div class="conten"> 
	<header><h1>Accuiel</h1>
		<div id="twitter">
           <img src="images/user.png"  name="photo" id="quoi" style="border-radius: 30px; width: 50px; height: 50px; margin-left: 20px; bottom: 20px;">
          <?php   
        $SQL="SELECT * FROM image where id_pren='".$_SESSION['id_us']."'"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
       echo "<img id='img1' src=\"pthh/$photo\" alt=\"image\" height=40 width=40 id='img1'/>";
      }

      }  
    ?>
			<textarea placeholder="Quoi de neuf?" cols="40" rows="7" name="twiter" width="6%"></textarea><br>
                 
		
         <div class="mg">
			<img id="diiv" src="images/YUI.PNG" style="margin-right: 20px"><img id="diiv" src="images/cds.png" style="margin-right: 20px"><img id="diiv" src="images/jhSans titre.png" style="margin-right: 20px"><img id="diiv" src="images/fceSans titre.png" style="margin-right: 20px"><img id="diiv" src="images/45Sans titre.png" style="margin-right: 20px" width="15%">
			<input type="submit" name="tweety" value="Tweet" id="tweet"></a>
      </div>
     </div>
 </form>
 <form action="include/search.php" method="post">
  <div id="fifth">
    <input type="text" name="Nom"><br>
    <div  id="sixth">
    <input type="submit" name="chercher" value="chercher">
  </div>
  </div>
</form>
   </header>

	<nav>
	    <div><img src="images/6Sans titre.png" id="logo"></div>
			<div class="nav"><a><img src="images/home.png"><a href="accueill">Accuiel</a></div>
			<div class="nav"><a><img src="images/hashtag (1).png"><a href="#">Explorer</a></div>
			<div class="nav"><a><img src="images/alarm.png"><a href="#">Notification</a></div>
			<div class="nav"><a><img src="images/messagans titre.png"><a href="message.php">Messages</a></div>
			<div class="nav"><a><img src="images/vcxz titre.png"><a href="#">Signets</a></div>
			<div class="nav"><a><img src="images/clipboard.png"><a href="#">Listes</a></div>
			<div class="nav"><a><img src="images/user.png"><a href="profile.php">Profil</a></div>
			<div class="nav"><a><img src="images/add.png"><a href="modifier">Plus</a></div>

      <div id="mm">
            <a href="#" onclick="toggle()">Tweet</a>
          </div>
     <div><img src="images/user.png"  style="border-radius: 30px;   transform: translateY(70px);"><a href="#">
      </a></div>

	
		 <div><?php   
   $SQL="SELECT * FROM user, image where user.id_pren=image.id_pren AND user.id_pren= '".$_SESSION['id_us']."'"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
        echo "<div id='sala'>";
       echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."</div>";
       echo "<img id='img4' src=\"pthh/$photo\" alt=\"image\" height=60 width=60 />";
       echo "</div>";
      }

      }  
    ?></a>
 
  </div>
	</nav>


	<article>
    <div class="maj">
   <?php
	 $SQL="SELECT * FROM tweet, image, user where tweet.id_pren = image.id_pren AND  user.id_pren = tweet.id_pren  AND user.id_pren = '".$_SESSION['id_us']."'"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
    	while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
        echo "<div id='next'>";
        echo "<div id= 'stf'>".$row['Nometprenom']."  "."@".$row['Nometprenom']."</div>";
   		 echo "<p id='bara'>".$row['twett']."</p>"; 
       echo "<img id='img3' src=\"pthh/$photo\" alt=\"image\" height=40 width=40 id='img1'/>";
       

        echo "<div class='mala'>";
      echo "<img id='ivv' src='images/speech-bubble.PNG' style='margin-right: 90px'><img id='iv' src='images/heart.png' style='margin-right: 90px'><img id='vv' src='images/download.png' style='margin-right: 90px'><img id='vvv' src='images/profits.png' style='margin-right: 90px'><img id='vvvv' src='images/retweeter.png' style='margin-right: 90px' width='15%'>";

         echo "</div>";
       echo "</div>";
      }

    	} 
	 ?>
  </div>
</div>
</article>

<section>
	<h1>Who to follow</h1>
	<div id="para">
		<img src="images/user.png" style="border-radius: 40px;"><input type="submit" name="submit" value="Follow" >
		<?php   
        $SQL="SELECT * FROM user, biography, image where user.id_pren=biography.id_pren AND user.id_pren=image.id_pren order by RAND() limit 1"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
       echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."<p>".$row['bio']. "</p>"."</div>";
       echo "<img id='img9' src=\"pthh/$photo\" alt=\"image\" height=40 width=40/>";
      }

      }  
    ?>
	</div>
	<div id="para">
		<img src="images/user.png" style="border-radius: 40px; "><input type="submit" name="submit" value="Follow" >
		<?php   
        $SQL="SELECT * FROM user, biography, image where user.id_pren=biography.id_pren AND user.id_pren=image.id_pren order by RAND() limit 1"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
       echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."<p>".$row['bio']. "</p>"."</div>";
       echo "<img id='img9' src=\"pthh/$photo\" alt=\"image\" height=40 width=40/>";
      }

      }  
    ?>
	</div>	
	<div id="para">
		<img src="images/user.png" style="border-radius: 40px; "><input type="submit" name="submit" value="Follow" >
		<?php   
        $SQL="SELECT * FROM user, biography, image where user.id_pren=biography.id_pren AND user.id_pren=image.id_pren order by RAND() limit 1"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
       echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."<p>".$row['bio']. "</p>"."</div>";
       echo "<img id='img9' src=\"pthh/$photo\" alt=\"image\" height=40 width=40/>";
      }

      }  
    ?>
	</div>		
	</section>
<div>
</div>
<form  action="include/tweet.php"  method="POST" > 
<div id="popup">
   <?php   
        $SQL="SELECT * FROM image where id_pren='".$_SESSION['id_us']."'"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
       echo "<img id='img6' src=\"pthh/$photo\" alt=\"image\" height=40 width=40 />";
      }

      }  
    ?>
  <textarea  placeholder="Quoi de neuf?" cols="40" rows="7" name="twiter" width="6%"></textarea><br>
    
    <div id="di"><p><img id="img7" src="images/iiii.png" >Tous le monde peut repondre</p></div>
    <hr>
    <div class="mg">
      <img src="images/YUI.PNG" style="margin-right: 20px; width: 30px; height:30;" ><img src="images/cds.png" style="margin-right: 20px; width: 35px; height:35;"><img src="images/jhSans titre.png" style="margin-right: 20px; width: 35px; height:35;"><img src="images/fceSans titre.png" style="margin-right: 20px; width: 35px; height:35;"><img src="images/45Sans titre.png" style="margin-right: 20px; width: 40px; height:70;" >
            
      
    <a href="accueil.php"><input type="submit" name="tweety" value="Tweet" id="tweet"></a>
  
  
      </div>
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





