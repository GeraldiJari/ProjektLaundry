<?php 
  session_start(); 
  // Menyisipkan Connection dan Function
  require 'load/config.php';
  require 'load/function.php';
?>

<!-- Login Session, Jika Session Login Tidak True Atau Tidak Didapat, Maka Akan Masuk Ke Proses Login -->
<?php 
  if ( !isset($_SESSION['login']) ) {
    header("Location: login.php");
    exit;
  }
?>

<!-- Setelah Didapatkan Session Login -->

<!-- START: Document -->
<?php require_once 'header.php'; ?>

<?php require 'content.php'; ?>

<?php require_once 'footer.php'; ?>
<!-- END: Document -->