<?php 

require 'src/ayardb.php';

if($_POST){

     // -------Formdan Gelen Kayıtlar--------------------

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
	$durum			    =    $_POST["durum"];
	$cihaz_id			=	 $_GET['id'];
	$kullanici_ad 	    =    $_POST["kullanici_ad"];

$sql="UPDATE  cihazlar SET 

	kategori_id='$kategori',
	personel_id='$personel',
	kullanici_ad='$marka',
	garanti_id='$garantidurum',
	marka='$marka',
	model='$model',
	seri_no='$serino',
	sikayet='$sikayet',
	alinma_tarihi='$teslimtarihi',
	tahmini_teslim_tarihi='$tahminiteslimtarihi',
	barkod_no='$barkodno',
	teslim_alinan_parcalar='$teslimalinanlar',
	yapilan_islem='$yapilanislemler',
	ucret='$ucret',
	durum='$durum',
	kullanici_ad='$kullanici_ad'

	WHERE cihaz_id=$cihaz_id";



if (mysqli_query($conn, $sql)) {
	echo '<script type="text/javascript">alert("Güncelleme Başarılı ");</script> <meta http-equiv="refresh" content="0;URL=serviskayitlari.php" />' ;
	
}
else {
	 echo '<script type="text/javascript">alert("Güncelleme Başarısız");</script> <meta http-equiv="refresh" content="0;URL=serviskayitlari.php" />' ;	
echo $conn->error;
	
}


mysqli_close($conn);

}

?>