<?php 

require 'src/ayardb.php';

$kullanici_ad=$_GET['id'];

$sql="DELETE FROM musteriler WHERE kullanici_ad='$kullanici_ad'";

if (mysqli_query($conn, $sql))
{
	echo '<script type="text/javascript">alert("Müşteri Silme Başarılı");</script> <meta http-equiv="refresh" content="0;URL=musteriler.php" />';
}
else {
	//echo '<script type="text/javascript">alert("Müşteri Silme Başarısız");</script> <meta http-equiv="refresh" content="0;URL=musteriler.php" />';

echo $conn->error."<br>"; 
echo $kullanici_ad;
}
mysqli_close($conn);
?>