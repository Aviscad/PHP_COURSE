<?php
include('db.php');

$id = $_GET['id'];
$sql = 'SELECT * FROM people where id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);
$person = $statement->fetch(PDO::FETCH_OBJ);

if (isset($_POST['name']) && isset($_POST['email'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE people SET name=:name, email=:email WHERE id=:id";
    $statement = $connection->prepare($sql);

    if (
        $statement->execute(
            [
                ':name' => htmlspecialchars(trim($name),FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                 ':email' => htmlspecialchars(trim($email),FILTER_SANITIZE_EMAIL),
                 ':id' => htmlspecialchars($id, FILTER_SANITIZE_NUMBER_INT)
            ]
        )
        ) 
    {
        header("Location: index.php");
    }
} 
?>

<?php include('header.php'); ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Edit a Person</h2>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?= $person->name; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $person->email; ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn bg-primary text-white" name="submit">Edit Person</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>