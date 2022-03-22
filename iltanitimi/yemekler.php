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
  <a href="yemekler.php">Yemekleri</a></div>
<div id="yemekler">
  <div id="resim"><img src="images/yemekleri.fw.png" width="650" height="225"  alt=""/></div><h2> KONYA YEMEKLERİ</h2>
  <div id="yazilar">
  <h3><img src="images/etliekmek.jpg" width="200" height="150"  alt=""/>
  <h3>ETLİEKMEK:</h3>
  Güzel Konyamız ile özdeşleşmiş yöresel yemeklerden en meşhuru etli ekmektir. Etliekmek denince Konya akla gelir ve etliekmek burada yenir. Bu yüzden Konya'ya uğrayan herkes bir kez olsun mutlaka yer. Bir kişinin Konyalı olup olmadığını "etliekmek" deyişinden anlayabilirsiniz. Çünkü Konyalılar genelde hızlıca ' i ' siz : "Etlekmek" derler.
      Etliekmekte etin güzel olması ve hamurun ince olması makbuldür. Eskiden et hiçbir zaman makinede çekilmezdi. Tahta tezgâhlarda bir çift bıçakla kıyılırdı. Etin içine biber, domates, maydanoz ve istenirse soğan doğranır. Normal etliekmeklerde 60 gr kıyma, 100 gr sebze (soğan, domates, biber) kullanılır. Bu karışım mahalledeki fırına götürülür. Burada fırıncının mahareti ile mayalı hamurlar fırın küreği üzerinde elle ince ve uzun olarak açılır. İç konur ve üstü açık olarak pişirilir. 

       Günümüzde et, makinede çekilmektedir. Et, elde iki bıçak arasında doğranarak bu ekmek hazırlanırsa buna bıçak arası, et ve peynir karışık olarak yapılırsa bu çeşidine de Mevlânâ denilmektedir. Bu ekmeğin sadece peynirlisi de yapılmaktadır. Bazen ıspanaklar evde hazırlanarak, fırınlara götürülüp açık veya kapalı pişirilmesi sağlanmaktadır. Konyalı aileler, özellikle hafta sonları bu börekleri yaptırmakta ve aile bireyleri bir araya gelerek hep birlikte yenmektedir. Konya’da  sadece etliekmek üzerine ünlenmiş lokanta ve restorantlar bulunmaktadır.
      <div id="tarif">
      <h4>Etliekmek Tarifi:</h4>
       <p>(1 kişilik)
       </p>
       <p>Gerekli malzemeler:</p>
       <p> 2 soğan        </p>
       <p>2 domates         </p>
       <p>2 sivribiber         </p>
       <p>Yarım demet maydanoz         </p>
       <p>250 gr. bıçakarası et         </p>
       <p>Yarım ekmek hamuru         </p>
       <p>Tuz, karabiber </p>
       <h4>YAPILIŞI:</h4>
Soğan, domates ve biberleri küçük küçük doğrayın. Maydanozu ince ince kıyın. Doğranmış malzemeleri et ile karıştırıp tuz ve karabiber ekleyin. 
Ekmek hamurunu pide şeklinde açın. Hazırladığınız harcı hamurun üzerine yayın. 180 derece fırında 20 dakika pişirin. Sıcak servis yapın.
      </div></div>
      <div id="yazilar">
        <img src="images/sacboregi.jpg" width="200" height="150"  alt=""/><h3>SAÇ BÖREĞİ:</h3>
        <div id="tarif">
      <h4>Malzemeler:</h4>
       <p>Yeteri kadar un         </p>
       <p>Tereyağı</p>
       <p> Peynir </p>
       <p>Ispanak </p>
       <h4>YAPILIŞI:</h4>
Yeteri kadar hamur yoğrulur. Yapılacak içler hazırlanır. Hamur bezeler şeklinde hazırlanır. Hazırlanan bu bezeler yufka gibi açılır. İçine yapılacak olan (peynir veya ıspanak) konur ve saç ocağında pek gevrek olmamak şartıyla yiyecek olanın dişine göre pişirilir. Pişirilen bu börek yine yiyecek olanın kapasitesine göre yağlanır ve afiyetle yenir. 
        </div></div>
        <div id="yazilar">
        <img src="images/mevlanaboregi.jpg" width="200" height="150"  alt=""/>
        <h3>MEVLANA BÖREĞİ:</h3>
        <div id="tarif">
      <h4>Malzemeler:</h4>
      <p>1 çay bardağı yoğurt</p>
      <p> 1 çay bardağı zeytinyağı</p>
      <p> Biraz su</p>
      <p> Yarım limon suyu</p>
      <p> Biraz Tuz Alabildiği kadar un</p>
      <p> (Ayrıca içi içir yarım kilo kadar zeytinyağı ile karışmış tereyağ) </p>
      <h4>YAPILIŞI:</h4>
