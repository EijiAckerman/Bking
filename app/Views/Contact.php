<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Contact</title>
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
    <h1>Contact Us</h1>
	<form>
	<p>No HP    : 085748769301</p>
    <p>Email    : 211111023@mhs.stiki.ac.id</p>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" placeholder="Enter your name">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" placeholder="Enter your email">
		</div>
		<div class="form-group">
			<label for="message">Message</label>
			<textarea class="form-control" id="message" rows="5"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>

	<!-- Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
