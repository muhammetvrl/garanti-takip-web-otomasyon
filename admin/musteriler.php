<?php 
require 'src/ayardb.php';

$sql="SELECT * FROM musteriler";

$result = $conn->query($sql);

?>

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


 <!-- Left Panel -->

 <!-- Right Panel -->

 <div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Data Table</strong>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">

              <thead class="thead-dark">
                <tr>
                  <th>Adı</th>
                  <th>Soyadı</th>
                  <th>Telefon</th>
                  <th>E-Mail</th>
                  <th>Adres</th>
                  <th>İl</th>
                  <th>İlçe</th>
                  <th>Kullanıcı Adı</th>
                  <th>Sil</th>
                  <th>Güncelle</th>
                  <th>Ekle</th>
                </tr>
              </thead>
              <tbody>
               <?php 
               if ($result->num_rows > 0) {

                 while($row = $result->fetch_assoc()) {
                   echo "<tr>
                   <td>".$row["ad"]."</td>
                   <td>".$row["soyad"]."</td>
                   <td>".$row["telefon"]."</td>
                   <td>".$row["mail"]."</td>
                   <td>".$row["adres"]."</td>
                   <td>".$row["il"]."</td>
                   <td>".$row["ilce"]."</td>
                   <td>".$row["kullanici_ad"]."</td> 
                   <td><a class='btn btn-danger' href='musterisil.php?id=".$row["kullanici_ad"]."'>Sil</a></td>
                   <td><a class='btn btn-primary' href='musteriguncelle.php?id=".$row["kullanici_ad"]."'>Güncelle</a></td>
                   <td><a class='btn btn-info' href='musteriekle.php'>Ekle</a></td>
                   </tr>";                            
                  


                 }

               }                       


               ?>


               </tr>

               </tbody>
               </table>
               </div>
               </div>
               </div>


               </div>
               </div><!-- .animated -->
               </div><!-- .content -->


               <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
               <script src="assets/js/popper.min.js"></script>
               <script src="assets/js/plugins.js"></script>
               <script src="assets/js/main.js"></script>


               </body>
               </html>
