<?php session_start();


if (!isset($_SESSION["login"])){
echo"<script>  
alert('login dulu');
document.location.href = 'login.php';
</script>";
exit;
}
include 'gabung-coding.php';




if (isset($_POST['tambah'])){
    if (create_data($_POST) > 0) {
        echo"<script>
        alert('data berhasil ditambahkan');
        document.location.href='jokicoding.php';
        </script>";
    }else{
        echo"<script>
        alert('data gagal ditambahkan');
        document.location.href='jokicoding.php';
        </script>";
    }
} 


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


  <h1>tambah</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
  <label for="nama" class="form-label">masukan nama</label>
  <input type="text" class="form-control" id="nama" name="nama" placeholder="nama...">
</div>

<div class="mb-3">
  <label for="nama" class="form-label">masukan no hp</label>
  <input type="text" class="form-control" id="hp" name="hp" placeholder="+62xxxxxxxxxxxx">
</div>

<div class="mb-3">
  <label for="foto" class="form-label">masukan foto</label>
  <input class="form-control" type="file" id="foto" name="foto" accept='image/*' onchange="priviewImg()">

  <img src="" alt=""  class="img-thumbnail img-preview" width="100px">
</div>
<button type="submit" name ="tambah" class="btn btn-primary">tambah</button>

  <a  href="jokicoding.php" class ="btn btn-danger">batal</a>

</form>
</div>

<script>
  function preveiewImg() {
    const foto =document.querySelector('#foto');
    const imgpreview = document.querySelector('.img-preview');
    const filefoto = new FileReader();
    fileFoto.readAsDataURL(foto.File[0])
    fileFoto.onload = function (e) {
      imgprevivew.src = e.targer.result;
    }
  }
  </script>
<?php include 'footer-coding.php'; ?>

   
  

   