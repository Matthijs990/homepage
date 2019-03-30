<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="eng" lang="eng">
<html>
<head>
<title>hello world in php</title>
</head>
<body>
<?php
if(isset($_GET['lang'])) {
    
	$lang = $_GET["lang"];
	echo("<p>$lang</p>");
}

else {
	$lang = "eng";
}

if ($lang == "eng") {
for ($g= 1; $g<8; $g++){
	echo("<font size=" . $g . ">hello world</font><br>\n");
}}
?>
<hr />
<?php
for ($i= 7; $i>0; $i--){
	echo("<font size=" . $i . ">hello world</font><br>\n");
}
if(isset($_GET['name'])) {
    
	$intel = $_GET["name"];
	echo("<p>$intel</p>");
}
?>


</html>