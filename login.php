<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="description" content="login to homepage" />
   <meta name="keywords" content="login, homepage" />
   <title>login(proces)</title>
   <style type='text/css'>
   a { color: rgb(0,0,255); }
   </style>
   <?php
   $user_name = $_POST["name"];
   $password = $_POST["password"];
   if (isset($_GET["link"])) {
	   $go_to = $_GET["link"];
   }
   else {
	   $go_to = $_POST["link"];
   }
	if ($user_name == "matthijs"/* wil ik laten vervangen door data uit een data base en dat hij alle gebruikersnamen in een variable probeert en als de gebruikersnaam
	is herkent dat hij dan met die gebruikersnaam in een variable gaat kijken of het opgegeven wachtwoord gelijk is aan het wachtwoord dat door de gebruikersnaam als key word
	opgevraagd en dat hij dan kijkt of de value correct is*/){
		if ($password == "Piethein"){
			echo("<form method='get' action='$go_to'>\n<input type='password' name='waarde' value='True' readonly />\n<input type='submit' value='Send'></form>");
		}
		else{
			echo("<form method='post' action='$go_to'>\n<var name='waarde'>False</var>\n<input type='submit' value='Send'></form>");
		}
	}
	else{
		echo("<form method='post' action='$go_to'>\n<var name='waarde'>False</var><input type='submit' value='Send'>\n</form>");
	}
   ?>
</head>
</html>