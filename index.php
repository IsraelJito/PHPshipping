<?php 

include_once('header.php');
// if ($conn == TRUE){
// 	echo "connection good";
// }else{
// 	die('COULD NOT CONECT TO THE DATABASE**');
// }
$errors = ""; 

if (isset($_POST['track'])) {
	$trackid = htmlentities(mysqli_real_escape_string($conn,$_POST['trackid']));
	$errors = tracks($trackid);
}

function tracks($trackid) {
	global $conn, $query, $goodsarray, $no;

	if (empty($trackid)) {
		return "<p style = 'color:#ccc; background-color:red; border-radius:10px; max-width: 100%;'>Please Enter a Tracking ID </p>";
	}

		$getgoods = "SELECT * FROM tracking_details WHERE `tracking_id` = '$trackid'";
		$query = mysqli_query($conn,$getgoods);
		$goodsarray = mysqli_fetch_array($query);
		$no = mysqli_num_rows($query);
	
	if ($no == 0) {
		return "<p style='color:#ccc; background-color:red; border-radius:10px; max-width: 100%;'> Tracking ID does not Exist </p>";
	}

	if ($no >= 1) {
		header('location: details.php?tid='.$trackid.'');
		// echo "<script>window.open('details.php','_SELF')</script>";		
	}

}



?>


