<!DOCTYPE html5>
<html>
<body>
<?php
if (isset($_GET["src"])){
	$src = $_GET["src"]));
}
elseif (isset($_POST["src"])){
	$src = $_POST["src"]
	
else {
	exit();
}

?>
<audio controls>
	<source src="<?php echo $src ?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

</body>
</html>
