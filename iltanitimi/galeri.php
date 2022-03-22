<?php 
session_start();
error_reporting(0);
?>
<?php include('header.php'); ?>
<?php 
$deg=$_SESSION['user'];

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
	<a href="galeri.php">Galeri</a></div>
<h2>FOTO GALERİ</h2>
<div id="vlightbox1">
	<a class="vlightbox1" href="index_files/vlb_images1/alaaddincamii.jpg" title="alaaddin camii"><img src="index_files/vlb_thumbnails1/alaaddincamii.jpg" alt="alaaddin camii"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/alaaddinkosk.jpg" title="alaaddin kosk"><img src="index_files/vlb_thumbnails1/alaaddinkosk.jpg" alt="alaaddin kosk"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/alaaddintepesi.jpg" title="alaaddin tepesi"><img src="index_files/vlb_thumbnails1/alaaddintepesi.jpg" alt="alaaddin tepesi"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/aziziyecami.jpg" title="aziziye cami"><img src="index_files/vlb_thumbnails1/aziziyecami.jpg" alt="aziziye cami"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/beysehirgolu.jpg" title="beysehir golu"><img src="index_files/vlb_thumbnails1/beysehirgolu.jpg" alt="beysehir golu"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/camli_kosk.jpg" title="camli kosk"><img src="index_files/vlb_thumbnails1/camli_kosk.jpg" alt="camli kosk"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/dipsizgol.jpg" title="dipsiz gol"><img src="index_files/vlb_thumbnails1/dipsizgol.jpg" alt="dipsiz gol"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/konyafotograf.jpg" title="konya fotograf"><img src="index_files/vlb_thumbnails1/konyafotograf.jpg" alt="konya fotograf"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/konyagorunum.jpg" title="konya gorunum"><img src="index_files/vlb_thumbnails1/konyagorunum.jpg" alt="konya gorunum"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/kulesite.jpg" title="kule site"><img src="index_files/vlb_thumbnails1/kulesite.jpg" alt="kule site"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/kulturmerkezi.jpg" title="kultur merkezi"><img src="index_files/vlb_thumbnails1/kulturmerkezi.jpg" alt="kultur merkezi"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/lalebahcesi.jpg" title="lale bahcesi"><img src="index_files/vlb_thumbnails1/lalebahcesi.jpg" alt="lale bahcesi"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/lalebahcesi2.jpg" title="lale bahcesi2"><img src="index_files/vlb_thumbnails1/lalebahcesi2.jpg" alt="lale bahcesi2"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/meramcay.jpg" title="meram cayı"><img src="index_files/vlb_thumbnails1/meramcay.jpg" alt="meram cayı"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/mevlanacaddesi.jpg" title="mevlana caddesi"><img src="index_files/vlb_thumbnails1/mevlanacaddesi.jpg" alt="mevlana caddesi"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/mevlanamuzesi.jpg" title="mevlana muzesi"><img src="index_files/vlb_thumbnails1/mevlanamuzesi.jpg" alt="mevlana muzesi"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/mevturbe.jpg" title="mevlana turbe"><img src="index_files/vlb_thumbnails1/mevturbe.jpg" alt="mevlana turbe"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/panorama.jpg" title="panorama"><img src="index_files/vlb_thumbnails1/panorama.jpg" alt="panorama"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/tnaztepemagaras.jpg" title="tınaztepe magarası"><img src="index_files/vlb_thumbnails1/tnaztepemagaras.jpg" alt="tınaztepe magarası"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/yerkopruselalesi.jpg" title="yerkopru selalesi"><img src="index_files/vlb_thumbnails1/yerkopruselalesi.jpg" alt="yerkopru selalesi"/></a>
<span class="vlb"><a href="http://visuallightbox.com">php photo gallery lightbox</a>by VisualLightBox.com v5.9</span>
	</div>
    <?php include('footer.php');
?>