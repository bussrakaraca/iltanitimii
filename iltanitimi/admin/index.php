<?php 
session_start();
error_reporting(0);
?>
<?php include("header2.php"); ?>
<?php 
if($_POST['form1'])
{
$user = "buszey";
$pass = "admin1234";
$mesaj="";
 $admin=$_POST["admin"];
 $sifre=$_POST["sifre"];
  if(($admin==$user) and ($sifre==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
echo '<script>window.location.href ="admin.php";</script>';
 }
 else{
	$mesaj.= "Kullancı Adı veya Şifre Yanlış.";
  }
}
  ?>
 <?php
if ($_SESSION['user']=="")
{
echo <<<EOF
<form action="" method="POST" > 
<table  id="tablouye"width="359" height="269" border="1" align="center" cellpadding="4" cellspacing="2">
<tr>
<td colspan="2" align="center">Admin Girişi</td>
 
</tr>
<tr>
<td width="105" height="50">Admin</td>
<td width="168" ><input name="admin" type="text"></td>
</tr>
<tr>
<td height="49">Şifre</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>
<td></td>
<td><input name="form1" type="submit" id="form1" value="Giris Yap" >
  </td>
</tr>
</table>
</form>
<br>
EOF;
if($mesaj!="")
{
	echo $mesaj;
}
}
else if($_SESSION['user']=="buszey" &$_SESSION['pass']=="admin1234" )
{echo '<script>window.location.href ="admin.php";</script>';
	}
else
	{
	echo '<script>window.location.href ="/iltanitimi/profilim.php";</script>';
	}
	?>
<?php include("footer2.php"); ?>