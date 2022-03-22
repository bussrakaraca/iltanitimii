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
  <a href="#">Konya</a>/
  <a href="turistlik-yerler.php">Turistlik Yerler</a></div>
<div id="resim">
  <p><img src="images/turistlik-yerler.fw.png" width="600" height="300"  alt=""/></p>
</div>
<h2>TURİSTLİK YERLER</h2>
<p>2009 yılında Konya'yı 1 milyon 717 bin 942 yerli ve yabancı turist ziyaret etti. Bu rakamın 1 milyon 338 bin 113'ünü yerli, 353 bin 233'ünü ise yabancı ziyaretçiler oluşturdu.</p>
<div id="yazilar">
<div id="resim">
<img src="images/alaaddin-camii.jpg" width="259" height="194"  alt=""/></div>
<h3>Alâeddin Camii</h3>
<p>Alâeddin Camii, 1220 yılında Konya'da Anadolu Selçuklu Devleti sultanı I. Alaeddin Keykubad tarafından aynı adı taşıyan tepe üzerinde (Alâeddin Tepesi) inşa ettirilmiş cami.<br>
  Sekiz Anadolu Selçuklu Sultanı burada gömülüdür.</p>
  <div id="tarif">
    <ul>
      <li>I. Alaeddin Keykubad     </li>
      <li> I. Rükneddin Mesud      </li>
      <li>I. Kılıç Arslan</li>
      <li> IV. Kılıç Arslan</li>
      <li> II. Süleyman Şah      </li>
      <li>I. Gıyaseddin Keyhüsrev      </li>
      <li>II. Gıyaseddin Keyhüsrev      </li>
      <li>III. Gıyaseddin Keyhüsrev</li>
    </ul>
    </div>
    </div>
    <div id="yazilar">
    <div id="resim">
    <img src="images/alaaddin-tepesi.jpg" width="647" height="472"  alt=""/></div>
    <h3>Alaeddin Tepesi </h3>
    <p>Alâeddin Tepesi, Türkiye'nin Konya ilinin merkezine bağlı Karatay ilçesinde yer alan tepe. 450 x 350 metre boyunda olup, 20 metre yüksekliğinde olan tepe, höyük olarak adlandırılan protohistorik yerleşim yerlerinden biriydi.</p></div>
    <div id="yazilar">
    <div id="resim"><img src="images/mevlana-muzesi.jpg" width="651" height="419"  alt=""/></div>
    <h3>Mevlana Müzesi </h3>
    <p>Mevlana Müzesi, Konya'da bulunan, eskiden Mevlâna'nın dergâhı olan yapı kompleksinde, 1926 yılından beri faaliyet gösteren müzedir. "Mevlana Türbesi" olarak da anılır.
      (Yeşil Kubbe) denilen Mevlana'nın türbesi dört fil ayağı (kalın sütun) üzerine yapılmıştır. O günden sonra yapı faaliyetler hiç bitmemiş, 19. yüzyılın sonuna kadar yapılan eklemelerle devam etmiştir. Osmanlı sultanlarının bir kısmının Mevlevi tarikatından olması Türbe'ye özel bir önem verilmesini ve iyi korunmasını sağlamıştır.
      Müze alanı bahçesi ile birlikte 6.500 m² iken, yeri istimlak edilerek Gül Bahçesi olarak düzenlenen bölümlerle birlikte 18.000 m²ye ulaşmıştır.
      Bağlı bulunduğu Kültür Bakanlığı'na en çok gelir getiren ikinci müzedir. (Birinci Topkapı Sarayı müzesi.)
      Mevlana hakkında menkıbelerin anlatıldığı Ahmed Eflaki'nin kitabı "Arifler'in Menkıbeleri"nde[1] Mevlana'nın babası için türbe yaptırmak isteyen devrin sultanına "gök kubbeden daha görkemlisini yapamayacağınıza göre zahmet etmeyin" dediği rivayeti yer alır. Türbe, Mevlana'nın ölümünden sonra inşa edilmiştir.
    </p></div><div id="yazilar">
    <h3>Camiler </h3>
    <div id="tarif">
      <p>Alaaddin Camii       </p>
      <p> İplikçi Camii        </p>
      <p>Sahipata Camii        </p>
      <p>Sadrettin Konevi</p>
      <p> Camii
        Şems-i Tebrizi Camii</p>
      <p> Kadı Mürsel Camii        </p>
      <p>Tursunoğlu Camii        </p>
      <p>Selimiye Camii        </p>
      <p>Aziziye Camii        </p>
      <p>Şerafettin Camii        </p>
      <p>Kapu Camii</p>
      <p> Nakiboğlu Camii</p>
    </div></div><div id="yazilar">
    <h3>Kiliseler </h3>
    <div id="tarif">
    <ul>
      <li>Aya Elenia Kilisesi</li>
      <li>Konya Saint Paul Kilisesi</li>
      <li>Sille Siyata Manastırı</li>
    </ul>
    </div></div><div id="yazilar">
    <div id="resim"><img src="images/catalhoyuk.jpg" width="259" height="194"  alt=""/></div>
    <h3>Çatalhöyük </h3>
    <p>Çatalhöyük günümüz Konya Şehri'nin güneydoğusunda, Hasandağı'nın yaklaşık olarak 136 kilometre uzağında, Konya Ovası'na hakim buğdaylık arazide bulunmaktadır. Doğu yerleşimini, en son Cilalı Taş Devri sırasında ovadan 20 metre yüksekliğe kadar ulaşan bir yerleşim birimi oluşturmaktadır. Ayrıca, batıya doğru da ufak bir yerleşim birimi ve birkaç yüz metre doğuya doğru da bir Bizans yerleşimi bulunmaktadır.</p></div><div id="yazilar">
    <h3>Müzeler </h3>
    <p>Şehirde çeşitli müzeler de bulunmaktadır.</p>
    <div id="tarif">
      <p>Mevlana Müzesi       </p>
      <p> Konya Arkeoloji Müzesi</p>
      <p> Konya Atatürk Evi Müzesi        </p>
      <p>Karatay Medresesi (Çini Eserler Müzesi)</p>
      <p> Sırçalı Medrese (Mezar Anıtları Müzesi)</p>
      <p> İnce Minare (Taş-Ahşap Eserleri Müzesi)        </p>
      <p>Konya Etnoğrafya Müzesi        </p>
      <p>Konya İzzet Koyunoğlu Şehir Müzesi</p>
    </div>
    </div>
   <?php include('footer.php');
?> 