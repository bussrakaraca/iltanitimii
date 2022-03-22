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
  <a href="#">Kültür</a>/
  <a href="halk-oyunlari.php">Halk Oyunları</a></div>
<div id="resim"><img src="images/kasik-oyunu.fw.png" width="640" height="225"  alt=""/></div>
<h2>HALK OYUNLARI VE FOLKLÖR</h2>
<div id="yazilar">
<div id="resim"><img src="images/kasik-oyunu.jpg" width="200" height="150"  alt=""/></div>

<h3>Konya Kaşık Oyunu: </h3>
<p>Oyun denince kaşık oyunu akla gelir. Konya kaşık oyunu Orta Asya'dan Türkler tarafından getirilmiştir.
Kaşık oyunlarının figürleri çok fazladır. Fakat göbek figürü halkın daha çok hoşuna gitmektedir. Bu figür dinamik ve sert hareketlerden meydana gelmiştir. Oyuncu devamlı güler yüzlüdür. Çünkü neşe saçması gerekmektedir. Oyun başlar başlamaz kaşıkların çıkardığı ezgiler seyircide saçılmış olan her şeyi yeşertmeye başlar. Herkes farkında olmadan oyunun neşeli havasına kapılır. Kaşıklar vura dursun oyuncunun tıpış tıpış yürüyüşü, topuk döve döve nazlanışı, yan yan sıyrılışı, yavaş yavaş şakalaşması oyunun en belirgin figürlerindendir. Kaşık vurmaları yavaşladığı sırada oyuncu derin bir nefes alacak kadar fırsat bulur. Fakat kimse bunun farkına varamaz. Ayrıca Konya türkülerinin kaşık yapısı içinde oyun havaları niteliğinde oluşu hayli dikkat çekicidir. Çünkü oturak âlemlerindeki oyunlarda icra edilen bu müziğin eşliğinde kadın oyuncular zil ve kaşıklarla beraber Milli kıyafetle oyuna iştirak ederler. Bu halk oyunlarının koreografisi, motifleri yüzyıllardan beri hiç bir değişikliğe uğramadı. Aynen korundu. Oturak âlemlerindeki oyunlar da bu oyun türlerine Anadolu'nun başka yörelerinde rastlamak mümkün değildir. Kadın oyunu oynayan oyuncu kadın, zamanla misafirlere sakilik yaptığı görülüyor. Bu usulün Selçuklulardan önce olduğu iddia ediliyor. Konya kaşık oyununda, oyunlar çeşitli isimler alırlar. Şöyle sıralayabiliriz;</p></div>

<div id="yazilar">
<h3>Küstü Oyunu:</h3>
 
Konya'ya has bir oyundur. Kaşıkla oynanır, zille oynandığı da olur. Bu oyunla çalınıp, söylenen türkü " İnce Çayır " türküsüdür. Diğer havalarda oynandığı zaman bu türküyle oynandığı zamanki etkiyi bırakmaz. Sazlar ince çayır türküsünün ara ezgisinin üç bazen de beş defa çaldıktan sonra türkünün okunmasına geçilir.
İnce çayır biçilir mi?
Soğuk sular içilir mi amman.
Türkünün burasında bütün sazlar durur. Oyuncu hangi durumdaysa öylece kalır. İşte bu duruş anında bir koşma okunur. Bu koşma umumiyetle küsme üzerinedir.
Küsme dilber barışalım, cümle isyan bendedir.
Cümle isyan bende ise, her kabahat sendedir.
Bundan sonra sazlar yavaştan başlar. Hızlanarak devam eder. Oyuncu da müzikle birlikte yavaştan hızlanarak oyuna devam eder. Bu figür iki ve üç kez tekrarlandıktan sonra oyun biter.
 </div>
 <div id="yazilar">
<h3>Sekelim Kızlar:</h3>
 
Bu oyun Konya ve köylerinde, düğünlerde genç kızlar tarafından oynanır. Diğer saz meclislerinde bu oyun oynanmaz. Düğünlerde bir araya gelen genç kızlar birbirlerinin bellerinden sarılarak halay oynar gibi dizilirler. Baştaki kız sazla birlikte şu türküyü okur.
"Küp dibine bastırma
Kız saçını kestirme
Yar evine gelince
Gönülcüğünü kaptırma"
Sonra kızların hepsi bulundukları yerde sıçrarlar ve hep birlikte;
"Sekelim kızlar, sekelim vay, vay
Arpada buğday ekelim vay, vay"
derler böylece oyuna bir canlılık katarlar. Figürler bir kaç kez tekrarlandıktan sonra oyun biter.
Oyuncu İle Okuyucunun Karşılıklı Türkü Söyleyerek Oynadığı Oyun
Bu oyun şu iki türkü ile oynanır;
A) Kız sana fistan aldım yolladım geldi mi?
B) Kıralım kıralım fındık fıstık kıralım.
Bu oyunda okuyucu ile oyuncu karşılıklı sorulu cevaplı türküler söylerler.
Bu iki türküden biri çalınırken önce okuyucu, sazların kesilmesiyle oyuncuya ahenkli sesiyle sorar. Oyuncu da tempo ile cevap verir. Cevaptan sonra oyuncu kaşıklarını vurarak sazların temposunu hareketlendirir. Oyun böylece başlar.
</div>
<?php include('footer.php');
?>