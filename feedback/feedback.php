<?php include 'inc/header.php'; ?>

<?php 
  $sql = 'SELECT * FROM feedback';
  $result =mysqli_query($con, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-2">
        By <b><?php echo $item['name']; ?></b> on <b><i><?php echo $item['date']; ?> </b></i>
      </div>
    </div>
  </div>
<?php endforeach; ?>

</div>
<?php include 'inc/footer.php'; ?>