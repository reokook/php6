<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task2</title>
</head>
<body>
 <h1>Q1</h1>
<?php
$colors = ['red', 'green', 'white'];

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment:
     the {$colors[0]} carpet, the {$colors[1]} lawn, the {$colors[2]} house, the leaden sky. The new president and his first lady.
      - Richard M. Nixon";

echo $paragraph;
?>

<hr>
 <h1>Q2</h1>
<?php
$colors = array('white', 'green', 'red');
sort($colors);
echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
?>

<hr>
 <h1>Q3</h1>
 <?php
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
?>

<hr>
 <h1>Q4</h1>
<?php
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
$first_element = reset($color);
echo $first_element;
?>
<hr>
 <h1>Q5</h1>
<?php
function insertInArray($array, $position, $newItem) {
    array_splice($array, $position, 0, $newItem);
    return $array;
}
$array = [1, 2, 3, 4, 5];
$position = 3;
$newItem = '$';

$resultArray = insertInArray($array, $position, $newItem);

foreach ($resultArray as $item) {
    echo $item . ' ';
}
?>

<hr>
 <h1>Q6</h1>
<?php
$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}
?>

<hr>
 <h1>Q7</h1>
 <?php
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$average = array_sum($temperatures) / count($temperatures);
sort($temperatures);
$lowest_temps = array_slice($temperatures, 0, 5);
$highest_temps = array_slice($temperatures, -5);

echo "Average Temperature is: " . round($average, 1) . "<br>";
echo "List of five lowest temperatures: " . implode(", ", $lowest_temps) . "<br>";
echo "List of five highest temperatures: " . implode(", ", $highest_temps) . "<br>";
?>

<hr>
 <h1>Q8</h1>
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>

<hr>
<h1>Q9</h1>
<?php
function convertToUppercase($array) {
    return array_map('strtoupper', $array);
}
$colors = array("red", "blue", "white", "yellow");
$uppercasedColors = convertToUppercase($colors);

print_r($uppercasedColors);
?>

<hr>
<h1>Q10</h1>
<?php
function convertToLowercase($array) {
    return array_map('strtolower', $array);
}
$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$lowercasedColors = convertToLowercase($colors);

print_r($lowercasedColors);
?>

<hr>
<h1>Q11</h1>
<?php
function getShortestLongestLength($array) {
    $lengths = array_map('strlen', $array);
    $shortest = min($lengths);
    $longest = max($lengths);
    return array('shortest' => $shortest, 'longest' => $longest);
}

$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$result = getShortestLongestLength($words);

echo "The shortest array length is " . $result['shortest'] . ". The longest array length is " . $result['longest'] . ".";
?>

<hr>
<h1>Q12</h1>
<?php
function findLowestNonZero($array) {
    $filteredArray = array_filter($array, function($value) {
        return $value != 0;
    });
    return min($filteredArray);
}
$array1 = array(2, 0, 10, 12, 6);
$result = findLowestNonZero($array1);

echo " " . $result;
?>

<hr>
</body>
</html>