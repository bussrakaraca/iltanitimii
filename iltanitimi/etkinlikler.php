<?php 
session_start();
error_reporting(0);
?>
<?php include('header.php'); ?>
<?php 
if ($_SESSION['user']=="")
{
echo <<<EOF
<div id="button">
  <input name="gir" type="button" id="gir" value="Giris Yap" onClick="location.href='../iltanitimi/login-sayfasi.php'">
<br>
<br>
</div>
Burayı görebilmek için giriş yapmalısınız.
EOF;
}
else{
include ("baglan.php");
$ID=$_SESSION['ID'];
$sorgu_a="select * from uyekaydi where ID=".$ID;
$sonuc = mysqli_query($baglanti,$sorgu_a);
$satir = mysqli_fetch_array($sonuc,MYSQLI_ASSOC);
if($satir)
{
	$kullanici=$satir['kullanici_adi'];
echo <<<EOF
<div id="button">
  <input name="gir" type="button" id="gir" value= $kullanici onClick="location.href='../iltanitimi/profilim.php'">
  <input name="gir" type="button" id="gir" value= "Çıkış Yap" onClick="location.href='../iltanitimi/logout.php'">
<br>
<br>
</div>
EOF;
}
$sorgu_b= "select * from etkinlikler";
$kayitlar = mysqli_query($baglanti,$sorgu_b);
$sayi = mysqli_num_rows($kayitlar);
if($sayi)
	{
		 while($sonucb = mysqli_fetch_assoc($kayitlar))
			 {
				 $link=$sonucb["link"];
			  echo '<div id="yazilar">';
			  echo "<h3>".$sonucb["baslik"]."</h3>";
			  echo "<br>".$sonucb["icerik"]."";
			  echo "<a href='".$link."'>Bilet Al</a>";
			  echo '</div>';
			 }
			
	}
	else
	{
	 echo "Hata !!!";
	}
}
?>
<?php include("footer.php")?>