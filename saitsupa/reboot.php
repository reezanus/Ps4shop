<form method='POST' action="action.php">
	<meta charset="UTF-8">
		<?php echo '<input type="" name="name" value="'. $_POST['name'] . '">';?>
		<?php echo '<input type="" name="price" value="'. $_POST['price'] . '">';?>
		<?php echo '<input type="" name="img" value="'. $_POST['img'] . '">';?>
		<?php echo '<input type="hidden" name="id" value="'. $_POST['id'] . '">';?>
	<button>СДелать</button>
</form>