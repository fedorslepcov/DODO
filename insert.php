<?php 
	$con = mysqli_connect("MySQL-8.2", "root", "", "dodo");
	$query = mysqli_query($con, "INSERT INTO korzina (name, img, price) VALUES ('{$_GET["name"]}', '{$_GET["img"]}', '{$_GET["price"]}')");
	header("Location: index.php")
?>