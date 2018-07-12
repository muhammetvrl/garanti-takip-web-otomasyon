<?php 
require 'src/ayardb.php';

$ad                 =    $_POST["ad"];
$soyad              =    $_POST["soyad"];
$telefon            =	 $_POST["telefon"];
$email              =    $_POST["email"];
$il                 =    $_POST["il"];
$ilce               =    $_POST["ilce"];
$adres              =    $_POST["adres"];
$kullaniciad		=    $_POST["kullaniciad"];

$sql = "INSERT INTO musteriler (kullanici_ad,ad,soyad,adres,telefon,mail,il,ilce)
	VALUES (
	'$kullaniciad',
	'$ad',      
	'$soyad',   
	'$adres',
	'$telefon', 
	'$email',   
	'$il',      
	'$ilce'
	

)";

if (mysqli_query($conn, $sql)) {
	echo '<script type="text/javascript">alert("Kayıt Ekleme Başarılı");</script> <meta http-equiv="refresh" content="0;URL=musteriekle.php" />' ;
	
}
else {
	 echo '<script type="text/javascript">alert("Kayıt Ekleme Sırasında Bir Sorun Oluştu !");</script> <meta http-equiv="refresh" content="0;URL=musteriekle.php" />' ;	
echo $conn->error;
	
}


mysqli_close($conn);


?>