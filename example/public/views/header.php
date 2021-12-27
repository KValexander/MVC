<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="public/style/style.css">
</head>
<body>
	<header>
		<a href="/">Main</a>
		<?php
			if($auth) echo "<a href='/logout'>Exit</a>";
			else {
				echo '
					<a href="/register">Sign up</a>
					<a href="/login">Sign in</a>
				';
			}
		?>
	</header><br>