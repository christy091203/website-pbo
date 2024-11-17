<?php session_start();


if (!isset($_SESSION["login"])){
echo"<script>  
alert('login dulu');
document.location.href = 'login.php';
</script>";
exit;
}


include 'gabung-coding.php';
$id=(int)$_GET['id'];
if(delete_data($id)>0) {
echo"<script>
alert('data berhasil di hapus');
document.location.href ='jokicoding.php'
</script>";
}else{
    echo"<script>
alert('data gagal di hapus');
document.location.href ='jokicoding.php'
</script>";
} 
