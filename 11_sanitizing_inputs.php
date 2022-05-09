<?php

if(isset($_POST['submit'])){
    // $name = htmlspecialchars($_POST['name']);
    // echo "<br>";
    // $age = htmlspecialchars($_POST['age']);
    // echo "${name} ${age}";

    //$name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    echo "<br>";
    $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);
    echo "${name} ${age}";
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
    <label for="name">Name:</label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">Age:</label>
    <input type="text" name="age">
</div>
<input type="submit" name="submit" value="submit">
</form>