<?php 

function girisyoksa(){
	if (!isset($_SESSION['kullanici'])) {
		header("Location: page-login.php");
	}
}

function girisyapildiysa(){
	if (isset($_SESSION['kullanici'])) {
		header("Location: index.php");
	}
}

 ?>