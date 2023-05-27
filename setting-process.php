<?php
  if(isset($_POST["submit"])){
    setcookie("wajib-alamat", $_POST["wajib-alamat"]);
    setcookie("ipk-default", $_POST["ipk-default"]);
    setcookie("ukuran-font", $_POST["ukuran-font"]);
    setcookie("tampilan-font", $_POST["tampilan-font"]);
    setcookie("tampil-alamat", $_POST["tampil-alamat"]);
    setcookie("tampil-ipk", $_POST["tampil-ipk"]);
  }
  header('Location: setting.php');
?>