<div class="slider_area">
	<div class="single_slider  d-flex align-items-center slider_bg_1">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-8">
					<div class="slider_text text-center justify-content-center">
						<p>For Personal & Business</p>
						<h3>Global Logistic Service
						For Business</h3>

						<?php 
						if (!empty($errors)){
							echo $errors;
						}

						 ?>
						
						<form action="" method="post">
							<input class="form-control" type="search" name="trackid" id="topSearch" placeholder="input tracking id.."><br>
							<button type="submit" class="btn btn-success" name="track"><i class="fa fa-search" aria-hidden="true">Track</i></button>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="transportaion_area">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="single_transport">
					<div class="icon">
						<img src="img/svg_icon/airplane.png" alt="">
					</div>
					<h3>Transportation</h3>
					<p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
					placing drawing.</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="single_transport">
					<div class="icon">
						<img src="img/svg_icon/live.png" alt="">
					</div>
					<h3>Live Monitoring</h3>
					<p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
					placing drawing.</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="single_transport">
					<div class="icon">
						<img src="img/svg_icon/world.png" alt="">
					</div>
					<h3>Worldwide Service</h3>
					<p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
					placing drawing.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="service_area">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="section_title mb-50 text-center">
					<h3>
						Services We Offer
					</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="service_active owl-carousel">
					<div class="single_service">
						<div class="thumb">
							<img src="img/service/1.png" alt="">
						</div>
						<div class="service_info">
							<h3><a href="service_details.html">Ocean Freight</a></h3>
							<p>Esteem spirit temper too say adieus who direct esteem.</p>
						</div>
					</div>
					<div class="single_service">
						<div class="thumb">
							<img src="img/service/2.png" alt="">
						</div>
						<div class="service_info">
							<h3><a href="service_details.html">Land Transport</a></h3>
							<p>Esteem spirit temper too say adieus who direct esteem.</p>
						</div>
					</div>
					<div class="single_service">
						<div class="thumb">
							<img src="img/service/3.png" alt="">
						</div>
						<div class="service_info">
							<h3><a href="service_details.html">Air Freight</a></h3>
							<p>Esteem spirit temper too say adieus who direct esteem.</p>
						</div>
					</div>
					<div class="single_service">
						<div class="thumb">
							<img src="img/service/1.png" alt="">
						</div>
						<div class="service_info">
							<h3><a href="service_details.html">Ocean Freight</a></h3>
							<p>Esteem spirit temper too say adieus who direct esteem.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="contact_action_area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-7 col-md-6">
				<div class="action_heading">
					<h3>100% secure and safe</h3>
					<p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
					placing drawing.</p>
				</div>
			</div>
			<div class="col-xl-5 col-md-6">
				<div class="call_add_action">
					<a href="#" class="boxed-btn3">+10 672 457 356</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="chose_area ">
	<div class="container">
		<div class="features_main_wrap">
			<div class="row  align-items-center">
				<div class="col-xl-5 col-lg-5 col-md-6">
					<div class="about_image">
						<img src="img/about/about.png" alt="">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="features_info">
						<h3>Why Choose Us?</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.
						</p>
						<ul>
							<li> Apartments frequently or motionless. </li>
							<li> Duis aute irure dolor in reprehenderit in voluptate. </li>
							<li> Voluptatem quia voluptas sit aspernatur.</li>
						</ul>
						<div class="about_btn">
							<a class="boxed-btn3-line" href="about-2.html">About Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="counter_area">
	<div class="container">
		<div class="offcan_bg">
			<div class="row">
				<div class="col-xl-3 col-md-3">
					<div class="single_counter text-center">
						<h3> <span class="counter">42</span> <span>+</span> </h3>
						<p>Countries Covered</p>
					</div>
				</div>
				<div class="col-xl-3 col-md-3">
					<div class="single_counter text-center">
						<h3> <span class="counter">97</span> <span>+</span> </h3>
						<p>Business Success</p>
					</div>
				</div>
				<div class="col-xl-3 col-md-3">
					<div class="single_counter text-center">
						<h3> <span class="counter">2342</span></h3>
						<p>Happy Client</p>
					</div>
				</div>
				<div class="col-xl-3 col-md-3">
					<div class="single_counter text-center">
						<h3> <span class="counter">3245</span></h3>
						<p>Business Done</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="testimonial_area">
	<div class="container">
		<div class="row">
			<div class="col-xl-7">
				<div class="testmonial_active owl-carousel">
					<div class="single_carousel">
						<div class="single_testmonial text-center">
							<div class="quote">
								<img src="img/svg_icon/quote.svg" alt="">
							</div>
							<p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
							Pellentesque id dolor tempor sapien feugiat ultrices.</p>
							<div class="testmonial_author">
								<div class="thumb">
									<img src="img/case/testmonial.png" alt="">
								</div>
								<h3>Robert Thomson</h3>
								<span>Business Owner</span>
							</div>
						</div>
					</div>
					<div class="single_carousel">
						<div class="single_testmonial text-center">
							<div class="quote">
								<img src="img/svg_icon/quote.svg" alt="">
							</div>
							<p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
							Pellentesque id dolor tempor sapien feugiat ultrices.</p>
							<div class="testmonial_author">
								<div class="thumb">
									<img src="img/case/testmonial.png" alt="">
								</div>
								<h3>Robert Thomson</h3>
								<span>Business Owner</span>
							</div>
						</div>
					</div>
					<div class="single_carousel">
						<div class="single_testmonial text-center">
							<div class="quote">
								<img src="img/svg_icon/quote.svg" alt="">
							</div>
							<p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
							Pellentesque id dolor tempor sapien feugiat ultrices.</p>
							<div class="testmonial_author">
								<div class="thumb">
									<img src="img/case/testmonial.png" alt="">
								</div>
								<h3>Robert Thomson</h3>
								<span>Business Owner</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="Estimate_area overlay">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-5">
				<div class="Estimate_info">
					<h3>Get free Estimate</h3>
					<p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
					placing.</p>
					<a href="#" class="boxed-btn3">+10 672 457 356</a>
				</div>
			</div>
			<div class="col-xl-8 col-lg-8 col-md-7">
				<div class="form">
					<form action="#">
						<div class="row">
							<div class="col-xl-6">
								<div class="input_field">
									<input type="text" placeholder="Your name">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="input_field">
									<input type="email" placeholder="Email">
								</div>
							</div>
							<div class="col-xl-6">
								<div class="input_field">
									<select class="wide">
										<option data-display="Product type">Product type</option>
										<option value="1">small</option>
										<option value="2">standard</option>
										<option value="3">high</option>
									</select>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="input_field">
									<select class="wide">
										<option data-display="Product size">Product size</option>
										<option value="1">M</option>
										<option value="2">L</option>
										<option value="3">Xl</option>
									</select>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="input_field">
									<select class="wide">
										<option data-display="City of departure">City of departure</option>
										<option value="1">departure</option>
										<option value="2">departure</option>
										<option value="3">departure</option>
									</select>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="input_field">
									<select class="wide">
										<option data-display="Delivery city">City of departure</option>
										<option value="1">Delivery</option>
										<option value="2">Delivery</option>
										<option value="3">Delivery</option>
									</select>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="input_field">
									<textarea placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="input_field">
									<button class="boxed-btn3-line" type="submit">Send Estimate</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="contact_location">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="location_left">
					<div class="logo">
						<a href="index-2.html">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<ul>
						<li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
						<li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
						<li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
						<li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 col-md-3">
				<div class="single_location">
					<h3> <img src="img/icon/address.svg" alt=""> Location</h3>
					<p>600/D, Kings road, Green lane
					NewYork-2563</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-3">
				<div class="single_location">
					<h3> <img src="img/icon/support.svg" alt=""> Location</h3>
					<p>+10 267 3563 4562 <br>
						<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="02717772726d7076426e6d656b71766b616d2c616d6f">[email&#160;protected]</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php  include_once('footer.php');   ?>