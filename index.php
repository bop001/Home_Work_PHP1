<?php
	/*$red = function (){
		if('red'>= 0 || 'red'<=255){
			$_POST['red'];
		}else {
			echo "Введите правильное число";
		}		
	};
*/	
	$red = $_POST['red'];
	$green = $_POST['green'];

	$blue = $_POST['blue'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>HW_PHP1</title>
</head>
<body>
	<form action="/" method="post">
		Красный цвет: <input type="text" name="red"  method="post"><br><br>
		Зеленый цвет: <input type="text" name="green"  method="post"><br><br>
		Синий цвет: <input type="text" name="blue"  method="post"><br><br>
		<input type="submit" value="Accept"><br><br>
		<span style="background-color: rgb(<?php echo $red; ?>, <?php echo $green; ?>, <?php echo $blue; ?>)">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae labore hic rem cumque. Illum dolorum soluta doloremque, deleniti excepturi fugiat, ut ex provident sunt libero voluptatem quo tempora, inventore, molestiae.</span>
	</form>

</body>
</html>