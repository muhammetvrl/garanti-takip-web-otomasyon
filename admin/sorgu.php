<?php 



echo "

<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, maximum-scale=1'>
<title>E-Garanti</title>
<link rel='icon' href='favicon.png' type='image/png'>
<link href='../css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='../css/style.css' rel='stylesheet' type='text/css'> 
<link href='../css/font-awesome.css' rel='stylesheet' type='text/css'> 
<link href='../css/animate.css' rel='stylesheet' type='text/css'>
<meta name='description' content='Sufee Admin - HTML5 Admin Template'>
<link rel='apple-touch-icon' href='apple-icon.png'>
<link rel='shortcut icon' href='favicon.ico'>

<link rel='stylesheet' href='assets/css/normalize.css'>
<link rel='stylesheet' href='assets/css/themify-icons.css'>
<link rel='stylesheet' href='assets/css/flag-icon.min.css'>
<link rel='stylesheet' href='assets/css/cs-skin-elastic.css'>
<!-- <link rel='stylesheet' href='assets/css/bootstrap-select.less'> -->
<link rel='stylesheet' href='assets/scss/style.css'>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<!--/Sorgulama-----------------------------------------------------------------/- --> 

<section class='page_section'><!--page_section-->
<h2 id='sorgulama'>Cihaz Takip</h2>
<div class='container'>
<div class='row'>
<div class='col-lg-12 wow fadeInLeft delay-06s'>
<div class='form'> 
<p>Servis ve Destek Kapsamınızı Kontrol Edin <br>
E-Garanti' de garanti durumunuzu ve satın almaya uygun olup olmadığınızı inceleyin.</p><br>     
<h4>Lütfen Barkod Numaranızı Giriniz </h4><br> 
<form  action='sorgu.php' method='POST'  > 
<div class='control-group '>
<div class='controls'>
<input type='text' class='form-control input-text' name='barkod' 
placeholder='Barkod No' id='name' required
data-validation-required-message='Lütfen Barkod Numaranızı Giriniz' />
<p class='help-block'></p>
<input type='submit' class='btn btn-primary input-btn align-middle' value='Gönder' />
</div>
</div>  
</form>
</div>
</div>
</div>
</div>
</section>
<br>  <br>
<!--/Sorgulama-----------------------------------------------------------------/- -->  
";
?>

<?php 

require 'src/ayardb.php';
$barkod=@$_POST["barkod"];

$sql = "SELECT * FROM cihazlar WHERE barkod_no='$barkod'";

$result = $conn->query($sql);



if(isset($barkod)){

	if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {

			echo "
			<div class='content mt-3'>
			<div class='animated fadeIn'>
			<div class='row'>
			<div class='col-md-12'>
			<div class='card'>
			<div class='card-header'>
			<strong class='card-title'>Cihaz Bilgileri</strong>
			</div>
			<div class='card-body'>
			<table class='table table-bordered table-dark'>
			<thead class='thead-dark'>
			<tr class='info'><td>Kullanıcı</td><td>".$row["kullanici_ad"]."</td></tr>
			<tr><td>Marka</td><td>".$row["marka"]."</td></tr>
			<tr><td>Model</td><td>".$row["marka"]."</td></tr>
			<tr><td>Seri No</td><td>".$row["seri_no"]."</td></tr>
			<tr><td>Şikayet</td><td>".$row["sikayet"]."</td></tr>
			<tr><td>Teslim Tarihi</td><td>".$row["alinma_tarihi"]."</td></tr>
			<tr><td>Tahmini Teslim Tarihi</td><td>".$row["tahmini_teslim_tarihi"]."</td></tr>
			<tr class='warning'><td>Barkod No</td><td>".$row["barkod_no"]."</td></tr>
			<tr><td>Alınan Parçalar</td><td>".$row["teslim_alinan_parcalar"]."</td></tr>
			<tr><td>Yapılan İşlem</td><td>".$row["yapilan_islem"]."</td></tr>
			<tr><td>Ucret</td><td>".$row["ucret"]."</td></tr>
			<tr><td>Kategori</td><td>".$row["kategori_id"]."</td></tr>
			<tr><td>Personel</td><td>".$row["personel_id"]."</td></tr>
			<tr><td>Garanti</td><td>".$row["garanti_id"]."</td></tr>
			<tr class='success'><td>Durum</td><td>".$row["durum"]."</td></tr>
			</thead>
			</table>
			</div>
			</div>
			</div>
			</div>
			</div><!-- .animated -->
			</div><!-- .content -->
			<script src='assets/js/vendor/jquery-2.1.4.min.js'></script>
			<script src='assets/js/popper.min.js'></script>
			<script src='assets/js/plugins.js'></script>
			<script src='assets/js/main.js'></script>
			";
		}
	}   
	else
echo '<script type="text/javascript">alert("Girdiğiniz Barkod No Yanlış");</script> <meta http-equiv="refresh" content="0;URL=sorgu.php" />';


}


?>