<?php
echo "<h1>Arrays</h1>";
$programmingLanguages = ["Java" , "Php" , "C++"];
$programmingLanguages[0] = "JS";

//For print each values
echo $programmingLanguages[0], "<br>";
echo $programmingLanguages[1], "<br>";
echo $programmingLanguages[2], "<br>";

//For adding more elements in array list
//First method
$programmingLanguages[] = "Html";
//Sec method using push
array_push($programmingLanguages, 'React' , 'Nodejs', 'Python');

//For printing all values
echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';

//for finding the no of elements
echo count($programmingLanguages);

//Use array as an obj
$score = [
  'Sara' => '5.5',
  'Frank' => '6',
];
echo '<pre>';
print_r($score);
echo '<pre>';

//printing the values using keys
echo $score['Sara'];
echo '<br>';


$cities = ['A' , 'B' , 'C', 'D' , 'E', 'F' , 'G'];
unset($cities[2]);
print_r($cities);
echo '<br>';
//For removing first array elemetnt
echo array_shift($cities); //output A
echo '<br>';
print_r($cities);

$arrNum = [
    'a' => 1,
    'b' => 2,
];
var_dump(array_key_exists('a' , $arrNum));
?>
