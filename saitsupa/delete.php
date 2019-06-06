<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
	$query = mysqli_query($connect,"DELETE FROM supa WHERE id='" . $_POST['id'] . "'");
	header("Location: http://jija/saitsupa/suppa.php");
 ?>