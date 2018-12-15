<?php
	$red = $_POST['red'];
	$green = $_POST['green'];
	$blue = $_POST['blue'];
	$colorText = "#000";
	if (!empty($_POST['red']) and !empty($_POST['green']) and !empty($_POST['blue']) and $colorText == "#000") {
		$colorText = "#fff"; // чтобы в одну переменную, с запятыми...
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

	<p>Домашняя работа №2</p>
	<p>Выберите месяц текущего года:</p>
	<div class="box-button">
		<form action="index.php" method="post">
			<input type="radio" id="1" name="month" value="1">
			<label for="1">Январь</label>
			<input type="radio" id="2" name="month" value="2">
			<label for="2">Февраль</label>
			<input type="radio" id="3" name="month" value="3">
			<label for="3">Март</label>
			<input type="radio" id="4" name="month" value="4">
			<label for="4">Апрель</label>
			<input type="radio" id="5" name="month" value="5">
			<label for="5">Май</label>
			<input type="radio" id="6" name="month" value="6">
			<label for="6">Июнь</label>
			<input type="radio" id="7" name="month" value="7">
			<label for="7">Июль</label>
			<input type="radio" id="8" name="month" value="8">
			<label for="8">Август</label>
			<input type="radio" id="9" name="month" value="9">
			<label for="9">Сентябрь</label>
			<input type="radio" id="10" name="month" value="10">
			<label for="10">Октябрь</label>
			<input type="radio" id="11" name="month" value="11">
			<label for="11">Ноябрь</label>
			<input type="radio" id="12" name="month" value="12">
			<label for="12">Декабрь</label><br><br>
			<input type="submit" value="Посмотреть">
		</form>
	</div>
	<?php
		$month = $_POST['month'];
		if (!empty($month)) {
			calendar($month);
		}
			/*$month['1'] = 'Январь';
			$month['2'] = 'Февраль';
			$month['3'] = 'Март';
			$month['4'] = 'Апрель';
			$month['5'] = 'Май';
			$month['6'] = 'Июнь';
			$month['7'] = 'Июль';
			$month['8'] = 'Август';
			$month['9'] = 'Сентябрь';
			$month['10'] = 'Октябрь';
			$month['11'] = 'Ноябрь';
			$month['12'] = 'Декабрь';*/
			$year = date('Y');

		function calendar($month){
			global $month, $year;

			$dayofmonth = date('t');
			$day_count = 1;
			$num = 0;

		  	for($i = 0; $i < 7; $i++){
		  		$dayofweek = date('w', mktime(0, 0, 0, $month, $day_count, $year));		  	
    			$dayofweek = $dayofweek - 1;

	    		if($dayofweek == -1) $dayofweek = 6;
			    if($dayofweek == $i){
			   		$week[$num][$i] = $day_count;
			   		$day_count++;
			    }
			    else{
			      $week[$num][$i] = "";
				}
			}
			while(true){
				$num++;
			for($i = 0; $i < 7; $i++){
				$week[$num][$i] = $day_count;
				$day_count++;
      		if($day_count > $dayofmonth) break;
			}
		    if($day_count > $dayofmonth) break;
		  	}

	echo "<br><br><table border=1>";
  		for($i = 0; $i < count($week); $i++){
    echo "<tr>";
    	for($j = 0; $j < 7; $j++){
	    	if(!empty($week[$i][$j])){
        	if($j == 5 || $j == 6) 
            	echo "<td><font color=red>".$week[$i][$j]."</font></td>";
       		else echo "<td>".$week[$i][$j]."</td>";
       		}else echo "<td>&nbsp;</td>";
	   	}
   	echo "</tr>";
  		} 
 	echo "</table>";
 	}	


	?>
</body>
</html>