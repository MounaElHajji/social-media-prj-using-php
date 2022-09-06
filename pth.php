<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/pth.css">
  </head>
  <body>
    <section>
    <img id="im2" src="./images/6Sans titre.png"width="70px" align="center" >
    <h1>choisissez une photo de profil</h1>
    
  <form class="" action="" method="post" enctype="multipart/form-data" >
    <label for="yh"><img src="./images/add-user.png" alt="" id="im3" ></label>
    <img src="images/user.png" id="imag"><input type="file" name="fichier" size="30" id="yh"><br><br>
    <input type="submit" name="env" value="enregistrer votre photo" id="enre">
    <br><br>
    <input id="enreg"  type="submit" name="env" value="passer sans photo">
  </form>

  <?php
  session_start();
  include("include/dbh.php");
   $sql="select * from user ;";
      $res=mysqli_query($conn, $sql);
    ob_start();
    $sql1="SELECT * FROM user where id_pren='".$_SESSION['id_us']."';";
;
    $resultat=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($resultat);
    $id=$row['id_pren'];
  if(isset($_POST['env'])){
    if(isset($_FILES['fichier']) && $_FILES['fichier']['error']==0){

      $dossier='pthh/'; // dossier ou sera place le fichier
      $nom_temporaire=$_FILES['fichier']['tmp_name'];
      if(! is_uploaded_file($nom_temporaire)){ // c'est le fichier n'est uploader dans le serveur
         exit("le fichier est introuvable");
      }
  if($_FILES['fichier']['size']>=1000000){
    exit("error, votre fichier est volumineux veuillez choisir une autre photo");
  }
  $infof=pathinfo($_FILES['fichier']['name']); // pathinfo une fonction qui parcours le fichier il va nous donner lextension du fichier
  $extention_upload=$infof['extension'];
  $extention_upload= strtolower($extention_upload);
  $extensions_autorises=array('png', 'jpeg', 'jpg');
  if(! in_array($extention_upload, $extensions_autorises )){ // si les extensions uploades existent dans l'array extention autorisees
    exit("erreur les extensions autorises sont png jpeg et jpg");
  }
      // on copie le fichier dans le dossier de detination
    $nom_photo=$id.".".$extention_upload;
    if(! move_uploaded_file($nom_temporaire, $dossier.$nom_photo)){
      exit("probleme lors du stockage du photo");


    }
    $ph_name=$nom_photo;

    }
    else{
      $ph_name="user.png";
    }

    $sql2="INSERT INTO image(id_img, id_pren, photo) VALUES ( '0', '$id', '$ph_name');";
    $res2=mysqli_query($conn,$sql2);


    $sql3= "SELECT * FROM image";
    $resul = mysqli_query($conn, $sql3);
    $row = mysqli_fetch_assoc($resul);
    $_SESSION['img'] = $row['photo'];
    header("Location: dcv.php?succes");
  }

   ?>


  </div>
</section>
  </body>
</html>