<?php 
require 'src/ayardb.php';

$sql = "SELECT * FROM cihazlar";

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
                  <th>Kullanıcı</th>
                  <th>Marka</th>
                  <th>Model</th>
                  <th>Seri No</th>
                  <th>Şikayet</th>
                  <th>Teslim Tarihi</th>
                  <th>Tahmini Teslim Tarihi </th>
                  <th>Barkod No</th>
                  <th>Alınan Parçalar</th>
                  <th>Yapılan İşlem</th>
                  <th>Ucret</th>
                  <th>Kategori</th>
                  <th>Personel</th>
                  <th>Garanti</th>
                  <th>Durum</th>
                  <th>Sil</th>
                  <th>Güncelle</th>

                </tr>
              </thead>
              <tbody>
               <?php 

               if (@$_POST['barkod']) {
                $arama=$_POST['barkod']; 
                $ara="SELECT * FROM cihazlar WHERE barkod_no like '%$arama%'"; 

            
                $result = $conn->query($ara);

                if ($result->num_rows > 0) {

                 while($row1 = $result->fetch_assoc()) {
                   echo "<tr>
                   <td>".$row1["kullanici_ad"]."</td>
                   <td>".$row1["marka"]."</td>
                   <td>".$row1["model"]."</td>
                   <td>".$row1["seri_no"]."</td>
                   <td>".$row1["sikayet"]."</td>
                   <td>".$row1["alinma_tarihi"]."</td>
                   <td>".$row1["tahmini_teslim_tarihi"]."</td>
                   <td>".$row1["barkod_no"]."</td>
                   <td>".$row1["teslim_alinan_parcalar"]."</td>
                   <td>".$row1["yapilan_islem"]."</td>
                   <td>".$row1["ucret"]."</td>
                   <td>".$row1["kategori_id"]."</td>
                   <td>".$row1["personel_id"]."</td>
                   <td>".$row1["garanti_id"]."</td>
                   <td>".$row1["durum"]."</td>
                   <td><a class='btn btn-danger' href='sil.php?id=".$row1["cihaz_id"]."'>Sil</a></td>
                   <td><a class='btn btn-primary' href='guncelle.php?id=".$row1["cihaz_id"]."'>Güncelle</a></td>
                   </tr>";
                 }
               } 

             }else{

               if ($result->num_rows > 0) {

                 while($row = $result->fetch_assoc()) {
                   echo "<tr>
                   <td>".$row["kullanici_ad"]."</td>
                   <td>".$row["marka"]."</td>
                   <td>".$row["model"]."</td>
                   <td>".$row["seri_no"]."</td>
                   <td>".$row["sikayet"]."</td>
                   <td>".$row["alinma_tarihi"]."</td>
                   <td>".$row["tahmini_teslim_tarihi"]."</td>
                   <td>".$row["barkod_no"]."</td>
                   <td>".$row["teslim_alinan_parcalar"]."</td>
                   <td>".$row["yapilan_islem"]."</td>
                   <td>".$row["ucret"]."</td>
                   <td>".$row["kategori_id"]."</td>
                   <td>".$row["personel_id"]."</td>
                   <td>".$row["garanti_id"]."</td>
                   <td>".$row["durum"]."</td>
                   <td><a class='btn btn-danger' href='sil.php?id=".$row["cihaz_id"]."'>Sil</a></td>
                   <td><a class='btn btn-primary' href='guncelle.php?id=".$row["cihaz_id"]."'>Güncelle</a></td>
                   </tr>";
                 }
               } 
             }                      
             ?>
           </tr>
         </tbody>
       </table>
     </div>
     <form  action='serviskayitlari.php' method='POST'  > 
      <div class='control-group col-md-2'>
        <div class='controls' >
          <input type='text' class='form-control input-text' name='barkod' 
          placeholder='Barkod No' id='name' required
          data-validation-required-message='Lütfen Barkod Numaranızı Giriniz' />
          <p class='help-block'></p>
          <input type='submit' class='btn btn-primary input-btn align-middle' value='ARA'/>
        </div>
      </div>  
    </form>
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
