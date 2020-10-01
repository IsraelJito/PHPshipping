<?php 
include_once('header.php');

// $trackid = base64_decode( htmlentities(mysqli_real_escape_string($conn,$_GET['tid'])));

$trackid = $_GET['tid'];

$getitem = "SELECT * FROM tracking_details WHERE `tracking_id` = '$trackid'";
$query = mysqli_query($conn,$getitem);
$itemarray = mysqli_fetch_array($query);
$no = mysqli_num_rows($query);

if ($no = 0) {
	header('Location: error.php');
}

?>

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
						<h1>Items Details</h1>

						<h4><strong>SENDERS EMAIL: </strong><?php echo $itemarray['sender_email']; ?></h4>
						<br>

						<h4><strong>PREVIOUS LOCATION: </strong><?php echo $itemarray['depature']; ?></h4>
						<br>

						<h4><strong>CURRENT LOCATION: </strong><?php echo $itemarray['current']; ?></h4>
						<br>

						<h4><strong>DESTINATION: </strong><?php echo $itemarray['arrival']; ?></h4>
						<br>
						<p>Goods are on the way!</p>
						<div class="about_btn">
							<a class="boxed-btn3-line" href="index.php">New Shipping!..</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php  include_once('footer.php'); ?>

