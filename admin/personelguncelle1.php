<?php 

require 'src/ayardb.php';

if($_POST){
   // -------Formdan Gelen Kayıtlar--------------------

$ad                 =    $_POST["ad"];
$soyad              =    $_POST["soyad"];
$gorevi             =	 $_POST["gorevi"];
$personelid         =    $_GET["id"];

$sql="UPDATE personel SET 

	ad='$ad',
	soyad='$soyad',
	gorevi='$gorevi'
	

WHERE personel_id=$personelid";



if (mysqli_query($conn, $sql)) {
	echo '<script type="text/javascript">alert("Güncelleme Başarılı ");</script> <meta http-equiv="refresh" content="0;URL=personel.php" />' ;
	
}
else {
	 echo '<script type="text/javascript">alert("Güncelleme Başarısız");</script> <meta http-equiv="refresh" content="0;URL=personel.php" />' ;	
echo $conn->error;
	
}


mysqli_close($conn);

}

?>