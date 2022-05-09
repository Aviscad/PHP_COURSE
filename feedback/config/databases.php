<?php
define("DB_HOST","localhost");
define("DB_USER","viscad");
define("DB_PASS","viscad");
define("DB_NAME","php_dev");

//CREAR CONNECION
$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($con->connect_error){
    die("Connection Failed " . $con-> connect_error);
}
