<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h2>Index</h2>
    <table border = 1>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Action</td>
      </tr>
      <?php
      require 'config.php';
      $rows = mysqli_query($conn, "SELECT * FROM users");
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
      <tr id = <?php echo $row["id"]; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td>
          <a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
          <button type="button" onclick = "submitData(<?php echo $row['id']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="adduser.php">Add User</a>
    <?php require 'script.php'; ?>
  </body>
</html>
