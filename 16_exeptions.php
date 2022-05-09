<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x){
    if(!$x){
        throw new Exception('Division by zero');
    }
    return 1/$x;
};

try {
    echo inverse(5);
    echo "<br>";
    echo inverse(0);
} catch (Exception $e) {
    echo "Caugth exeption <br>", $e-> getMessage();
} finally{
    echo "First Finally";
}


echo "<br>";
try {
    echo inverse(5);
    echo "<br>";
    echo inverse(0);
} catch (Exception $e) {
    echo "Caugth exeption <br>", $e-> getMessage();
} finally{
    echo "2 Finally";
}

echo "<br>Hi! Still working :)";