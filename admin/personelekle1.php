<?php 
require 'src/ayardb.php';

$ad                 =    $_POST["ad"];
$soyad              =    $_POST["soyad"];
$gorevi             =	 $_POST["gorevi"];


$sql = "INSERT INTO personel (ad,soyad,gorevi)
	VALUES (
	'$ad',      
	'$soyad',   
	'$gorevi'
)";

if (mysqli_query($conn, $sql)) {
	echo '<script type="text/javascript">alert("Kayıt Ekleme Başarılı");</script> <meta http-equiv="refresh" content="0;URL=personel.php" />' ;
	
}
else {
	 echo '<script type="text/javascript">alert("Kayıt Ekleme Sırasında Bir Sorun Oluştu !");</script> <meta http-equiv="refresh" content="0;URL=personel.php" />' ;	
echo $conn->error;
	
}


mysqli_close($conn);


?>