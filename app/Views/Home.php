<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>My Website</title>
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

<!-- Jumbotron -->
<div class="jumbotron">
	<div class="container">
		<h1 class="display-4">Welcome to My Website</h1>
		<p class="lead">Hallo, di website ini tersedia hal-hal mengenai saya</p>
		<hr class="my-4">
	</div>
</div>

</body>
</html>