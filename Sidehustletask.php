<?php 

//Range Function
function strange($t, $o)
{
	for ($i=$t; $i <=$o ; $i++) 
	{ 
		$arr[] = $i;
	}
	print_r($arr);
}

//Sum Function
function sum_arr($arr1)
{
	$sum = 0;
	$count_arr = count($arr1);
	for ($i=0; $i<$count_arr ; $i++) 
	{ 
		$sum += $arr1[$i];
	}
	echo "The sum of the array is =" . "". $sum;
}

//calling the strange funtion
strange(5,10);
echo "<br>";
//calling sum function
$task = [1,2,3,4,5];
echo sum_arr($task);

 ?>