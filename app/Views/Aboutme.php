<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>About Me</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url('Aboutme') ?>">About</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Home</a>
                </li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Contact') ?>">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('FAQ') ?>">FAQ</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

	<!-- Content -->
	<div class="container my-5">
    <h1>About Me</h1>
	<div class="container my-5">
	<div class="row">
		<div class="col-md-4 mb-4">
			<div class="image">
				
				<div class="image">
				</div>
			</div>
		</div>
	</div>
	</div>
	<h1>Biodata</h1>

        <p>Nama            : Prasetya Aji Yudhistira</p>
        <p>Jenis Kelamin   : Laki-laki</p>
        <p>Agama    : Islam</p>
        <p>Tempat, Tanggal Lahir : Malang, 19 September 2003</p>
        <p>Status   : Mahasiswa</p>
        <p>Alamat   : Jl. Sidodadi No.43, Kebonagung, Pakisaji, Kota Malang</p>
	</div>

	<!-- Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
