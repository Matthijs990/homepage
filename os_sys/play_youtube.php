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
<iframe src="<?php echo $src ?>">
</iframe>

</body>
</html>
