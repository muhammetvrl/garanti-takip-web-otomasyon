<?php 

require 'src/ayardb.php';

$id=$_GET['id'];

$sql="DELETE FROM personel WHERE personel_id='$id'";

if (mysqli_query($conn, $sql))
{
	echo '<script type="text/javascript">alert("Personel Silme Başarılı");</script> <meta http-equiv="refresh" content="0;URL=personel.php" />';
}
else {
	echo '<script type="text/javascript">alert("Personel Silme Başarısız");</script> <meta http-equiv="refresh" content="0;URL=personel.php" />';

echo $conn->error."<br>"; 
echo $kullanici_ad;
}
mysqli_close($conn);
?>