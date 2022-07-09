<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit User</title>
  </head>
  <body>
    <h2>Edit User</h2>
    <form autocomplete="off" action="" method="post">
      <?php
      require 'config.php';
      $id = $_GET["id"];
      $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
      ?>
      <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
      <label for="">Name</label>
      <input type="text" id="name" value="<?php echo $rows['name']; ?>"> <br>
      <label for="">Email</label>
      <input type="text" id="email" value="<?php echo $rows['email']; ?>"> <br>
      <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male" <?php if($rows["gender"] == "Male") echo "selected"; ?> >Male</option>
        <option value="Female" <?php if($rows["gender"] == "Female") echo "selected"; ?> >Female</option>
      </select> <br>
      <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>
