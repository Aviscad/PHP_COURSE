<?php
  /* ----------- File upload ---------- */
  if(isset($_POST['submit'])){

    $allowed_ext = array('png','jpg','jpeg','gif');
    
    if(!empty($_FILES['upload']['name'])){
      //print_r($_FILES);
      $filename = $_FILES['upload']['name'];
      $filesize = $_FILES['upload']['size'];
      $file_tmp = $_FILES['upload']['tmp_name'];

      $target_dir = "uploads/${filename}";

      //GET FILE EXTENSION
      $file_ext = explode('.', $filename);
      $file_ext = strtolower(end($file_ext));
      echo $file_ext;

      //VALIDATE FILE EXTENSION
      if(in_array($file_ext, $allowed_ext)){
        if($filesize<=1000000){
          move_uploaded_file($file_tmp, $target_dir);
          $message = "<p style='color: green;'>File uploaded!</p>";
        }else{
          $message = "<p style='color: red;'>The file is too large!</p>";
        }
      }else{
        $message = "<p style='color: red;'>Invalid file type!</p>";
      }

    }else{
      $message = "<p style='color: red;'>Please choose a file!</p>";
    }
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>

    <?php echo $message ?? null?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="upload" id="">
  <input type="submit"  value="submit" name="submit">
  </form>
</body>
</html>