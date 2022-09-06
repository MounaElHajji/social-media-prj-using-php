


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="styles/mdp.css">

    </head>
	<body>
	<section>
		
		<form action="include/mtdp.php" method="POST">
         <img src="images/6Sans titre.png" width="10%" id="image">
		<input type="submit" name="submit" value="suivant" class="suiv">
		<p class="bold"><b>Il vous faut un mot de passe</b></p>

		<p class="ver">Verifier qu'il contient au moins 8 caracteres</p>
		<div>
		<input type="password" name="pass" required="" placeholder="mot de pass" id="password" />
        <div id="toggle" onclick="showHide();"></div>
        <script type="text/javascript">
        	const password = document.getElementById('password');
        	const toggle = document.getElementById('toggle');
        	function showHide(){
        		if(password.type=== 'password'){
        			password.setAttribute('type', 'text');
        			toggle.classList.add('hide')
        		}
        		else{
        			password.setAttribute('type', 'password');
        			toggle.classList.remove('hide')
        		}
        	}

        </script>

		<input type="password" name="pass2" placeholder = "Verifier le mdp" id="passwor"><br/>
		<div id="toggle" onclick="showHide();"></div>
		<script type="text/javascript">
        	const password = document.getElementById('passwor');
        	const toggle = document.getElementById('toggle');
        	function showHide(){
        		if(password.type=== 'passwor'){
        			password.setAttribute('type', 'text');
        			toggle.classList.add('hide')
        		}
        		else{
        			password.setAttribute('type', 'passwor');
        			toggle.classList.remove('hide')
        		}
        	}

        </script>
		</div>
	    </form>


	    <?php
  $fullURL="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if(strpos($fullURL, "error=mdpincorect")== true){
     echo "<p id='error'>Veuillez confirmer que le mot de pass que vous qvez entrer est valid!</p>";
     exit();
    }
 ?>
	</section>
   	</body>
	</html>
          


