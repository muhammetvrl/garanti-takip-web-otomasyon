<?php 

require 'ayardb.php';



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
	
$sql="INSERT INTO cihazlar (

	kategori_id,
	personel_id,
	kullanici_ad,
	garanti_id,
	marka,
	model,
	seri_no,
	sikayet,
	alınma_tarihi,
	tahmini_teslim_tarihi,
	barkod_no,
	teslim_alinan_parcalar,
	yapilan_islem,
	ucret

	) 

	values (
		'$kategori',
		'$personel',
		'deneme',
		'$garantidurum',       
		'$marka',   
		'$model',   
		'$serino',
		'$sikayet',            
		'$teslimtarihi',       
		'$tahminiteslimtarihi',
		'$barkodno ',        
		'$teslimalinanlar',    
		'$yapilanislemler',
		'$ucret'        

		)";

if (mysqli_query($conn, $sql)) {
	echo "Kayıt Başarılı";
}
else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}

?>