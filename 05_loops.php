<?php
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

for ($x=0; $x <= 10; $x++) { 
    echo "Number ${x}<br>";
}

echo "<br><br>";

$y =1;
while ($y <= 10) {
    echo "Number ${y}<br>";
    $y++;
}

echo "<br><br>";

$a =1;
do {
    echo "Number ${a}<br>";
    $a++;
} while ($a <= 10);

echo "<br><br>";

$posts = ["FIRST","SECOND","THIRD"];

for ($i=0; $i < count($posts) ; $i++) { 
    echo "Elemento: ${posts[$i]}<br>";
}

echo "<br><br>";
foreach ($posts as $index => $post) {
    echo "${index} ${post} <br>";
}

echo "<br><br>";
$person=[
    'first_name' => 'Manuel',
    'last_name' => 'Viscarra',
    'email' => 'manuel@mail.com'
];
foreach ($person as $key => $value) {
    echo "${key} - ${value} <br>";
}