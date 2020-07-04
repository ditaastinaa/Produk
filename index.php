<?php session_start();
include 'dbconfig.php';
if(isset($_SESSION['id_anggota'])){
	header("Location: web/anggota");
}
if(isset($_SESSION['id_kasie'])){
	header("Location: web/kasie");
}
if(isset($_SESSION['id_admin'])){
	header("Location: web/admin");
}

$id = "";
$password = "";
if(isset($_POST['tombollogin'])){
	$id = $_POST['id'];
	$password = $_POST['password'];
	$login_anggota = mysqli_query($connect, "SELECT * FROM user_anggota WHERE id_anggota='$id' AND pass='$password'");
	$login_kasie = mysqli_query($connect, "SELECT * FROM user_kasie WHERE username='$id' AND pass='$password'");
	$login_admin = mysqli_query($connect, "SELECT * FROM user_admin WHERE nama='$id' AND pass='$password'");
	if (mysqli_num_rows($login_anggota) > 0){
			$login_anggota2 = mysqli_fetch_array($login_anggota);
			$id_anggota = $login_anggota2['id_anggota'];
			$nama = $login_anggota2['nama'];
			$_SESSION['nama'] = $nama;
			$_SESSION['id_anggota'] = $id_anggota;
			header("Location: web/anggota");
		}
	else if (mysqli_num_rows($login_kasie) > 0){
			$login_kasie2 = mysqli_fetch_array($login_kasie);
			$nama_kasie = $login_kasie2['username'];
			$nama = $login_kasie2['nama'];
			$_SESSION['id_kasie'] = $nama_kasie;
			$_SESSION['nama'] = $nama;
			header("Location: web/kasie");
		}
	else if (mysqli_num_rows($login_admin) > 0)
		{
			$login_admin2 = mysqli_fetch_array($login_admin);
			$nama_admin = $login_admin2['nama'];
			$nama = $login_admin2['nama'];
			$_SESSION['id_admin'] = $nama_admin;
			$_SESSION['nama'] = $nama;
			header("Location: web/admin");			
		}
	else {
			echo "<script>alert('Username atau Password yang dimasukkan salah')</script>";
		}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>SISTEM PENAMBAHAN TRAYEK</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Corporation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	
	<!-- FlexSlider css -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!-- //FlexSlider css -->

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<!-- for bootstrap carousel slider -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<!-- //for bootstrap carousel slider -->
	
	<!-- fontawesome icons  -->
	<link href="css/font-awesome.css" rel="stylesheet">
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
		
</head>

<body>
	
<!-- header -->
<div class="header">
	<div class="agileits_top_menu">
		<div class="container">
			<div class="w3l_header_left">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> (0778) 322333</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i>(0778) 322344</li>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>Jl. RE. Martadinata Sekupang, Batam 29433</li>
				</ul>
			</div>
			<div class="w3l_header_right">
				<div class="w3ls-social-icons text-left">
					<a class="login" href="#" data-toggle="modal" data-target="#myModal1">Login</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //header -->

<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<div class="container">
				<div class="carousel-caption text-center">
					<h3><span>SISTEM PENAMBAHAN TRAYEK KAPAL PELABUHAN SEKUPANG</span></h3>
					<p>MEMPERCEPAT DAN MEMPERMUDAH PENAMBAHAN TRAYEK KAPAL BARU</p>
				</div>
			</div>
		</div>
		<div class="item item2">
			<div class="container">
				<div class="carousel-caption text-center">
					<h3><span>SISTEM PENAMBAHAN TRAYEK KAPAL PELABUHAN SEKUPANG</span></h3>
					<p>SISTEM PENAMBAHAN TRAYEK KAPAL PELABUHAN SEKUPANG</p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="fa fa-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="fa fa-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!-- The Modal -->
</div>
<!-- //banner -->

<!-- footer -->
<div class="footer_w3ls">
	<div class="container">
		<div class="footer_bottom1">
			<p>© 2018 Corporation. All rights reserved</p>
		</div>
	</div>
</div>
<!-- //footer -->

<!-- signin Model -->
<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="main-mailposi">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
				<div class="modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Login To Your Account</h3>
					<form action="" name="form" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" placeholder="Username atau Id" name="id" required="" >
						</div>
						<div class="styled-input">
							<input type="password" placeholder="Password" name="password" required="">
						</div>
						<input type="submit" value="Login" name="tombollogin">
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<!-- //Modal1 -->
<!-- //signin Model -->
	
<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				Corporation
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body">
				<img src="images/banner1.jpg" alt=" " class="img-responsive" />
				<p>Ut enim ad minima veniam, quis nostrum 
					exercitationem ullam corporis suscipit laboriosam, 
					nisi ut aliquid ex ea commodi consequatur? Quis autem 
					vel eum iure reprehenderit qui in ea voluptate velit 
					esse quam nihil molestiae consequatur, vel illum qui 
					dolorem eum fugiat quo voluptas nulla pariatur.
					<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
						esse quam nihil molestiae consequatur.</i></p>
			</div>
		</div>
	</div>
</div>
<!-- //bootstrap-modal-pop-up --> 
	
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- owl carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds
				autoPlay: true,
				items: 3,
				itemsDesktop: [991, 2],
				itemsDesktopSmall: [414, 4]

			});
		}); 
	</script>
	<!-- //owl carousel -->
	
	<!-- Responsive slider  -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //Responsive slider  -->

	<!-- Flex slider-script -->
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
	<!-- //Flex slider-script -->
	
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	<!-- smooth scrolling js -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->

</body>
</html>