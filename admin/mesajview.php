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
	<br><br>

<section class='page_section'><!--page_section-->
<h2 id='sorgulama'>BİZİMLE İLETİŞİME GEÇİN</h2>
<br>
<div class='container'>
<div class='row'>
<div class='col-lg-12 wow fadeInLeft delay-06s'>
<div class='form'> 

<form  action='mesaj.php' method='POST'  > 
<div class='control-group '>
<div class='controls'>
<input type='text' class='form-control input-text' name='barkod' 
placeholder='Barkod No' id='name' required
data-validation-required-message='Lütfen Boş Bırakmayın' />

<input type='text' class='form-control input-text' name='adsoyad' 
placeholder='Ad Soyad' id='name' required
data-validation-required-message='Lütfen Boş Bırakmayın' />

<input type='text' class='form-control input-text' name='email' 
placeholder='Email' id='name' required
data-validation-required-message='Lütfen Boş Bırakmayın' />

<textarea rows="10" cols="100" class="form-control input-text" name="mesaj" placeholder="Message" id="message" required="" data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none" aria-invalid="false"></textarea>


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


