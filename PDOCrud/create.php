<?php
include('db.php');

$message = '';

if (isset($_POST['submit'])) {

    if (!empty($_POST['name']) && !empty($_POST['email'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = 'INSERT INTO people(name, email) values(:name, :email)';
        $statement = $connection->prepare($sql);
        $statement->execute(
            [
                ':name' => htmlspecialchars(trim($name), FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                ':email' => htmlspecialchars(trim($email), FILTER_SANITIZE_EMAIL)
            ]
        );

        if ($statement) {
            $message = "Save successfully";
            header("Location: index.php");
        }

    } else {
        echo 'test';
        $message = "Information is required!";
    }
}

?>

<?php include('header.php'); ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Create a Person</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($message)): ?>
                <div class="alert alert-info">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>


            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn bg-primary text-white" name="submit">Create a Person</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>