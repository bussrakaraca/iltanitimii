<?php 
session_start();
error_reporting(0);
?>
<?php 
include("baglan.php");
if($_POST['form1'])
{
$yadi=mysqli_real_escape_string($baglanti, $_POST['adi']);
$ysoyadi= mysqli_real_escape_string($baglanti,$_POST['soyadi']);
$yeposta= mysqli_real_escape_string($baglanti,$_POST['eposta']);
$ykullaniciadi= mysqli_real_escape_string($baglanti,$_POST['kullanici']);
$ID= $_GET['id'];
 
$yenieposta= filter_var($yeposta, FILTER_SANITIZE_EMAIL); 
$ysifre= mysqli_real_escape_string($baglanti,$_POST['sifre']);
$ytekrarsifre= mysqli_real_escape_string($baglanti,$_POST['tekrarsifre']);
$yadres= mysqli_real_escape_string($baglanti,$_POST['adres']);
 
$mesaj="";
if ($yadi=="" & $ysoyadi=="")
$mesaj= "Adı ve Soyadı alanlarını doldurunuz.<br>";
 
if ($yadres=="")
$mesaj= "Adres Alanını doldurunuz<br>";
if (!stristr($yadres, "konya"))
$mesaj= "Konyada oturmanız gerekiyor.<br>";

if ($ysifre!=$ytekrarsifre)
$mesaj.= "Şifreler aynı olmalı.<br>";
 
if (strlen($ysifre)<6)
$mesaj.="Şifre en az 6 karakter olmalı<br>";
if ($mesaj!=""){
echo 'Lütfen alanları doldurunuz. <br>';
echo $mesaj;
}
else{
//Buraya kaydetme kodlarımız gelecek;

$sql="UPDATE uyekaydi SET kullanici_adi = '$ykullaniciadi',sifre = '$ysifre', email = '$yenieposta',ad = '$yadi', soyad = '$ysoyadi' , adres = '$yadres' WHERE ID = '$ID' ";
$sorgu_a="select * from tablo1 where ID=".$ID;
mysqli_query($baglanti,$sql);


if (mysqli_query($baglanti,$sql))
  {

echo '<script>window.location.href ="guncelle.php";</script>';
  }
 else
{
  	echo ("Düzeltme işlemi yapılamamıştır<br/>");
}
}
}
?>
<?php include('header.php'); ?>
<?php 
if ($_SESSION['user']=="")
{
echo '<script>window.location.href ="admin.php";</script>';
}
else if($_SESSION['user']=="buszey" &$_SESSION['pass']=="admin1234")
{
$ID= $_GET['id'];
$sorgu_a="select * from uyekaydi where ID=".$ID;
$sonuc = mysqli_query($baglanti,$sorgu_a);
$satir = mysqli_fetch_array($sonuc,MYSQLI_ASSOC);
if($satir)
{
	$ad=$satir['ad'];
	$soyad=$satir['soyad'];
	$email=$satir['email'];
	$kullanici=$satir['kullanici_adi'];
	$adres=$satir['adres'];
	$sifre=$satir['sifre'];
	echo <<<EOF
<form action="" method="POST"> 
<table id="tablouye" width="368" height="537" border="1" align="center" cellpadding="4" cellspacing="2">
<tr>
<td colspan="2" align="center">Kaydı Güncelle</td>
</tr>
<tr>
<td width="106">Adı</td>
<td width="176"><input type="text" name="adi" value= $ad></td>
</tr>
<tr>
<td>Soyadı</td>
<td><input type="text" name="soyadi" value= $soyad></td>
</tr>
<tr>
<td>E-posta</td>
<td><input type="text" name="eposta" value=$email></td>
</tr>
<tr>
<td>Kullanıcı Adı</td>
<td><input name="kullanici" type="text" value= $kullanici></td>
</tr>
<tr>
<td>Şifre:</td>
<td><input type="text" name="sifre" value= $sifre></td>
</tr>
<tr>
<td>Şifre(Tekrar)</td>
<td><input type="text" name="tekrarsifre"></td>
</tr>
<tr>
<td>Adres</td>
<td><textarea name="adres" rows="4" id="textarea">$adres</textarea></td>
</tr>
<tr>
  <td></td>
  <td><input name="form1" type="submit" id="form1" value="Güncelle"></td>
</tr>
</table>
</form>
EOF;
if ($mesaj!=""){
echo 'Lütfen alanları doldurunuz. <br>';
echo $mesaj;
}
}
}
else 
{
	echo '<script>window.location.href ="/iltanitimi/profilim.php";</script>';
	}
?>
<?php include('footer.php'); ?>