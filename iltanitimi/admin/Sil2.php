<?php include 'header.php';?>
<?php include 'baglan.php';?>


	<?php 
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$silSorgusu="DELETE FROM uyekaydi WHERE ID='$id'";
			if(mysqli_query($baglanti, $silSorgusu)) {
				echo '<script>window.location.href ="/iltanitimi/admin/sil.php";</script>';
			}
		}
	?>
<?php include 'footer2.php';?>