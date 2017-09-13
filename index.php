<!DOCTYPE html><?php include_once("config.php");?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php echo $title?></title>
</head>
<body>

<div class='title'><h1><?php echo $title;?></h1></div>

<?php echo (string)exec("python getter.py");?>

</body>
</html>