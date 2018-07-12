<?php 

require_once 'src/init.php';
girisyapildiysa();

$kadi=$_POST["kullanici"];
$parola=$_POST["parola"];

$sql = "select * from kayit where kullanici_adi='".$kadi."' and parola='".$parola."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	$_SESSION['kullanici']=$kadi;
	girisyapildiysa();

	}
else {
		if($kadi=="" or $parola=="") {
			echo '<script type="text/javascript">alert("İlgili Alanları Doldurunuz!");</script> <meta http-equiv="refresh" content="0;URL=page-login.php" />';
		}
		else {
			echo '<script type="text/javascript">alert("Girdiğiniz Bilgiler Yanlış");</script> <meta http-equiv="refresh" content="0;URL=page-login.php" />';
		}
	}
	@$mysqli->close();
	

	?>