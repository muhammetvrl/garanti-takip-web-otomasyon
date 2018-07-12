<?php 

require 'src/ayardb.php';

$adsoyad=$_POST["adsoyad"];
$email=$_POST["email"];
$barkod=$_POST["barkod"];
$mesaj=$_POST["mesaj"];


$sql = "INSERT INTO mesaj (ad_soyad,mail,barkod_no,mesaj)
	VALUES (
	'$adsoyad',
	'$email',      
	'$barkod',   
	'$mesaj'

)";


if (mysqli_query($conn, $sql)) {
	echo '<script type="text/javascript">alert("Mesajınız Gönderildi");</script> <meta http-equiv="refresh" content="0;URL=mesajview.php" />' ;
	
}
else {
	 echo '<script type="text/javascript">alert("Mesaj Gönderme Sırasında Bir Sorun Oluştu !");</script> <meta http-equiv="refresh" content="0;URL=mesajview.php" />' ;	
echo $conn->error;
	
}


mysqli_close($conn);



 ?>