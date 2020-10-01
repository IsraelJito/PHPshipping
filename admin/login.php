<?php 
include_once('connect.php');
// ob_start();

	$nameerr = $passworderr = $err = "";
if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username)) {
		$nameerr = "Enter Username";
	}
	if (empty($password)) {
		$passworderr = "Enter Password";
	}
	if (!empty($username) && !empty($password)) {
		$checkuser = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
		$query = mysqli_query($conn,$checkuser);
		$nouser = mysqli_num_rows($query);

		if ($nouser <= 0) {
			$err = "Invalid Login Details";
		}else {
			header('location: home.php');
		}
	}
}
	// $name1 = "SELECT * FROM admin WHERE id = '1111' ";
	// $namequery1 = mysqli_query($conn,$name1);
	// $namearray1 = mysqli_fetch_array($namequery1);
	// echo $namearray1['username'];
	// echo $namearray1['password'];
 ?>

<h1>Admin Login</h1>
<form action="" method="POST">
	<input type="text" name="username" placeholder="Username.." style="padding: 5px;">
	<?php echo $nameerr; ?>
	<br><br>
	<input type="password" name="password" placeholder="Password.." style="padding: 5px;">
	<?php echo $passworderr; ?>
	<br><br>
	<input type="submit" name="login" value="Login" style="padding: 5px;">
	<?php echo $err; ?>
</form>		