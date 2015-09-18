<?php
$mysqli = mysqli_connect("localhost", "root", "", "");
if (mysqli_connect_errno($mysqli)) {
	echo "Failed", mysqli_connect_errno();
}
?>