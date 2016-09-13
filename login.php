<?php
//get ja posti muutujad

	//var_dump ($_GET);
	//echo "<br>";
	//var_dump ($_POST);
	
	$signupEmailError = "";
	
	//on üldse olemas
	if(isset($_POST["signupEmail"])){
		//jah on olemas
		//kas on tühi
		if(empty($_POST["signupEmail"])){
			$signupEmailError = "see väli on kohustuslik";

			
		}
		
		
		
	}
	





?>

<!DOCTYPE html>
<html>
<head>
<title>Logi sisse või loo kasutaja</title>
</head>
<body>

<h1>Logi sisse</h1>

<form method="POST">
  <input name="loginEmail" placeholder = "e-mail" type ="e-mail"> <br><br>
  <input name="loginPassword" placeholder = "parool" type ="password"> <br><br>
  
  <input type="submit" value="logi sisse">
  
</form>

<h1>Loo kasutaja</h1>

<form method="POST">
  <input name="signupEmail" placeholder = "e-mail" type ="e-mail"> <?php echo $signupEmailError;?> <br><br>
  <input name="signupPassword" placeholder = "parool" type ="password"> <br><br>
  
  <input type="submit" value="loo kasutaja">
  
</form>



</body>
</html>