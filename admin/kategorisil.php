<?php 

require 'src/ayardb.php';

$id=$_GET['id'];

$sql="DELETE FROM kategori WHERE kategori_id='$id'";

if (mysqli_query($conn, $sql))
{
	echo '<script type="text/javascript">alert("Kategori Silme Başarılı");</script> <meta http-equiv="refresh" content="0;URL=kategori.php" />';
}
else {
	echo '<script type="text/javascript">alert("Müşteri Silme Başarısız");</script> <meta http-equiv="refresh" content="0;URL=kategori.php" />';

echo $conn->error."<br>"; 

}
mysqli_close($conn);
?>