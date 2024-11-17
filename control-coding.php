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
    $hp  = $post['hp'];
   $foto = upload_file();

    $query = "INSERT INTO adm VALUES(null,'$nama','$hp','$foto')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function update_data($post)
{
    global $koneksi;

    $id= $post['id'];
    $nama = $post['nama'];
    $fotolama = $post ['fotolama'];
    $hp  = $post['hp'];

if($_FILES ['foto']['error'] == 4){
  $foto = $fotolama;
} else {
  $foto = upload_file();
}

    $query = "UPDATE adm SET nama ='$nama',hp ='$hp',foto ='$foto' WHERE id= $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

//fingsi upload file
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
    document.location.href = 'tambah-coding.php';
     </script>";
     die();
  }
  //xek ukuran file
  if ($ukuranFile > 2048000){
    echo "<script>
    alert ('ukran file max 2 MB');
    document.location.href = 'tambah-coding.php';
     </script>";
     die();
  }
  //generate nama file baru
  $namaFileBaru =uniqid();
  $namaFileBaru  .='.';
  $namaFileBaru .=$extensifile;

  //pindahkan ke local folder
  move_uploaded_file($tmpName,'assets-coding/img/'.$namaFileBaru);
  return $namaFileBaru;
}

function delete_data($id){
  global $koneksi;
  
  $query = "DELETE FROM adm WHERE id=$id";

  
  mysqli_query($koneksi,$query);

  return mysqli_affected_rows($koneksi);
}
