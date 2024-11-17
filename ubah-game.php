<?php session_start();


if (!isset($_SESSION["login"])){
echo"<script>  
alert('login dulu');
document.location.href = 'login.php';
</script>";
exit;
}
  
include 'gabung-game.php';




if (isset($_POST['ubah'])){
    if (update_data($_POST) > 0) {
        echo"<script>
        alert('data berhasil diubah');
        document.location.href='jokigame.php';
        </script>";
    }else{
        echo"<script>
        alert('data gagal diubah');
        document.location.href='jokigame.php';
        </script>";
    }
}

//
$id = (int) $_GET ['id'];

$cl = select("SELECT * FROM client WHERE id = $id")[0];


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body style="background-color: white;">


  <h1>Ubah</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?= $cl ['id'];?>">
        <input type="hidden" name="fotolama" value="<?= $cl['foto']; ?>"> 
    <div class="mb-3" >
  <label for="nama" class="form-label">masukan nama</label>
  <input type="text" class="form-control" id="nama" name="nama" placeholder="nama..." required value="<?= $cl ['nama']; ?>">
</div>

<div class="mb-3">
  <label for="nama" class="form-label">masukan no hp</label>
  <input type="text" class="form-control" id="hp" name="hp" placeholder="+62xxxxxxxxxxxx" required value="<?= $cl ['hp']; ?>">
</div>

<div class="mb-3">
  <label for="foto" class="form-label">masukan foto</label>
  <input class="form-control" type="file" id="foto" name="foto" accept='image/*'>
  <p>
<small>Gambar sebelumnya</small>
<img src="assets-game/img <?=$cl['foto']?>" alt="">
  </p>
</div>
<button type="submit" name ="ubah" class="btn btn-primary">Ubah</button>

  <a  href="jokigame.php" class ="btn btn-danger">batal</a>

</form>
</body>
</html>
<?php include 'footer-game.php'; ?>

   
  

   