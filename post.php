<!DOCTYPE html><?php include_once("config.php");?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html style="height: 100%;">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php echo $title?></title>
</head>
<body>

<div class='title'><h1><?php echo $title;?></h1></div>

<div class='content'>
	<p>Make new post</p>
	<p>
	<?php
		if (isset($_POST["posted"])) {
			if ($_POST["posted"] == "true") {

				$st = str_replace(htmlspecialchars("<br>"), "<br>", htmlspecialchars(str_replace("\n", "<br>", $_POST["content"])));
				$st = $_POST["title"]."!,".$st."!,".$_POST["date"]."!,1";

				$f = fopen("posts.csv", "a") or die("Unable to open file!");
				fwrite($f, "\n". $st);
				fclose($f);

				exec("python3 getter.py");

				echo "Written Successfully";

			}
		}
	?>
	<form action="" method="post">
		Password:<br>
		<input type="password" name="password"><br>
		Title:<br>
		<input type="text" name="title"><br>
		Content:<br>
		<textarea name="content" style="width: 90%; height: 50%;" ></textarea><br>
		Date:<br>
		<input type="text" name="date" value="<?php echo date('d-m-y');?>"><br>
		<input type="hidden" name="posted" value="true">
		<input type="submit" value="Submit">
	</form>
</div>

<?php 
$fn = getcwd()."/footer.html";
$f = fopen($fn, "r");
echo (string)fread($f, filesize($fn));
fclose($f);
?>

</body>
</html>