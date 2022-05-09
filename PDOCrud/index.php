<?php 
include('db.php');

$sql = 'SELECT * FROM people';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);

/*
    NOTA: 
    <?php ?>  ---> DECLARACION DE CODIGO PHP NORMAL
    <?=   ?>  ---> DECLARACION DE CODIGO PHP CON ECHO INCLUIDO
 */
?>

<?php include('header.php'); ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header"><h2>All People</h2></div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                <?php foreach($people as $person): ?>
                <tr>
                    <td><?= $person->id; ?></td>
                    <td><?= $person->name; ?></td>
                    <td><?= $person->email; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $person->id ?>" class="btn btn-success">Edit</a>
                        <a href="delete.php?id=<?= $person->id ?>" onclick="return confirm('Quieres eliminiar este registro?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>