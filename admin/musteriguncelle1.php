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

$sql="UPDATE  musteriler SET  
kullanici_ad='$kullaniciad',
ad='$ad',
soyad='$soyad',
adres='$adres',
telefon='$telefon',
mail='$email',
il='$il',
ilce='$ilce'

WHERE kullanici_ad='$kullaniciad'";

if (mysqli_query($conn, $sql)) {
	echo '<script type="text/javascript">alert("Müşteri Güncelleme Başarılı");</script> <meta http-equiv="refresh" content="0;URL=musteriler.php" />' ;
	
}
else {
	 echo '<script type="text/javascript">alert("Müşteri Güncelleme Sırasında Bir Sorun Oluştu !");</script> <meta http-equiv="refresh" content="0;URL=musteriler.php" />' ;	
echo $conn->error;
	
}


mysqli_close($conn);


?>