<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.6">
	<title>Formatif 2</title>

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
					<a class="nav-link" href="<?= base_url('Buku_2018310078/tambah')?>"><i class="fas fa-plus-circle"></i> Tambah
						Buku</a>
				</li>
			</ul>
		</div>
	</nav>
	<main role="main" class="container">
		<div class="container">
			<br>
			<br>
			<br>
			<div class="table-responsive">
				<table border="1" class="table">
					<thead class="thead-dark">
						<tr>
							<th class="text-center">Kode Buku</th>
							<th class="text-center">Judul Buku</th>
							<th class="text-center">Pengarang Buku</th>
							<th class="text-center">Tahun Terbit</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<!-- Ini Pengulangan Data -->
						<!-- <?php
            foreach($data as $dt){
              $kode = $dt['kode_buku'];
              $ubah = base_url()."Buku_2018310078/ubah/$kode";
              $hapus = base_url()."Buku_2018310078/hapus/$kode";?>

						<tr>
							<td><?=$kode?></td>
							<td><?=$dt['judul_buku']?></td>
							<td><?=$dt['pengarang']?></td>
							<td><?=$dt['tahun_terbit']?></td>
							<td class="text-center"><a href="<?=$ubah?>"><i class="far fa-edit" title="Edit"></i></a> | <a
									href="<?=$hapus?>"><i class="fas fa-trash" title="Hapus"></i></a></td>
						</tr>
						<?php } ?> -->
					</tbody>
				</table>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>
