<!DOCTYPE html><?php include_once("config.php");?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php echo $title?></title>
</head>
<body>

<div class='title'><h1><?php echo $title;?></h1></div>

<?php echo (string)exec("python getter.py");?>

<div class="footer">
	<p> Attribution: <a href="http://www.vincenzovuono.com/">Vincenzo Vuono</a> for Gravity Font.<br>
		Website licensed under <a href="">CC0 1.0 Universal</a><br>
	</p>
</div>

</body>
</html>