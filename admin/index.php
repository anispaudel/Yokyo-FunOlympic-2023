<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Log in</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Admin Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php"> User Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>

        </li>
        </ul>


      </div>
    </div>
  </nav>


  <!-- navbar end -->
  <!-- login form start-->
  <div class="container" style="padding:40px">
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
        <h2 class="display-4 text-center">Log in to Admin Dashboard</h2>
        <form action="" method="post">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId" required autofocus>
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="helpId" required>
          </div>

          <div class="container">

            <div class="row justify-content-center">
              <div class="col-auto">
                <button type="submit" class="btn btn-success btn-lg bg-dark" name="submit">Log in</button>
                <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
              </div>
            </div>
          </div>

          <a href="reset-password.php" class="btn btn-primary btn-lg bg-dark btn-block bg-dark" style="margin:10px 0px">Forgot Password?</a>
        
          <a href="signup.php" class="btn btn-primary btn-lg bg-dark btn-block bg-dark" style="margin:10px 0px">Create New Account / Signup</a>
        </form>
        <?php
        include 'connection.php';
        if (isset($_POST['submit'])) {
          $a = $_POST['email'];
          $b = $_POST['password'];
          $b = md5($b);
          $query = "select * from admins where email='$a' and password='$b'";
          $run = mysqli_query($conn, $query);
          if (mysqli_num_rows($run) > 0) {
            $_SESSION['email'] = $a;
            echo "<script>window.open('main.php','_self')</script>";
          } else {
            echo "<script>window.alert('Invalid Admin User!')</script>";
          }
        }
        mysqli_close($conn);
        ?>
      </div>
      <div class="col-md-1">
      </div>
    </div>
  </div>
  <!-- login form end -->
  <!-- footer start -->
  <footer class="footer bg-dark text-white text-center mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer end -->
</body>

</html>