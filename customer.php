<?php session_start();


if (!isset($_SESSION["login"])){
echo"<script>  
alert('login dulu');
document.location.href = 'login.php';
</script>";
exit;
}

if ($_SESSION ["level"] != 1) {
	echo"<script>  
	alert('Anda tidak punya hak akses');
	document.location.href = 'Fleetlancer.php';
	</script>";
	exit;
	}

include 'header-cus.php';

$dataakun = select("SELECT * FROM customer");
//

if (isset($_POST['tambah'])){
  if (create_data($_POST) > 0) {
      echo"<script>
      alert('data berhasil ditambahkan');
      document.location.href='customer.php';
      </script>";
  }else{
      echo"<script>
      alert('data gagal ditambahkan');
      document.location.href='customer.php';
      </script>";
  }
} 

if (isset($_POST['Ubah'])){
  if (update_data($_POST) > 0) {
      echo"<script>
      alert('data berhasil diubah');
      document.location.href='customer.php';
      </script>";
  }else{
      echo"<script>
      alert('data gagal diubah');
      document.location.href='customer.php';
      </script>";
  }
} 

?>


    <title>USER</title>
  </head>
  <body style="background-color: white;">

    <h1>INFORMASI USER</h1>
    <hr>


  <div class="container mt-5">



  <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modalTambah" >tambah </button>

    <table class="table table-bordered table-striped ;"  style="width: 80%; background-color: white; margin-left:10%;margin-right:auto;">
      
      <thead >
        
          <tr style="background-color: gray;">
          <th style=" text-center padding: 10px;">No</th>
              <th style=" text-center padding: 10px;">NAMA</th>
              <th style=" text-center padding: 10px;">USERNAME</th>
              <th style=" text-center padding: 10px;">EMAIL</th>
              <th style=" text-center padding: 10px;">PASSWORD</th>
              <th style=" text-center padding: 10px;">LEVEL</th>
              <th style=" text-center padding: 10px;">NO.HP</th>
             
          </tr>
<div>
      </thead>
      <tbody>
      <?php  $no = 1; ?>
        <?php foreach ($dataakun as $akun): ?>
<div>
  
          <tr>
          <td rowspan ="1" style="padding: 10px;" width="5%"><?= $no++; ?></td>
              <td rowspan="1" style="padding : 10px; "><?= $akun ['nama'];?> </td>
              <td rowspan="1" style="padding : 10px; "><?= $akun ['username'];?> </td>
              <td rowspan="1" style="padding : 10px; "><?= $akun ['email'];?> </td>
              <td rowspan="1" style="padding : 10px; "><?= $akun ['password'];?> </td>
              <td rowspan="1" style="padding : 10px; "><?= $akun ['level'];?> </td>
              <td rowspan="1" class="text-center" style="padding :10px;"> <?=$akun['hp'];?> </td>
              <td colspan= "7" class="text-center"> 
 
  </td>
          </tr>


<tr> 
  <td colspan= "7" class="text-center"> 
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $akun['id'];?> ">ubah</button>
  <a href="hapus-cus.php?id=<?=$akun['id'];?>" class="btn btn-danger">hapus</a>


  </td>
</tr>



<?php endforeach;?>
      </tbody>
  </table>
 </div>
 <a  href="informasi.php" class ="btn btn-danger">kembali</a>

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
<option value="1">Admin</option>
<option value="2">Woker</option>
<option value="3">Customer</option>
       </select> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- modal ubah -->
<?php foreach($dataakun as $akun) : ?> 

 <div class="modal fade" id="modalUbah<?= $akun['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalLabel">Ubah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <input type="hidden" name="id" value="<?= $akun['id']; ?>">
          
          <div class="mb-3">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?= $akun['nama']; ?>" required>    

        </div>

        <div class="mb-3">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" value="<?= $akun['username']; ?>" required>    
        </div>

        <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?= $akun['email']; ?>" required>    
        </div>

        <div class="mb-3">
        <label for="hp">Hp</label>
        <input type="text" name="hp" id="hp" class="form-control" value="<?= $akun['hp']; ?>" required>    
        </div>

        <div class="mb-3">
        <label for="password">Password <small> (Masukan password baru/lama)</small></label>
        <input type="password" name="password" id="password" class="form-control" required minlength="6"> 
        </div>

        <div class="mb-3">
        <label for="level">Level</label>
       <select name="level" id="level" class="form-control" required>
<?php $level =$akun['level']; ?>
<option value="1" <?= $level=='1'?'selected' :null ?>>Admin</option>
<option value="2" <?= $level=='2'?'selected' :null ?>>Woker</option>
<option value="3" <?= $level=='3'?'selected' :null ?>>Customer</option>
       </select> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" name="Ubah" class="btn btn-primary">Ubah</button>
      </div>
      </form>
    </div>
  </div>
</div>
 
  <?php endforeach; ?>


    
<?php include 'footer-cus.php'; ?>
   
	