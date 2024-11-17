<?php session_start();


if (!isset($_SESSION["login"])){
echo"<script>  
alert('login dulu');
document.location.href = 'login.php';
</script>";
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fleetlancer - Pusat Jasa</title>
	<link rel="stylesheet" type="text/css" href="style-jasa.css">
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
				<li><a href="#">Pusat Jasa</a></li>
				<?php if($_SESSION['level'] == 1) : ?>
				<!-- <li class="garis">|</li> -->
				<!-- <li><a href="informasi.php">informasi</a></li> -->
				<?php endif?>
				<li class="garis">|</li>
				<li><a href="pengaturan.php">Akun</a></li>
			</ul>
	</div>

		<div class="main">
			<h2 class="judul">PUSAT JASA</h2>

		<!--
			<div class="kotakk">
			<p class="kotak"><a href="../topup/topup.html">(gambar)</a></p>
			<p class="kotak"><a href="../jokigame/jokigame.html">(gambar)</a></p>
			<p class="kotak"><a href="../jokicoding/jokicoding.html">(gambar)</a></p>
			</div>
		-->
			<br><br>

			<div class="logo">
				<a href="https://www.seagm.com/"><img src="logo-jasa/coin.png" width="25%"></a>
				<a href="jokigame.php"><img src="logo-jasa/joystick.png" width="25%"></a>
				<a href="jokicoding.php"><img src="logo-jasa/coding.png" width="25%"></a>
			</div>

			<div class="jasa">
				<ul>
					<li><a href="https://www.seagm.com/">TOP UP</a></li>
					<li><a href="jokigame.php">JOKI GAME</a></li>
					<li><a href="jokicoding.php">JOKI CODING</a></li>
				</ul>
			</div>

			<br><br><br><br><br><br>

		</div>
</div>
</body>
</html>