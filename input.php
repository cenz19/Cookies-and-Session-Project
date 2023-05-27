<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Input</title>
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

    .anggota {
      color: #868e96;
      font-size: 12px;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      font-size: 42px;
      font-weight: bold;
      margin-top: 30px;
      margin-bottom: 10px;
    }

    form {
      margin-top: 20px;
    }

    form p {
      margin-bottom: 10px;
    }

    input[type="text"] {
      padding: 5px;
      border: 1px solid #868e96;
      border-radius: 4px;
      width: 96.5%;
      margin-bottom: 10px;
    }
    input[type="number"] {
      padding: 5px;
      border: 1px solid #868e96;
      border-radius: 4px;
      width: 96.5%;
      margin-bottom: 10px;
    }

    textarea {
      padding: 5px;
      border: 1px solid #868e96;
      border-radius: 4px;
      width: 96.5%;
      margin-bottom: 10px;
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


    .halaman-input{
      max-width: 300px;
      margin: 0 auto 20px auto;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }
  </style>
  <script>
  function showPopup() {
    alert("Jika semua input sudah terisi,\ninput anda tersimpan secara otomatis!");
  }
  </script>
</head>
<body>
  <div class="container">
  <p class="anggota">Created by Vincent Kurniawan Hadinata</p>
    <h2>HALAMAN INPUT 📩</h2>
    <div class="halaman-input">
      <form action="input.php" method="POST">
        <p>NRP Mahasiswa</p>
        <input type="number" name="nrp" placeholder="masukan NRP anda" min="0" max="999999999" step="1" required>
        <p>Nama Mahasiswa</p>
        <input type="text" name="nama" placeholder="masukan nama anda" required>
        <?php
        echo '<p>Alamat Mahasiswa</p>';
        
        echo '<textarea name="alamat" placeholder="Masukkan alamat Anda"';
        if (isset($_COOKIE["wajib-alamat"]) && $_COOKIE["wajib-alamat"] == "Y") {
          echo ' required';
        }
        echo '></textarea>';

        echo '<p>IPK Mahasiswa</p>';
        echo '<input type="number" name="ipk" placeholder="Masukkan IPK Anda" min="0.00" max="4.00" step="0.01" required';
        if (isset($_COOKIE['ipk-default'])) {
          echo " value='" . $_COOKIE['ipk-default'] . "'";
        }
        echo '>';
        ?>
        <input type="submit" name="submit" value="simpan" class="btn-kirim" onclick="showPopup()">
      </form>
      <form action="index.php">
        <input type="submit" name="back" value="Kembali ke index.php" class="btn-kirim">
      </form>
    </div>
  </div>
  <?php
  if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1; // inisialisasi nilai counter pertama kali
  }
  
  if (isset($_POST['submit'])) { // jika tombol submit di klik
    // simpan nilai input ke dalam variabel session dengan nama yang berbeda
    $_SESSION['nrp'.$_SESSION['counter']] = $_POST['nrp'];
    $_SESSION['nama'.$_SESSION['counter']] = $_POST['nama'];
    $_SESSION['alamat'.$_SESSION['counter']] = $_POST['alamat'];
    $_SESSION['ipk'.$_SESSION['counter']] = $_POST['ipk'];
  
    $_SESSION['counter']++; // tambahkan nilai counter setiap kali tombol submit di klik
  } 
  ?>
</body>
</html>