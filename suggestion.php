
<?php
include('include/dbh.php')
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/sugg.css">
</head>
<body>
<section>
	<a href="accueill.php"><input type="submit" value="Passer pour le moment" name="pass" id="pass" /></a>
<h1>Suggestions d'abonnements</h1>
<p>Quand vous suivez quelqu'un, vous voyez ses tweets dans le fil d'actualites</p>

<h3><b>Vous pourriez etre interesse par</b>
<hr>
<div id="para">
	<img src="images/user.png" style="border-radius: 40px;" id="mg">
	<input type="submit" value="suivre" name="suivre" id="suivre"></a>
<div class="one">
<?php   
        $SQL="SELECT * FROM user, biography, image where user.id_pren=biography.id_pren AND user.id_pren=image.id_pren order by RAND() limit 1"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
    	while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
   		 echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."<p>".$row['bio']. "</p>"."</div>";
       echo "<img id='img1' src=\"pthh/$photo\" alt=\"image\" height=40 width=40 />";
      }

    	}  
    ?>
</div>
</div>
<hr>

<div id="para">
  <img src="images/user.png" style="border-radius: 40px;" id="mg">
  <input type="submit" value="suivre" naem="suivre" id="suivre"></a>
<div class="one">
<?php   
        $SQL="SELECT * FROM user, biography, image where user.id_pren=biography.id_pren AND user.id_pren=image.id_pren order by RAND() limit 1"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
       echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."<p>".$row['bio']. "</p>"."</div>";
       echo "<img id='img1' src=\"pthh/$photo\" alt=\"image\" height=40 width=40 />";
      }

      }  
    ?>
</div>
</div>
<hr>
<div id="para">
  <img src="images/user.png" style="border-radius: 40px;" id="mg">
  <input type="submit" value="suivre" naem="suivre" id="suivre"></a>
<div class="one">
<?php   
        $SQL="SELECT * FROM user, biography, image where user.id_pren=biography.id_pren AND user.id_pren=image.id_pren order by RAND() limit 1"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
       echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."<p>".$row['bio']. "</p>"."</div>";
       echo "<img id='img1' src=\"pthh/$photo\" alt=\"image\" height=40 width=40 />";
      }

      }  
    ?>
</div>
</div>
<hr>
<div id="para">
  <img src="images/user.png" style="border-radius: 40px;" id="mg">
  <input type="submit" value="suivre" naem="suivre" id="suivre"></a>
<div class="one">
<?php   
        $SQL="SELECT * FROM user, biography, image where user.id_pren=biography.id_pren AND user.id_pren=image.id_pren order by RAND() limit 1"; 
   $result=mysqli_query($conn,  $SQL); 
   $resultcheck=mysqli_num_rows($result); 
   if ($resultcheck > 0) {
      while ($row=mysqli_fetch_assoc($result)){
        $photo=$row['photo'];
       echo  "<div class='nom'>"."<p>".$row['Nometprenom']. "</p>".  "<p> @" .$row['Nometprenom']. "</p>"."<p>".$row['bio']. "</p>"."</div>";
       echo "<img id='img1' src=\"pthh/$photo\" alt=\"image\" height=40 width=40 />";
      }

      }  
    ?>
</div>
</div>
<hr>

</section>
</body>
</html>