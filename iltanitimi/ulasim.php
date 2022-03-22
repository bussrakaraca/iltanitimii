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
  <a href="ulasim.php">Ulaşım</a></div>
<div><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Istanbul,+Turkey&amp;daddr=42000+Konya%2FKonya+Province,+Turkey&amp;hl=en&amp;geocode=FdawcQIdQCe6ASlrCGgABKfKFDHQsAG8mP7M4Q%3BFavMQQIdBajvASlF9xXWaIXQFDFnCQYI_NANJA&amp;aq=1&amp;oq=is&amp;sll=37.869298,32.483311&amp;sspn=0.0767,0.169086&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=39.462143,31.0518&amp;spn=3.19077,4.159755&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Istanbul,+Turkey&amp;daddr=42000+Konya%2FKonya+Province,+Turkey&amp;hl=en&amp;geocode=FdawcQIdQCe6ASlrCGgABKfKFDHQsAG8mP7M4Q%3BFavMQQIdBajvASlF9xXWaIXQFDFnCQYI_NANJA&amp;aq=1&amp;oq=is&amp;sll=37.869298,32.483311&amp;sspn=0.0767,0.169086&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=39.462143,31.0518&amp;spn=3.19077,4.159755" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
<div id="dısdiv">
<div id="katman1"><div id="ulasımyolu">
    <h3><strong>Karayolu</strong></h3>
  </div>
  <p>Konya'da 3.051 km karayolu mevcuttur. Konya'ya karayolu ile şu güzergâhlardan gelmek mümkündür. 1. Afyon - Konya Yolu 2. Antalya (Manavgat) - Seydişehir - Konya Yolu 3. Isparta (Şarkikaraağaç) - Beyşehir - Konya Yolu 4. Ankara - Konya Yolu 5. Aksaray - Konya Yolu 6. Adana (Ulukışla) - Ereğli - Konya Yolu 7. Mersin (Mut) - Karaman - Konya Yolu Konya Antalya'dan gelip Kapadokya'ya giden turistlerin uğrak noktasıdır. Kuzey Güney, Doğu Batı karayollarının kesişim noktasında bulunduğundan ana turizm yol güzergahı üzerinde bulunmaktadır. Konya genelde düz bir coğrafyaya sahip olduğundan karayolu ile ulaşım konforlu olmaktadır. Antalya, İzmir, İstanbul, Ankara, Samsun, Kayseri, Adana, Mersin, Hatay, Şanlıufra ve Gaziantep bölgesinden kalkan yolcu otobüslerinin çoğunluğu Konya'dan geçer. </p>
</div>
</div>
<div id="dısdiv">
<div id="katman2">
<div id="ulasımyolu"><h3><strong>Hava Yolu</strong></h3></div>
<p>Konya - İstanbul arasında Türk Havayolları ve Pegasus hava yolu şirketleri sefer yapmaktadırlar.Ayrıca Lufthansa'nın İstanbul - Konya aktarmalı seferleri bulunmaktadır. </p>
</div>
</div>
<div id="dısdiv">
<div id="katman3">
<div id="ulasımyolu"><h3><strong>Demir yolu</strong></h3></div>
<p>Ankara-Konya hızlı tren hattının tamamlanması ile Konya-Ankara arası Tren garlarından ulaşım sağlanabilir. Hızlı Tren şu an Konya-Ankara arasını 1 saat 45 dakikaya indirmiştir. Bu süre yeni trenlerin alımıyla 1 saat 30 dakikaya inecektir. Günlük iki yönlü 16 sefer ile şu an hizmettedir.[4] İstanbul'dan başlayan tarihi Hicaz Demiryolu hattı, şehir merkezinden geçmektedir. Günümüzde demiryolu ulaşımı bu hattan sağlanmaktadır. </p>
</div>
</div>
<?php include('footer.php');
?>