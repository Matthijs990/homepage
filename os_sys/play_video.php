<!DOCTYPE html5> 
<html> 
<body> 

<?php
if (isset($_GET["src"])){
	$src = $_GET["src"]));
}
elseif (isset($_POST["src"])){
	$src = $_POST["src"]
}	
else {
	exit();
}

?>
<video width="320" height="240" controls>
  <source src="<?php echo $src ?>" type="video">
Your browser does not support the video tag.
</video>
</body>
</html>