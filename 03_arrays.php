<?php
//Simple array
$numbers = [1,2,3,4,5];
$fruits = array('apple','orange','pear');

print_r($numbers);
print_r($fruits);

echo "<br><br>";
var_dump($numbers);

echo "<br><br>";
echo $fruits[0];

echo "<br><br>";
//Arrays asociativos
$color = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

echo $hex['blue'];
echo "<br><br>"; 

$person=[
    'first_name' => 'Manuel',
    'last_name' => 'Viscarra',
    'email' => 'manuel@mail.com'
];
echo $person['first_name'];

//Arrays Multidimensionales
echo "<br><br>"; 
$people =[
    [
        'first_name' => 'Manuel',
        'last_name' => 'Viscarra',
        'email' => 'manuel@mail.com'
    ],
    [
        'first_name' => 'Antonio',
        'last_name' => 'Cadenas',
        'email' => 'antonio@mail.com'
    ],
    [
        'first_name' => 'Juan',
        'last_name' => 'Perez',
        'email' => 'juan@mail.com'
    ]
];
echo $people[1]['email'];
echo "<br><br>"; 
var_dump(json_encode($people)); //  <-- PARA CONVERTIR UN ARRAY ASOCIATIVO A JSON
$people_json = json_encode($people);
echo "<br><br>"; 
var_dump(json_decode($people_json)); //  <-- PARA CONVERTIR JSON A ARRAY ASOCIATIVO

?>