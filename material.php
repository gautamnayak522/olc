<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MATERIAL-ONLINE LEARNING CENTER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +91 7623075610,9974806891</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div id="fh5co-logo"><a href="index.php">ONLINE LEARNING CENTER<span></span></a></div>
					<div class="col-xs-11 text-right menu-1">
						<ul>
							<li><a href="index.php">Home</a></li>
							<!--<li><a href="courses.php">Courses</a></li>-->
							<li class="active"><a href="material.php">Material</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li class="btn-cta"><a href="login.php"><span>Login</span></a></li>
							<li class="btn-cta"><a href="signup.php"><span>Signup</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Material</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-pricing">
		<div class="container">
			<div class="row">
				<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">SSC 10th</h2>
							<!--delete material form-->
<form action="material.php" method="post" id="form1">
 <div class="row form-group">
	 <div>
			<label for="select" class=" form-control-label">Select Subject</label>
		</div>

				<script type="text/javascript">
				//<![CDATA[
				var theForm = document.forms['form1'];
				if (!theForm) {
					theForm = document.form1;
				}
				function __doPostBack() {
				if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
					theForm.submit();
				}
				}
				//]]>
				</script>
<div>
<!-- Subject 
<div class="col-12 col-md-9">-->
<?php
include("connection.php");

$data = mysqli_query($c,"select * from subject");
print"<select name=\"subject\" onchange=\"javascript:__doPostBack();\" id=\"sub\" class=\"form-control\">";
echo "<option value='0'>Select subject</option>";

while ($row = mysqli_fetch_assoc($data))
{
	$sname = $row['sname'];
	$str="<option value='$sname'";
	if(isset($_REQUEST['subject']))
	if($_REQUEST['subject']==$sname)
	$str .= "selected='selected'";
	echo $str;
	echo ">$sname";
}
echo "</select>";
?>
</div>
<!-- Material -->

<div>
 <label for="mn" class=" form-control-label">Select Material</label>
</div>
<div>
<?php
include("connection.php"); 

if(isset($_REQUEST['subject']))
{
	$data = mysqli_query($c,"select ssc_material_name from ssc10th where ssc_subject='".$_REQUEST['subject']."'");
	print"<select Name=\"material\" id=\"s_material\" class=\"form-control\" onchange=\"javascript:__doPostBack();\" selectedValue=". $_REQUEST['subject'] .">";
	while ($row = mysqli_fetch_assoc($data))
	{
		$mname = $row['ssc_material_name'];
		$str="<option value='$mname'";
		if(isset($_REQUEST['material']))
		if($_REQUEST['material']==$mname)
		$str .= "selected='selected'";
		echo $str;
		echo "$sname";
		$did=$row['ssc_material_name'];
		echo "<option value='$did'>$did";
	}
	echo "</select>";
}
else
{
	echo "<select Name=Material id=s_material class=\"form-control\">";
	echo "<option value='0'>Select Material";
	echo "</select>";
}
?>
</div>
</div>
<div>
	<button id="payment-button" type="submit" name="download_ssc10th" class="btn btn-lg btn-info btn-block">
	<span id="payment-button-amount">Get Download Link</span>
	<span id="payment-button-sending" style="display:none;">Sending…</span>
</button>
</div>

</form>


<!--delete material-->
<?php	
if(isset($_POST["download_ssc10th"]))
{
if(isset($_POST["material"]))
{
	echo "You must have to login first to Download.. <a href='login.php'> login </a>";
//$b= $_POST["material"];
//echo "<a  class='btn btn-select-plan btn-sm' href='../olcadminfinal/ssc10th_upload/$b' download>".$_POST['material']."</a>";
//echo "<a href='upload/$b' download>".$_POST['material']."</a>";
}
}
?>
	<!--end delete material-->
	
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Science 12th</h2>
							<div>
												<?php include("download_science12th_beforelogin.php");?>
                                               </div>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<h2 class="pricing-plan pricing-plan-offer">Diploma Engineering</h2>
							<div>
												<?php include("download_diploma_beforelogin.php");?>
                                               </div>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Degree Engineering</h2>
							<div>
												<?php include("download_be_beforelogin.php");?>
                                               </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>About Learning</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learning</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learn &amp; Grow</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Engage us</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Legal</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
				<!--	<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>-->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

