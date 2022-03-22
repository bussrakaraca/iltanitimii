<?php 
session_start();
error_reporting(0);
?>
<?php 
error_reporting(0);
include("baglan.php");
if($_POST['form1'])
{
	$adi=mysqli_real_escape_string($baglanti, $_POST['adi']);
$soyadi= mysqli_real_escape_string($baglanti,$_POST['soyadi']);
$eposta= mysqli_real_escape_string($baglanti,$_POST['eposta']);
$kullaniciadi= mysqli_real_escape_string($baglanti,$_POST['kullanici']);

 
$yenieposta= filter_var($eposta, FILTER_SANITIZE_EMAIL); 
$sifre= mysqli_real_escape_string($baglanti,$_POST['sifre']);
$tekrarsifre= mysqli_real_escape_string($baglanti,$_POST['tekrarsifre']);
$adres= mysqli_real_escape_string($baglanti,$_POST['adres']);
 
$mesaj="";
if ($adi=="" & $soyadi=="")
$mesaj= "Adı ve Soyadı alanlarını doldurunuz.<br>";
 
if ($adres=="")
$mesaj= "Adres Alanını doldurunuz<br>";
if (!stristr($adres, "konya"))
$mesaj= "Konyada oturmanız gerekiyor.<br>";

if ($sifre!=$tekrarsifre)
$mesaj.= "Şifreler aynı olmalı.<br>";
 
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
echo '<script>window.location.href ="login-sayfasi.php";</script>'; 
}
}
?>
<?php include('header.php'); ?>
<?php 
if ($_SESSION['user']=="")
{echo <<<EOF
<form action="" method="POST"> 
<table id="tablouye" width="368" height="537" border="1" align="center" cellpadding="4" cellspacing="2">
<tr>
<td colspan="2" align="center">Uye Ol</td>
 
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
<td>Şifre(Tekrar)</td>
<td><input type="password" name="tekrarsifre"></td>
</tr>
<tr>
<td>Adres</td>
<td><textarea name="adres" rows="4" id="textarea"></textarea></td>
</tr>
<tr>
  <td></td>
  <td><input name="form1" type="submit" id="form1" value="Kayıt Ol"></td>
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
else{
echo '<script>window.location.href ="profilim.php";</script>';
}
?>
<?php include('footer.php'); ?>
