<?php
$DB_HOST = "localhost";
$DB_USER = "viscad";
$DB_PASS = "viscad";
$DB_NAME = "php_dev";

$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME";
try {
    $dbConnection = new PDO($dsn, $DB_USER, $DB_PASS);
    $dbConnection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successfully";

    $sql = "SELECT * FROM feedback";
    $result = $dbConnection-> query($sql);
    foreach ($result as $item) {
        echo "<br><li>".$item['name']."</li>";
        echo "<li>".$item['email']."</li>";
        echo "<li>".$item['body']."</li>";
    }
} catch (PDOException $e) {
    echo $e-> getMessage() . " Error Code: " . $e-> getCode();
}



?>