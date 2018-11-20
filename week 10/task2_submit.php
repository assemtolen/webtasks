<?php
	$y = 2018;
    $maker = $_GET["maker"];
    $price = $_GET["price"];
    $model = $_GET["model"];
    $year = $_GET["year"];
    $engine = $_GET["engine"];
    $z = $y- $year;
   
    $add1 = $_GET['add1'];
	$add2 = $_GET['add2'];
	$add3 = $_GET['add3'];

	if(empty($add1)){
    	$additional1 = 'no';
	} 
	if(empty($add2)){
	    $additional2 = 'no';
	} 
	if(empty($add3)){
	    $additional3 = 'no';
	} 
	   
	   	echo 'You added new item: <strong>' . $maker.' '.$model. ' </strong></br>';
		echo 'Produced in ' . $year . '('. $z . ' years old) years  with ' . $engine . ' engine </br>' ;
		echo 'Tax payed : <strong>' . $additional1 . '</strong></br>';
		echo 'Technical check passed : <strong> ' . $additional2 . '</strong></br>';
		echo 'Does not require investment : <strong>' . $additional3 . '</strong></br>';
		echo '$ '.$price;
   
?>