<?php
$dsn = 'mysql:host=localhost;dbname=company';
$username = 'viscad';
$password = 'viscad';
try {
    $connection = new PDO($dsn,$username,$password);
} catch (PDOException $e) {
    echo $e->getMessage();
}
