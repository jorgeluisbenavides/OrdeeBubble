<?php
$numbers = [54,26,93,17,77,31,44,55,20];
echo json_encode(orderBubble($numbers));

function orderBubble($array){
	for($i = 0; $i < count($array)-1; $i++){
		for($j = 0; $j < count($array)-1; $j++){
			if($array[$j] > $array[$j+1]){
				$aux = $array[$j];
				$array[$j] = $array[$j+1];
				$array[$j+1] = $aux;
			}
		}
		//echo $i.json_encode($array)."<br>";
	}
	return $array;
}
?>