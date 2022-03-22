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
  <a href="#">Konya</a>/
  <a href="cografi-konum.php">Coğrafi Konum</a>
  </div>
<h2>COĞRAFİ KONUM</h2>
<div id="resim"><img src="images/konya_cografi.fw.png" width="620" height="450"  alt=""/></div>
<div id="yazilar">
<h3>Coğrafi Özellikleri </h3>
<p>9.000 km2'lik yüzölçümü ile Türkiye'nin en geniş ili olan ve Orta Anadolu yaylası üzerinde Ankara, Aksaray, Niğde, Mersin, Karaman, Antalya, Isparta, Afyon ve Eskişehir illeri ile komşu olan Konya, 36° 22' ve 39° 08' kuzey paralelleri ile 31° 14' ve 34° 05' doğu meridyenleri arasında yer alır. Başta büyük ilçeleri Ereğli, Beyşehir, Akşehir'dir. Toplam 31 ilçesi vardır. Konya büyükşehir nüfusu 2011 sonu itibariyle 1.085.000 olup Türkiye genelinde 7. sıradadır. İl genelinde ise 2.100.000 olan nüfusuyla Konya ili Türkiye'nin en kalabalık 6. ilidir.</p></div><div id="yazilar">
<h3>İklimi</h3>
<p>Konya'da karasal iklim hüküm sürer. Yazları kuru ve sıcak, kışları soğuk ve kar yağışlıdır. Gece - gündüz arası sıcaklık farkı yazın 16-22 derece arasındadır. Baharları ve kışları nemden dolayı bu fark 9-12 °C'ye kadar düşer. Kar ortalama 3 ay yerde kalır. Çevresindeki sıcak - soğuk hava merkezlerinden çok etkilenir. İç Anadolu'nun en güney bölgesinde yer almasına rağmen diğer İç Anadolu şehirlerinden daha soğuk olur. Bunun nedeni orta Torosların deniz etkisini tamamen önlemesidir. Konya, 1. jeolojik zamanda Anadolu'daki Tetis denizinin yükselerek yok olması nedeniyle tam bir deniz tabanı ovasına dönüşmüştür. Düzlüğün asıl nedeni budur. İlkbaharda konveksiyonel yağışlar (kırkikindi) sıklıkla görülür. En yağışlı aylar nisan ve mayıstır. Konya ikliminin diğer bir özelliği ise yazların çok geç başlaması, kışların da çok geç bitmesidir. Step ikliminin özelliği olan yaz kuraklığı Türkiye'deki en kaliteli buğdayların yetişmesine neden olmuştur. Baharda nem ve yağmurla yeşeren otlar yazın yerini kuruluk ve sıcaktan dolayı sarıya bırakır. Türkiye'de sis yoğunluğu ve sisli gün sayısı en fazla olan il Konya'dır. Nedeni ise Konya ovasının bir çanak şeklinde bulunmasıdır. Uzun zamanlarda ölçülen en düşük sıcaklık -29 °C, en yüksek sıcaklık ise 41 °C'dir. En çok kar yağan ay şubat, en soğuk ay ocaktır. En sıcak aylar temmuz ve ağustosdur. Diğer bir özellik ise yaz akşamları çevresinde bulunan dağlardaki yüksek basınç alanlarından, ovada bulunan alçak basın alanlarına esen rüzgardır. Günlük sıcaklık farkının en belirgin özelliği de budur. Ocak ayı sıcaklık ortalaması -0.5 °C, temmuz ayı sıcaklık ortalaması ise 23 °C'dir. Türkiye'nin en az yağış alan ili Konya'dır.</p></div>
<div id="yazilar">
<div id="resim"><img src="images/konya_komsu_iller.png" width="614" height="291"  alt=""/></div>
<h3>Komşu İller</h3>
<div id="iller">
<p>1) Eski Şehir  </p>
<p>2) Ankara  </p>
<p>3) Afyon Kara Hisar</p>
<p>4) Aksaray</p>
<p> 5) Isparta  </p>
<p>6) Niğde</p>
<p> 7) Antalya</p>
<p> 8) Karaman</p>
<p> 9) Mersin </p>
</div>
</div>
<?php include('footer.php');
?>