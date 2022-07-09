<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body>
      
            
    <!-- .container -->
    <div class="container-luid">

      <!-- .row -->
      <div class="row d-flex justify-content-center my-5 bg">

          <!-- .col -->
          <div class="col-lg-4 col-md-4 col-sm-12 text-center">

              <h1>Add User</h1>
              <p class="pb-3">Complete the form below</p>

              <!-- .form -->
              <form autocomplete="off" action="" method="post">

                <div class="d-grid gap 3">

                  
                  <input type="text" class= "form-control form-control-lg fw-bold fs-6 py-3" placeholder="Name" id="name" value=""> <br>
                  
                  <input type="text" class= "form-control form-control-lg fw-bold fs-6 py-3" placeholder="Email" id="email" value=""> <br>
                  
                  <select class="form-select form-select-lg fw-bold fs-6 py-3 text-secondary" id="gender">
                    <option selected></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select> <br>

                  <button class="btn btn-primary btn-lg fw-bolder py-3" type="button" onclick="submitData('insert');">Add</button> <br>

                  <a href="index.php">Go To Index</a>
                  <?php require 'script.php'; ?>

                </div>
                  
              </form>
              <!-- /.form -->

          </div>
          <!-- /.col -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    
    
    
    
    
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  </body>
</html>
