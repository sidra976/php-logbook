<?php
echo "Data Types",'<br>';
//Scalar types
echo "<h2>Scalar Type</h2>";
$completed = true;
echo $completed, '<br>';
//for finding the types
//First method using get type
echo gettype($completed), '<br>'; //output booleam
//second method using var dump
var_dump($completed); //output bool(true)

//type cast
$num = (int) "5";
var_dump($num);

//Compoud types
echo "<h2>Compound Type</h2>";
//Array
$companies = [1,2,3.3,5];
//using print_r to print array values
print_r($companies);

//Object
//Callable
//iterable
?>