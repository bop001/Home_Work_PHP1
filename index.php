<?php
	$red = $_POST['red'];
	$green = $_POST['green'];
	$blue = $_POST['blue'];
	$colorText = "#000";
	if (!empty($_POST)) {
		$colorText = "#fff";
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>HW_PHP1</title>
</head>
<body>
	<p>Домашняя работа №1</p>
	<form action="/" method="post">
		Красный цвет: <input type="number" min="0" max="255" name="red"  method="post"><br><br>
		Зеленый цвет: <input type="number" min="0" max="255" name="green"  method="post"><br><br>
		Синий цвет: <input type="number" min="0" max="255" name="blue"  method="post"><br><br>
		<input type="submit" value="Accept"><br><br>
		<span style="background-color: rgb(<?php echo $red; ?>, <?php echo $green; ?>, <?php echo $blue; ?>); color:<?php echo $colorText;?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae labore hic rem cumque. Illum dolorum soluta doloremque, deleniti excepturi fugiat, ut ex provident sunt libero voluptatem quo tempora, inventore, molestiae.</span>
	</form>

</body>
</html>