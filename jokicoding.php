
<?php session_start();


if (!isset($_SESSION["login"])){
echo"<script>  
alert('login dulu');
document.location.href = 'login.php';
</script>";
exit;
}

include 'header-coding.php';

$adm=select("SELECT * FROM adm");

?>
<div>
      </thead>
      <tbody>
      <?php  $no = 1; ?>
        <?php foreach ($adm as $ad): ?>
<div>
  
          <tr>
          <td rowspan ="2" style="padding: 10px;" width="5%"><?= $no++; ?></td>
              <td rowspan="2" style="padding : 10px; "><?= $ad ['nama'];?> </td>
              <td class="text-center"> 
                <img src= "assets-coding/img/<?= $ad ['foto'];?>" width="100" height="100"  >
              </td>
          </tr>
        </div>
<tr>
  <td width = "30%" class="text-center"> <?=$ad['hp'];?>
  

     </td>
</tr>
<?php if($_SESSION['level'] == 1) : ?>
<tr> 
  <td colspan= "3" width = "30%" class="text-center"> 
  <a href="ubah-coding.php?id=<?= $ad['id'];?>" class="btn btn-success">ubah</a>
  <a href="hapus-coding.php?id=<?=$ad['id'];?>" class="btn btn-danger">hapus</a>

  </td>
</tr>
<?php endif ?>

<?php if($_SESSION['level'] == 1 or $_SESSION['level'] == 3 )  : ?>
<tr> 
  <td colspan= "3" width = "30%" class="text-center"> 
  <a href="https://wa.me/<?= $ad['hp'];?>?text=halo, saya ingin memesan jasa joki game" target= "_blank " class ="btn btn-success">pesan</a>
  </td>
</tr>
<?php endif ?>

<?php endforeach; ?>
      </tbody>
  </table>
 </div>


 <a  href="pusatjasa.php" class ="btn btn-danger">kembali</a>

<?php include 'footer-coding.php'; ?> 
   
	