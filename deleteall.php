<?php 
	$con = mysqli_connect("MySQL-8.2", "root", "", "dodo");
	$query = mysqli_query($con, "DELETE FROM korzina WHERE id");
	header("Location: index.php");
?>