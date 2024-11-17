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
	<title>Fleetlancer - Beranda</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">
		<div class="header">
			<img src="foto/logo.png" width="7%">
			<div class="nogo">
			<h1 class="judul">fleet</h1>
			<h1 class="judull">lancer</h1>
			</div>
			<ul>
				<li><a href="#">Beranda</a></li>
				<li>|</li>
				<li><a href="pusatjasa.php">Pusat Jasa</a></li>
				<li>|</li>
				<?php if($_SESSION['level'] == 1) : ?>
				<!-- <li><a href="informasi.php">informasi</a></li> -->
				<?php endif ?>
				<!-- <li>|</li> -->
				
				<li><a href="pengaturan.php">Akun</a></li>
			</ul>
		</div>



	<div class="content">
			<h2 class="fl"></h2>

		<div class="foto1">
			<img src="foto/faru1.png" width="25%">
			<br><br><br>
			<p class="isi1">Fleetlancer adalah website dimana kamu dapat menyewa suatu jasa atau menyewakan suatu jasa. Website kami bertujuan untuk menjadikan segala bidang atau minat seseorang menjadi suatu pekerjaan yang dapat menghasilkan uang. Kami menerima dengan bebas segala pekerjaan jasa yang ditawarkan, selama pekerjaan tersebut masih masuk akal dan juga legal, juga kami menerima pekerja mulai dari yang masih pemula dalam hal ini, hingga yang sudah profesional.<br></p>
		</div>

		<br><br>
			<div class="genge">
			<h2 class="tutor">TUTORIAL PEMESANAN</h2>
			</div>
		<div class="foto2">
			<img src="foto/faru2.png" width="25%">
			<p class="isi2">Pada website kami terdapat 2 golongan, yaitu pekerja (worker) dan pelanggan (customer).	Berikut adalah hal yang harus dilakukan jika ingin menjadi worker:
				<br>
	1. Login; untuk menjadi worker, kamu diwajibkan untuk login akun fleetlancer terlebih dahulu, karena dengan login akun kamu dapat mengakses pengaturan akun dan dapat memodifikasi akun kamu.
	<br>
	2. Menghubungi Admin; setelah login, kamu harus menghubungi admin melalui aplikasi WhatsApp, berikut nomornya 089999999999.
	<br>
	3. Syarat-syarat; setelah menghubungi admin, admin akan menanyakan berbagai pertanyaan yang berhubungan dengan pekerjaan, dan menyertakan beberapa syarat yang harus dilakukan.
	<br>
	4. Konfirmasi akun; setelah dikonfirmasi oleh admin, mohon menunggu beberapa saat dan akun akan dimodif admin sehingga menjadi akun worker (akun worker dapat mengedit brosur yang ditampilkan, mengedit status, dan lainnya).
	<br>
	5. Selesai; Selamat akun telah selesai dibuat, dan sekarang tinggal menunggu orderan yang datang. Orderan akan masuk ke nomor WA kamu.
	Perlu diingat, kamu harus rajin mengecek dan mengubah status pada akun kamu, seperti status online, offline, dan busy, karena hal tersebut akan dilihat pelanggan dan pelanggan hanya dapat menghubungi worker yang online. Juga jangan lupa mengambil testimoni setelah selesai transaksi.
	<br>
	<br>
	Hal yang harus dilakukan untuk melakukan order(menjadi customer):
	<br>
1. Untuk menjadi customer kamu tidak diwajibkan untuk login. Tepi dengan login kami dapat mengecek transaksi yang pernah dilakukan, dan juga dapat memodifikasi akun.
<br>
2. Kamu dapat langsung menuju "Pusat Jasa" dan memilih kategori yang diinginkan, kamu dapat mengecek brosur atau hal yang ditawarkan pekerja, setelah tau hal yang dibutuhkan, kamu dapat langsung menghubungi pekerja yang online pada logo WhatsApp di paling kanan.
<br>
3. Setelah menghubungi pekerja, kamu bisa langsung melakukan order, untuk pembayaran akan dikirimkan ke admin, sehingga dapat terjamin jika ada masalah yang terjadi pada transaksi.
<br>
4. Setelah melakukan pembayaran, kirimkan bukti pembayaran pada worker, dan berikan hal yang dibutuhkan, lalu worker akan segera mengerjakan orderan sesuai waktu yang ditentukan.
<br>
5. Jika orderan selesai maka uang akan diserahkan kepada worker, tetapi jika ada masalah pada orderan, maka uang akan kembali ke pelanggan.
<br><br>
Selamat berbelanja (❁´◡`❁) <br></p>
		</div>

	</div>



	<br><br><br><br><br><br><br><br>

	<div class="footer">
		<p class="tim">TIM PEMBUAT</p>
		<ul>
			  <li>MARIA</li>
			  <li>CHRISTY </li>
			  <li>LORAINE</li>
			  <li>JESIKA</li>
			  <li>JEFRI</li>
		</ul>
		
	</div>


	</div>

</body>
</html>
