<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>E-Registration Student</title>

	<link rel="icon" href="https://img.icons8.com/fluency/50/000000/edit-user-male.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>

<div class="container mt-5">
	<div class="card card-body border-info col-6 mx-auto" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top:10%;">
		<form class="needs-validation" novalidate action="<?= base_url('Login/proses') ?>" method="post">
			<h4 class="text-center">Login Praktikum<br>Pemrograman Web</h4>
			<br>
			<div class="form-group">

				<div class="row mb-3">
					<div class="col-md-12">
						<input type="text" id="username" name="username" class="form-control" placeholder="username" required autofocus>
					</div>
				</div>

				<div class="row my-3">
					<div class="col-md-12">
						<input type="password" id="password" name="password" class="form-control" placeholder="password" required>
					</div>
				</div>

				<hr>

				<div class="row my-3">
					<div class="col-md-12">
						<button class="btn btn-primary btn-user btn-block" type="submit"><i class="fa-fw fas fa-sign-in"></i> Login </button>
					</div>
				</div>

				<?php
				/**
				$p = password_hash('praktikum', PASSWORD_DEFAULT);
				echo $p;
				*/
				?>

				<h6 class="text-center">Tidak Punya akun ?<br><a class="text-primary" href="<?=base_url('register')?>">Buat akun</a></h6>

			</div>
		</form>
	</div>
</div>

<script>
	document.body.style.background = "#007bff";
</script>

</body>
