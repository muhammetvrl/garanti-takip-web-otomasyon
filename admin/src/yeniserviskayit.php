<?php 

require 'ayardb.php';

if($_POST){

     // -------Formdan Gelen Kayıtlar--------------------
	$ad                 =    $_POST["ad"];
	$soyad              =    $_POST["soyad"];
	$telefon            =	 $_POST["telefon"];
	$email              =    $_POST["email"];
	$il                 =    $_POST["il"];
	$ilce               =    $_POST["ilce"];
	$adres              =    $_POST["adres"];
	$kullaniciad		=    $_POST["kullaniciad"];
	$kategori  			= 	 $_POST["kategori"];
	$personel 			= 	 $_POST["personel"];
	$marka              =    $_POST["marka"];
	$model              =    $_POST["model"];
	$serino             =    $_POST["serino"];
	$garantidurum       = 	 $_POST["garantidurum"];
	$teslimtarihi       =    $_POST["teslimtarih"];
	$sikayet            =    $_POST["sikayet"];
	$tahminiteslimtarihi=    $_POST["tahminiteslimtarih"];
	$barkodno           =    $_POST["barkodno"];
	$teslimalinanlar    =    $_POST["teslimalinanlar"];
	$ucret        		=	 $_POST["ucret"];
	$yapilanislemler    =    $_POST["yapilanislemler"];
	

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

$sql1="INSERT INTO cihazlar (

	kategori_id,
	personel_id,
	kullanici_ad,
	garanti_id,
	marka,
	model,
	seri_no,
	sikayet,
	alinma_tarihi,
	tahmini_teslim_tarihi,
	barkod_no,
	teslim_alinan_parcalar,
	yapilan_islem,
	ucret

) 

VALUES (
	'$kategori',
	'$personel',
	'$kullaniciad',
	'$garantidurum',       
	'$marka',   
	'$model',   
	'$serino',
	'$sikayet',            
	'$teslimtarihi',       
	'$tahminiteslimtarihi',
	'$barkodno',        
	'$teslimalinanlar',    
	'$yapilanislemler',
	'$ucret'        

)";


if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
	echo '<script type="text/javascript">alert("Kayıt Ekleme Başarılı");</script> <meta http-equiv="refresh" content="0;URL=../yeniserviskaydi.php" />' ;
	
}
else {
	 //echo '<script type="text/javascript">alert("Kayıt Ekleme Sırasında Bir Sorun Oluştu !");</script> <meta http-equiv="refresh" content="0;URL=../yeniserviskaydi.php" />' ;	
echo $conn->error;
	
}


mysqli_close($conn);

}

?>