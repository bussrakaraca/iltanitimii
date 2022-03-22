<?php 
session_start();
error_reporting(0);
?>
<?php include('header.php'); ?>
<?php 
if ($_SESSION['user']=="")
{
echo '<script>window.location.href ="login-sayfasi.php";</script>';
}
else{
include ("baglan.php");
$ID=$_SESSION['ID'];
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

echo <<<EOF
<form action="" method="POST"> 
<table id="tablouye" width="368" height="514" border="1" align="center" cellpadding="4" cellspacing="2">
<tr>
<td colspan="2" align="center">Profilim</td>
 
</tr>
<tr>
<td width="106">Adı</td>
<td width="176"> $ad </td>
</tr>
<tr>
<td>Soyadı</td>
<td>$soyad </td>
</tr>
<tr>
<td>E-posta</td>
<td> $email </td>
</tr>
<tr>
<td>Kullanıcı Adı</td>
<td> $kullanici</td>
</tr>
<tr>
  <td height="132">Adres</td>
  <td><textarea name="adres" rows="4" id="textarea">$adres</textarea></td>
</tr>
<tr>
  <td></td>
  <td>
  <input name="guncelle" type="button" value="Kaydı Güncelle" onClick="location.href='../iltanitimi/guncelle.php'">
  <input name="cikis" type="button" value= "Çıkış Yap" onClick="location.href='../iltanitimi/logout.php'">
  </td>
</tr>
</table>
</form>
EOF;
}
}
?>
<?php include('footer.php'); ?>