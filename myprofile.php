<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:user-login.php");
    exit;
} else {
}
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <link rel="styleheet" href="css/myprofile.css">
    <script src="js/myprofile.js"></script>

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
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="" style="text-transform:lowercase"><?php echo $_SESSION['username']; ?> <span class="sr-only">(current)</span></a>
                </li>

            </ul>

        </div>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-danger" href="admin/index.php" role="button">Admin Panel</a>
        </form>

    </nav>
    <!-- navbar end -->


    <!-- my profile form start-->

    <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="img/profile.jpg" width="200">Anish Paudel <br>
                    <p><?php echo $_SESSION['username']; ?></P>
                </div>

            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back">
                            <a class="btn btn-danger" href="index.php" role="button">Home</a>
                        </div>
                        <h6 class="text-right">Edit Profile</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="first name" value="Anish"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="Paudel" placeholder="Last Name"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value="anish@gmail.com"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="+977-9846877694" placeholder="Phone number"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="address" value="Bharatpur,Chitwan"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="Nepal" placeholder="Country"></div>
                    </div>

                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
        </div>
    </div>

    <!-- my profile form end -->


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