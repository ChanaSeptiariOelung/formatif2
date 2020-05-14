<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.6">
	<title><?= $status?> Buku Perpustakaan</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
	</script>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="<?= base_url()?>">CRUD Perpustakaan</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link activa" href="<?= base_url()?>"><i class="fas fa-home"></i> Home <span
							class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('crud_2018310078/tambah')?>"><i
							class="fas fa-plus-circle"></i> Tambah Buku</a>
				</li>
			</ul>
		</div>
	</nav>
	<main role="main" class="container">
		<div class="container">
			<br>
			<br>
			<br>
			<div class="row justify-content-md-center">
				<div class="col-md-auto">
					<?php 
					if($status == "Tambah"){?>
					<h1 class="text-center"><?= $status ?> Buku</h1>
					<form action="<?= base_url('Crud_2018310078/proses_tambah'); ?>" method="post">
						<table>
							<tr>
								<td>Kode Buku</td>
								<td><input type="text" name="kode"></td>
							</tr>
							<tr>
								<td>Judul Buku</td>
								<td><input type="text" name="judul"></td>
							</tr>
							<tr>
								<td>Penulis Buku</td>
								<td><input type="text" name="penulis"></td>
							</tr>
							<tr>
								<td>Penerbit Buku</td>
								<td><input type="text" name="penerbit"></td>
							</tr>
							<tr>
								<td>Tahun Terbit Buku</td>
								<td><input type="number" name="tahun" value="2000"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<input type="submit" value="Submit">
									<input type="reset" value="Batal">
								</td>
							</tr>
						</table>
					</form>
					<?php } else { ?>
					<h1 class="text-center"><?= $status ?> Buku</h1>
					<form action="<?= base_url('Crud_2018310078/proses_ubah'); ?>" method="post">
						<table>
							<tr>
								<td>Kode Buku</td>
								<td>
									<input type="text" disabled value="<?= $hasil[0]['kode_buku'] ?>">
									<input type="hidden" name="kode" value="<?= $hasil[0]['kode_buku'] ?>">
								</td>
							</tr>
							<tr>
								<td>Judul Buku</td>
								<td><input type="text" name="judul" value="<?= $hasil[0]['judul_buku'] ?>"></td>
							</tr>
							<tr>
								<td>Penulis Buku</td>
								<td><input type="text" name="penulis" value="<?= $hasil[0]['penulis'] ?>"></td>
							</tr>
							<tr>
								<td>Penerbit Buku</td>
								<td><input type="text" name="penerbit" value="<?= $hasil[0]['penerbit'] ?>"></td>
							</tr>
							<tr>
								<td>Tahun Terbit Buku</td>
								<td><input type="number" name="tahun" value="<?= $hasil[0]['tahun_terbit'] ?>"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<input type="submit" value="Submit">
									<input type="reset" value="Batal">
								</td>
							</tr>
						</table>
					</form>
					<?php } ?>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
				integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
				crossorigin="anonymous">
			</script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
				integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
				crossorigin="anonymous">
			</script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
				integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
				crossorigin="anonymous">
			</script>
</body>

</html>
