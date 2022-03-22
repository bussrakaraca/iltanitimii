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
  <a href="#">Kültür</a>/
  <a href="kiyafetleri.php">Kıyafetleri</a></div>
  <div id="resim"><img src="images/erkek-kadin-kiyafet.jpg" width="550" height="500"  alt=""/></div>
<h2>KONYA YÖRESEL KIYAFETLERİ</h2>
<p>&nbsp;</p>
<p>Her ulusun, her şehrin hatta her kasaba ve köyün kendine göre gelenek halinde devam ettire geldiği bir giyiniş şekli vardır. Konya'nın Cumhuriyetten önceki yıllarda özel bir biçimde bir giyim, kuşam, görenek ve adetleri vardır. Konya'nın bu kıyafeti Akşehir'de biraz değişmekte buna karşılık şehrin hemen kıyısında bulunan Sille Bucağının tamamen değişik bir biçimde kıyafeti vardır. Şimdi de Konya'nın kadın, erkek kıyafetleri üzerinde duralım: Konya kadının ev içi ve dışarıya giyilmek üzere iki kıyafeti vardır. Başta bir çember, üstünde işlik, alta (don) şalvar, ayağında ince yemeni biçiminde terlik veya örme patik bulunurdu. Bu kadının normal günlük iş kıyafetiydi. Konya kadının dış kıyafeti şu parçalardan meydana gelmektedir.</p>
<div id="yazilar">
<h3>Kadın Kıyafetleri</h3>
<div id="resim"><img src="images/konya-kadin-kiyafetleri.jpg" width="150" height="200"  alt=""/></div>
<h4>a)İç çamaşır:</h4>
  <p>Eskiden kadın ve erkek için, iç çamaşırı bükme iplikten, ev tezgâhlarında dokunarak, çamaşır bezi denilen kıvrık pamuklu bezden yapılırdı. Buna kıvratmada denilirdi. İç gömleklerin yakaları yoktur. Erkek ve kadının kol uzunluğu bileklerine kadar uzanmaz, etekler ise diz kapakları üzerine varırdı. Göğüs kısmı açık olurdu. İç çamaşırı kol ağızları ve boğaz kenarları kadınlarda oyalarla süslenirdi. İç don belden topuk üzerine kadar uzundu, paçaları çok dardı. Bel kısmı uçkur ile bağlanır, geniş olarak dikilirdi. Dış elbiseler ise, kadın başına koyu kırmızı bir fes giyerdi. Bu fesin kirlenmemesi için, fesin içine kellepoş denilen kısa kenarlı takke giyilirdi. Fesin etrafına ipekten ince bir şifon sarılır. Bunun üzerine ayrıca bir yazma dolanırdı. Şifonun faydası, başa iğne takıldığı zaman, iğne ağırlığının dengesini sağlar, fesin üzerine iki ucu sağ ve sol omuzda bulunan renkli çember örtülürdü.</p>
   <h4> b) Entari:</h4>
   <p> Konya'dan eskiden entariye pek ilgi gösterilmezdi. Ancak gelinler, birde yaşlı kadınlar entari giyerlerdir. Çünkü işlik ve şalvar entariden daha çok giyilirdi.</p>
   <h4> c) İşlik:</h4>
    <p>İşlik vücuda yapışırcasına sıkıca dikilen bir dış giyecekti. Yakadan göğüs boşluğu üzerine uzanır, buraya kadar düğmeli ve kapalı idi. Kolları bileklere kadar uzun olup, burada kol genişliği bir düğme ile daraltılarak giderilirdi. İşliklere, ala, kadife, pazen, basma, kutmişetari, şelaki, astar, kaput, humayun, yandım alamadım ve alpaktı. Renkleri ise, mevsimine göre seçilirdi. Bahar ve yazın yeşil, koyu yeşil, beyaz, açık sarı, narçiçeği rengi ile açık mavi beğenilirdi. Sonbahar ve kışın ise koyu renklere ilgi gösterilir. Bunlar, koyu gri ve koyu mavi idi.</p>
   <h4> d) Şalvar:</h4>
  <p>  Bir kadının giydiği şalvar 8-9 metre kumaştan yapılırdı. Akşehir ve çevresinde 14 metre kumaştan bir takım elbise yapıldığı söylenir. Şalvar, belden topuklara kadar uzanır, gayet bol dikilir, çekme payı buna eklenmektedir. Paçalar oldukça dar olup, vücudun hatları şalvarın kıvrımları arasında belirsiz hale gelmektedir.</p>
   <h4> e) Hırka:</h4>
   <p> Hırkanın içi astar, üstü şelaki ve diğer kumaşlardan yapılır. İçerisine pamuk döşenerek aynı yorgan biçimi dikilmektedir. Etekleri kalçaya kadar uzun olup, bir çeşit cekete benzer.</p>
   <h4> f) Salta:</h4>
    <p>Yünlü kumaştan dikilen, kollu ve ön kısmı açık, etekleri kısa, yarım ceketi andıran bir yelektir. Saltalar çok süslü yapılır. Sırma ve kaytanlarla çeşitle bezemeler yapılır. Saltalara ayrıca madeni parlak pullarda dikilir.</p>
   <h4> g) Kebe:</h4>
   <p> Bir çeşit salta olup kolları ve göğüs kısımları işlemelidir.</p>
   <h4> h) Ayakkabı:</h4>
    <p>Deve derisinden yapılmış, parlak arka kısmı açık pabuç, yanları lastikli uzun konçlu, bir çeşit topuklu kunduradır. Ayrıca mestle de giyilirdi.</p>
   <h4> i) Süs ve Takılar:</h4>

    <p>Fesin üzerine veya göğsüne elmas iğne takılırdı. Ayrıca boğaz kısmına inci mahmudiye, hamidiye, beşibiryerde altınlar ile altın kordonlu cep saati takılırdı. Parmaklarda kıymetli taşlı yüzükler, kulaklarda elmas küpeler takılırdı. Fakat bu takılar her kadında bulunmazdı. Kollardaki çeşitli bilezikler kadının en önemli ziğnetini ve süsünü meydana getiriyordu. </p>
    </div>
    <p>&nbsp;</p>
    <div id="yazilar">
    <h3>Erkek Kıyafetleri</h3>
    <div id="resim"><img src="images/konya-erkek-kiyafetleri.jpg" width="149" height="200"  alt=""/></div>
    Konya'nın erkek kıyafetleri, birbirinden farklılık arz eder. Her erkeğin görevine göre kıyafeti de vardır. Kıyafetlerinden o kişinin ne olduğu kolayca anlaşılırdı.
    <h4>1) Ulema Kıyafeti:</h4>
    <p>Başta kırmızı veya devetüyü rengi bir fes, üzerine açıldığı zaman bir adam boyu uzunlukta beyaz tülbent sarık bulunurdu. Fesin altında aynı kadın kelleposu gibi erkeklerin giydiği ve adına terlik denilen takke vardı. Başka bir çeşidi de üç peşli, astarlı entari giyilirdi. Sonradan bu usul terk edildi. Bu entari üzerinde de şal kuşak kuşanırdı.</p>
    
  <h4>2) Esnaf Kıyafeti:</h4>
