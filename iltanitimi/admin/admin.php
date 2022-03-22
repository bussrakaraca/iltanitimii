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
echo <<<EOF
<form action="" method="POST"> 
<table id="tablouye" width="342" height="257" border="1" align="center" cellpadding="4" cellspacing="2">
<tr>
  <td colspan="2" align="center">Admin Oturumu Aktif</td>
  </tr>
<tr>
  <td width="103">Admin</td>
  <td width="175">$kullanici</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input name="cikis" type="button" value= "Çıkış Yap" onClick="location.href='../admin/logout.php'"></td>
</tr>
</table>
</form>
EOF;
}
else
{
echo '<script>window.location.href ="/iltanitimi/profilim.php";</script>';
}
?>
<?php include("footer2.php"); ?>