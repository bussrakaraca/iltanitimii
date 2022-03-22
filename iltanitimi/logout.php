<?php 
session_start();
error_reporting(0);
?>
<?php include('header.php'); ?>

<?php 
if ($_SESSION['user']=="")
{
echo "Oturum aktif değil.<br>";
echo "<a href=login-sayfasi.php>Tekrar giriş yapmak istiyor musunuz.</a>";
}
else{
$_SESSION = array();
session_destroy();
echo "Oturum sonlandırıldı.<br>";
echo "<a href=login-sayfasi.php>Tekrar giriş yapmak için tıklayınız.</a>";
}
?>

<?php include('footer.php'); ?>

