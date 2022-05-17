<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>

	<form method="POST" action="<?= base_url('/Auth/addusers') ?>">
		<input type="text" name="username" placeholder="Masukan Username">
		<input type="text" name="Nama" placeholder="Masukan Nama Lengkap Anda">
		<input type="text" name="Jenis_Kelamin" placeholder="Masukan Jenis Kelamin">
		<input type="date" name="tgllahir" placeholder="Masukan tgl Lahir">
		<input type="text" name="nowa" placeholder="Masukan Kontak Whatapp">
		<input type="password" name="password" placeholder="Masukan Kata Sandi">
		<button type="submit">register</button>
	</form>

</body>
</html>