<?php
		include 'baglan.php';?>


	<?php 
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$silSorgusu="DELETE FROM etkinlikler WHERE ID='$id'";
			if(mysqli_query($baglanti, $silSorgusu)) {
			    echo "Kayıt silindi. <a href='etkinlikdu.php'>Geri dön</a>";
			}
		}
	?>
