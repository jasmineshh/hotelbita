<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>Auth
</head>
<body>

	<form method="POST" action="<?= base_url('/Auth/cekusers') ?>">
		<input type="text" name="username" placeholder="Masukan Username">
		<input type="password" name="password" placeholder="Masukan Kata Sandi">
		<button type="submit">Login</button>
	</form>

</body>
</html>