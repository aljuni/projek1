<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran</title>
	<style type="text/css">
		input[type=text], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		select {
			width: 100%;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			background-color: white;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		input[type=text]:focus {
			background-color: #FAFFBD;
		}

		div {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}

	</style>
</head>
<body>
	
	<h3>Formulir Pendaftaran
	<align="center">
	</h3>

	<form action="after_daftar.php" method="post">
		Nama : <input type="text" name="nama" size="35" maxlength="50"> <br>
		Username : <input type="text" name="username" size="35" maxlength="50"> <br>
		Password : <input type="text" name="password" size="35" maxlength="50"> <br>
		Email : <input type="text" name="email" size="35" maxlength="50"><br>
		Nomor Telepon : <input type="text" name="nomor telepon" size="35" maxlength="50"> <br>
		Alamat : <input type="text" name="alamat" size="35" maxlength="50"> <br>
		<input type="submit" value="DAFTAR">
	</form>

</body>
</html>