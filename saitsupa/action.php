<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
	$query = mysqli_query($connect, "UPDATE supa SET name = '" . $_POST['name'] . "', price = '" . $_POST['price'] . "', img = '" . $_POST['img'] . "' 
	WHERE id= '" . $_POST['id'] . "'");
	header("Location: http://jija/saitsupa/suppa.php");
?>