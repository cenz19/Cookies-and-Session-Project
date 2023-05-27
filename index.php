<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* style.css */

    /* membuat background dan warna teks */
    body {
      background-color: #dee2e6;
      color: #212529;
      font-family: Arial, sans-serif;
    }

    /* styling untuk container */
    .container {
      max-width: 800px;
      margin: 180px auto 0 auto;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }

    /* styling untuk judul */
    h2 {
      font-size: 42px;
      text-align: center;
      margin-bottom: 20px;
    }

    /* styling untuk link */
    .links {
      color: #495057;
      text-decoration: none;
      text-align: center;
      font-size: 20px;
      display: block;
      margin-bottom: 10px;
    }

    .links:hover {
      color: #4dabf7;
      font-size: 21px;
    }

    .links:active {
      color: #228be6;
      font-size: 21px;
    }

    .anggota {
      color: #868e96;
      font-size: 12px;
      margin: 0;
      padding: 0;
    }
  </style>
  <script>
    function showPopup() {
      alert("Cookies belum terbuat/kadaluarsa\nanda dilemparkan ke halaman setting.php");
    }

    function showPopup1() {
      alert("Input belum terbuat\nanda dilemparkan ke halaman index.php");
    }
  </script>
  <title>Halaman Awal</title>
</head>
<body>
  <div class="container">
    <p class="anggota">Created by Vincent Kurniawan Hadinata</p>
    <h2>HALAMAN INDEX 📇</h2>
    <a href="setting.php" class="links">Pergi ke Halaman Setting PHP</a> <br>
    
    <?php
    if(isset($_COOKIE["wajib-alamat"]) && isset($_COOKIE["ipk-default"])){
      echo '<a href="input.php" class="links">Pergi ke Halaman Input PHP</a><br>';
    }
    else{
      echo '<a href="setting.php" class="links" onclick="showPopup()">Pergi ke Halaman Input PHP </a><br>';
    }

    if(isset($_SESSION["counter"])){
      echo '<a href="display.php" class="links">Pergi ke Halaman Display PHP</a>';
    }
    else{
      echo '<a href="index.php" class="links" onclick="showPopup1()">Pergi ke Halaman Display PHP</a>';
    }
    ?>
  </div>
</body>
</html>