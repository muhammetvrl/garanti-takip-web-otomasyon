<?php 

require 'src/ayardb.php';

$cihaz_id=$_GET['id'];

$sql="DELETE FROM cihazlar WHERE cihaz_id="."$cihaz_id";

if (mysqli_query($conn, $sql))
{
	echo '<script type="text/javascript">alert("Cihaz Silme Başarılı");</script> <meta http-equiv="refresh" content="0;URL=serviskayitlari.php" />';
}
else {
	echo '<script type="text/javascript">alert("Cihaz Silme Başarısız");</script> <meta http-equiv="refresh" content="0;URL=serviskayitlari.php" />';
}
mysqli_close($conn);
?>