<?php
echo "PHP with Html and Css";
echo "<br>";
echo "<h1> HTML Heading </h1>";
echo "<h1 style ='color:red'> HTML Heading with styling </h1>";
echo "<br>";
echo "Using variables";
$city = "Newyork";
echo "<h2>$city</h2>";
echo "<h2>City: $city</h2>";

$colorName = "green";
$name = "Sara";
?>

<h1 style = "color:  <?php echo $colorName;?>">
    <?php echo "name: $name"?>
</h1>