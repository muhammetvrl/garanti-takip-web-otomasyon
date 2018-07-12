

<!doctype html>
<html class="no-js" lang=""> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sufee Admin - HTML5 Admin Template</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-icon.png">
	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/flag-icon.min.css">
	<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
	<link rel="stylesheet" href="assets/scss/style.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

	<?php require 'menu.php'; ?>

	<div class='col-md-10' style='margin: 50px 0 50px 8%;'>
		<div class='card'>
			<div class='card-header'>
			</div>
			<div class='card-body card-block'>

				<form action='kategoriekle1.php' method='POST' enctype='multipart/form-data' class='form-horizontal'>
					<div class='row form-group'>
						<div class='col col-md-3'><label class=' form-control-label'><b>Kategori Bilgileri</b></label></div>
						<div class='col-12 col-md-9'>
						</div>
					</div>
					<div class='row form-group'>
						<div class='col col-md-3'><label for='text-input' class=' form-control-label'>Kategori Ad</label></div>
						<div class='col-12 col-md-9'><input type='text' id='text-input' name='ad' placeholder='Text' class='form-control' required data-validation-required-message='Lütfen Boş Bırakmayın'></div>

						
					</div>


					<div class="card-footer">
						<button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-dot-circle-o"></i> Kaydet
						</button>
						<button type="reset" class="btn btn-danger btn-sm"><a href="kategoriekle.php">
							<i class="fa fa-ban"></i> Temizle
						</a></button>
					</div>
				</div>

			</div>


		</form>
	</div>

</body>
</html>




