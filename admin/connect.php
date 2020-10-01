<?php

$conn = mysqli_connect('localhost', 'root', '', 'shipping');

if (mysqli_errno($conn)) {
	die("CONNECTION FAILLED**");
}else{
	echo "CONNECTION GOOD!.";
}

?> 