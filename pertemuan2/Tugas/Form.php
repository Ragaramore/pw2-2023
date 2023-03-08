<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title class='judul'>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/Form.css">

</head>
<body>
	<div>
		<h1>Form Pendaftaran</h1>
		<form method="POST" action="Hasil.php">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap :</label>
				<input name="nama" type="text" class="form-control" id="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email : </label>
				<input name="email" type="email" class="form-control" id="email"> 
			</div>
			<div class="form-group">
				<label for="alamat">Alamat : </label>
				<textarea name="alamat" class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon : </label>
				<input name="telepon" type="tel" class="form-control" id="telepon">
			</div>
			<button name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>