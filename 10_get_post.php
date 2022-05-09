<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

//echo $_GET['name'];


if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo "<br>";
    //echo $_GET['age'];
    echo $_POST['age'];
}

?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Manuel&age=27">Click!</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
<div>
    <label for="name">Name:</label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">Age:</label>
    <input type="text" name="age">
</div>
<input type="submit" value="submit">
</form> -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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