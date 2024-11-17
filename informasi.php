<?php session_start();


if (!isset($_SESSION["login"])){
echo"<script>  
alert('login dulu');
document.location.href = 'login.php';
</script>";
exit;
}

if ($_SESSION ["level"] != 1 ) {
	echo"<script>  
	alert('Anda tidak punya hak akses');
	document.location.href = 'Fleetlancer.php';
	</script>";
	exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fleetlancer - Pusat Jasa</title>
	<link rel="stylesheet" type="text/css" href="style-infor.css">
</head>

<body>
<div class="container">
	<div class="header">
			<img src="foto/logo.png" width="7%">
		
			<h1 class="judul">fleet</h1>
			<h1 class="judull">lancer</h1>
		
			<ul>
				<li><a href="Fleetlancer.php">Beranda</a></li>
				<li class="garis">|</li>
				<li><a href="pusatjasa.php">Pusat Jasa</a></li>
                <li class="garis">|</li>
                <li><a href="#">informasi</a></li>
				<li class="garis">|</li>
				<li><a href="pengaturan.php">Akun</a></li>
			</ul>
	</div>

		<div class="main">
			<h2 class="judul">INFORMASI</h2>

		<!--
			<div class="kotakk">
			<p class="kotak"><a href="../topup/topup.html">(gambar)</a></p>
			<p class="kotak"><a href="../jokigame/jokigame.html">(gambar)</a></p>
			<p class="kotak"><a href="../jokicoding/jokicoding.html">(gambar)</a></p>
			</div>
		-->
			<br><br>

			<div class="">
				<a href="customer.php"><img src="logo-jasa/akun.jpg" width="20%" class="margin-right:20;"></a>
				
			
			</div>

			<div class="jasa">
				<ul>
		
					<li><a href="customer.php">USER</a></li>
				
				</ul>
			</div>

			<br><br><br><br><br><br>

		</div>
</div>
</body>
</html>