Bu malzemelerin hepsi konur ve güzelce yoğrulur. Küçük küçük bezeler ayrılır. Dinlenmeye bırakılır. Diğer tarafından bir iki baş soğan yarım kilo kıyma, 1 demet maydanoz, biraz karabiber. Soğanlar bir iki kaşık zeytinyağında kavrulur. Sonra kıyma da ilave edilerek kavrulur. Ateşten indikten sonra maydonozu ilave edilir. Diğer taraftan bezeler incecik açılır. Arası yağlanır tekrar açılır tekrar yağlanır. Ve bir bohça şeklinde dürülerek köşelere iç konulur ve kapatılır. Ondan sonra sıcak fırına sürülür.
        </div>
        </div>
        <div id="yazilar"><img src="images/arabasi.jpg" width="200" height="150"  alt=""/><h3>AARABAŞI ÇORBASI:</h3>
      <div id="tarif">
      <h4>Malzemeler:</h4>
      <p>Bir miktar su,</p>
      <p>Bir miktar un</p>
      <p>1 tane horoz</p>
      <p>1 kaşık karabiber</p>
      <p>1 paket yağ</p>
      <p>1 tane limon </p>
      <h4>YAPILIŞI:</h4>
      <p>ÇORBA YAPILIŞI: Bir miktar un, bol yağda kırmızılaşıncaya kadar kadar kavrulur.Daha önce pişmiş olan horoz kavrulmuş olan unun üzerine ince ince didilerek konur.Bir miktar tavuk suyu eklenir. 20 dakika kaynadıktan sonra limon ve karabiber ilave edilir. Daha sonra hamuru ile birlikte servis yapılır.        </p>
      <p>ARABAŞI HAMURU: Tencereye normal bir şekilde su konarak iyice kaynatılır.Kaynayan suyun içine azar azar un konarak tahta kaşık ile karıştırılır. Belli bir kıvama gelince un konulmadan hamur karıştırılarak iyice pişirilir.Daha sonra hamurun kolay dağılması için tepsi su ile ıslatılarak hamur tepsiye dökülerek soğutulur. Daha sonra çorba ile servis yapılır. Mide ve barsak tembelliğine çok iyi gelir. Kış aylarında sıkça yapılır. </p>
      </div></div>
      <div id="yazilar"><img src="images/dilberdudagi.jpg" width="200" height="102"  alt=""/>
        <h3>DİLBER DUDAĞI BAKLAVASI:</h3>
      <div id="tarif">
      <h4>Malzemeler:</h4>
    <p>1 yumurta        </p>
      <p>1 yemek kaşığı yoğurt        </p>
      <p>1 çay bardağı zeytinyağı        </p>
      <p>1/2 kg süt        </p>
      <p>1 tatlı kaşığı tuz</p>
      <p> ceviz içi</p>
      <p>Belli bir ölçüde un </p>
      <h4>YAPILIŞI:</h4>
      ılık sütün içine zeytinyağını, tuzu, yoğurdu, yumurtayı döküp karıştıracak. Daha sonra bunun içine un ilave edilir. Daha sonra elde edilen hamurdan 20 beze yapılarak açılır. Bundan sonra bezeler tepsinin içine konulup yuvarlak biçimlerde kesilir. Bunlar içine ceviz konarak fırın tepsisine yerleştirilir. Tepsinin dolmasından sonra tereyağı kızartılarak üzerine serpilir. Sonra fırına konularak kızartılır.
      </div></div>
      <div id="yazilar"><img src="images/etlipilav.jpg" width="200" height="150"  alt=""/><h3>ETLİ PİLAV:</h3>
      <div id="tarif">
        <h4>Malzemeler:</h4>
        <p>Nohut</p>
        <p> Et suyu</p>
        <p>500 gr. Et</p>
        <p> Tuz-Karabiber</p>
        <p> Pirinç,</p>
        <p>Kişniş</p>
        <p> 1 margarin </p>
        <h4>YAPILIŞI:</h4>Pirinç güzelce yıkanır. Öbür tarafta et suyu kaynar. Nohut haşlanır. Tavaya yağ konur. Eridikten sonra pirinç içine atılır. Hafif ateşte bekletildikten sonra üzerine suyu dökülür. Pişmeye bırakılır. Piştikten sonra üzerine kebap şeklinde et dökülür. Servis yapılır.  
      </div></div>
      <div id="yazilar">
        <img src="images/batirik.jpg" width="200" height="150"  alt=""/>
