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
}
?>
<div id="breadcrumb">
  <a href="index.php">Anasayfa</a>/
  <a href="site-haritasi.php">Site Haritası</a></div>
<h2>SİTE HARİTASI</h2>
<div id="harita">
<ol>
  <a href="index.php">Anasayfa</a>
</ol>
</div>
<div id="harita">
    <ol>
      <a href="#">Konya</a>
<ul>
  1.<a href="konya-tarih.php">Tarihi</a>
</ul>
   <ul>
   2.<a href="cografi-konum.php">Coğrafi Konum</a>
   </ul>
<ul>
 3.<a href="#">Kültür</a>
<li> <a href="yemekler.php">Yemekleri</a></li>
<li><a href="kiyafetleri.php">Kıyafetleri</a></li>
<li><a href="halk-oyunlari.php">Halk Oyunlar</a></li>
<li><a href="gelenekleri.php">Gelenekleri</a></li>
</ul>
<ul>
  4.<a href="turistlik-yerler.php">Turistlik Yerler</a>
</ul>
<ul>
5.<a href="egitim.php">Eğitim</a>
</ul>
<ul>
  6.<a href="ilceler.php">İlçeler</a>
</ul>
  </ol>
  </div>
  <div id="harita">
<ol>
  <a href="galeri.php">Galeri</a>
</ol>
</div>
<div id="harita">
<ol>
  <a href="ulasim.php">Ulaşım</a>
</ol>
</div>
<div id="harita">
<ol>
  <a href="site-haritasi.php">Site Haritası</a>
</ol>
</div>
<div id="harita">
<ol>
  <a href="etkinlikler.php">Etkinlikler</a>
</ol>
</div>
<?php include('footer.php');
?>