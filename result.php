<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>PHP Fare of Bus</title>
</head>
<body>
	
	<?php
	$route = array(
	
	array(
		"start" => "Budapest",
		"destination" => "Székesfehérvár",
		"km" => "66"
	),
	array(
		"start" => "Budapest",
		"destination" => "Veszprém",
		"km" => "110"
	),
	array(
		"start" => "Budapest",
		"destination" => "Győr",
		"km" => "124"
	),
	array(
		"start" => "Veszprém",
		"destination" => "Székesfehérvár",
		"km" => "44"
	),
	array(
		"start" => "Veszprém",
		"destination" => "Győr",
		"km" => "78"
	),
	array(
		"start" => "Székesfehérvár",
		"destination" => "Győr",
		"km" => "85"
	)
);
		
	$start = $_POST['start'];
	$destination = $_POST['destination'];
	$discount = $_POST["discount"];
	$priceOfkm = 18; // 18 forint kilometerenkent
	$additional = 175;
		
	if($start == $destination){
		echo "Ugyanaz a cél és az indulás, válassza ki az útirányt helyesen!";
	}else{
	
			foreach($route as $value){
				if((($value['start'] == $start) && ($value['destination'] == $destination)) || (($value['destination'] == $start) && ($value['start'] == $destination))){
					$km = $value['km'];
					$fare = $km * $priceOfkm;
				}
			}
			$total = $fare * $discount + $additional;
			echo 'Indulás: ' . $start . '<br/>';
			echo 'Érkezés: ' . $destination . '<br/>';
			echo 'Viteldíj: <b>' . $total . '</b> Ft';
	}
	
	
	?>
	
</body>
</html>