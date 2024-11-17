<?php  

// menampilkan //

function select($query)
{
  global $koneksi;
$result = mysqli_query($koneksi, $query);
$rows = [];
while ($row = mysqli_fetch_assoc ($result)) {
  $rows[] = $row;
}
return $rows;
}
// menambahkan  //

function create_data($post)
{
    global $koneksi;
    $nama = $post['nama'];
    $username=$post['nama'];
    $email = $post['email'];
    $password = $post ['password'];
    $level =$post['level'];
    $foto = upload_file();
    $hp  = $post ['hp'];

    $query = "INSERT INTO customer VALUES(null,'$nama','$username','$email','$password','$level','$hp','$foto')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function upload_file()
{
  $namaFile   =$_FILES['foto']['name'];
  $ukuranFile =$_FILES['foto']['size'];
  $error      =$_FILES['foto']['error'];
  $tmpName    =$_FILES['foto']['tmp_name'];

  //cek file upload
  $extensifileValid = ['jpg','jpeg','png'];
  $extensifile      =explode('.',$namaFile);
  $extensifile     =strtolower(end($extensifile));

  //cek format file
  if (!in_array ($extensifile, $extensifileValid)){
    //pesan gagal
    echo "<script>
    alert ('Format file tidak Valid');
    document.location.href = 'tambah.php';
     </script>";
     die();
  }
  //xek ukuran file
  if ($ukuranFile > 2048000){
    echo "<script>
    alert ('ukran file max 2 MB');
    document.location.href = 'tambah.php';
     </script>";
     die();
  }
  //generate nama file baru
  $namaFileBaru =uniqid();
  $namaFileBaru  .='.';
  $namaFileBaru .=$extensifile;

  //pindahkan ke local folder
  move_uploaded_file($tmpName,'assets/img/'.$namaFileBaru);
  return $namaFileBaru;
}

function delete_data($id){
  global $koneksi;
  
  $query = "DELETE FROM customer WHERE id=$id";

  
  mysqli_query($koneksi,$query);

  return mysqli_affected_rows($koneksi);
}