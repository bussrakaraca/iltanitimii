<?php 
session_start();
error_reporting(0);
?>
<?php include('header.php'); ?>

<?php 
if ($_SESSION['user']=="")
{
echo <<<EOF
<form action="login.php" method="POST" > 
<table  id="tablouye"width="359" height="269" border="1" align="center" cellpadding="4" cellspacing="2">
<tr>
<td colspan="2" align="center">Kullanıcı Girişi</td>
 
</tr>
<tr>
<td width="105" height="50">Kullanıcı adı</td>
<td width="168" ><input name="kullanici" type="text"></td>
</tr>
<tr>
<td height="49">Şifre</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>
<td><input type="button" name="button" id="button" value="Admin Girişi" onClick="location.href='../iltanitimi/admin/admin.php'"></td>
<td><input name="button" type="submit" id="button" value="Giris Yap" >
  <input type="button" name="button" id="button" value="Uye Ol" onClick="location.href='../iltanitimi/uye-ol.php'">
  </td>
</tr>
</table>
</form>
EOF;
}
else{
echo '<script>window.location.href ="profilim.php";</script>';
}
?>

<?php include('footer.php'); ?>
