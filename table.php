<?php
	require_once("functions.php");
	
	//käivitan funktsiooni
	$array_of_cars = getCarData();
	
	//trükin välja esimese auto
	//echo $array_of_cars[0]->id." ".$array_of_cars[0]->plate;
?>

<h2>Tabel</h2>
<table border=1 >
	<tr>
		<th>id</th>
		<th>numbrimärk</th>
	</tr>
	
	<?php
		// trükime välja read
		// massiivi pikkus count()
		for($i = 0; $i < count($array_of_cars); $i++){
			//echo $array_of_cars[$i]->id;
			echo "<tr>";
			echo "<td>".$array_of_cars[$i]->id."</td>";
			echo "<td>".$array_of_cars[$i]->plate."</td>";
			echo "</tr>";
		}
	
	?>
</table>

