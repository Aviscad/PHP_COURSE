<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple','orange','pear'];

//GET LENGTH
echo count($fruits) . "<br>";
echo "<br><br>";

//SEARCH IN ARRAY
var_dump(in_array('apple',$fruits));
echo "<br><br>";

//ADD ELEMENT TO ARRAY
$fruits[] = 'grape';
print_r($fruits);
echo "<br><br>";

array_push($fruits, 'blueberry','strawberry');
print_r($fruits);
echo "<br><br>";

array_unshift($fruits, 'mango');
print_r($fruits);
echo "<br><br>";

//REMOVE FROM ARRAY
array_pop($fruits);
print_r($fruits);
echo "<br><br>";

array_shift($fruits);
print_r($fruits);
echo "<br><br>";

/*
unset($fruits[2]);
print_r($fruits);
echo "<br><br>";
*/

/*
//SPLIT INTO 2 CHUNKS
$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array);
echo "<br><br>";
*/

$arr1 =[1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);
echo "<br><br>";

$a =['green','red','yellow'];
$b = ['avocado','apple','banana'];
$c = array_combine($a,$b);
print_r($c);
echo "<br><br>";

$keys = array_keys($c);
print_r($keys);
echo "<br><br>";

$flip = array_flip($c);
print_r($flip);
echo "<br><br>";

$numbers = range(1,20);
print_r($numbers);
echo "<br><br>";

$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);
print_r($newNumbers);
echo "<br><br>";

$lessThan10 = array_filter($numbers, fn($number) => $number<10);
print_r($lessThan10);
echo "<br><br>";

// $carry --> numero antetior
// $number --> current number
$sum =array_reduce($numbers,fn($carry, $number)=> $carry+$number);
var_dump($sum);
echo "<br><br>";