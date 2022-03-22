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
	<a href="ilceler.php">İlçeler</a></div>
	<h2>İLÇELER
</h2>
<div id="Accordion2">
  <h3><a href="#">Ahırlı</a></h3>
  <div>
   <p><img src="images/ahirli.fw.png" width="620" height="470"  alt=""/></p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <h6>
     İlçe merkezi Seydişehir-Bozkır karayolu üzerinde kurulmuştur. İlçe toprakları dalgalı düzlüklerden meydana gelir. Ekonomisi tarıma dayalıdır. Çarşamba Suyu başlıca akarsuyudur. Başlıca tarım ürünleri nohut ve tahıldır. Ovalık kesimin sulanabilen kısmında sebze ve meyve yetiştiriciliği yapılır.
     Bozkır ilçesine bağlı bir bucak iken 9 Mayıs 1990'da 3644 sayılı kânunla ilçe oldu. Belediyesi 1962'de kurulmuştur.
   </h6>
   <h4>Nüfus</h4>
<h6>2011 ADNKS göre toplam nüfûsu 5016 olup, 825’i ilçe merkezinde, 5016’su köylerde yaşamaktadır.
  </p>
</h6>
  </div>
  <h3><a href="#">Akören</a></h3>
  <div>
    <p><img src="images/akoren.jpg" width="540" height="449"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Akören, Konya il merkezine 54 km uzaklıkta bir ilçedir. İlçenin eski adı &quot;Akviran&quot;dır.</h6>
    <h6>Akören civarındaki yerleşimin MÖ. 7000-6500 yıllarına kadar gittiği tahmin edilmektedir. Akören'e 49 km. uzaklıktaki Çatalhöyük'te yapılan kazılarda neolitik çağa ait kalıntılar bulunmuştur. Bölge Hitit, Roma ve Bizans döneminde de bir yerleşim yeri olarak kullanılmıştır. &quot;Gavurlar Hamamı&quot; ve &quot;Horozun Tepesi&quot; olarak bilinen yerlerdeki kalıntılar Hitit ve Roma döneminde de burda yerleşim olduğunu göstermektedir. Yine Akören'e 3 km. uzaklıktaki Orhaniye köyünün Ertaş boğazında antik dönemde adı &quot;Dinorna&quot; olan ve Bizans döneminden kalma bir kent vardır.<br>
      MS. 11. yüzyıldan itibaren ise bölgeye Bayındır ve Kayı Türk boylarının yerleştikleri söylenmekle birlikte şu anda bölgede yaşayan halkın 200 yıl önce buraya gelmiş olduğu da belirtilmektedir. Milli mücadele döneminde komşu ilçe Bozkır'da çıkan Bozkır isyanı sırasında ilçe bir süre isyancıların kontrolünde kalmıştır.</h6>
    <h6>İl merkezine 54 km uzaklıktadır. Sınırları içinde May Barajı, Akören Göleti, May ve Çat Deresi vardır.<br>
      İlçenin batı ve güneyi dağlık diğer tarafları engebelidir. Orhaniye köyünün içindeki Osmanlı Köprüsü ve Avdan'da bulunan Avdan Tekkesi meşhurdur. İlçenin en büyük ve güzel köyü Orhaniye'dir. İçindeki asırlık ardıç ağaçları halen en gözde mekanlar arasındadır.<br>
      İlçenin güneyinde bulunan tabii Mavi Boğaz görülmeye değer güzelliktedir.</h6>
      <h4>Nüfus</h4>
      <h6>Akören'in 10.400'ü merkezde olmak üzere ilçe nüfusu 17.380'dir.</h6>
  </div>
  <h3><a href="#">Akşehir</a></h3>
  <div>
    <p><img src="images/konya-aksehir.fw.png" width="620" height="450"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Akşehir, Konya ilinin bir ilçesidir. Nasreddin Hoca gençliğinden itibaren burada yaşamıştır. Türbesi de Akşehir'dedir.<br>
      İlçe yüzölçümü 1442 km² 'dir. Denizden yüksekliği 1050 metredir. Konya - Afyon karayolu üzerinde olup Konya iline 135, Afyonkarahisar iline 90 kilometre mesafededir.<br>
      Dünya'nın Ortası Akşehir'dir. 2007 yılında Nasreddin Hoca Derneği, Türk Patent Enstitüsü'nden Markaların Korunması Hakkında 556 Sayılı Kanun Hükmündeki Kararname'ye göre, &quot;Dünyanın Ortası Akşehir&quot; şeklindeki tescil belgesini almıştır.<br>
      24 Ağustos her yıl Akşehir Onur Günü olarak coşkuyla kutlanır. Dünyada Napolyon Kirazı adıyla bilinen ve Akşehir-Eber Gölleri arasında oluşan mikroklima etkisiyle aromasını kazanan kirazı da meşhurdur. Bu kiraz 2004 yılında Akşehir Kirazı adıyla tescil ettirilmiştir.<br>
      İlçede bulunan Nasreddin Hoca'nın maya çaldığı Akşehir Gölü harita üzerinde yüzölçümü olarak Türkiye'nin 5. büyük gölüdür (353 km²). Akşehir Gölü, bilinçsiz sulama ve küresel ısınmanın etkisiyle her yıl yok olmaya bir adım daha yaklaşmaktadır. Toplam 350 kilometrekarelik sulak alan, 2004 yılında 95, 2005'te ise 35 kilometrekareye kadar gerilemiştir. Bu sene ise göl, küçük bir su birikintisi halini almıştır. Gün geçtikçe iyice düşen su seviyesi, gölde yaşayan canlı türlerini de olumsuz etkilemektedir. Uzmanlar tarafından 1970'li yıllarda 30 çeşit olduğu belirtilen balık türünün sayısı 3'e kadar düşmüştür. Şehirde bir tek yerel televizyon olarak aksehir.tv bulunmaktadır. 1953 yılında kurulan Pervasız Gazetesi en eski yerel gazete olarak bulunmakta bunun yanı sıra İstasyon Gazetesi 2002 den, Akşehir Postası Gazetesi ise 2011 yılından bugüne yayın hayatını sürdürmektedir.</h6>
      
  </div>
  <h3><a href="#">Altınekin</a></h3>
  <div>
    <p><img src="images/altinekin.jpg" width="500" height="320"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Konya ilinin bir ilçesidir. İl merkezine 67 km uzaklıktadır.</h6>
    <h6>İlçenin tarihi oldukça eski devirlere kadar uzanmaktadır. Anadolu Selçukluları döneminde önemli bir ticaret merkezi olan ilçe en parlak dönemini bu devirde yaşamıştır. Şehir merkezinde bulunan Zıvarık Hanı bu devirden kalan en önemli yapıdır.<br>
      Fakat arazinin kıraç oluşu ve tarihi İpek Yolu'nun eski önemini koruyamaması sonucu, Anadolu ticaretinin düşüşüne paralel olarak ilçedeki ticaret hayatı da sönükleşmiştir.<br>
      Cumhuriyet Dönemi'nde genelde tüm kamu kuruluşlarıyla birlikte gelişmiş bir yerleşim merkezi iken, bu kurumların bilahare diğer ilçelere kaydırılmasıyla birlikte küçük bir nahiye halini almıştır. Altınekin kasaba iken, 4 Temmuz 1988 gün ve 19507 sayılı Resmi Gazete'de yayımlanın 3292 Sayılı Kanunla ilçe olmuştur.</h6>
  </div>
  <h3><a href="#">Beyşehir</a></h3>
  <div>
    <p><img src="images/beysehir.fw.png" width="620" height="450"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Coğrafi konum; fert, toplum, ve devlet hayatını şekillendiren en etkili faktörlerden biridir. Beraberinde birçok avantaj veya dezavantajı da getirebilir. Beyşehir bu açıdan oldukça şanslı bir konuma sahiptir.<br>
      İlçe, Batı Toroslar arasında yer alan, çukur alandadır. Bu çukurun büyük kesimini Beyşehir Gölü kaplar. Çukurluk gölün güneydoğusunda Beyşehir ovası devam eder. Toroslar, batıdan ve güneybatıdan yüksek sarp dikliklerle ovaya inerler. Beyşehir'deki düzlük alanlar bozkırlar halinde uzanır. Çevredeki dağlar ise, ormanlarla kaplıdır. Topraklar verimlidir.<br>
      Akdeniz Bölgesi'nin Göller Yöresinde yer alan Beyşehir, önemli bir geçit noktasında da bulunmaktadır. En güney ucu baz alındığı zaman Akdenize olan uzaklığı 65 km civarındadır. Bir set misali araya giren Toroslar, yöreye Akdeniz'den ayırmıştır.<br>
      Doğusunda Konya, kuzeyinde Doğanhisar, Hüyük ve Ilgın, kuzeydoğusundan Derbent, kuzeybatısından Şarkikaraağaç ve Eğirdir, doğusunda Meram, güneyinde Seydişehir ve Derebucak ilçeleri bulunur.</h6>
  </div>
  <h3><a href="#">Bozkır</a></h3>
  <div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>MÖ 6000'li yıllarda İsauria Bölgesi'nin başkenti olan Bozkır; İsauria Nova (Yeni İsauria) ve Leontopolis (Bizans imparatoru Leo'nun kenti) isimleri ile bilinmekteydi.</h6>
    <h6>Bozkır aslında kasabanın (Bozkır İlçesi) değil, yörenin, yani çay (Çarşamba Çayı) ile Seydişehir arasındaki toprakların adıdır. Kasabanın adı "Serüstad" idi. Serüstad isminin öyküsü madencilik üzerinden gelir. Kelimenin gerçe<img src="images/Bozkir.jpg" width="533" height="400"  alt=""/></h6>
    <h6>MÖ 6000'li yıllarda İsauria Bölgesi'nin başkenti olan Bozkır; İsauria Nova (Yeni İsauria) ve Leontopolis (Bizans imparatoru Leo'nun kenti) isimleri ile bilinmekteydi.<br>
      Bozkır aslında kasabanın (Bozkır İlçesi) değil, yörenin, yani çay (Çarşamba Çayı) ile Seydişehir arasındaki toprakların adıdır. Kasabanın adı &quot;Serüstad&quot; idi. Serüstad isminin öyküsü madencilik üzerinden gelir. Kelimenin gerçek söylenişi bilinmemekle beraber ilçe çevresindeki kurşun madenlerini işletmekte olan ustalara baş usta anlamına gelen "SER-ÜSTAD" dendiği için bu kelimeden geldiği sanılmaktadır.</h6>
    <h6>Diger bir rivayete göre ise, tarihte bugünkü Ulupınar köyünde meşhur bir demir ustası varmış. Ve bu usta işin sırrını belli etmemek için kimseyi atölyesine sokmazmış. Bu yüzden ona sırlı ustat derlermiş. Gel zaman git zaman bu ustaya diğer yörelerden demir işi yaptırmak için gelen gidenler diyaloglarında "nereye gidiyorsun" sorusuna sırlı ustadın yanına, sırustadın yanına, serustada... derken diyarının adı Serustat olmuş.</h6>
    <h6>Selçuklu hükümranlığı zamanında harpte yaman bir asker olan Bozkır Beye başarı ödülü olarak verilen topraklara Bozkır Bey kendi adını verir. Anlaşılacağı üzere Bozkır kasabanın adını değil, kasaba Bozkır beyin adını almıştır.</h6>
    <h6>1858 yılında ilçe olmuştur. Bozkir hakkinda, 1918 yılına ait bir salnamede kadı, Mustafa Efendi, müftü ise Mehmet Kûdzi Efendi olduğu yazılıdır. Sonraki müftüler ise "Bozkır Müftüleri" adlı ayri bir yazıda kaleme alınmıştır.</h6>
    <h6>Bozkır'da altın, kurşun, simli kurşun, ve demir madenleri çıkarılmıştır.</h6>
  </div>
  <h3><a href="#">Cihanbeyli</a></h3>
  <div>
    <p><img src="images/cihanbeyli.fw.png" width="610" height="400"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Cihanbeyli'nin doğusunda Tuz Gölü ve Aksaray ili, batısında Sarayönü ve Yunak ilçeleri vardır. Güneyi Altınekin İlçesi, Kuzeyi Kulu ve Ankara'nın Haymana ilçeleriyle çevrilmiştir. Yüzölçümü yaklaşık 4.109 km.2'dir. Ayrıca Cihanbeyli yüzölçümü bakımından Türkiye' nin en büyük ilçesidir.</h6>
    <h6>Cihanbeyli'nin tarihi gelişimi Konya tarihi ile eşdeğerdir. Konya'yı Cihanbeyli'den ayıran doğal sınırlar yoktur. Cihanbeyli, Tarihi Gelişimi, Coğrafi Yapısı ve Sosyal Yaşantısı yönünden Konya ünitesinin bir parçasıdır. Cihanbeyli'nin ilk adı Esbikeşan'dır. Daha sonraları &quot;İnevi&quot; adını almış ve uzun yıllar İnevi adını taşımıştır. Esbikeşan İlçesi ilçelikten bucaklığa, bucaklıktan ilçeliğe çok kez yer değiştirmiştir. 1866 yılında Kulu Köyü Esb Keşan adı ile ilçe olmuş Cihanbeyli ve Şerefli koçhisar Kulu Köyüne bağlanmıştır. Ancak Cihanbeyli ve Koçhisar'ın Aşair beyleri Kulu'ya bağlanmak istememişler ve Ankara'ya baskı yapmışlardır. Bunun üzerine Kulu'nun ilçe teşkilatı lağv edilmiş ve cihanbeyli, Koçhisar Kulu'dan ayrılmıştır. Kulu'da Konya'nın Sille Bucağına bağlanmıştır. (Devrim Sönmez, Eskiçağlardan Günümüze Kulu, Konya, 2004 dizgi Ofset).<br>
      Böğrüdelik Köyüne Canbegli Aşireti yerleşir. Böğrüdelik 1928 yılında ilçe merkezi olur. Cihanbeyli'de &quot;Mürseli Efendi&quot; Nahiyesi adını alarak bu ilçeye bağlanır. 1929 yılında Böğrüdelik'ten ilçelik kaldırılır, Mürseli Efendi Bucağı ilçe olur. Böğrüdelik'te bulunan. Canbeyli Aşiretinin adına uygun olarak Mürseli Efendi adı Cihanbeyli'ye dönüştürülür. Yeni kurulan ilçeye Kulu Köyü, Altınekin ve Yeniceoba Bucakları bağlanır. Daha sonra 1954 yılında Kulu, 1987 yılında da Altınekin ilçe merkezi durumuna getirilerek Cihanbeyli'den ayrılmışlardır. Cihanbeyli, İç Anadolu Bölgesinin orta kısımlarına düşer. Bağlı olduğu Konya ilinin 100 km kuzeyinde, Tuz Gölünün batısındadır. 32-34 derece doğu meridyenleri ile 38-39 derece kuzey parelelleri arasında kalır. Ayrıca Türkiye'nin yüzölçümü bakmından en büyük ilçesidir. Cihanbeyli, kuzeye doğru uzanan Konya Ovası'nın devamı gibidir. İlçenin bulunduğu kesimler, geniş yayla özelliği gösterir. Ova-yayla özellikleri Ankara'ya doğru Kulu ilçesi komşusunu da alarak sürer. Ovaların, deniz yüzeyinden yüksekliği genellikle 950 ile 1000 metre arasındadır. Yayla kısımlarının deniz yüksekliği 1000 metreyi aşar.</h6>
  </div>
  <h3><a href="#">Derbent</a></h3>
  <div>
    <p><img src="images/derbent.jpg" width="550" height="413"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Derbent, Konya ilinin bir ilçesidir.       Derbent Konya'ya 78 km mesafede 1930 yılında kasaba, 1990 yılında ilçe olmuş küçük bir yerleşim birimidir.       Konya'ya uzaklığı Beyşehir yolundan gidilip Ilgın sapağından ulaşım sağlanırsa 78 km olup ana yolu bu istikamettir. Fakat yine Beyşehir yolu istikametinde giderken Altınapa barajına inmeden sağa girilir ve Başara kavak yolu kullanılırsa mesafe 55 Km dir fakat bu yol çok dar ve virajlıdır.       Yüzölçümü 300 Km2 olup, bunun yaklaşık 10 Km2 si sulanılabilir vaziyette olan toplam 156 Km2 lik alanı tarım arazisidir. Kalan kısmı ise yerleşim yerleri ile orman ve mera arazisidir. Osmanlı Döneminde, “derbent” kelimesi teşkilat anlamında kullanılmıştır. Bu anlamda, dağlar üzerindeki geçitlerde ve boğazlarda kullanılan karakollara “derbent” denilmiştir.       Derbent, Selçuklular döneminde “Eşrefoğulları Beyliği” sınırları içinde kalmıştır. Eşrefoğulları Beylik sınırları; Beyşehir ve Seydişehir'den sonra, Ilgın, Bolvadin ve Akşehir sınırlarını içine alır. Bozkır, Şarkîkaraağaç, Yalvaç, Gelendost, Kıreli, Doğanhisar ve hatta Çal gibi şehirler de zaman zaman beylik sınırlarına dâhil olmuştur.</h6>
  </div>
  <h3><a href="#">Derebucak</a></h3>
  <div>
    <p><img src="images/derebucak.fw.png" width="620" height="400"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Derebucak, Konya'nın bir ilçesidir. Baraj inşaatı, yağlı güreşler ve inşaat yoğunluğu ile tanınmıştır.
      Derebucak'ın ne zaman kurulduğu kesin olarak bilinmemekle beraber eldeki mevcut bilgilerden; Bayram Yeri, Yukarı Köy, Balat, Işıklar, Çukurlar ve Seniryeri adlı mevkilerden toplanarak bugünkü Derebucak'ı kurdukları sanılmaktadır. Kuruluş yılları Anadolu Selçuklu Devleti 'nin egemen olduğu dönemlere rastlamaktadır.
      Pek fazla tarihi eserin bulunmadığı ilçede en göze çarpan kalıntılar Suluin Mağarası'ndakilerdir. Bu mağaralarda Aziz ve Azizelerin bulunduğu 14 fresko bulunmaktadır. Söz konusu mağaralar koruma altına alınmıştır. Yine Taşlıpınar Hitit kabartmalarının ne zaman yapıldığına ilişkin kesin tarih bilinmemektedir.
      Ayrıca tabii güzelliklerden yine Körikini Mağaraları, Balat Mağarası, Düden gibi yerleri de sayabiliriz. Balat Mağarası'nın Türkiye'nin en uzun (1900 m.) mağaralarından olduğu belirtilmektedir.
      İlçe, Konya ilinin Akdeniz Bölgesi kesiminde Antalya sınırında Torosların arasında yer almaktadır. Bu nedenle karasal-geçiş iklimi hüküm sürmektedir. İlçe merkezinin toplam nüfusu 1990 sayımlara göre 5215 köy ve kasabalarıyla birlikte 15,989 olarak tespit edilmiştir.</h6>
  </div>
  <h3><a href="#">Doğanhisar</a></h3>
  <div>
    <p><img src="images/doganhisar.jpg" width="500" height="375"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>İlçe Merkezi Sultan Dağlarının Kuzey Doğuya bakan eteklerinde kurulmuştur.Konya İl merkezine 122 km. uzaklıkta bulunmaktadır. Doğuda Ilgın İlçesine, Güneyde Hüyük İlçesine, Batıda Isparta İli, Kuzey Batıda Akşehir İlçesine, Kuzeyde Ilgın İlçesi Argıthanı kasabası ile komşudur. İlçenin Yüzölçümü 519.5 Km. olup, denizden yüksekliğin 1220 metredir.Merkez Belediye sınırları 93 Km2 dir.
      Yağışlar İlkbahar ve sonbaharda olmak üzere 2-3 ay kadar sürer yazları kurak ve sıcak, kışları soğuk ve yağışlıdır, genel olarak karasal iklim hüküm sürer.</h6>
    <h6>Doğanhisar M.Ö. 500 yıllarında Metyos adıyla kurulmuştur. M.S. 395 yılında Bizans İmparatorluğunun eline geçmiş M.S 704-708 yıllarında Emevi ve Abbasi ordularının taarruzlarına uğramış bu savaşlarda şehit olan Seyyid Ahmet’in mezarı Kızılışık Mevkisinde bulunmaktadır. 1071 Malazgirt Savaşına müteakip Selçukluların batıya yayılışları sırasında 1110 yılında Doğanhisar Türk hakimiyetine geçmiştir. Şehrin adı Selçukluların arması DOĞAN kuşuna izafeten “DOĞAN KALESİ” olarak değişmiştir.Daha sonra Doğanhisar adını almıştır.</h6>
  </div>
  <h3><a href="#">Emirgazi</a></h3>
  <div>
    <p><img src="images/emirgazi.jpg" width="500" height="375"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>İç Anadolu Bölgesi’nde, Konya İli’ne bağlı bir ilçe olan Emirgazi; doğusunda Niğde ili, güneyinde Ereğli İlçesi, batısında Karapınar İlçesi ve kuzeyinde Aksaray İli ile çevrilidir. İlçe toprakları bazı bölümleri engebeli olmasına rağmen genellikle ovalık ve bozkır görünümündedir. İlçenin güneyindeki Karacadağ’da ormanlık alanlar bulunmaktadır. İlçe içerisinde akarsu veya gölet gibi su kaynakları bulunmamaktadır. İl merkezine 140 km. uzaklıktaki ilçe, deniz seviyesinden 962 m. yüksekliktedir. Yüzölçümü 829 km², toplam nüfusu ise 10500’dir.
      İlçede karasal iklim hüküm sürmekte olup, kışlar soğuk ve sert, yazlar da sıcak ve kuraktır. Emirgazi ilçesi İç Anadolu’nun en az yağış alan bölgesidir.</h6>
    <h6>öredeki ilk yerleşimin Hititler döneminde başladığı, Eski Kışla (Dikilitaş - Yukarıkışla) ile Arısama (Belkaya)’da yapılan kazılarda ele geçen çivi yazılı tabletlerden anlaşılmaktadır. İlçen,n Kuzeyindeki Kötü Dağ(Arısama Dağı), tarihi öneme sahip, kale, kaya oyması, kilise ve büyük yeraltı şehirleri barındırmaktadır. Dağın batı yamaçlarında bulunan Eskikışla yerleşkesinde, dağın tarihî değerini Hitit hiyerogliflerine benzerlik gösteren fakat değişik bir hiyeroglif yazısı ile yazılmış 2 adet sunak ve 3 adet kitabe bulunmuştur. Yazıtların tercümesi tartışmalıdır. Sunak ve kitabeler İstanbul Arkeoloji Müzesi'nde sergilenmektedir. Hitit dönemine ait olduğu sanılan ve Eski Kışla olarak isimlendirilen yerleşim merkezi üzerindeki kale ve yer altı şehrini Roma ve Bizanslılar da kullanmışlardır. Anadolu’ya Türk boylarının yerleşmesinden sonra bu kaleye ve bugünkü Emirgazi’nin bulunduğu yerler Anadolu Selçukluları'nın egemenliğine girmiştir.<br>
      Osmanlı salnamelerinde isminden söz edilmeyen Emirgazi, Cumhuriyet döneminde köy konumunda olup, 1990 yılında ilçe olmuştur.</h6>
  </div>
  <h3><a href="#">Ereğli</a></h3>
  <div>
    <p><img src="images/eregli.jpg" width="600" height="392"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Önemli bir ilçe olan Ereğli, gerek milattan önce gerekse milattan sonra pekçok farklı uygarlığın birleşme noktası olmuştur. Ereğli, Anadolu Selçuklu hükümdarları tarafından Türk egemenliğine sokulmuş, daha sonra devletin dağılmasıyla Karamanoğulları Beyliğine başkentlik yapmıştır. Daha sonra Fatih Sultan Mehmed tarafından feth olunarak Osmanlı Devleti topraklarına geçmiştir. Cumhuriyetin ilanıyla Konya'ya bağlı bir ilçe olarak varlığını sürdürmeye devam etmiştir.</h6>
    <h6>Ereğli,, Konya ilin güneydoğusunda yer alan Aksaray, Niğde, Karaman ve Mersin'e sınırı olan ve Konya'ya 147 km uzaklıkta bulunan ilçe.<br>
      Ereğli adını; Bizans İmparatoru Herakliyüs adı ise Yunan mitolojisinde yarı tanrılaşmış bir kahraman olan Herakles'ten gelmektedir. “Herakliyüs” kelimesi zaman içinde Türkçenin ses yapısına uygun olarak;<br>
      Herakle &gt; İrakle &gt; Eregle &gt; Eregli &gt; Eregliyye &gt; Ereğli şeklini almıştır.<br>
      Evliya Çelebi Seyahatnamesinde ise I. Alaeddin Keykubad'ın Ereğli'den bir sefer dönüşü geçerken Peygamber Pınar'ı denilen (şu anda Akhüyük köyünde bulunan) çamurun, yaralı askerlerinin yaralarına şifa olduğundan dolayı buraya Erkili (Ereğli) dediği için adını buradan aldığı yazılır.<br>
      Tarih boyunca Hitit, Asur, Kimmer, Frig, Lidya, Pers, İskender İmparatorluğu, Roma İmparatorluğu ve Bizans idaresinde kalan Ereğli, 9 asırda Bizans ile Abbasiler arasındaki mücadeleye sahne oldu. Anadolu Selçukluları zamanında Türklerin idaresine giren ve 1211-1216 arası Kilikya Ermeni Krallığı işgalinde kalan Ereğli, Anadolu Beylikleri zamanında Nure Sufi Bey'in kurduğu Karamanoğlu Beyliğinin 1250-1256 arası ilk başkenti olmuştur.[3] Fatih Sultan Mehmet devrinde Osmanlı topraklarına katıldı. 1553'de Kanuni Sultan Süleyman İran seferi dönüşünde çadır kurup konaklamış ve oğlu Şehzade Mustafa'yı Ereğlide boğdurtmuştur. 20 asırda Bağdat Demiryolunun geçmesi ile Ereğli'nin önemi daha da arttı. Osmanlı Devletinin son döneminde Konya Vilayetine bağlı bir kaza merkezi olan Ereğli, cumhuriyet döneminde de il olma durumunu devam ettirdi.</h6>
  </div>
  <h3><a href="#">Güneysınır</a></h3>
  <div>
    <p><img src="images/guneysinir.jpg" width="601" height="330"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Güneysınır, Konya ilinin bir ilçesidir. Konya'ya 75 km uzaklıkta, Konya-Karaman D715 karayolunun 11 km batısında yer alan ilçe merkezini oluşturan iki yerleşim yeri, Osmanlı döneminde Karasınır ve Elmasun olarak bilinen köyler idi. Her iki köyle ilgili kayıtlara, 1531 tarihli Muhasebe Defteri'nde ve 1584 tarihli tahrir defterlerinde rastlanmaktadır. Ayrıca Elmasun, 19. yüzyılda Batılı coğrafyacılar tarafından hazırlanan çeşitli haritalarda, örneğin Tallis tarafından yayınlanan 1851 tarihli Asia Minor haritasında gösterilmektedir. Her iki köy cumhuriyet döneminde önce Bozkır ilçesine bağlı iken 1955 yılında Çumra ilçesine bağlanmıştır. 9 Mayıs 1990 tarihinde ise Güneybağ ve Karasınır kasabaları ile Emirhan köyünün birleşmesiyle &quot;Güneysınır&quot; adını alarak ilçe statüsüne kavuşmuştur. İlçe, idare binalarının Karasınır ve Güneybağ mahallelerinin arasındaki alana taşınmasıyla bugünkü görünümüne kavuşmuştur.<br>
      Halk arasında &quot;Gavur Hüyüğü&quot; ve &quot;Güdelesin&quot; diye bilinen hüyükten ve civardaki bazı köylerden, eski çağlara ait topraktan yapılmış çanak, çömlek, tuğla ile madenî eşya kalıntılarının ortaya çıkmış olması; ilçede yerleşik hayatın çok eski zamanlarda başlamış olduğuna işaret etmektedir. Bilge Umar'ın Türkiye'deki Tarihsel Adlar kitabında Elmasun adının etimolojisi Hititlerden önce Orta Anadolu'ya hakim olan Luwi diline dayandırılmaktadır.<br>
      İlçenin adı, Güneybağ'daki &quot;Güney&quot; ile Karasınır'daki &quot;sınır&quot; kelimelerinin birleştirilmesiyle türetilmiştir. 1990'da ilçenin kuruluşu sırasında, Güneybağ'daki &quot;bağ&quot; ile Karasınır'daki &quot;Kara&quot; kelimelerinin birleştirilmesi sonucunda ilçenin adının Karabağ olması önerildiyse de, aynı adı taşıyan bir kasabanın Cihanbeyli ilçesinde bulunması nedeniyle Güneysınır tercih edilmiştir.</h6>
  </div>
  <h3><a href="#">Hadim</a></h3>
  <div>
    <p><img src="images/hadim.jpg" width="614" height="426"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Hadim, Konya ilinin 31 ilçesinden birisi. Konya'nın güneyinde yer alan ilçe, güneyde Taşkent, kuzeyde Bozkır ilçeleriyle doğuda Karaman ve batıda Antalya ile çevrilidir.</h6>
    <h6>37° K, 33° D koordinatlarında yer alan ilçe, Orta Toroslar'da bir vadi üzerine konumlanmıştır. Konya il merkezine 128 kilometre uzaklıkta bulunan ilçe, Akdeniz Bölgesi'nde yer almakta olup Akdeniz'e kuş uçuşu 70 kilometredir. Hadim coğrafi olarak Akdeniz Bölgesi'nde yer almasına rağmen Akdeniz ikliminin karakteristik özelliklerini tam olarak göstermez. Bu bakımdan Karasal iklim ve Akdeniz iklimi arasında geçiş özelliği göstermektedir. İlçe Karasal iklimin hakim olduğu yörelere oranla daha fazla yağış almaktadır. Ayrıca en yağışlı mevsim kış, en kurak mevsim yazdır.</h6>
  </div>
  <h3><a href="#">Halkapınar</a></h3>
  <div>
    <p><img src="images/halkapinar.fw.png" width="620" height="425"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Halkapınar, İç Anadolu'nun güney dogusunda, Konya İli'nin de en doğu ucunda, il'e en uzak İlçelerden biri durumundadır. İlçe orta Toroslar'ın kuzey eteklerinde kurulmuş olup, sınırları içerisinde İvriz Çayı ve Delimahmutlu Deresi geçmektedir. Her iki çay 1985 yılında işletmeye açılan İvriz barajına dökülmektedir. İlçenin rakımı 1100 m civarındadır.<br>
      Delimahmutlu Çayı kenarında ya da yakınında 12 köy kuruludur. İvriz çayının çıktığı yerde de Aydinkent (İvriz) köyü kuruludur.<br>
      İlçe; 37,1 ile 37,6 kuzey enlemi ve 34 ile 34,5 doğu boylamı arasında, yüzölçümü 362 km²'dir. Kuzeyinde Ereğli ilçesi, doğusunda Ulukışla ilçesi, güneyinde İçel ili, batısında ise Ayrancı ile yine Ereğli ilçesi yeralmaktadır.<br>
      İlçenin güneyinde bulunup, Toros Dağlarının bir parçası olan Bolkar Dağları ile kuzeyindeki Bolkar Dağlarının bir uzantısı olan Güney Dağı arasında bulunan Halkapınar, doğusunda Aydos sırtında bulunan Saybaşı adındaki yüksek bir noktada birleşir. Bu üçgenin içerisindeki vadi içerisinden geçen Delimahmutlu Deresi ilçenin ve 10 köyünün sulama suyunu karşılar.</h6>
  </div>
  <h3><a href="#">Hüyük</a></h3>
  <div>
    <p><img src="images/huyuk.jpeg" width="500" height="333"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Konya il merkezine uzaklığı 90 km'dir. Kuzeyinde Doğanhisar 30 km, güneyinde Beyşehir 35 km, batısında Beyşehir Gölü ve doğusunda Şarkikaraağaç 38 km'dir.
      İlçenin kuzey ve doğusu dağlar ile çevrilidir. Batısında Beyşehir Gölü ve güneyi engebeli ve yayvan sırtlarla çevrilidir.
      Köyleri:Tolca, Budak, Kıreli, Göçeri, İlmen, Yenice, Çukurkent, Çavuş, Değirmenaltı, Görünmez, Pınarbaşı, Köşk, Suludere, Mutlu, Burunsuz, Başlamış, Selki, İmrenler, Çamlıca. En kuzeydeki köy İlmen, en batıdaki köy Tolca, En doğudaki köy Çamlıca, en güneydeki köy Yenice ve Köşk'tür.</h6>
    <h6>Hüyük İlçesi 1210 yıllarında Horasandan Konya'ya göç eden Şeyh İdris ve kardeşi Şeyh Bahri tarafından kurulmuştur. Bu isimleri geçen zatlara ait türbeler halen İlçe merkezinde bulunmaktadır. Ayrıca bölgenin yontma taş devrinden beri iskana tabi tutulduğu, muhtelif yerlerde bulunan çeşitli tarihi eşyalardan anlaşılmıştır.[kaynak belirtilmeli]<br>
      Dokuz köyü ve on beldesi bulunmaktadır. Belediyeler: Burunsuz, Çamlıca, Çavuş, Göçeri, İlmen, İmrenler, Köşk, Kıreli, Mutlu, Selki. Hüyük ; 1943 yılında bucak, 1955 yılında belediye, 04.07.1987 tarih ve 3392 Sayılı Kanunla ilçe olmuştur.</h6>
  </div>
  <h3><a href="#">Ilgın</a></h3>
  <div>
    <p><img src="images/ilgin.jpg" width="545" height="409"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Ilgın, Konya ilinin bir ilçesidir.
      Ilgın ilçesi Konya'ya 86 km mesafede bir ilçedir. İlçede şeker fabrikası ve kaplıcalar bulunmaktadır. Ayrıca ilçede Selçuk Üniversitesi Ilgın Meslek Yüksek Okulu eğitim öğretim faaliyetlerini sürdürmektedir.
      Ilgın, Çavuşçugöl kenarında, Hamam Dağı olarak adlandırılan alanda ve Ilgın'ın güneyinde yer alan ormanlık mahallerde piknik yapma, avcılıkla meşgul olma, yürüyüş turlarına çıkma imkânı vardır.</h6>
  </div><h3><a href="#">Kadınhanı</a></h3>
  <div>
    <p><img src="images/kadinhan.jpg" width="433" height="288"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>İl merkezine 56 km uzaklıktadır. Eski ismi Saideli'dir.<br>
      Tahinli pidesi meşhur olan ilçenin geçim kaynağı tarımdır.<br>
      Konya İli’ne bağlı Kadınhanı ilçemiz üzerinde çok eski medeniyetler kurulmuş, en son Selçuklu Sultanlarından Muzafferüddin Mahmut kızı Raziye Hatun tarafından 1223 tarihi ipek yolu üzerinde yaptırılan kervansaray çevresinde yerleşim gerçekleşmiş, Karamanoğulları zamanında il merkezi olarak yönetilmiştir.<br>
      Yüzölçümü : 1127 km2<br>
      Nüfusu : 41.892<br>
      İlçe Merkezi : 14.803<br>
      Köyler : 27.089<br>
      Rakım : 1030 m.<br>
      Kadınhanı ilçemiz klasik dönemde Pira adıyla anılmış ve uzun süre Doğu Roma İmparatorluğu tarafından yurt edinilmiştir. Asıl ününü Selçuklular devrinde kazanan ilçemiz, Selçuklu sarayına mensup olduğu sanılan, Mahmut kızı Raziye Hatun'un 1223 yılında yaptırmış olduğu kışlık han etrafında 1256 yılından itibaren oluşmaya başlamıştır.<br>
      Hanın inşasında Romalılar'a ait resimli mezar taşları kullanılmış ancak bu taşların nereden toplanıp getirildiği anlaşılmamaktadır. Kadınhanı adını bu handan almıştır. Bilahare bu bölge Selçuklu Beyleri'nden Sait adındaki bir paşaya arpalık olarak verildiği ve bundan sonra bu kasabasının &quot;Saideli&quot; adıyla anıldığı bilinmektedir.</h6>
  </div>
  <h3><a href="#">Karapınar</a></h3>
  <div>
    <p><img src="images/karapinar.JPG" width="450" height="310"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Karapınar Konya ilinin bir ilçesidir.<br>
      Karapınar, Türkiye'nin tek çöl toprağı sayılabilir. Meke Tuzlası bu ilçede yer almaktadır. Karapınar toprakları %60'lara varan oranda kireçli bir yapıya sahiptir. İlçede birçok obruk mevcuttur. Meke tuzlası, Acıgöl, Meyil gölü, Çıralı gölü gibi yeraltı gölleri meşhurdur. Ayrıca birçok yeraltı şehiri de mevcuttur.<br>
      En önemli özelliği ise yeryüzündeki en büyük rüzgar erozyonunu önleme sahasının bu ilçede yapılmış olmasıdır[3].Proje 13.000ha alanda, 1962 yılında Toprak Su genel müdürlüğünce başlamış, 1999 yılında tamamlanmıştır.[4] Bu proje yeryüzünde uygulanan en başarılı 10 projeden birisi kabul edilmiştir.<br>
      Konya'nın ilçelerinden biri olan Karapınar, kent merkezinin 94 km doğusundadır. Batısında Konya, Karatay ve Çumra: güneydoğusunda Ereğli ve Adana: güneyinde Karaman: kuzeyinde Aksaray vardır. Ova üzerine kurulu olan ilçenin çok eski yerleşim yerlerinden biri olduğu bilinmektedir. Tarihi İpek Yolu üzerinde bulunması, ilginç jeolojik yapısı, suları farklı özellikler içeren ve dünyada bir benzeri daha bulunmayan krater gölleri ile Türkiye'nin de sayılı turizm alanlarından biri olarak tanınan Karapınar ayrıca erozyonun da önüne geçebilen nadir bölgelerden biridir. İlçenin merkez nüfusu 37.881 olup; bu sayı köyler ve beldelerle birlikte 60.000'e yaklaşmaktadır. 2670 km2'lik yüzölçümü ile Konya'nın büyük ilçelerinden biridir. Kendisine bağlı 4 beldesi, 15 köyü ve 25 mahallesi vardır. Doğusunda Ereğli , kuzeyinde Emirgazi ve batısında Çumra ve Karatay ilçeleri ile çevrili olan Karapınar; Konya- Adana yolu üzerindedir.</h6>
  </div>
  <h3><a href="#">Karatay</a></h3>
  <div>
    <p><img src="images/karatay.jpeg" width="520" height="300"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Karatay, Konya ilinin üç merkez ilçesinden birisidir. Karatay ilçesinin yüzölçümü 2780 km², denizden yüksekliği ise 1015 metredir.<br>
      Karatay'da Mevlana müzesi bulunduğundan çok yoğun bir şekilde yerli ve yabancı turist Karatay'a gelmektedir.</h6>
  </div>
  <h3><a href="#">Kulu</a></h3>
  <div>
    <p><img src="images/kulu.jpg" width="530" height="346"  alt=""/>
</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Kulu, Ankara'ya 1 saat, il merkezine 1,5 saat uzaklıktadır. İlçenin yerli halkının büyük bir kısmı yörüktür. İlçeye daha sonraları Doğu ve Güneydoğu Anadolu'nun muhtelif yerlerinden gelen kürt aşiretler (Rişvan aşireti,Şeyhbizinli Aşireti vs.) yerleştirilmiştir. 1853-1856 Osmanlı-Rus Kırım savasından sonra Anadolu'ya göç eden Nogay türklerinin büyük bir kısmı ilçeye ve çevresine yerleştilmişlerdir. Kozmopolit bir yapıya sahiptir. İlçe halkı Yörükler, Kürtler, Nogaylar, Türkmenlerden oluşmuştur. İlçeye bağlı Kozanlı ve Karacadağ kasabasında, Altılar ve Yaraşlı köyünde tarihi mağaralar bulunmaktadır. Ayrıca İlçenin 3 km. doğusundaki Düden Gölü 183 çeşit kuşu barındıran bir doğa harikasıdır. Kozanlı yakınlarındaki Gökgöl de hem çok sayıdaki kuş türünün gözlenebildiği doğal bir güzellik, hem de her yıl yapılan şenlikleriyle halkın uğrak ve mesire yeri durumundadır.</h6>
  </div>
  <h3><a href="#">Meram</a></h3>
  <div>
    <p><img src="images/meram.fw.png" width="600" height="450"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Meram, Konya ilinin merkez ilçelerinden olup, şehrin güneybatı kısmında yer alır. Ankara-Konya, Isparta-Konya, Antalya-Konya, Mersin-Konya ve Adana-Konya olmak üzere beş önemli yolun geçtiği merkezdedir.<br>
      Tarımsal alanların çok olduğu ilçenin büyük bir bölümü sit alanı kapsamında olduğundan, birçok bölgede yapılaşmaya izin verilmemektedir. Altınapa’dan gelip, tarihi Meram Köprüsü’nden, Meram Eski Yol'u takip ederek tarımsal alanları sulayan Meram Çayı da adından da anlaşılacağı üzere ilçede bulunmaktadır.<br>
      Konya Üniversitesi Eğitim Fakültesi başta olmak üzere, İlahiyat Fakültesi ve Tıp Fakültesi bu ilçenin sınırları içindedir.<br>
      Altınapa Barajından gelen Meram Deresi etrafındaki çamlıklar, çay bahçeleri, piknik alanları ve dinlenme tesislerinden oluşan bir mesire yeridir. Yazın en sıcak günlerindeki serin, esintili ve çam kokulu havası, akarsuyu, gül bahçeleri ve ormanlık alanlarıyla yerli ve yabancı misafirlerin dinlenme yeri olmuştur.<br>
      Evliya Çelebi, seyahatnamesinde gezip gördüğü yerler arasında bağ, bahçe, bostanlardan söz ederken bağlık-bahçelik bu yerlere her defasında “Bağ-ı Meram” ifadesini kullanmaktadır. Hatta buraların Konya’nın Meramı gibi olduğunu ifade etmektedir.</h6>
  </div>
  <h3><a href="#">Sarayönü</a></h3>
  <div>
    <p><img src="images/sarayonu.jpg" width="600" height="320"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Sarayönü, Konya ili'ne bağlı bir ilçe. Şehir merkezine 52 km uzaklıktadır.</h6>
  </div>
  <h3><a href="#">Selçuklu</a></h3>
  <div>
    <p><img src="images/selcuklu.fw.png" width="400" height="400"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Selçuklu, Konya iline bağlı merkez ilçedir.<br>

      Konya’nın kuzeyinde yer alan Selçuklu, Sarayönü, Kadınhanı, Derbent, Altınekin, Meram ve Karatay ilçeleriyle sınırdır.<br>
      Selçuklu bir göl tabanı olan ovada kurulmuştur. Hemen batısında Takkeli ve Loras dağları yükselmektedir.<br>
      Selçuklu kurak bir iklime sahip olup, yazları çok sıcak, kışın kar, ilkbaharda bol yağmur yağar. Yağış ortalaması çevre illere göre daha düşüktür. Bununla birlikte kurak geçmeyen yıllardaki yağış, ziraat için yeterli olmaktadır.<br>
      Sulama amacıyla kullanılan Sille ve kısmen Altınapa barajlarını bünyesinde bulunduran Selçuklu, genel konumu itibari ile ovalık, batı tarafı kısmen dağlıktır. Bitki örtüsü, bozkır iklimi özelliklerindedir.<br>
      Selçuklu ilçesi Konya'daki GSYİH'nın yani üretimin % 25’ini karşılamaktadır. Bu nedenle Konya’da katma değeri en yüksek olan yer Selçuklu’dur. Şehirleşme oranı % 80’in üzerindedir. Selçuklu’da önemli belediyecilik hizmetleri planlanmış ve uygulanmış, şehrin geleceğine yön veren ve planlı gelişmesini öngören çalışmalar yapılmıştır. İmar uygulamaları, altyapı asfalt, çevre, turizm, kültür-sanat ve sosyal içerikli çalışmalarla Selçuklu ilçesi yaşanabilir, bir kent olma özelliğini sürdürmektedir.</h6>
  </div>
  <h3><a href="#">Seydişehir</a></h3>
  <div>
    <p><img src="images/seydisehir.fw.png" width="620" height="450"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Seydişehir, Akdeniz Bölgesi'nin Göller Yöresinde Konya'nın güneybatısında Konya iline bağlı bir ilçedir.Ankara-Konya-Antalya karayolu üzerinde, Torosların kuzey eteklerinde, Çarşamba Çayı boyunca uzanan verimli bir vadi olan Suğla Ovası'nda bulunur. İlçe merkezinin denizden yüksekliği yaklaşık 1120 m.dir. İlçe merkezi, Konya'ya 85 km, Antalya'ya ise 215 km. uzaklıktadır. 2.207 km²'lik ilçe toprakları, kuzeydoğuda Konya(Meram), doğuda Akören, güneyde Ahırlı, Yalıhüyük ve Akseki (Antalya), batıda Derebucak, kuzeybatıda da Beyşehir ile çevrilidir. Kuzeybatıdaki Beyşehir Gölü ile güneydoğudaki Suğla Gölü arasındaki geniş ve uzun arazinin büyük kısmı verimli Suğla Ovası'dır. Bu ova, Beyşehir ve Suğla Gölleri arasında uzanan Çarşamba Çayı ile sulanır. Bölgedeki en yüksek noktası 2.500 metreyi aşan Geyik Dağları, kuş uçuşu mesafesi 100 km.'den az olan Akdeniz'in ılıman ikliminin ilçede de hissedilmesine mani olur. İlçenin iklimi, Akdeniz ve karasal iklimlerinin geçiş özelliğini taşır.Bunun yanı sıra kış mevsimlerinde ilçede her yıl yoğun kar yağışları da görülmektedir.</h6>
  </div>
  <h3><a href="#">Taşkent</a></h3>
  <div>
    <p><img src="images/taskent.jpg" width="500" height="375"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Taşkent, Konya ilinin 31 ilçesinden birisi. Konya'nın en güney ucunda yer alan ilçe, Karaman ve Antalya illerine ve diğer bir Konya ilçesi olan Hadim ile komşudur. 11 Ağustos 1988 tarihinde Hadim'den ayrılarak ilçe statüsüne kavuşmuştur.</h6>
    <h6>Konya'nın Taşkent ilçesi, heybetli bir kayalığın üzerinde Taşeli Platosu'nu seyrediyor. Hadim Göksu, Çoğlağı Kapızı içinde &quot;süzek&quot;lerden geçiyor. Suyun yatağına yamaçlardan taşların dökülmesiyle oluşan süzekler, muhtemelen uzun yıllar sonra yerköprüye dönüşecek. Taşkent ilçesi Konya il merkezinin 133 kilometre güneyinde bulunmaktadır. Rakımı 1620 metredir. Coğrafi bölge olarak Akdeniz Bölgesinde yer alan ilçenin, Akdeniz'e kuş uçuşu uzaklığı yaklaşık 100 kilometredir. İlçe Akdeniz Bölgesi'nde yer almasına rağmen, Orta Torosların yüksek rakımlı bir bölgesinde bulunmasından dolayı hem Akdeniz hem de Karasal iklimin özelliklerini gösterir. Taşkent'te genellikle kışlar soğuk ve karlı, yazlar sıcak ve kurak geçer.</h6>
    <h6>Taşkent'in daha önceki ismi Pirlerkondu'dur. 1930 yılında Konya Valisi İzzet Bey tarafından Taşkent olarak isimlendirilmiş ve daha sonraları bu isimle anılmıştır. Taşkent nahiyesi 4 Temmuz 1987 tarih ve 19507 Sayılı Resmi Gazete'de yayımlanarak yürürlüğe giren 3392 Sayılı kanun gereğince ilçe olmuş, 11 Ağustos 1988 tarihinden itibaren resmi olarak faaliyete geçmiştir.</h6>
  </div>
  <h3><a href="#">Tuzlukçu</a></h3>
  <div>
    <p><img src="images/tuzlukcu.jpg" width="600" height="450"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Konya ilinin bir ilçesidir. Cumhuriyetin ilk yıllarında Akşehir ilçesine bağlı bir köy olan Tuzlukçu 1929 yılında Aşağı ve Yukarı Tuzlukçu'nun birleşmesiyle nahiye olmuştur. 1949 yılında nüfusunun 2000'i aşması sonucu belediye teşkilatı kurulmuş, 9 Mayıs 1990 tarihinde de ilçe olmuştur.</h6>
  </div>
  <h3><a href="#">Yağlıhüyük</a></h3>
  <div>
    <p><img src="images/yalihuyuk.fw.png" width="620" height="406"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Yalıhüyük Konya ilinin bir ilçesidir. Yalıhüyük, daha önce Bozkır ilçesine bağlı bir belde belediyesi iken, 1990 yılında ilçe hüviyeti kazanmıştır. 2010 yılı itibariyle Türkiye'nin en küçük ilçesi konumundadır.</h6>
    <h6>Yalıhüyükte bulunan birçok eser gün ışığına çıkmayı beklemekte ve birçok tarihi eserde  ;tarihi eser yağmacılarının eline geçmiş bir çoğu ise talan edilmiştir.bazı tarihi eserlerinde gayri resmi yollardan kayıt altına alınarak sergilendigi düşünülmektedir.Yalihüyükte bulunan birçok evin duvarlarında kabartma taş resimler bulunmaktadır.günümüze kadar korunabilen bazı eserlerin üzerindeki yazılardan ve kabartma resimlerden anlaşılan Bizans dönemi Efes kültürüne ait izler vardir.<br>
      Bozkır’a 20 km uzaklıkta bulunan ilçe, Suğla Gölü (Trogidis,trogitis) kıyısında bulunan höyükten ismini almıştır. Bu bölge antik çağlarda İsauria Bölgesi olarak anılmaktadır. Bölgenin başkenti ise Bozkır ilçesine bağlı Ulupınar köyünün doğusunda yer alan ve bugün Zengibar Kalesi olarak bilinen isauria’dır. Kısacası kazı ve sondaj çalışmalarından anlaşıldığı kadarıyla Yalıhüyük ve çevresi tarihinin, Neolitik ve Kalkolitik dönemlere kadar gittiği görülmüştür.<br>
      Tarihi, çevre ilçeler ve Konya Tarihi ile ortak özelliklere sahiptir. Yaklaşık 200 yıl öncesi toprak kayması görülmesi üzerine Suğla Gölü yakınına taşındığı bilinmektedir. Yeni yerleşim yerinin seçilmesinde Suğla Gölü alanının daralması ve gölden daha fazla yararlanma arzusunun dikkate alındığı ifade edilmektedir.<br>
      İlçe merkezindeki Höyük ve çevresi &quot;Sit Alanı&quot; ilan edildiğinden imara kapatılmıştır. Höyük'te bugüne kadar hiçbir arkeolojik araştırma ve kazı yapılmadığından ilçe tarihine kaynak olacak bilgilere ulaşılamamıştır.</h6>
  </div>
  <h3><a href="#">Yeniceoba</a></h3>
  <div>
    <p><img src="images/yeniceoba.fw.png" width="620" height="450"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Yeniceoba Konya ili Cihanbeyli ilçesine bağlı bir beldedir. Belediye Başkanı İlyas Kara'dır.<br>
      2012 yılı Türkiye İstatistik Kurumu verilerine göre, Yeniceoba Beldesinde 6.872 kişi yaşamaktadır. Ancak bu nüfus yurt dışında çalışan işçilerin ve Büyükşehirlerde eğitim amacıyla bulunan halkımızın yaz aylarında Yeniceoba'ya dönmesi ile nüfus 15.000-20.000 arasında kişi bulunmaktadır.<br>
      Yeniceoba'nın coğrafi yapısı üzerinde herhangi bir göl, dağ, tepe ve deniz gibi bir kaynak olmayıp düz ova olarak uzanmaktadır. İç Anadolu Bölgesi'nin orta kısmında yer almaktadır. Mücavir alan sınırı yaklaşık 400 km²'dir. Bu alanı ile Türkiye'nin en büyük yüzölçümüne sahip kasabaları arasındadır ve Cihanbeyli'ye bağlı en büyük yerleşim birimidir. Ortalama yükseltisi 950 metre'dir.<br>
      Yeniceoba'nın kuzeyinde Haymana ilçesi, kuzeydoğusunda Kulu ilçesi, batısında Yunak ilçesi ve güneyinde ise idari yönden bağlı olduğu Cihanbeyli ilçesi bulunmaktadır.<br>
      Yeniceoba'nın Eski, Ulucami ve Yenice Mahalle olmak üzere üç mahalleden, Karayusuf, Tekmezar, Güzelyayla, Çelikler, Büyükkartal, Küçükkartal, Kepir ve Tol olmak üzere sekiz yayladan (mezradan) oluşmaktadır.</h6>
  </div>
  <h3><a href="#">Yunak</a></h3>
  <div>
    <p><img src="images/yunak.jpg" width="600" height="450"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Yunak, Konya ilinin bir ilçesidir. Yunak ilçesinde Türk ve Kürt kökenli vatandaşlar bulunmaktadır. Kürtler Osmanlı son döneminde bölgeye yerleştirilmişlerdir.<br>
      İç Anadolu Bölgesi’nde Konya iline bağlı bir ilçe olan Yunak, doğusunda Cihanbeyli ve Sarayönü, güneydoğusunda Kadınhanı, güneyinde Ilgın, güneybatısında Tuzlukçu, batısında Afyonkarahisar, kuzeyinde Çeltik, kuzeydoğusunda da Ankara ili ile çevrilidir. Konya’nın kuzeybatı kesiminde yer alan Yunak, 2.000 m'yi aşmayan orta yükseklikteki dalgalı düzlüklerden oluşmuştur. Cihanbeyli Platosu ilçenin güneydoğusundadır. Kuzeyde Yukarı Sakarya Ovaları olarak tanınan Turgut ve Eşme ovaları bulunmaktadır. İlçe topraklarından kaynayan Gökpınar deresi ilçe sınırları dışında Sakarya Nehri’ne katılır. Ayrıca ilçedeki Küçükhasan Gölü'nün bir bölümü Çeltik ilçesi sınırları içerisindedir piribeyli kasabasi en buyuk kasabasidir. Deniz seviyesinden 1.150 m yüksekliktedir.</h6>
  </div>
  <h3><a href="#">Çeltik</a></h3>
  <div>
    <p><img src="images/celtik.jpg" width="525" height="400"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>Çeltik, Konya ilinin bir ilçesidir.<br>
      Konya il merkezine uzaklığı 220 km olup Türkiye'de il merkezine en uzak 2.(Anamur'dan sonra; 239 km) ilçe konumunda bulunmaktadır. Ayrıca Konya ilinin bir ilçesi olmakla birlikte Afyon, Eskişehir, Ankara'ya sınırı bulunmaktadır.<br>
      İlçenin kuruluşu 11. ve 12. Yüzyıla kadar uzanmaktadır. İbrahim Hakkı Konyalı’nın &quot;Konya Tarihi&quot; adlı eserine göre Çeltik’in geçmişi Karaman Eyaletine bağlı Akçaşehir'e dayanmaktadır.Çeltik yakınlarındaki İbanın Kuyusu denilen yerde kurulan Akçaşehir 1902’de ilçe kimliği kazanmış, ancak bataklığı ve sivrisinek çokluğu sebebiyle ilçe sıfatıyla önce Hatırlı'ya verilmiş, Daha sonra da Cihanbeyli’ye aktarılmış ve 1990 yılında ilçe olmuştur.<br>
      Konya’nın kuzey batısında yer alan Çeltik, Doğuda Polatlı, batıda Emirdağ, Güneyde Yunak, Kuzeyde ise Sivrihisar ile çevrilidir. İç Batı Anadolu üzerinde kurulmuş Çeltik’te kara iklimi hüküm sürmekte, yazları sıcak ve kurak, kışları soğuk ve kar yağışlı geçmektedir. Çeltik 2 kasaba ile 7 köye sahip bulunmaktadır.</h6>
  </div>
  <h3><a href="#">Çumra</a></h3>
  <div>
    <p><img src="images/CUMRA.jpg" width="500" height="400"  alt=""/></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h6>M. Kemal Atatürk trenle Adana'ya giderken Çumra'da verdiği mola esnasında Çumra istasyonundan etrafı seyredip sulama tesis ve lojmanlarını gördükten sonra; &quot;Bu şirin beldeyi geliştirmek, buraya önem vermek lazımdır. Çumra ilçe olmaya layıktır&quot; demiştir. Atatürk'ün emri ile 26 Haziran 1926 yılında 30 Mayıs 1926 tarihli 404 sayılı Resmi Gazete'de yayınlanan, 877 sayılı kanunla Çumra İlçe merkezi haline getirilmiştir. 1936 yılında zamanın Balkanlardan Anadolu'ya gelen 300 göçmen ailesi Çumra'ya yerleşmiştir.[3]<br>
      1936 ve 1950 yıllarında gelen soydaşlarımızın Son yıllarda Çumra'ya olan göçler nüfusu hızla artırmıştır. Gelen göçler genellikle Hadim, Bozkır, Ermenek gibi ilçe ve köylerden gelenlerdir. 1961 yılında yapılan kazılarda ortaya çıkarılan MÖ 8000 yıllarına tarihlenen Çatalhöyük ören yeri ile Çumra'nın tarihi 9000 yıl öncesine dayanmaktadır.<br>
      Çumraya yerleşen göçmen ailelerinin önceden Avrupaya 'karaman ve konyadan' göç ettiğide bilinmektedir.<br>
      Rivayetlere göre; Yavuz Sultan Selim, Mısır Seferi'ne giderken Çumra üzerinden geçmiş. O zamanlar bölge bataklık halindeymiş. Yavuz askerlerine paçalarınızı çemreleyin emrini vermiş. Çemre kelimesi zamanla değişerek bu bölgeye isim olmuştur. İngiliz bilimadamlarının yaptığı bir araştırmada, Çatalhöyük mezarlarından aldıkları kemik dokularıyla bugünkü Çumra köylerinde yaşayanlardan aldıkları bazı dokuları karşılaştırdıklarında, onların Hititli olduklarını tespit etmişler.</h6>
  </div>
</div>
<script type="text/javascript">
$(function() {
	$( "#Accordion2" ).accordion(); 
});
</script>
<?php include('footer.php');
?>