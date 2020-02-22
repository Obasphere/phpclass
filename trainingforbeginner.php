<?php

/*
//Associative Arrays
$level = Array(
    "Dami" => 100,
    "Segz" => 30,
    "Jam" => 40
);

echo $level['Segz'];


//Function
function writeMsg() {
    return 'Hello World';
}

echo writeMsg();


// Conditionals
$num1 = 20;
if($num1 > 30){
    echo 'Yes it is';
} else{
    echo "No it isn't";
}


// for- Loop
for ($i=0; $i < 10; $i++){
    echo "Number ".$i."<br>";
}


// while- Loop
$i = 0;
while ($i < 10){
    echo "Number ".$i."<br>";
    $i++;
}
*/

// foreach- Loop
$level = Array(
    "Dami" => 100,
    "Segz" => 30,
    "Jam" => 40
);
foreach ($level as $class){
    echo $class. "<br>";
}

/*
// Using the global keyword
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15


// Using the static keyword
function myTest() {
    static $x = 0;
    echo "$x <br>";
    $x++;
}

myTest();
myTest();
myTest();
myTest();
myTest();


// The PHP echo statement is often used to output data to the screen
$txt = "W3Schools.com";
echo "I love $txt! <br>";

$txt = "W3Schools.com";
echo "I love " . $txt . "!";


// The gobal keyword is used to access a global variable from within a function
$x = 4;
$y = 10;

function myTest () {
    global $x, $y;
    $y = $x + $y;
}

myTest ();
echo $y;


// The example above can be rewritten like this
$x = 4;
$y = 10;

function myTest () {
    global $x, $y;
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest ();
echo $y;


// The following example shows how to output text and variables with the print statement
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>$txt1</h2>";
print "Study PHP at $txt2<br>";
print $x + $y;


// The PHP var_dump() function returns the data type and value
$x = 345;
var_dump ($x);
echo '<br>';
$x = 10.365;
var_dump($x);


// Arrays
$cars = array ("Volvo", "Benz", "Toyota");
var_dump ($cars);


// Variables can also be emptied by setting the value to NULL
$x = "Hello world!";
$x = null;
var_dump($x);


// CONSTANT, The example below creates a constant with a case-sensitive name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;


// CONSTANT, The example below creates a constant with a case-insensitive name
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;


// FUNCTION: The function, which outputs several different first names, but an equal last name
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");


// Has a function with two arguments ($fname, $year)
function familyName($fname, $year) {
    return "$fname Refsnes. Born in $year <br>";
}

echo familyName("Hege", "1975");
echo familyName("Stale", "1978");
echo familyName("Kai Jim", "1983");


// If we call the function setHeight() without arguments it takes the default value as argument
function setHeight($minHeight = 50) {
    echo "$minHeight is the minimum height attained at this level <br>";
}

setHeight(38);
setHeight(45);
setHeight(74);
setHeight(); // will use the default value of 50
setHeight(34);


// To let a function return a value, use the return statement
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " .sum(5, 10) ."<br>";
echo "7 + 13 = " .sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);


// The count() function is used to return the length (the number of elements) of an array
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);


// To loop through and print all the values of an indexed array, you could use a for loop
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}


// The named keys can then be used in a script
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";


// To loop through and print all the values of an associative array, you could use a foreach loop
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
// The example below shows how to use some of the elements in $_SERVER
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
*/


















?>