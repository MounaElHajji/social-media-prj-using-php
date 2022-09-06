 <?php

 
if(isset($_POST['submit'])){
//check if the user check the button
	include_once 'dbh.php'; //connect DB

    //in case you want to create a signup form, we would need to include it here
 //we want to check for the submit and submit is the name we give to our submit
$first=$_POST['nom']; 
$Email=$_POST['Email'];
$mois=$_POST['mois'];
$jour=$_POST['jour'];
$annee=$_POST['annee'];
$dayj = date("d");
$moisj = date("m");
$annej = date("Y");

//we need to check if the yser clicke on the button or not




if (empty($first) || empty($Email) || empty($mois) || empty($jour) || empty($annee)) {
	header("location: ../sinscrire.php?error=emptyfield" );
	exit();

}  

else if(!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $first)){
	header("location: ../sinscrire.php?error=invalidemailnom");
	exit();

}

else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
	header("location: ../sinscrire.php?error=invalidemail");
	exit();

}





else{
	$sql= "SELECT Nometprenom FROM user WHERE Nometprenom=?";
	$stmt=mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {  //! check if it does not work
		header("location: ../sinscrire.php?error=sqlerror");
    exit();
	}

	else {
		 mysqli_stmt_bind_param($stmt, "s", $first); //first parameter is which statement we want to bind the information from the users to

		 // string=s, integer=i, blob=b, double=d
		 mysqli_stmt_execute($stmt); //run the information from the user inside the database
		 mysqli_stmt_store_result($stmt);
		 $resultcheck= mysqli_stmt_num_rows($stmt);
		 if ($resultcheck > 0) {
		 	header("location: ../sinscrire.php?error=usertaken");
    exit();
	}
		 else{
		 	$sql= "INSERT INTO `user` ( `Nometprenom`, `Email`, `jour`, `annee`,`mois`, `jourj`, `moisj`, `annej`) VALUES ('$first', '$Email', '$jour', '$annee', '$mois', '$dayj', '$moisj', '$annej');";
		 	mysqli_query($conn, $sql);
		 	$sql2="SELECT * FROM user where Nometprenom='$first';";
		 	$res=mysqli_query($conn,$sql2);
		 	
		 	$row=mysqli_fetch_assoc($res);
		 	session_start();
		 	$_SESSION['id_us']=$row['id_pren'];
            $_SESSION['nom']=$row['Nometprenom'];
            $_SESSION['mail']=$row['Email'];
            $_SESSION['jr']=$row['Jour'];
            $_SESSION['ms']=$row['mois'];
            $_SESSION['an']=$row['annee'];
             header("location: ../personnaliser.php?sinscrire=sucess");         
	}
}
 
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
}

else{
  header("location: ../sinscrire.php");
  exit();
}

 //we can include a succes message by writing signup=succes


