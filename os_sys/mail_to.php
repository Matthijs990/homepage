<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>

<h1>mailto:</h1>
<?php
if (!empty('_POST') and isset($_POST["email"])) {
	$adres = $_POST["email"];
}
elseif (!empty('_GET') and isset($_GET["email"])) {
	$adres = $_GET["email"];
}
else {
	$adres = 'py.libs@gmail.com';
}
if ($adres == '' or $adres == "") {
	$adres = 'py.libs@gmail.com';
}
?>

<h2><?php echo $adres ?></h2>
<form action="mailto:<?php echo $adres ?>" method="post" enctype="text/plain">
subject:<br>
<input type="text" name="subject"><br>
Name:<br>
<input type="text" name="name"><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<textarea name="comment"></textarea><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>
<p><strong>dont change anything in your mail program!</strong></p>
</body>
</html>
