<?php
session_start();


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
	<!-- slide start -->
	<div id="carouselId" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselId" data-slide-to="0" class="active"></li>
			<li data-target="#carouselId" data-slide-to="1"></li>
			<li data-target="#carouselId" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active" style="height: 43em">
				<img src="img/olympics1.jpg" alt="First slide" class="w-100 h-100">
				<div class="carousel-caption d-none d-md-block">
					<h3>Welcome to Our Website</h3>

				</div>
			</div>
			<div class="carousel-item" style="height: 43em">
				<img src="img/olympics2.jpg" alt="Second slide" class="w-100 h-100">
				<div class="carousel-caption d-none d-md-block">
					<h3>Welcome to Our Website</h3>

				</div>
			</div>
			<div class="carousel-item" style="height: 43em">
				<img src="img/olympics3.jpg" alt="Third slide" class="w-100 h-100">
				<div class="carousel-caption d-none d-md-block">
					<h3>Welcome to Our Website</h3>

				</div>
			</div>
			<div class="carousel-item" style="height: 43em">
				<img src="img/olympics5.jpg" alt="Third slide" class="w-100 h-100">
				<div class="carousel-caption d-none d-md-block">
					<h3>Welcome to Our Website</h3>

				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span>
		</a> <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span>
		</a>
	</div>
	<!-- slide end -->
	<!-- welcome start -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-3">About Olympic Games</h1>

			<hr class="my-2">
			<p>The Olympic Games are a prestigious international sporting event held every four years, bringing together athletes from around the world to compete in a wide range of sports disciplines. The modern Olympic Games were inspired by the ancient Olympic Games held in Olympia, Greece, dating back to the 8th century BC.

				The Olympic Games encompass both the Summer Olympics and the Winter Olympics, alternating every two years. The Summer Olympics feature a diverse range of sports such as athletics, swimming, gymnastics, basketball, soccer, and many more. The Winter Olympics, on the other hand, showcase sports like skiing, snowboarding, ice hockey, figure skating, and curling, among others.

				The Olympics not only promote athletic excellence and competition but also foster international understanding, unity, and peace. The games provide a platform for athletes from different nations and cultures to come together, transcend borders, and showcase their skills and dedication on a global stage. The Olympic motto "Citius, Altius, Fortius" (Faster, Higher, Stronger) represents the constant pursuit of athletic achievement and breaking records.

				Hosted by different countries around the world, the Olympic Games bring enormous excitement and spectacle, captivating billions of viewers worldwide. The opening and closing ceremonies are grand showcases of culture, artistry, and national pride, while the competitions themselves are a display of incredible athleticism, determination, and sportsmanship.

				<br>The Olympic Games have seen numerous iconic moments, record-breaking performances, and inspiring stories of triumph and perseverance. They have become a symbol of human potential, unity, and the power of sports to transcend differences and unite people from various backgrounds.

				Furthermore, the Olympic Games have played a crucial role in promoting equality and inclusivity in sports. Efforts have been made to ensure equal opportunities for male and female athletes, and initiatives have been implemented to encourage the participation of athletes with disabilities through the Paralympic Games.

				Overall, the Olympic Games hold a significant place in the world of sports, culture, and international cooperation, representing the pinnacle of athletic achievement while embodying the values of excellence, friendship, and respect.
			</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="about-us.php" role="button">Read
					More</a>
			</p>
		</div>
	</div>
	<!-- welcome end -->
	<!-- offer start -->

	<div class="container" style="padding: 30px;">
		<h2 class="display-4 text-center">Current News and Events</h2>
		<hr class="my-2">
		<div class="row">
			<?php
			include 'admin/connection.php';
			$query = "select * from posts order by rand() LIMIT 4";
			$run = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_array($run)) {
				$a = $row['id'];
				$b = $row['title'];
				$c = $row['content'];
				$d = $row['image'];
			?>
				<div class="col-md-4">
					<h2><?php echo $b; ?></h2>
					<img height="400" width="200" src="images/<?php echo $d; ?>" alt="web" class="img-thumbnail">
					<p><?php echo substr($c, 0, 100); ?> ........ </p>
					<a href="post.php?id=<?php echo $a; ?>" class="btn btn-danger btn-lg">Read More</a>
				</div>
			<?php
			}
			?>


		</div>
	</div>
	<div class="container">
		<h2 class="display-4 text-center">Some Famous Athelete</h2>

		<div class="row">

			<div class="card col-md-4" style="width: 10rem;">
				<img src="assets/athelete/michael.jpg" height="400" width="200" class="card-img-top" alt="Michael Phelps Image">
				<div class="card-body">
					<h4 class="card-title">Michael Phelps</h4>

					<p class="card-text"> Michael Phelps is widely regarded as the most successful Olympian of all time. He has won a staggering 23 Olympic gold medals and set numerous world records in swimming events. Phelps excelled in various swimming disciplines, including freestyle, butterfly, and individual medley.
						His dominance in the pool and his incredible medal count have solidified his status as a swimming legend.</p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>
			</div>

			<div class="card col-md-4" style="width: 10rem;">
				<img src="assets/athelete/simone.jpg" height="400" width="200" class="card-img-top" alt="Simone Biles Image">
				<div class="card-body">
					<h4 class="card-title">Simone Biles</h4>
					<p class="card-text">Simone Biles is an exceptional gymnast who has achieved remarkable success in the Olympic Games. She has won a total of 19 Olympic and World Championship medals, making her one of the most decorated gymnasts in history.
						Biles is known for her extraordinary athleticism, strength, and innovation in her routines. Her performances have redefined what is possible in the sport of gymnastics.</p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>
			</div>

			<div class="card col-md-4" style="width: 10rem;">
				<img src="assets/athelete/ussain.jpg" height="400" width="200" class="card-img-top" alt="Usain Bolt Image">
				<div class="card-body">
					<h4 class="card-title">Usain Bolt</h4>
					<p class="card-text">Usain Bolt is widely regarded as one of the greatest sprinters in Olympic history. He dominated the track and field events in multiple Olympic Games, winning a total of eight gold medals.
						Bolt specialized in the 100-meter, 200-meter, and 4x100-meter relay races. Known for his incredible speed and showmanship, Bolt set numerous world records and captivated audiences with his charismatic personality.</p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>
			</div>
		</div>

	</div>
	</div>
	<!-- offer end -->
	<!-- footer start -->
	<footer class="bg-dark text-light">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-4">
					<h5>About Us</h5>
					Welcome to Funolympics, the ultimate destination for fun and friendly competitions!</p>
					<a class="btn btn-primary btn-success" href="about-us.php" role="button">Read More</a>
					<br>
					<br>
					<h5>Useful Links</h5>
					<ul class="list-unstyled ">
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
			<Br>
			<p class="text-center">Designed By ANISH PAUDEL</p>
		</div>
	</footer>
	<!-- footer end -->
</body>

</html>