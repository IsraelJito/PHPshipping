<?php 
include_once('header.php');

$trackid = $_GET['tid'];

$getitemdetails = "SELECT * FROM tracking deetails WHERE tracking_id = '$trackid'";
$query = mysqli_query($conn, $getitemdetails);
$itemarray = mysqli_fetch_array($query);
?>

<h1>Items Details</h1>

<?php  include_once('footer.php'); ?>