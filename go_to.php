<!DOCTYPE html>

<html lang="eng" lang="eng">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="description" content="login" />
   <meta name="keywords" content="login" />
   <title>login</title>
   <style type='text/css'>
   a { color: rgb(0,0,255); }
   </style>
</head>
<body>
<form>
	<strong>code</strong>
    <input type='text' value='' id='code'></input>
    <input type="button" value="Calculate" onclick="check()" />
</form>
<?php
extract($_REQUEST, EXTR_PREFIX_ALL|EXTR_REFS, 'st');
if (isset($st_code)) {
	$code = $st_code;
}
else {
	$code = '1850';
}

?>
<script type="text/javascript">
function open(evt) {
    window.open(evt, _self);
}
function check() {
var code, inp;
inp = document.getElementById("code").text;
if (inp == '<?php echo $code ?>') {
	open('<?php echo $st_link ?>');
}
}
</script>
</body>
</html>