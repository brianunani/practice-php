<?php
  session_start();
  require 'dbcon.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Detail</title>

    <!-- Bootsrtap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    

  <div class="container mt-4">

    <?php include('message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>
              Student Details
              <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
            </h4>
          </div>
          <div class="card-body">
            
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT * FROM students";
                  $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $student) //this part needed to be asked
                    {
                      ?>
                      <tr>
                        <td><?= $student['id']; ?></td>
                        <td><?= $student['name']; ?></td>
                        <td><?= $student['email']; ?></td>
                        <td><?= $student['phone']; ?></td>
                        <td><?= $student['course']; ?></td>
                        <td>
                          <a href="student-view.php?id=<?= $student['id']; ?>" class= "btn btn-info btn-sm">View</a>
                          <a href="student-edit.php?id=<?= $student['id']; ?>" class= "btn btn-success btn-sm">Edit</a>
                          
                          <form action="code.php" method="POST" class="d-inline">
                            <button type="submit" name="delete_student" value="<?= $student['id']; ?>" class= "btn btn-danger btn-sm">Delete</button>
                          </form>
                        </td>
                      </tr>
                      <?php
                    }
                  }
                  else
                  {
                    echo "<h5> No Record Found </h5>";
                  }
                ?>
                
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>

    

    <!-- Option 1: Bootsrtap Bundle  with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

