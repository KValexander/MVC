<?php include "header.php"; ?>

<form action="/register" method="POST">
	<?= $errors["username"] ?>
	<input type="text" name="username" placeholder="Username">
	<?= $errors["login"] ?>
	<input type="text" name="login" placeholder="Login">
	<?= $errors["password"] ?>
	<input type="password" name="password" placeholder="Password">
	<button>Send</button>
</form>
	
<?php include "footer.php"; ?>
