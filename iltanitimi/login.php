<html>
<head>
<meta charset="utf-8">
</head>
<body>
 
<?php

error_reporting(0);
session_start();
 include("baglan.php");

 
$kullaniciadi= mysqli_real_escape_string($baglanti,$_POST['kullanici']);
$sifre= mysqli_real_escape_string($baglanti,$_POST['sifre']);
 

$sql="select * from uyekaydi WHERE kullanici_adi='".$kullaniciadi."' AND sifre='".$sifre."'";

$sonuc= mysqli_query($baglanti,$sql);
if (mysqli_num_rows($sonuc)>0)
{ 
$satir= mysqli_fetch_array($sonuc);
echo "<center>Sayın ".$satir['ad']." ".$satir['soyad']." Hoş Geldiniz</center>";
$_SESSION['user']=$kullaniciadi;
$_SESSION['ID']=$satir['ID'];
echo '<script>window.location.href ="profilim.php";</script>';
 
} else {
echo '<script>window.location.href ="login-sayfasi.php";</script>';
}
 
?>
</body>
</html>