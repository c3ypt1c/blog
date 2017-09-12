<!DOCTYPE html><?php include_once("config.php");?>
<html>
<head>

	<title><?php echo $title?></title>
</head>
<body>

<?php echo $title;?>

<?php echo (string)exce("python getter.py");?>

</body>
</html>