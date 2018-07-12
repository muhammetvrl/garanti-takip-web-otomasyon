<?php 

$mesaj=$_POST["cevap"];
$email=$_GET["email"];


if(isset($_POST['cevap']) && isset($_GET['email']) ) {

	if(empty($_POST['cevap']) || empty($_GET['email'])) {
		echo '<script type="text/javascript">alert("Boş Bırakmayınız!");</script> <meta http-equiv="refresh" content="0;URL=mesajlar.php" />';
	} else {
		$mesaj = strip_tags($mesaj);
		$eposta = strip_tags($email);
		$icerik = 'Cevap: ' . $mesaj . '<br/>E-Posta: '.$eposta;
		@mail('ik@egaranti.com', $icerik);
		echo '<script type="text/javascript">alert("Mesaj Cevaplandı!");</script> <meta http-equiv="refresh" content="0;URL=mesajlar.php" />';
	}
} else {
	echo '<script type="text/javascript">alert("İlgili Alanları Doldurun");</script> <meta http-equiv="refresh" content="0;URL=mesajlar.php" />';
}


?>