<!doctype html>
<html lang="en">

<head>
	<title>Login Bukutamu Kecamatan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Bukutamu Kecamatan</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<form class="signin-form" action="" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" name="user" required>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Password" name="pass" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3" name="login">Sign In</button>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>



<?php
session_start();
if (isset($_POST['login'])) {
	include "app/koneksi.php";
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$cari = $konek->query("select * from login where username='$user' and password='$pass'");
	$cek = $cari->num_rows;
	if ($cek == 0) {
		echo "<script>alert('maaf data pass/user tidak ditemukan ');</script>";
	} else {

		$_SESSION['user'] = $user;
?>
		<script>
			alert('Login Berhasil');
			document.location.href = 'app/index.php';
		</script>
<?php
	}
}
?>