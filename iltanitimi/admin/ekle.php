<?php 
session_start();
error_reporting(0);
?>
<?php 
include("baglan.php");
if($_POST['form1'])
{
$adi=mysqli_real_escape_string($baglanti, $_POST['adi']);
$soyadi= mysqli_real_escape_string($baglanti,$_POST['soyadi']);
$eposta= mysqli_real_escape_string($baglanti,$_POST['eposta']);
$kullaniciadi= mysqli_real_escape_string($baglanti,$_POST['kullanici']);

 
$yenieposta= filter_var($eposta, FILTER_SANITIZE_EMAIL); 
$sifre= mysqli_real_escape_string($baglanti,$_POST['sifre']);
$adres= mysqli_real_escape_string($baglanti,$_POST['adres']);
 
$mesaj="";
if ($adi=="" & $soyadi=="")
$mesaj= "Adı ve Soyadı alanlarını doldurunuz.<br>";
if ($adres=="")
$mesaj= "Adres Alanını doldurunuz<br>";
if (!stristr($adres, "konya"))
$mesaj= "Konyada oturmanız gerekiyor.<br>"; 
if (strlen($sifre)<6)
$mesaj.="Şifre en az 6 karakter olmalı<br>";
 
//if ($mesaj!=""){
//hata yazdırıyoruz
//echo $mesaj;
//}
else{
//Buraya kaydetme kodlarımız gelecek;

$sql="INSERT INTO uyekaydi(kullanici_adi , sifre, email, ad, soyad, adres )
VALUES ('$kullaniciadi', '$sifre', '$yenieposta','$adi','$soyadi', '$adres')";
if (!mysqli_query($baglanti,$sql)) {
die('Hata: ' . mysqli_error($baglanti));
}
echo '<script>window.location.href ="uyelistele.php";</script>'; 
}
}
?>
<?php include('header.php'); ?>
<?php
$kullanici=$_SESSION['user'];
if ($_SESSION['user']==""){
echo '<script>window.location.href ="/iltanitimi/admin/index.php";</script>';
}
else if($_SESSION['user']=="buszey" &$_SESSION['pass']=="admin1234")
{
	echo <<<EOF
<form action="" method="POST"> 
<table id="tablouye" width="368" height="537" border="1" align="center" cellpadding="4" cellspacing="2">
<tr>
<td colspan="2" align="center">Uye Ekle</td>
 
</tr>
<tr>
<td width="106">Adı</td>
<td width="176"><input type="text" name="adi"></td>
</tr>
<tr>
<td>Soyadı</td>
<td><input type="text" name="soyadi"></td>
</tr>
<tr>
<td>E-posta</td>
<td><input type="text" name="eposta"></td>
</tr>
<tr>
<td>Kullanıcı Adı</td>
<td><input type="text" name="kullanici"></td>
</tr>
<tr>
<td>Şifre:</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>
<td>Adres</td>
<td><textarea name="adres" rows="4" id="textarea"></textarea></td>
</tr>
<tr>
  <td></td>
  <td><input name="form1" type="submit" id="form1" value="Ekle"></td>
</tr>
</table>
</form>
<br>
EOF;
if ($mesaj!=""){
echo 'Lütfen alanları doldurunuz. <br>';
echo $mesaj;
}
}
else
{
echo '<script>window.location.href ="/iltanitimi/profilim.php";</script>';
}
?>
<?php include("footer2.php"); ?>