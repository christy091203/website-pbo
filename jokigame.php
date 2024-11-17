<?php session_start();


if (!isset($_SESSION["login"])){
echo"<script>  
alert('login dulu');
document.location.href = 'login.php';
</script>";
exit;
}




include 'header-game.php';

$client=select("SELECT * FROM client");
?>
<div>
      </thead>
      <tbody>
      <?php  $no = 1; ?>
        <?php foreach ($client as $cl): ?>
<div>
  
          <tr style="background-color: white;">
          <td rowspan ="2" style="padding: 10px;" width="5%"><?= $no++; ?></td>
              <td rowspan="2" style="padding : 10px; "><?= $cl ['nama'];?> </td>
              <td class="text-center"> 
              <img src= "assets-game/img/<?= $cl ['foto'];?>" width="100" height="100"  >
              </td>
          </tr>
        </div>
<tr style="background-color: white;">
  <td  width = "30%" class="text-center"> <?=$cl['hp'];?> <br>
        

     </td>
</tr>
<?php if($_SESSION['level'] == 1) : ?>
<tr>
  <td colspan= "3" width = "30%" class="text-center"> 
  <a href="ubah-game.php?id=<?= $cl['id'];?>" class="btn btn-success">ubah</a>
  <a href="hapus-game.php?id=<?=$cl['id'];?>" class="btn btn-danger">hapus</a>

  </td>
</tr>
<?php endif ?>

<?php if($_SESSION['level'] == 1 or $_SESSION['level'] == 3 )  : ?>
<tr>
  <td colspan= "3" width = "30%" class="text-center"> 
  <a href="https://wa.me/<?= $cl['hp'];?>?text=halo, saya ingin memesan jasa joki game" target= "_blank " class ="btn btn-success">pesan</a>
  

  </td>
</tr>
<?php endif ?>

<?php endforeach; ?>
      </tbody>
  </table>
 </div>
 <a  href="pusatjasa.php" class ="btn btn-danger">kembali</a>

<?php include 'footer-game.php'; ?>

   
	