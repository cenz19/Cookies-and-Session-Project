<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container {
      max-width: 800px;
      margin: 50px auto 0 auto;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }

    body {
      background-color: #dee2e6;
      color: #212529;
      font-family: Arial, sans-serif;
    }
    h2 {
      text-align: center;
      font-size: 42px;
      font-weight: bold;
      margin-top: 30px;
      margin-bottom: 10px;
    }

    .anggota {
      color: #868e96;
      font-size: 12px;
      margin: 0;
      padding: 0;
    }
    .halaman-input{
      max-width: 300px;
      margin: 0 auto 20px auto;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }
    .btn-kirim {
      border: none;
      width: 300px;
      height: 50px;
      display: block;
      margin: 20px auto 0 auto;
      background-color: #f8f9fa;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }
    .btn-kirim:hover {
      border: none;
      background-color: #4dabf7;
      color: #f8f9fa;
      display: block;
      margin: 20px auto 0 auto;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }

    .btn-kirim:active {
      background-color: #228be6;
      color: #f8f9fa;
    }

    .paragraph p{
      margin-bottom: 10px;
      font-size: <?php 
      if(isset($_COOKIE["ukuran-font"])){
        echo $_COOKIE["ukuran-font"]."px;";
      } else{
        echo "12px;"; 
      } 
      ?>

      <?php
      if (isset($_COOKIE["tampilan-font"]) && $_COOKIE["tampilan-font"]=="strong"){
        echo "font-weight: bold;";
      } else if ((isset($_COOKIE["tampilan-font"]) && $_COOKIE["tampilan-font"]=="em")){
        echo "font-style: italic;";
      }else if ((isset($_COOKIE["tampilan-font"]) && $_COOKIE["tampilan-font"]=="u")){
        echo "text-decoration: underline;";
      }
      ?>
    }
  </style>
</head>
<body>
  <div class="container">
      <p class="anggota">Created by Vincent Kurniawan Hadinata</p>
      <h2>HALAMAN DISPLAY 👓</h2>
      <div class="halaman-input">
        <div class="paragraph">
          <?php
            // tampilkan nilai input dari session
            for ($i = 1; $i < $_SESSION['counter']; $i++) {
              echo "<p>$i.</p>";
              echo "<p>NRP : " . $_SESSION['nrp'.$i] . "</p>";
              echo "<p>Nama : " . $_SESSION['nama'.$i] . "</p>";
              if(isset($_COOKIE["tampil-alamat"]) && $_COOKIE["tampil-alamat"]=="Y"){
                echo "<p>Alamat : " . $_SESSION['alamat'.$i] . "</p>";
              }
              if(isset($_COOKIE["tampil-ipk"]) && $_COOKIE["tampil-ipk"]=="Y"){
                echo "<p>IPK : " . $_SESSION['ipk'.$i] . "</p>";
              }
              echo '<br>';
            }
          ?>
        </div>
      </div>
      <form action="index.php">
        <input type="submit" name="back" value="Kembali ke index.php" class="btn-kirim">
      </form>
  </div>
</body>
</html>