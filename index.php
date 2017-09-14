<!DOCTYPE html><?php include_once("config.php");?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php echo $title?></title>
</head>
<body>

<p style="top:0;right:0;position:absolute;"><a href="post.php">Post</a></p>

<div class='title'><h1><?php echo $title;?></h1></div>
<?php
$fn = getcwd()."/inner.html";
$f = fopen($fn, "r");
if (filesize($fn) == 0) exec("python3 getter.py");
echo (string)fread($f, filesize($fn));
fclose($f);

$fn = getcwd()."/footer.html";
$f = fopen($fn, "r");
echo (string)fread($f, filesize($fn));
fclose($f);
?>

</body>
</html>