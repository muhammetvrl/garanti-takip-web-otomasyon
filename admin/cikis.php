<?php 

require_once 'src/init.php';
girisyoksa();
session_destroy();
header("Location: page-login.php")

 ?>