<h3>BATIRIK:</h3>
<div id="tarif">
<h4>Malzemeler:</h4>
<p>Düğürcük</p>
<p>tahin (veya ceviz, menengiç, v.s.) </p>
<p>soğan</p>
<p>domates</p>
<p>taze biber</p>
<p> maydanoz</p>
<p> 7 türlü baharat</p>
<p>tuz</p>
<p> sumak</p>
<p> salça</p>
<p> biber salçası. </p>
<h4>YAPILIŞI:</h4>Düğürcük büyükçe tepsi veya sini üzerine dökülür. Rendelenmiş domates, salça, biber salçası, soğan, ince kıyılmış biber ve maydanoz, kızartılmış tahin, ve baharat ilave edilerek ovulur. Düğürcük yumuşayıp dişe dokunmayacak hale gelinceye kadar ovma işlemi devam eder. Daha sonra küçük sıkmalar haline getirilir. Rendelenmiş ve sumaklanmış soğan, domates, salatalık ve turşu ile yenir. Ayrıca sulandırılarak da yenir. Cevizli, menengiçli, susamlı, fıstıklı şekilleride yapılabilir. Besin değeri çok yüksektir.
</div></div>
<div id="yazilar">
<img src="images/etlifirin.jpg" width="200" height="150"  alt=""/>
<h3>ETLİ FIRIN YEMEĞİ:</h3>
<div id="tarif">
<h4>MALZEMESİ:</h4>
<p>1 kg bıçak arası yağsız sığır eti</p>
<p> Orta-boy dört baş soğan</p>
<p>5-6 diş sarımsak</p>
<p> tuz</p>
<p> biber</p>
<p> 1-1,5 su bardağı su</p>
<p> 1 kg un</p>
<p> 1 sana yağı</p>
<p> 1 ad. büyük patates </p>
<h4>YAPILIŞI:</h4>Et tencereye konur,soğanlar doğranarak tencereye ilave edilir. Tuz ilave edilir. Bir kaşık margarin katılır. Et suyunu çekene kadar tencerenin kapağı kapanarak pişirilir. Patates rendelenir,sarımsaklar ezilir ve tencereye ilave edilir. Patates ezilene kadar kaynatılır. Söndürdükten sonra isteğe göre karabiber ilave edilir.

HAMURU: Undan yumuşak hamur yoğrulur ve iki eşit parçaya bölünür. Bölünen hamurlar oklava yla ayrı ayrı açılır ve eritilmiş sana yağı üzerinde gezdirilir. Açılan ve yağlanmış olan hamurlar katmer şeklinde kıvrılır. Daha sonra katmer haline getirilmiş hamur parçalarından biri alınarak fırın tepsisine serilir. Daha önce hazırlanmış olan et ,tepsinin üzerine örtülür. Bundan sonra iki hamur parçasının kenarları birbirine iyice yapıştırılır. Kızgın fırına sürülerek kızarıncaya kadar bekletilir. Kızardıktan sonra servis yapılır. </div></div>
<div id="yazilar">
<img src="images/kaygana.jpg" width="200" height="150"  alt=""/>
<h3>KAYGANA TATLISI:</h3>
<div id="tarif">
<h4>MALZEMESİ:</h4>
<p>5 yumurta</p>
<p>1 kilo süt</p>
<p>Kabartma tozu</p>
<p> Un</p>
<p> tuz </p>
<h4>YAPILIŞI:</h4> Yumurta iyice çırpılacak. Sütle karıştırılacak. İçine aldığı kadar ün, bir tutam tuz ve kabartma tosu atılarak iyice karıştırılarak kızgın yağda kaşıkla biraz biraz dökülerek kızartılacak. Hazırlanmış olan şurup tatlının üzerine dökülecek. Servise sunulacak. 
</div>
</div>
</div>
<?php include('footer.php');
?>