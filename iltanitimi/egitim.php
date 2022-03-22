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
  <a href="index.html">Anasayfa</a>/
  <a href="#">Konya</a>/
  <a href="egitim.html">Eğitim</a></div>
<h2>EĞİTİM</h2>
<p>Konya; Ankara, İstanbul, İzmir, Eskişehir ve Mersin gibi birden fazla üniversiteye sahip olan illerdendir. Konya'da 3 adet devlet üniversitesi ve 2 adet vakıf üniversitesi bulunur.</p>
<div id="yazilar">
  <h3>Vakıf Üniversiteleri </h3>
  <div id="yazilar1"><div id="resim"><img src="images/kto_karatay_universitesi.jpg" width="510" height="382"  alt=""/></div>
    <h3>KTO Karatay Üniversitesi </h3>
    KTO Karatay Üniversitesi, Konya ilinin Karatay ilçesinde kurulan bir vakıf üniversitesidir. Açıldığında Konya'nın ikinci üniversitesi olmuştur. Ayrıca üniversite Karatay Medresesi'nin devamı niteliğindedir. Konya Ticaret Odası Eğitim ve Sağlık Vakfı tarafından yapılan Karatay Üniversitesi için temel atma töreni 12 Kasım 2008 tarihinde yapılmıştır. TBMM'ye sunulan yasaya göre KTO Karatay Üniversitesi bünyesinde 5 fakültenin, 1 yüksekokulun ve 2 enstitünün açılması planlanmıştır.
  <br><a href="https://www.karatay.edu.tr/" target="_blank">Üniversitenin Resmi İnternet Sitesi</a>
  </div>
  <div id="yazilar1">
  <div id="resim"><img src="images/gida-ve-tarim.jpg" width="500" height="307"  alt=""/></div>
    <h3>Konya Gıda ve Tarım Üniversitesi</h3>
   Konya Gıda ve Tarım Üniversitesi, Bilimsel Araştırma Teknoloji Eğitim ve Kültür Vakfı tarafından 2013 yılında Konya'da kurulmuş bir vakıf üniversitesidir. Üniversitenin kurulmasına ilişkin karar 18 Haziran 2013 tarihli ve 28681 sayılı resmî gazetede yayınlanmıştır.
  <br><a href="https://www.gidatarim.edu.tr/" target="_blank">Üniversitenin Resmi İnternet Sitesi</a>
  </div>
</div>
<div id="yazilar">
  <h3>Devlet Üniversiteleri </h3>
  <div id="yazilar1"><div id="resim"><img src="images/selcuk-üni.fw.png" width="640" height="250"  alt=""/></div>
    <h3>Selçuk Üniversitesi </h3>
    Selçuk Üniversitesi, 1975 yılında Konya'da kurulmuş olan bir devlet üniversitesidir. Konya'da üniversite açılması konusunun gündeme geldiği tarih 1955 yılıdır. Bu tarihte Konya'da üniversitenin kurulması için TBMM'de bir kanun tasarısı hazırlandı. Tasarı, Milletvekillerinin yarısından fazlası tarafından da imzalandı. Ancak tasarı talihsiz bir şekilde Milli Eğitim Komisyonu'ndan geçemedi. Çeşitli çabalar sonucunda kurulup varlığını günümüze kadar sürdürmüş ve sürdürmeye de devam etmektedir. Bugün bünyesinde 23 fakülte, 6 enstitü, 6 yüksekokul, 22 meslek yüksekokulu, 1 devlet konservatuarı bulunan Selçuk Üniversitesi, yetmiş bini aşkın öğrencisi ile Türkiye’nin en büyük eğitim kurumları arasında yer almaktadır.
  <br><a href="https://www.selcuk.edu.tr/" target="_blank">Üniversitenin Resmi İnternet Sitesi</a> 
  </div>
  <div id="yazilar1">
  <div id="resim"><img src="images/necmettin-erbakan.fw.png" width="640" height="340"  alt=""/></div>
    <h3>Necmettin Erbakan Üniversitesi </h3>
    Necmettin Erbakan Üniversitesi, 2010 yılında Konya'da bir devlet üniversitesi olarak 14.7.2010 tarih ve 6005 sayılı kanun ile kurulmuş ve kuruluşu 21.7.2010 tarih ve 27648 sayılı Resmi Gazete’de yayınlanmıştır.
Konya Üniversitesi Rektörlüğüne, Cumhurbaşkanlığınca Anayasa'nın 130'uncu ve 2547 sayılı Yükseköğretim Kanunu'nun 13'üncü maddeleri uyarınca 10.12.2010 tarihinde Prof. Dr. Muzaffer Şeker atanmıştır. Üniversite; Sosyal ve Beşeri Bilimler, Mühendislik ve Mimarlık, Fen, Turizm, Eğitim Bilimleri, Havacılık ve Uzay Bilimleri, Meram Tıp, Ahmet Keleşoğlu Eğitim, Güzel Sanatlar ve İlahiyat Fakülteleri ile Devlet Konervatuarı, Yabancı Diller Yüksekokulu ve Sosyal Bilimler, Fen Bilimleri, Eğitim Bilimleri Enstitüleri olmak üzere dokuz Fakülte, bir Konservatuar, üç Enstitü ve bir Yüksekokul’dan oluşmaktadır.
    <br><a href="https://www.erbakan.edu.tr/" target="_blank">Üniversitenin Resmi İnternet Sitesi</a>
</div>
      <div id="yazilar1">
  <div id="resim"><img src="images/ktun.jpg" width="640" height="320"  alt=""/></div>
    <h3>Konya Teknik Üniversitesi </h3>
    Konya Teknik Üniversitesi 18.05.2018 tarihinde yeni bir üniversite olarak kurulmuştur. Bünyesinde Selçuk Üniversitesi'nden kendisine bağlanan Mühendislik ve Doğa Bilimleri Fakültesi, Mimarlık ve Tasarım Fakültesi, Teknik Bilimler Meslek Yüksekokulu olmak üzere 2 fakülte ve 1 yüksekokul, yeni kurulan İşletme ve Yönetim Bilimleri Fakültesi ve Tarım Bilimleri ve Teknolojileri Fakütesi olmak üzere 2 fakülte ve son olarak Lisansüstü Eğitim Enstitüsü'nü barındırmaktadır.
  <br><a href="http://ktun.edu.tr/" target="_blank">Üniversitenin Resmi İnternet Sitesi</a>
      </div>
  </div>
</div>
<?php include('footer.php');
?>