<?php 
session_start();
error_reporting(0);
?>
<script>
function yaz(yazi) {
document.all.textarea.value=document.all.textarea.value + yazi
}
</script>
<?php 
include("baglan.php");
if($_POST['form1'])
{
$baslik=mysqli_real_escape_string($baglanti, $_POST['baslik']);
$icerik= mysqli_real_escape_string($baglanti,$_POST['icerik']);
$link= mysqli_real_escape_string($baglanti,$_POST['link']);

 
$mesaj="";
if ($baslik=="" & $icerik=="")
$mesaj= "Başlık ve İçerik alanlarını doldurunuz.<br>";

//if ($mesaj!=""){
//hata yazdırıyoruz
//echo $mesaj;
//}
else{
//Buraya kaydetme kodlarımız gelecek;

$sql="INSERT INTO etkinlikler(baslik , icerik, link )
VALUES ('$baslik', '$icerik', '$link')";
if (!mysqli_query($baglanti,$sql)) {
die('Hata: ' . mysqli_error($baglanti));
}
echo '<script>window.location.href ="etkinlikdu.php";</script>'; 
}
}
?>
<?php include("header.php"); ?>
<?php
$kullanici=$_SESSION['user'];
if ($_SESSION['user']==""){
echo '<script>window.location.href ="/iltanitimi/admin/index.php";</script>';
}
else if($_SESSION['user']=="buszey" &$_SESSION['pass']=="admin1234")
{
	  $kayitlar = mysqli_query($baglanti,"select * from etkinlikler");
  $sayi = mysqli_num_rows($kayitlar);
echo <<<EOF
<table width="97%" border="3" id="tablouye">
    <tr>
      <th width="7%">ID</th>
      <th width="18%">Başlık</th>
      <th width="60%">İçerik</th>
	  <th width="7%">Sil</th>
    </tr>
EOF;
while($sonuc = mysqli_fetch_assoc($kayitlar)) {
	 echo "<tr>";
		 echo "<td>".$sonuc["ID"]."</td>";
		 echo "<td>".$sonuc["baslik"]."</td>";
		 echo "<td>".$sonuc["icerik"]."</td>";
		 echo "<td><a href='etkinliksil.php?id=".$sonuc ['ID']."'>Sil</a></td>";
     echo "</tr>";
	
		}
		mysqli_close($baglanti);
echo '</table>';
echo <<<EOF
<br>
<br>
<input name="admin" id='gir' type="button" value= "Admin" onClick="location.href='../admin/admin.php'">
<input name="cikis" id='gir' type="button" value= "Çıkış Yap" onClick="location.href='../admin/logout.php'">
<br>
<br>
EOF;
	echo <<<EOF
 <form action="" method="post">
    <table width="80%" border="3" id="tablouye">
      <tr>
        <td colspan="2" align="center">Etkinlik Ekle</td>
        <td width="20%" rowspan="4"><p>
          <input type="button" name="button" id="button" value="baslik ac" onClick="javascript:yaz('<h5>')">
         </p>
         <br>
          <p>
            <input type="button" name="button2" id="button2" value="baslik kapa" onClick="javascript:yaz('</h5>')">
          </p>
          <br>
          <p>
            <input type="button" name="button3" id="button3" value="alt satır" onClick="javascript:yaz('<br>')">
          </p></td>
      </tr>
      <tr>
        <td width="13%">Başlık</td>
        <td width="67%"><input name="baslik" type="text" id="baslik" size="60"></td>
        </tr>
      <tr>
        <td>İçerik</td>
        <td width="67%"><textarea name="icerik" cols="62" rows="7" id="textarea"></textarea></td>
        </tr>
      <tr>
        <td >Link</td>
        <td ><input name="link" type="text" id="link" size="60"></td>
        </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="form1" id="form1" value="Ekle"></td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>
<br>
EOF;
if ($mesaj!=""){
echo ' <br>';
echo $mesaj;
}
}
else
{
echo '<script>window.location.href ="/iltanitimi/profilim.php";</script>';
}
?>

 
<?php include("footer2.php"); ?>