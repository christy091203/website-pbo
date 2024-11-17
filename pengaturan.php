<?php session_start();


if (!isset($_SESSION["login"])){
echo"<script>  
alert('login dulu');
document.location.href = 'login.php';
</script>";
exit;
}

?>



<!doctype html>
<html lang="en">
  <head>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
	<title>Fleetlancer - Akun</title>
	<link rel="stylesheet" type="text/css" href="style-setting.css">

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
				<?php if($_SESSION['level'] == 1) : ?>
				<!-- <li class="garis">|</li> -->
				<!-- <li><a href="informasi.php">informasi</a></li> -->
				<?php endif ?>
				<li class="garis">|</li>
				<li><a href="#">Akun</a></li>
			</ul>
	</div>

	<div class="main">
			<h2 class="judul">AKUN</h2>
			<div class="akun">

			<div class="idk">
				
				<hr>
			<p>NAMA :<?=$_SESSION ['nama'];?></p>
				<hr>
			<p>NO.HP :<?=$_SESSION ['hp'];?></p>
				<hr>
				<?php if($_SESSION['level'] == 1) : ?>
				<p>LEVEL : ADMIN</p>
				<?php endif ?>
				<?php if($_SESSION['level'] == 2) : ?>
				<p>LEVEL : WOKER</p>
				<?php endif ?>
				<?php if($_SESSION['level'] == 3) : ?>
				<p>LEVEL : CUSTOMER </p>
				<?php endif ?>
			<a href="logout.php" type="button" class="btn btn-primary">LOGOUT </a>
		
</html>
			</div>
		<br><br><br><br><br><br>
	</div>
</div>


</body>


  
</html>