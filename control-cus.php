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
    $nama  = strip_tags($post ['nama']);
    $username= strip_tags($post['username']);
    $email = strip_tags($post['email']);
    $password = strip_tags($post ['password']);
    $level = strip_tags($post['level']);
    $hp  = strip_tags($post ['hp']);
    // $foto = upload_file();
    
    $password= password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO customer VALUES(null,'$nama','$username','$email','$password','$level','$hp')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function update_data($post)
{
    global $koneksi;
    $id    =strip_tags($post['id']);
    $nama  = strip_tags($post ['nama']);
    $username= strip_tags($post['username']);
    $email = strip_tags($post['email']);
    $password = strip_tags($post ['password']);
    $level = strip_tags($post['level']);
    $hp  = strip_tags($post ['hp']);
    // $foto = upload_file();
    
    $password= password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE customer SET nama ='$nama',username='$username',email='$email',password='$password',level='$level',hp='$hp' WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}




// function upload_file()
// {
//   $namaFile   =$_FILES['foto']['name'];
//   $ukuranFile =$_FILES['foto']['size'];
//   $error      =$_FILES['foto']['error'];
//   $tmpName    =$_FILES['foto']['tmp_name'];

//   //cek file upload
//   $extensifileValid = ['jpg','jpeg','png','pdf'];
//   $extensifile      =explode('.',$namaFile);
//   $extensifile     =strtolower(end($extensifile));

//   //cek format file
//   if (!in_array ($extensifile, $extensifileValid)){
//     //pesan gagal
//     echo "<script>
//     alert ('Format file tidak Valid');
//     document.location.href = 'customer.php';
//      </script>";
//      die();
//   }
//   //xek ukuran file
//   if ($ukuranFile > 2048000){
//     echo "<script>
//     alert ('ukran file max 2 MB');
//     document.location.href = 'customer.php';
//      </script>";
//      die();
//   }
//   //generate nama file baru
//   $namaFileBaru =uniqid();
//   $namaFileBaru  .='.';
//   $namaFileBaru .=$extensifile;

//   //pindahkan ke local folder
//   move_uploaded_file($tmpName,'assets-cus/img/'.$namaFileBaru);
//   return $namaFileBaru;
// }

function delete_data($id){
  global $koneksi;
  
  $query = "DELETE FROM customer WHERE id=$id";

  
  mysqli_query($koneksi,$query);

  return mysqli_affected_rows($koneksi);
}