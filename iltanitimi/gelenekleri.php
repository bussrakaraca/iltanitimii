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
  <a href="gelenekleri.php">Gelenekleri</a></div>
<h2>GELENEKLERİ</h2>
<p>Eskiden Konyalı bir ailenin dört mevsimine göre ayrılmış bir takım adet ve gelenekleri vardı. Bunlar halen bazı yerli ailelerde kısmın görülmektedir. İlkbaharda, Nisan ayının ortalarından sonra ev işleri artardı. Evvela sobalar sökülür, temizlenir, rutubetsiz bir yerde saklanır. Sıra halıların temizlenmesine gelirdi ki, ev halkı ile beraber komşuların yardımı da istenirdi. Halılar ve kilimler bahçede veya sokakta çırpılırdı. Halının üzerindeki tozlar süpürülerek naftalin saçılıp katlanır, serin bir yerde muhafaza edilirdi. Bu olaya göç denirdi. Bu arada yataklar ve minderlerin yünleri dökülür, değneklerle dövülür, temizlendikten sonra eski kılıflarına doldurulurdu. Bu eşyanın bazıları göçe konurdu. Odalardan kışlık serecekler kaldırıldıktan sonra bu defa sedir üzerine divan yastıkları üzerine kar gibi beyaz etekleri dantelli işlemeli yaygı ve örtüler serilirdi. Geniş odaların ortasına kilim yayılırdı. Bu işler yapılmadan önce duvarlar kireç ise badana toprak sıva ise "ak toprak" cilası yapılır. Oda taban tahtaları, dolap kapakları, pencere çerçeveleri fırça ile sürtülerek yıkanıp temizlenir, camlar silinirdi. Ev eşyasından sonda, kışlık yiyecekler yıkanır, kurutulur, naftalinlenerek temizler bohçalar içerisine konup, göçün üzerine bohça istifi yapılırdı.</p>
<p> Bahar temizliği bittikten sonra sıra sebzelerin kurutulmasına gelir. Taze nane ve maydanoz alınır, bol suda temizce yıkanıp, sapları ayıklandıktan sonra gölgede kurutulurdu. Kurutma işleminden sonra, temiz keselere konarak izbe duvarlarındaki çivilere takılırdı. Meram ve çevresinden bağ evlerine göçülür ve yaz boyunca oralarda oturulurdu. Eskiden Konya'nın yerlileri, yağ, peynir, yoğurt ve süt ihtiyaçlarını çarşıdan karşılamazlar evlerinde besledikleri inek veya mandıralardan temin ederlerdi. Ayrıca güz ayında etlik yapmak için ve yine kışın kesmek maksadıyla 8–10 kadar koyun ve keçi alınır, ahırın bir tarafına bağlanıp, gündüzleri bahçede veya civar meralarda otlatılırdı. Güz aylarında bahar aylarına kadar ahır kapısı yanında toplanmış olan hayvanların gübreleri, ev halkının veya bu iş için tutulan işçi kadınların yardımıyla yapma veya mayıs (tezek) denilen bir eşit kış yakacağı hazırlanır. Bunlar kışın tandıra ekmek yapmak için yakıldığı gibi odun yerine sobada da yakılır. Kuruyan yapmalar tandır civarında yakacak örtmesi veya yakacak damı denilen yerlerde intizamlı olarak kayılırdı. </p>
<div id="yazilar">
<h3>Yaz Hazırlığı: </h3>Meyveler bu mevsimde olur, kışın ev ihtiyacını karşılayacak miktarda vişne, kayısı, erik bahçede varsa ağaçlardan toplanır, yoksa çarşıdan satın alınırdı. Vişne reçelinden başka vişne şurubu da kış için kaynatılırdı. Diğer taraftan kayısı, erik, üzeri karanfille süslenmiş armut ve elma reçelleri hazırlanırdı. İçleri yeşil sırlı çömleklere reçeller doldurulur, ağızları okunup üflenerek ve ağız tadı ile yenmesi temennisiyle ağızları temiz bez örtüler örtülür ve bağlanır, izbenin serin olan duvar diplerine konulur. Reçellerden sonra sıra kurutmalara gelirdi. Sabah serinliğinde bahçedeki ağaçlardan toplanan kayısı, küfelere toplanarak ikindi serinliğinde damın temiz bir yerine örtü veya hasır serilerek kayısılar üzerine ayrılıp kurutulmaya bırakılırdı. Erik ve diğer meyvelerde aynı tarzda kurutulurdu. Kayısı ve erik meyvesi fazla olgunlaşmış durumda olursa süzgeçten geçirilerek, içleri yağlanmış bakır tepsilere pestil yapılmak üzere dökülürdü. Kışın hoşaflık için vişne, elma kurutulur, bazıları kabukları soyulur dilimlere ayrılarak kurutulmaya hazırlanırdı. Ayrıca yaz mevsiminde evin ihtiyacını karşılayacak nispette domates salçası çıkarılır, kabak, patlıcan ve biberleri içleri oyularak kurutulurdu. Bazı sebzelerde ince dilimler halinde dam üzerinde kurutulmaya bırakılırdı. Yaz aylarının sonlarına doğru sıra bulgur yapmaya ve nişasta çıkarmaya gelirdi. Bir kış mevsimi tarladan ve buğday pazarından yumuşak buğday alınır. Komşularla yardımlaşarak bulgur kaynatılırdı. Dama serilmiş olan örtülerin üzerine yayılarak kurutulur, iki günde kuruyan buğday çuvala konarak değirmende öğütülürdü. Bundan sonra sıra kışlık ekmek buğdayına gelirdi. Bir kış yetecek miktarda birkaç ton buğday alınır, temizlenip yıkanır, kurutulduktan sonra değirmene götürülerek öğütülür ve izbedeki un ambarına dökülür ve çuvallara konularak muhafaza edilirdi.</div><div id="yazilar">
<h3>Kış Hazırlığı:</h3>Sonbahar mevsiminin de kış hazırlıkları başlardı. Bu hazırlıkların başında hiç şüphesiz üzüm bağı olanlar için pekmez, kaynatma gelirdi. Bağdan araba veya merkep üzerine yüklenmiş küfelerle üzüm eve getirilir, yakacak damı yakınında bulunan çamaşırhaneye dökülür, salkımlardan iri ve sert olarak seçilerek sicimlerle birbirine bağlanır. İşte bu hazırlanmış Hevenkler tavan arası veya izbenin direklerine çakılmış çivilere asılırdı. Çaraşa doldurulan üzümler ayakta ezilmek suretiyle suyu çıkarılır, ak topraktan geçirilen bu şıra üzerinde kaynatılır, leğenden kazana alınarak soğutulmaya bırakılırdı. Pekmez kaynarken bir kısmının içerisine kuru kayısı dilimlenmiş yahut ufak bütün kabak, patlıcan atılarak pekmezli reçel elde edilirdi. Pekmez hazırlığı bittikten sonra sıra turşu kurmaya gelirdi. Sırçalı küpçüklerle sebzesine göre ve evde en çok sevilen sebzelerin turşusu kurulurdu. Turşu sirkeleri çarşıdan ziyade evlerde hazırlanırdı. Bu sirke ekseriyet pekmez için sıkılan üzümün posasından yapılırdı. Buna cıbra denirdi. Turşu hazırlığı bittikten sonra da sıra pastırma ve sucuk yapılmasına gelirdi. Çarşıdan alınan veya evde beslenen kısır inek veya güve kesilerek bir kısmından pastırma, bir kısmından sucuk yapılırdı. Sığır eti sucuğunun sert olmaması için bir veya iki keçi-koyun kesilerek, etleri karıştırılırdı. Pastırmalar denge konulduktan sonra sucuklar doldurulup kurutulur. Ayrıca kışın hazır olması ve çarşıdan et alınmaması için (etlik yapma) denilen kavurma hazırlanırdı. Pazardan alınan 5-6 koyun veya keçi, yada ufak bir sığır, eve getirilen kasap tarafından kesilerek etleri komşuların yardımıyla doğranır, bir kısmı da kemikli olmak üzere kıyma denilen kavurma hazırlanırdı. Kavurma piştikten sonra yardımda bulunmuş olan komşuların evlerine birer sahanın içerisi ekmekli kavurma gönderilirdi ki buna (ekmek salması) denir. Sıra en son kışlık yakacağı gelir. Ekseriyet kışlık yakacak bahardan alınıp kırılarak yapılır, halılar ve kilimler göçlerden çıkartılarak serilir, sobalar kurutulur, kışlık giyecek eşyaları bohçalardan çıkarılarak giyime hazırlanır, bundan sonra günlük ev işleri başlardı.
</div>
<?php include('footer.php');
?>