<p>Bu tip kişiler orta yaşlı kimselerden oluşurdu. Başlarında genellikle kırmızı fes, üzerine yazma sarık, sırtta koyu renklerin hâkim olduğu salta, meydani işlik, ilmiye sınıfına benzeyen şalvar, ayakta beyaz yün çorap ve yemeni belde silahlıkla şal kuşak bulunurdu.</p>
<h4>3) Efe (Hovarda) Kıyafeti:</h4>
<p>Başta açık kırmızı, uzun sivri fes, arkada uzun koca püskül üzerinde kırmızı ince cemberli sarık işlik dar ve uzun kollu, yaka kapalı, karın boşluğuna kadar etek çapraz düğmeli ve ilikli, vücuda sıkı oturmuş bir çeşit gömlek. Bu gömlek pamuklu bezden yapılır, dokunuş çizgilerine göre isim alırdı. İnce meydan, beşparmak, meydai gibi işliğin üzerine kol uçları bileklerden dört parmak yukarıda dar vaziyette, içi astarlı ön kısımları kavuşmayan salta giyilirdi.</p>
<p><strong>a) Cepken:</strong> Etek, kol, yaka ağızları kaytanla süslü olan bir çeşit saltaya benzeyen cepkendi. Cepkenin yaka ve etek kısımları işlemeliydi.
  </p>
<p><strong>b) Kuşak ve Silahlık:</strong> Kuşaklar, gürün, trablus, acem, kesmiş, Tosya şallarından yapılır. Arasına yumuşak deriden yapılmış, bir çeşit cep görevini gören kat kat bulunan silahlık kuşanılır.
  </p>
<p><strong>c) Şalvar:</strong> İlmiyle (Ulema) sınıfından farklıydı. Diz kapaklarından aşağıya kadar uzanırdı. Bu sebeple adına şalvar yerine "dizlik" denilirdi. Ayaklarında kundura ve yün örgü çorap bulunurdu.
  Cumhuriyet devrinde erkek kıyafetlerinde büyük çapta bir değişiklik olmakla beraber, kadınların giyiminde fazla bir değişiklik olmamıştır. Özellikle köylerde ve kasabalarda yaşayan kadınların en önemli giysisi şalvar, işlik, yelek ve poşudan oluşmaktadır. Ayaklara kışın mest ve lastik, yazın ise çorap ve lastik ayakkabı giyilir.
</p>
<h4>&nbsp;</h4>
<h4>4) Abdestlik:</h4>
<p>Çuhadan, softan veya kıldan yapılmış bir çeşit pardesü olup, cep yerleri olmakla beraber cep keseleri yoktu. </p>
<p><strong>a) Cübbe:</strong> Kaşmir kumaştan yapılırdı. Aynı abdestlik biçiminde olup, ceplerin hem yeri, hem kesecikleri vardı.</p>
<p> <strong>b) Lata:</strong> Yakası kalkıkça, iç göğüslerde cepleri vardı. Ağır kumaştan yapılan lata cübbeye benzerdi. Yakasından çapraz bulunan bir çeşit pardösü denilebilecek biçimdeydi.  </p>
<p><strong>c) Biniş:</strong> Kol ağızları çok geniş bir çeşit cüppedir. Ayakkabılar, kalloş kundura ve mestten ibaretti. </p></div>
<?php include('footer.php');
?>