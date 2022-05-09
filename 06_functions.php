<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

$y =12;

//FUNCION NORMAL
function registerUser($email){
    global $y; //<-- USANDO VARIABLES GLOBALES YA QUE TRABAJAN POR SCOPES
    //echo $y;
    //$x =10;
    echo "${email} Regristrado!";
};

registerUser('Brad');

//FUNCION CON RETURN
echo  "<br><br>";
function sum($n1 = 4, $n2 = 5){
    return $n1 + $n2;
};
$number = sum(5,5);
echo $number;

//FUNCION ANONIMA
echo  "<br><br>";
$subtrat = function($n1,$n2){
    return $n1-$n2;
};
echo $subtrat(10,5);

//ARROW FUNCTION
echo  "<br><br>";
$multiply = fn($n1, $n2)=>$n1*$n2;
echo $multiply(9,9);