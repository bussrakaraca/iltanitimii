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
 
    <div>
      <div id="yazilar">
    <div id="resim"> <img src="images/Mevlana_Konya.jpg" width="500" height="375"  alt=""/></div>
      <h2>KONYA</h2>
      <p>Konya, Konya ilinin merkezi şehiridir. Trafik plaka numarası 42'dir. 1875'te kurulan Konya Belediyesi, 1984'te çıkarılan 3030 sayılı yasa gereğince "Büyükşehir" statüsüne kavuşmuş olup 1989'dan beri belediye hizmetleri bu statüye göre yürütülmektedir. Karatay, Meram, Selçuklu olmak üzere büyükşehir belediyesine bağlı 3 merkez ilçeden oluşmaktadır.
Ekonomik açıdan Türkiye'nin gelişmiş kentlerinden biri olan Konya doğal ve tarihsel zenginlikleriyle de önem taşır.Dünyanın en eski yerleşimlerinden biri olan Çatalhöyük UNESCO Dünya Miras Listesi'ne alınmıştır.Şehir Anadolu Selçukluları’nın ve Karamanoğulları’nın başkentliğini yapmıştır. Türkiye'nin en önemli sanayi kentlerindendir.Anadolu Kaplanları'ndandır.Şehrin futbol takımı Konyaspordur.Konya’nın simgeleri arasında Mevlana Müzesi (Kubbe-i Hadrâ), çift başlı kartal, etliekmek sayılabilir.</p></div>
<div id="yazilar">
<div id="resim"><img src="images/konya_cografi.fw.png" width="620" height="450"  alt=""/></div>
      <h2>Coğrafi özellikleri </h2>
      <p>39.000 km2'lik yüzölçümü ile Türkiye'nin en geniş ili olan ve Orta Anadolu yaylası üzerinde Ankara, Aksaray, Niğde, Mersin, Karaman, Antalya, Isparta, Afyon ve Eskişehir illeri ile komşu olan Konya, 36° 22' ve 39° 08' kuzey paralelleri ile 31° 14' ve 34° 05' doğu meridyenleri arasında yer alır. Başta büyük ilçeleri Ereğli, Beyşehir, Akşehir'dir. Toplam 31 ilçesi vardır. Konya büyükşehir nüfusu 2011 sonu itibariyle 1.085.000 olup Türkiye genelinde 7. sıradadır. İl genelinde ise 2.100.000 olan nüfusuyla Konya ili Türkiye'nin en kalabalık 6. ilidir.</p></div>
     <div id="yazilar"> <div id="resim"><img src="images/yemekleri.fw.png" width="650" height="225"  alt=""/></div>
      <h2>Yemekleri </h2>
      <h4>Etli Ekmek(Etli Pide)</h4>
        <p>Etli ekmek Konya’da çok sevilir ve Konya’daki fırın veya lokantalarda Türkiye’nin diğer şehirlerinden çok daha güzel uygulanır. Konya’da yabancı kökenli lokantalarda, açıldıktan birkaç ay sonra ‘etli ekmek servisimiz başlamıştır’ gibi ilanlar görülür. Hiçbir yiyecek Konya’da etli ekmekle rekabet edemez. </p>
      <p><strong>Malzemesi:</strong>(1 kişilik)Gerekli malzemeler:</p> 
         <p> 2 soğan         </p>
         <p>2 domates         </p>
         <p>2 sivribiber</p>
         <p> Yarım demet maydanoz</p>
         <p> 250 gr. bıçakarası et         </p>
         <p>Yarım ekmek hamuru         </p>
         <p>Tuz,karabiber</p>
         <p> <strong>Yapılışı: </strong>Soğan, domates ve biberleri küçük küçük doğrayın. Maydanozu ince ince kıyın. Doğranmış malzemeleri et ile karıştırıp tuz ve karabiber ekleyin. 
Ekmek hamurunu pide şeklinde açın. Hazırladığınız harcı hamurun üzerine yayın. 180 derece fırında 20 dakika pişirin. Sıcak servis yapın.
           </p>
         </p>
    </div>
  </div>



<?php include('footer.php');
?>