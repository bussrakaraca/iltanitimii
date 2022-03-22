<?php 
session_start();
error_reporting(0);
?>
<?php include("header.php"); ?>
<?php
$kullanici=$_SESSION['user'];
if ($_SESSION['user']==""){
echo '<script>window.location.href ="/iltanitimi/admin/index.php";</script>';
}
else if($_SESSION['user']=="buszey" &$_SESSION['pass']=="admin1234")
{
  include("baglan.php");
  $kayitlar = mysqli_query($baglanti,"select * from uyekaydi");
  $sayi = mysqli_num_rows($kayitlar);
echo <<<EOF
<table width="97%" border="3" id="tablouye">
    <tr>
      <th width="7%">ID</th>
      <th width="11%">Kullanici Adı</th>
      <th width="11%">Şifre</th>
      <th width="19%">email</th>
      <th width="12%">Ad</th>
      <th width="12%">Soyad</th>
      <th width="28%">Adres</th>
    </tr>
EOF;
while($sonuc = mysqli_fetch_assoc($kayitlar)) {
	 echo "<tr>";
		 echo "<td>".$sonuc["ID"]."</td>";
		 echo "<td>".$sonuc["kullanici_adi"]."</td>";
		 echo "<td>".$sonuc["sifre"]."</td>";
		 echo "<td>".$sonuc["email"]."</td>";
		 echo "<td>".$sonuc["ad"]."</td>";
		 echo "<td>".$sonuc["soyad"]."</td>";
		 echo "<td>".$sonuc["adres"]."</td>";
     echo "</tr>";
	
		}
		mysqli_close($baglanti);
echo '</table>';

echo <<<EOF
<br>
<br>
<input name="admin" id='gir' type="button" value= "Admin" onClick="location.href='../admin/admin.php'">
<input name="cikis" id='gir' type="button" value= "Çıkış Yap" onClick="location.href='../admin/logout.php'">
EOF;
}
else
{
echo '<script>window.location.href ="/iltanitimi/profilim.php";</script>';
}
?>
<?php include("footer2.php"); ?>