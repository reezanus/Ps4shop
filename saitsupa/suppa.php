<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="dobavit.php">
		<div class="row col-12 bg-dark" style="height: 35px;">
			<input name="name" class="ml-4" placeholder="name" style="height: 30px;">
			<input name="price" class="ml-4" placeholder="price" style="height: 30px">
			<input name="img" class="ml-4" placeholder="img" style="height: 30px">
			<button type="submit" class="btn btn-secondary">Готово</button>
		</div>
	</form>
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
	$query = mysqli_query($connect,'SELECT * FROM supa ORDER BY id DESC');
	?>
	<?php for($i=0;$i < $query->num_rows; $i++){ 
		$res = $query->fetch_assoc(); ?>
		<div>
			<?php echo '<img src="' . $res['img'] . '">'?>
			<h3><?php echo $res['name']?></h3>
			<h5><?php echo $res['price']?></h5>
			<form method="POST">
				<button>купить</button>
			</form>
			<form method="POST" action="delete.php">
				<?php echo '<input type="hidden" name="id" value="' . $res['id'] . '">'; ?>
				<button>удалить</button>
			</form>
			<form method="POST" action="reboot.php">
				<?php echo '<input type="hidden" name="id" value="' . $res['id'] . '">'; ?>
				<?php echo '<input type="hidden" name="name" value="' . $res['name'] . '">'; ?>
				<?php echo '<input type="hidden" name="price" value="' . $res['price'] . '">'; ?>
				<?php echo '<input type="hidden" name="img" value="' . $res['img'] . '">'; ?>
				<button>реадактировать</button>
			</form>
		</div>
	<?php } ?>
</body>
</html>