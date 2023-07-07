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
              <a class="nav-link" href="add-video.php">Add Videos</a>
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
    <!-- dashboard start -->
    <div class="container-fluid" style="padding: 20px">
      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <h2 class="display-4">Edit Post</h2>
          <form action="update-post.php" method="get" enctype="multipart/form-data">
            <div class="form-group">
              <label for="ID">ID:</label>
              <input type="text" name="id1" id="id1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['id']; ?>">
            </div>
            <!-- title -->
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" name="title1" id="title1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['title']; ?>">
            </div>
            <!-- content -->
            <div class="form-group">
              <label for="content">Content:</label>
              <textarea class="form-control" name="content1" id="content1" rows="5">
                    <?php echo $_GET['content']; ?>
                  </textarea>
            </div>
            <!-- image -->
            <div class="form-group">
              <label for="image">Image:</label>
              <input type="text" name="image1" id="image1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['image']; ?>">
            </div>
            <!-- submit button -->
            <button type="submit" class="btn btn-info btn-lg" name="submit">Update Post</button>
          </form>
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
