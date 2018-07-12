<?php 
require 'src/ayardb.php';

$sql="SELECT * FROM mesaj";

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
                  <th>Mesaj Id</th>
                  <th>Gönderici</th>
                  <th>E-Mail</th>
                  <th>Barko No</th>
                  <th>Mesaj</th>
                  <th>Cevapla</th>
                 
                </tr>
              </thead>
              <tbody>
               <?php 
               if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                   echo "<tr>
                   <td>".$row["mesaj_id"]."</td>
                   <td>".$row["ad_soyad"]."</td>
                   <td>".$row["mail"]."</td>
                   <td>".$row["barkod_no"]."</td>
                   <td>".$row["mesaj"]."</td>
                   <td><form action='mesajcevapla.php?email=".$row["mail"]."'' method='POST'><textarea name='cevap' cols='60' rows='3'></textarea>
                    <input class='btn btn-primary' type='submit' value='Cevapla' style='float:right; margin:20px;'>
                   </form></td>
                   
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


<?php 



 ?>