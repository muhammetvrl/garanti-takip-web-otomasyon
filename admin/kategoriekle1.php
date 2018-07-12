<?php 
require 'src/ayardb.php';

$ad                 =    $_POST["ad"];


$sql = "INSERT INTO kategori (kategori_ad)
	VALUES (
	'$ad'      
	
)";

if (mysqli_query($conn, $sql)) {
	echo '<script type="text/javascript">alert("Kayıt Ekleme Başarılı");</script> <meta http-equiv="refresh" content="0;URL=kategoriekle.php" />' ;
	
}
else {
	 //echo '<script type="text/javascript">alert("Kayıt Ekleme Sırasında Bir Sorun Oluştu !");</script> <meta http-equiv="refresh" content="0;URL=kategoriekle.php" />' ;	
echo $conn->error;
	
}


mysqli_close($conn);


?>