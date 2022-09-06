
<?php 
session_start();
?>
<?php 
include('include/dbh.php')
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Envoyer des messages</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
	<link rel="stylesheet" href="styles/message.css">

</head>
<body>


<form method="post" action="include/msg.php">

<div class="cotainer" id="blur">  
<div class="content">
<header>
<nav iclass="navbar navbar-dark bg-primary">
<div class="container">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">  
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><div class="nav"><a><img src="images/home.png"><a href="#" class="nav-link">Accuiel</a></div></li>

      <li class="nav-item"><div class="nav"><a><img src="images/hashtag (1).png"><a href="#" class="nav-link">Explorer</a></div></li>

      <li class="nav-item"><div class="nav"><a><img src="images/alarm.png"><a href="#" class="nav-link">Notification</a></div></li>

      <li class="nav-item"><div class="nav"><a><img src="images/messagans titre.png"><a href="#" class="nav-link">Messages</a></div></li>

      <li class="nav-item"><div class="nav"><a><img src="images/vcxz titre.png"><a href="#" class="nav-link">Signets</a></div></li>

      <li class="nav-item"><div class="nav"><a><img src="images/clipboard.png"><a href="#" class="nav-link">Listes</a></div></li>

      <li class="nav-item"><div class="nav"><a><img src="images/user.png"><a href="#" class="nav-link">Profil</a></div></li>

      <li class="nav-item"><div class="nav"><a><img src="images/add.png"><a href="#" class="nav-link">Plus</a></div></li>

    </ul>
  </div>
</div> <!-- container.// -->
</nav>
</header>
</form>
<div class="containe">

   <div class="row">
      <div class="col-6 col-md-4" style="border: 1px solid silver; height:600px;">
         <div>
          <p><center>Messages</center></p>
          <hr>
           <input type="text"  placeholder="Rechercher des personnes et des groupes" id="recherche">
         </div>

        </hr>

        <div id="second">
          <p>Envoyer un message, recevoir un message</p>
          <p>Les Messages Privés sont des conversations privées entre vous et d'autres utilisateurs de Twitter. Partagez des Tweets, des médias et plus encore !</p><br>
           <a href="#" onclick="toggle()">Demmarer Une conversation</a>

        </div>

      </div>

      <div class="ss" style="border: 1px solid silver;height:600px; ">
         <div>
           
         </div>

         <hr>
         <div class="third">
         <input type="text" placeholder="Démarrer un nouveau message" name="msg">
         <input type="submit" name="envoyer" value="envoyer" id="envoyer">
         </div>
         
        <div>
          <?php
          include('include/dbh.php');
          $sql = "SELECT * FROM message where id_pren='".$_SESSION['id_us']."'";

          $res=mysqli_query($conn, $sql);
          while ($row= mysqli_fetch_assoc($res)) {
            echo "<div id= 'fourth'>";
            echo "<center>".$row['message']. "</center>". "<br>";
            echo "</div>";
          }
          ?>

        </div>

         
      </div>
   </div>
</div>
</div>
</div>




<form  action="include/search.php"  method="POST" > 
<div id="popup">
      <div id="container">
        <input type="submit" name="chercher" value="suivant" id="suvant">
        <p>New messages</p><br>
        <p>Chercher une personne</p>
        <input type="text" name="Nom" id="chercher"placeholder="Chercher la personne avec qui vous voulez parlez"><br>
        <hr>
        
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


     