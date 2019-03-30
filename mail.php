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
if (isset($_POST["subject"])){
	$subject = $_POST["subject"];
}
elseif (isset($_GET["subject"])){
	$subject = $_GET["subject"];
}
else {
	$subject = "no subject";
}
if (isset($_POST["name"])) {
	$name = $_POST["name"];
}
elseif (isset($_GET["name"])) {
	$name = $_GET["name"];
}
else {
	$name = "no name";
}
if (isset($_POST["comment"])) {
	$comment = $_POST["comment"];
}
elseif (isset($_GET["comment"])) {
	$comment = $_GET["comment"];
}
else {
	$comment = "no comment";
}
if (isset($_POST["method"])) {
	$method = $_POST["method"];
}
elseif (isset($_GET["method"])) {
	$method = $_GET["method"];
}
else {
	$method = "post";
}
?>

<h2><?php echo $adres ?></h2>
<form action="mailto:<?php echo $adres ?>?subject=<?php echo $subject ?>&comment=<?php echo $comment ?>" method="<?php echo $method ?>" enctype="text/plain">
subject:<br>
<input type="text" name="subject" value="<?php echo $subject ?>" ><br>
Name:<br>
<input type="text" name="name" value="<?php echo $name ?>" ><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<textarea name="comment" value="<?php echo $comment ?>" ></textarea><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>
<p><strong>dont change anything in your mail program!</strong></p>
</body>
</html>