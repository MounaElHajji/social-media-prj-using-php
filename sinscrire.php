


<!doctype html>  
<head>
<meta charset="UTF-8">
<title>twitter</title>
<link rel="stylesheet" type="text/css" href="styles/sinscrire.css">
</head>
<body>

	
		<form action="include/signup.php" method="POST"> 
	<section>
	  	<a href="personnaliser.php"><input type="submit" name="submit" value="Suivant" class="suiv"></a>
		<img src="images/6Sans titre.png" width="10%"  id="image">
		<h2><b>Créer votre compte</b></h2>
		<input type="name" name="nom" id="nom" placeholder = "Nom et prénom"><br/>
		<input type="Email" name="Email" id="nom"placeholder ="Email" required=""><br />
		<a href="tlfn.php"><p class="aa"> Utiliser un Telephone</p></a>
		<p class="firs"><b>Date de naissance</b><br>Cette information ne sera pas affichée publiquement. Confirmez votre âge, même si ce compte est pour une entreprise, un animal de compagnie ou autre chose.</p>
		<select name="mois" class="mois">
			<option hidden="hidden" selected="selected">Mois</option>
			<option>janvier</option>
			<option>février</option>
			<option>mars</option>
			<option>avril</option>
			<option>mai</option>
			<option>juin</option>
			<option>juillet</option>
			<option>août</option>
			<option>septembre</option>
			<option>octobre</option>
			<option>novembre</option>
			<option>décembre </option>
		</select><select name="jour" class="jour">
			<option hidden="hidden" selected="selected"> Jour</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12 </option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
			
		</select>
		<select name="annee" class="annee">
			<option hidden="hidden" selected="selected"> Année</option>
			<option>1990</option>
			<option>1991</option>
			<option>1992</option>
			<option>1993</option>
			<option>1994</option>
			<option>1995</option>
			<option>1996</option>
			<option>1997</option>
			<option>1998</option>
			<option>1999</option>
			<option>2000</option>
			<option>2001 </option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			
		</select>
		
	</section>
 <?php
  $fullURL="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($fullURL, "error=emptyfield")== true){
     echo "<p class='error'>Veuillez svp remplir tous les champs!</p>";
     exit();
    }
  elseif(strpos($fullURL, "error=invalidemailnom")== true){
     echo "<p class='error'>you entered an invalid mail and invalid nom</p>";
     exit();
    }

    elseif(strpos($fullURL, "error=invalidnom")== true){
     echo "<p class='erro'>Veuillez entrer un nom valid</p>";
     exit();
    }
    elseif(strpos($fullURL, "signup=success")== true){
     echo "<p class='error'>You have been signed up</p>";
     exit();
    }

    elseif(strpos($fullURL, "error=usertaken")== true){
     echo "<p class='err'>le nom d'utilisateur est deja utilisee. Veuillez entrer un aute pseudo!</p>";
     exit();
    }
   //if we have a certain string inside thid URL
  	//signup=empty says that if we have the string inside the URL then it's going to tell us the precision of the string inside the UL.
     
  
   //where we're going to throw the error message
 ?>
	


	</SECTION>
</form>


</body>
</html>
 




          





