<?php
session_start();

include 'gabung-cus.php';

if (isset($_POST['tambah'])){
  if (create_data($_POST) > 0) {
      echo"<script>
      alert('register berhasil');
      document.location.href='login.php';
      </script>";
  }else{
      echo"<script>
      alert('register gagal');
      document.location.href='login.php';
      </script>";
  }
} 


//sekapa tombol di tekan
if(isset($_POST['login'])){
  //abil input username and pass
$username= mysqli_real_escape_string($koneksi,$_POST ['username']);
$password= mysqli_real_escape_string($koneksi,$_POST ['password']); 

//chek
$result = mysqli_query($koneksi, "SELECT * FROM customer WHERE username = '$username'");

//cjika ada user
if (mysqli_num_rows($result)== 1){
  //cek pass
  $hasil = mysqli_fetch_assoc($result);
  if (password_verify($password,$hasil['password'] )){
//set sesion
$_SESSION ['login']= true;
$_SESSION['id']=$hasil['id'];
$_SESSION['nama']=$hasil['nama'];
$_SESSION['username']=$hasil['username'];
$_SESSION['email']=$hasil['email'];
$_SESSION['level']=$hasil['level'];
$_SESSION['hp']=$hasil['hp'];



header("location: Fleetlancer.php");
exit;
  }
}
//jika tidak ada user pass at salah
$error = true;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

    
<main class="form-signin">
  <form action="" method="POST">
    <img class="mb-4" src="assets/css/pp.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">LOGIN</h1>
<?php if(isset($error )):?>
<div class="alert alert-danger text-center">
      <b> Username/Password salah </b>
    </div>
  <?php endif ?>


    

    <div class="form-floating">
      <input type="text" class="form-control" name="username" id="floatingInput" placeholder="name@example.com"
      required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

<div class="mb-1">
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Login</button> 
</div> 
    <button type="button" class="w-100 btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah" >Create Account </button>
    <p class="mt-5 mb-3 text-muted">Copyright &copy; project Rpl <?= date('Y')?> </p>

    
  </form>

</main>
  </body>
  <!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          
          <div class="mb-3">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>    
        </div>

        <div class="mb-3">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" required>    
        </div>

        <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>    
        </div>

        <div class="mb-3">
        <label for="hp">Hp</label>
        <input type="text" name="hp" id="hp" class="form-control" required>    
        </div>

        <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required minlength="6"> 
        </div>

        <div class="mb-3">
        <label for="level">Level</label>
       <select name="level" id="level" class="form-control" required>
<option value="">-- PILIH LEVEL --</option>
<!-- <option value="1">Admin</option> -->
<option value="2">Woker</option>
<option value="3">Customer</option>
       </select> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" name="tambah" class="btn btn-primary">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>
</html>
<?php include 'footer-cus.php'; ?>
