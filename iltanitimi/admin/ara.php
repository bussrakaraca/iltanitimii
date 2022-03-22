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
	echo '
		<form action="" method="POST" > 
			<table  id="tablouye" width="359" height="269"  align="center" >
				<tr>
				   <td colspan="2" align="center">Arama</td>
				</tr>
				<tr>
					<td width="105" height="50">ID</td>
					<td width="168" ><input name="ID" type="text"></td>
				</tr>
				<tr>
				  <td colspan="2" align="center"><input name="form1" type="submit" id="form1" value="Ara" >  </td>
				</tr>
			</table>
		</form>';
	

}
else
{
echo '<script>window.location.href ="/iltanitimi/profilim.php";</script>';
}
?>
<?php
		include("baglan.php");
		
		if($_POST['form1'])
		{
				$ID=$_POST['ID'];
				if (!$ID)
				  {
					echo "Giriş yapmadınız, tüm alanları doldurup tekrar deneyiniz";
					exit;
				  } 
					$sorgu_a="select * from uyekaydi where ID=".$ID;
					$kayitlar = mysqli_query($baglanti,$sorgu_a);
					$sayi = mysqli_num_rows($kayitlar);
				if ($sayi==0)
				 {
				 echo "Kayıt bulunamadı<br>";	
				 } 
				else
				 { 
					echo '
					<table width="97%" border="3" id="tablouye">
						<tr>
						  <th width="7%">ID</th>
						  <th width="11%">Kullanici Adı</th>
						  <th width="11%">Şifre</th>
						  <th width="19%">email</th>
						  <th width="12%">Ad</th>
						  <th width="12%">Soyad</th>
						  <th width="28%">Adres</th>
						</tr>';
					
					while($sonuc = mysqli_fetch_assoc($kayitlar)) 
					{
						 echo '<tr>';
							 echo "<td>".$sonuc["ID"]."</td>";
							 echo "<td>".$sonuc["kullanici_adi"]."</td>";
							 echo "<td>".$sonuc["sifre"]."</td>";
							 echo "<td>".$sonuc["email"]."</td>";
							 echo "<td>".$sonuc["ad"]."</td>";
							 echo "<td>".$sonuc["soyad"]."</td>";
							 echo "<td>".$sonuc["adres"]."</td>";
						 echo "</tr>";
					echo '</table>';
					}
					mysqli_close($baglanti);
				  }
}
?>
	
	<br>
	<br>
	<input name="admin" id='gir' type="button" value= "Admin" onClick="location.href='../admin/admin.php'">
	<input name="cikis" id='gir' type="button" value= "Çıkış Yap" onClick="location.href='../admin/logout.php'">
	
<?php include("footer2.php"); ?>