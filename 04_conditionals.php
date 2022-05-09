<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */

$age =20;
if($age>=18){
    echo 'Puedes votar';
} else{
    echo 'No puedes votar';
}
echo "<br><br>";

$t = date('H');
echo $t;
if($t < 12){
    echo "Good Morning";
} elseif($t<17){
    echo "Good Afternoon";
}
else{
    echo "Good Evening";
}

echo "<br><br>";
$posts = ["First Post"];
if(!empty($posts)){  //<-- empty VERIFICA SI ESTA VACIO
    echo $posts[0];
} else{
    echo "No Post";
}

echo "<br><br>";
echo !empty($posts) ? $posts[0] : 'No Post';
//$firstPost = !empty($posts) ? $posts[0] : 'No Post';
$firstPost = $posts[0] ?? null;
echo $firstPost;
echo "<br><br>";

$favcolor = 'blue';
switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo "Your favorite color is ${favcolor}";
        break;
};
?>