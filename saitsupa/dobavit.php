<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
	$query = mysqli_query($connect, "INSERT INTO  supa(name,price,img) VALUES('" . $_POST['name'] . "', '" . $_POST['price'] . "', '" . $_POST['img'] ."')");
	header("Location: http://jija/saitsupa/suppa.php");
?>