<?php 

include 'gabung-coding.php';




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>jokicoding</title>
  </head>
  <body style="background-color: white;">

    <h1>joki coding</h1>
    <hr>


  <div class="container mt-5">
  <?php if($_SESSION['level'] == 1 or $_SESSION['level'] == 2) : ?>
  <a href="tambah-coding.php" class="btn btn-primary " style="margin-left :10%">daftar</a>
  <?php endif ?>
    <table class="table table-bordered table-striped ;"  style="width: 80%; background-color: white; margin-left:10%;margin-right:auto;">
      
      <thead >
        
          <tr style="background-color: gray;">
          <th style=" text-center padding: 10px;">No</th>
              <th style=" text-center padding: 10px;">NAMA</th>
              <th style=" text-center padding: 10px;">TESTIMONI</th> 
          </tr>
