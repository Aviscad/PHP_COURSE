<?php
include('db.php');

$id = $_GET['id'];
$sql = 'DELETE FROM people where id=:id';
$statement = $connection->prepare($sql);
if($statement->execute([':id' => $id])){
    header("Location: index.php");
}


