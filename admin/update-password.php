<?php
session_start();
include 'connection.php';

if (isset($_GET['submit'])) {
  $a = $_GET['password'];
  $b = $_GET['cpassword'];
  $a = md5($a);
  $b = md5($b);
  if ($a == $b) {
    $query = "update admins set password='$b' ";
    $run = mysqli_query($conn, $query);
    if ($run) {
      header("location:index.php");
      exit(); // It's a good practice to add an exit() after the header() function to stop the script execution.
    }
  } else {
    echo "<script>window.alert('Password not being match!')</script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Main Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="view-post.php">View Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add-post.php">Add Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add-video.php">Add Video</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="upload-photo.php">Add Photo</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="view-comment.php">View Comment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view-booking.php">View booking</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-bg-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Create
            </a>
            <ul class="dropdown-menu  text-bg-primary bg-dark">
              <li class="nav-item active bg-dark">
                <a class="nav-link" href="add-user.php">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add-admin.php">Admin</a>
              </li>

            </ul>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-bg-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              View
            </a>
            <ul class="dropdown-menu  text-bg-primary bg-dark">
              <li class="nav-item active bg-dark">
                <a class="nav-link" href="view-user.php">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="View-admin.php">Admin</a>
              </li>

            </ul>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-bg-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu  text-bg-primary bg-dark">
              <li class="nav-item active bg-dark">
                <a class="nav-link" href="#" style="text-transform:lowercase"><?php echo $_SESSION['email']; ?> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reset-password.php">Reset Password</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
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
        <h2 class="display-4">Update Password</h2>
        <form action="" method="get">
          <div class="form-group">
            <label for="password">New Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="New Password" aria-describedby="helpId" required autofocus>
          </div>
          <div class="form-group">
            <label for="cpassword">Confirm Password:</label>
            <input type="password" name="cpassword" id="password" class="form-control" placeholder="Confirm Password" aria-describedby="helpId" required autofocus>
          </div>

          <button type="submit" class="btn btn-success btn-lg bg-dark" name="submit">Update Password</button>
          <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
          <a href="signup.php" class="btn btn-primary btn-lg btn-block bg-dark" style="margin:10px 0px">Create New Account</a>


        </form>


      </div>
    </div>
    <div class="col-md-1">
    </div>
  </div>
  </div>
  <!-- login form end -->
</body>
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

</html>