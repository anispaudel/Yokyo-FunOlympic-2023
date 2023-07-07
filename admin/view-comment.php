<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location:index.php");
  exit;
} else {
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
    <!-- dashboard start -->
    <div class="container-fluid" style="padding:20px">
      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <h2 class="display-4">View All Comments</h2>
          <table class="table table-dark table-hover table-bordered">
            <thead>
              <tr>
                <th>Comment ID</th>
                <th>Username</th>
                <th>Comment</th>
                <th>Date</th>
                <th>Delete</th>
              </tr>
            </thead>
            <?php
            include 'connection.php';
            $query = "select * from comment";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($run)) {
              $a = $row['commentID'];
              $b = $row['username'];
              $c = $row['date'];
              $d = $row['comment'];
            ?>
              <tbody>
                <tr>
                  <td scope="row"><?php echo $a; ?></td>
                  <td><?php echo $b; ?></td>
                  <td><?php echo $d; ?></td>
                  <td><?php echo $c; ?></td>
                  <td><a class="btn btn-danger" href="delete-comment.php?Del=<?php echo $a; ?>">Delete</a></td>

                </tr>
              </tbody>
            <?php
            }
            ?>
          </table>
        </div>
        <div class="col-md-2">

        </div>
      </div>
    </div>
    <!-- dashboard end -->

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
<?php
}
?>