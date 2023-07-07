<?php
session_start();

include 'connection.php';
if (isset($_POST['submit'])) {
    $a = $_POST['fname'];
    $b = $_POST['lname'];
    $c = $_POST['username'];
    $d = $_POST['password'];
    $d = md5($d);

    $query = "insert into users(FirstName, LastName, Username, Password)values('$a','$b','$c','$d')";
    $run = mysqli_query($conn, $query);
    if ($run) {
        echo "<script>window.alert('Sign up Successfull!')</script>";
    } else {
        echo "<script>window.alert('Not Success!')</script>";
    }
}
mysqli_close($conn);
?>

<!doctype html>
<html lang="en">

<head>
    <title>FunOlympic Games 2023</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- J query start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark bg-navy:hover" style="background-color: orangered;">
        <a class="navbar-brand" href="index.php">FunOlympic 2023</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="about-us.php">About
                        us</a></li>
                <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
                <li class="nav-item"><a class="nav-link" href="photo-gallery.php">Photo
                        Gallery</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="user-login.php">Watch Live</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact
                        us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu  text-bg-primary">
                        <li><a class="dropdown-item" href="user-login.php">Login</a></li>
                        <li><a class="dropdown-item" href="user-signup.php">Sign Up</a></li>
                        <li>
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="myprofile.php">My Profile</a></li>
                        <li><a class="dropdown-item" href="reset-password.php">Reset Password</a></li>

                    </ul>
                <li class="nav-item"><a class="btn btn-success" href="booking.php">Book your Ticket
                    </a></li>

                </li>

            </ul>

        </div>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-danger" href="admin/index.php" role="button">Admin Panel</a>
        </form>

    </nav>
    <!-- navbar end -->


    <!-- sign up form start-->
    <section class="vh-80 gradient-custom">
        <div class="container py-5 h-80">
            <div class="row d-flex justify-content-center align-items-center h-80">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase text-center">Sign Up to User</h2>
                                <p class="text-white-50 mb-5 text-center">Please enter your Details:</p>

                                <form method="post">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeEmailX">First Name:</label>
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter your First Name" aria-describedby="helpId" required autofocus>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeEmailX">Last Name:</label>
                                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter your Last Name" aria-describedby="helpId" required autofocus>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeEmailX">Email or Username:</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter your Email" aria-describedby="helpId" required autofocus>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Password:</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password" aria-describedby="helpId" required>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-lg" name="submit">Create New Account</button>
                                    <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
                                    <a href="user-login.php" class="btn btn-primary btn-lg btn-block" style="margin:10px 0px">Log in</a>
                                    <br>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up form end -->

    <!-- footer start -->
    <footer class="bg-dark text-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Welcome to Funolympics, the ultimate destination for fun and friendly competitions!</p>
                    <a class="btn btn-primary btn-success" href="about-us.php" role="button">Read More</a>
                    <br><br>
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="photo-gallery.php">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: paudel14anish@gmail.com</p>
                    <p>Phone:+977-9846877694</p>
                    <br>
                    <h5>Follow Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="https://www.facebook.com/anish1013"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/anish__1013"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/anish__1013/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Location</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7171154.60128083!2d84.93215170312499!3d28.64353571634789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb37e078d531%3A0x973f22922ea702f7!2sBharatpur%2044200!5e0!3m2!1sen!2snp!4v1687972120002!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <hr>
            <p class="text-center">© 2023 Fun Olympics. All rights reserved.</p>
            <br>
            <p class="text-center">Designed By ANISH PAUDEL</p>
        </div>
    </footer>
    <!-- footer end -->
</body>

</html>