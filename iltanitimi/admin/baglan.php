<?php
$baglanti=mysqli_connect("localhost","root","","uye_giris");
// Bağlantı kontrolü
if (mysqli_connect_errno()) {
  echo "Bağlantı kurulamadı: " . mysqli_connect_error();
}
?>
