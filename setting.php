<?php session_start() ?>
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

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="text"] {
      padding: 5px;
      border: 1px solid #868e96;
      border-radius: 4px;
      width: 50%;
      margin-bottom: 10px;
    }
    input[type="number"] {
      padding: 5px;
      border: 1px solid #868e96;
      border-radius: 4px;
      width: 50%;
      margin-bottom: 10px;
    }
    .halaman-input{
      max-width: 300px;
      margin: 0 auto 20px auto;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }
    .halaman-display{
      max-width: 300px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }
    .btn-kirim{
      border: none;
      width : 340px;
      height : 50px;
      display: block;
      margin: 20px auto 0 auto;
      background-color: #f8f9fa;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }
    .btn-kirim:hover{
      border: none;
      background-color: #4dabf7;
      color: #f8f9fa;
      display: block;
      margin: 20px auto 0 auto;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }
    .btn-kirim:active{
      background-color: #228be6;
      color: #f8f9fa;
    }
  </style>
  <script>
  function showPopup() {
    alert("Jika semua input sudah terisi,\nsettingan anda tersimpan secara otomatis!");
  }
  </script>
</head>
<body>
  <div class="container">
    <?php 
    ?>
    <p class="anggota">Created by Vincent Kurniawan Hadinata</p>
    <h2>HALAMAN SETTING ⚙️</h2>

    <form action="setting-process.php" method="POST">

      <div class="halaman-input">
        <h3>Setting untuk halaman input</h3>

        <?php
          echo '<p>Wajib Mengisi Alamat Mahasiswa ?</p>'; 
          echo '<input type="radio" id="wajib" name="wajib-alamat" value="Y" required '; 
          if(isset($_COOKIE["wajib-alamat"]) && $_COOKIE["wajib-alamat"]=="Y") echo "checked";
          echo ">";
          echo '<label for="wajib">Ya</label><br>';

          echo '<input type="radio" id="tidak-wajib" name="wajib-alamat" value="N" required ';
          if(isset($_COOKIE["wajib-alamat"]) && $_COOKIE["wajib-alamat"]=="N") echo "checked";
          echo ">";
          echo '<label for="tidak-wajib">Tidak</label>';
          
          echo '<p>IPK Mahasiswa</p>';
          echo '<input type="number" name="ipk-default" placeholder="nilai default IPK" value="';
          if(isset($_COOKIE["ipk-default"])) echo $_COOKIE["ipk-default"];
          echo '" min="0.00" max="4.00" step="0.01" required>';
        ?>
      </div>

      <div class="halaman-display">
      <h3>Setting untuk halaman display</h3>

        <?php
        echo '<p>Ukuran Font (px)</p>';
          echo '<input type="number" name="ukuran-font" placeholder="Ukuran Font" value="';
          if(isset($_COOKIE["ukuran-font"])) echo $_COOKIE["ukuran-font"];
          echo '" min="1.0" max="20.0" step="0.1" required>';

        echo '<p>Tampilan Font</p>';
          echo '<select name="tampilan-font" required>';
            echo '<option value="strong" ';
            if(isset($_COOKIE["tampilan-font"]) && $_COOKIE["tampilan-font"]=="strong") echo "selected";
            echo '>Bold</option>';

            echo '<option value="em" ';
            if(isset($_COOKIE["tampilan-font"]) && $_COOKIE["tampilan-font"]=="em") echo "selected";
            echo '>Italic</option>';

            echo '<option value="u" ';
            if(isset($_COOKIE["tampilan-font"]) && $_COOKIE["tampilan-font"]=="u") echo "selected";
            echo '>Underline</option>';

          echo '</select>';

        echo '<p>Ingin Menampilkan Alamat Mahasiswa ?</p>';
          echo '<input type="radio" id="wajib" name="tampil-alamat" value="Y" required ';
          if(isset($_COOKIE["tampil-alamat"]) && $_COOKIE["tampil-alamat"]=="Y") echo "checked";
          echo ">";
          echo '<label for="wajib">Ya</label><br>';

          echo '<input type="radio" id="tidak-wajib" name="tampil-alamat" value="N" required ';
          if(isset($_COOKIE["tampil-alamat"]) && $_COOKIE["tampil-alamat"]=="N") echo "checked";
          echo ">";
          echo '<label for="tidak-wajib">Tidak</label><br>';

        echo '<p>Ingin Menampilkan IPK Mahasiswa ?</p>';
          echo '<input type="radio" id="wajib" name="tampil-ipk" value="Y" required ';
          if(isset($_COOKIE["tampil-ipk"]) && $_COOKIE["tampil-ipk"]=="Y") echo "checked";
          echo '>';
          echo '<label for="wajib">Ya</label><br>';

          echo '<input type="radio" id="tidak-wajib" name="tampil-ipk" value="N" required ';
          if(isset($_COOKIE["tampil-ipk"]) && $_COOKIE["tampil-ipk"]=="N") echo "checked";
          echo '>';
          echo '<label for="tidak-wajib">Tidak</label>';
        ?>
      </div>
      <input type="submit" name="submit" value="simpan" class="btn-kirim" onclick="showPopup()">
    </form>
    <form action="index.php">
      <input type="submit" name="back" value="Kembali ke index.php" class="btn-kirim">
    </form>
  </div>
</body>
</html>