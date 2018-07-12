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

   <?php 

   require 'menu.php';
   require 'src/ayardb.php';

   $cihaz_id=$_GET['id'];

   $sql="SELECT  * FROM cihazlar WHERE cihaz_id="."$cihaz_id";
   $sql3="SELECT * FROM kategori";
   $sql2="SELECT * FROM personel";
   $result3 = $conn->query($sql3);
   $result2 = $conn->query($sql2);

   $result = $conn->query($sql);

   if ($result->num_rows > 0) {

      while($row1 = $result->fetch_assoc()) {

        echo "


        <div class='col-md-10' style='margin: 50px 0 50px 8%;''>
        <div class='card'>
        <div class='card-header'>
        </div>
        <div class='card-body card-block'>

        <form action='cihazguncelle.php?id=".$cihaz_id."' method='POST' enctype='multipart/form-data' class='form-horizontal'>

        <br>
        <div class='col col-md-3'><label class=' form-control-label'><b>Cihaz Bilgileri</b></label></div>

        <br><br>


        <div class='row form-group'>
        <div class='col col-md-3'><label for='select' class=' form-control-label' >Kategori</label></div>
        <div class='col-12 col-md-9'>
        <select name='kategori' id='select' class='form-control'>";

        if ($result3->num_rows > 0) {

          while($row = $result3->fetch_assoc()) {
            echo "<option value='".$row["kategori_id"]."'>".$row["kategori_ad"]."</option>";

        }
    }

    echo "
    </select>
    </div>

    <div class='col col-md-3'><label for='select' class=' form-control-label'><br>İlgili Personel</label></div>
    <div class='col-12 col-md-9'>
    <br><select name='personel' id='select' class='form-control'>";

    if ($result2->num_rows > 0) {

      while($row = $result2->fetch_assoc()) {
        echo "<option value='".$row["personel_id"]."'>".$row["ad"]."-".$row["gorevi"]."</option>";

    }
}

echo "
</select>
</div>

</div>

<div class='row form-group'>

<div class='col col-md-3'><label for='text-input' class=' form-control-label'>Marka</label></div>
<div class='col-12 col-md-9'><input value=".$row1["marka"]."  type='text' id='text-input' name='marka' placeholder='Text' class='form-control'></div>

<div class='col col-md-3'><label for='text-input' class=' form-control-label'><br>Model</label></div>
<div class='col-12 col-md-9'><br><input value=".$row1["model"]." type='text' id='text-input' name='model' placeholder='Text' class='form-control'></div>

<div class='col col-md-3'><label for='text-input' class=' form-control-label'><br>Seri No</label></div>
<div class='col-12 col-md-9'><br><input value=".$row1["seri_no"]." type='text' id='text-input' name='serino' placeholder='Text' class='form-control'></div>

<div class='col col-md-3'><label class=' form-control-label'><br>Garanti Durum</label></div>
<div class='col col-md-9'><br>
<div class='form-check-inline form-check'>
<label for='inline-radio1' class='form-check-label '>
<input type='radio' id='inline-radio1' name='garantidurum' value='4' class='form-check-input' required
data-validation-required-message='Lütfen Boş Bırakmayın'>Var  
<br> </label>
<label for='inline-radio2' class='form-check-label '>
<input type='radio' id='inline-radio2' name='garantidurum' value='3' class='form-check-input' required
data-validation-required-message='Lütfen Boş Bırakmayın'>Yok
</label>
</div>
</div>
</div>

<div class='form-group'>
<label class='form-control-label'>Teslim Alınma Tarihi</label>
<div class='input-group ' >
<div class='input-group-addon'><i class='fa fa-calendar'></i></div>
<input value=".$row1["alinma_tarihi"]." class='form-control' type='date' name='teslimtarih'>
</div>
</div>

<div class='row form-group'>
<div class='col col-md-3'><label for='textarea-input' class=' form-control-label'>Şikayet</label></div>
<div class='col-12 col-md-9'><textarea  name='sikayet' id='textarea-input' rows='9' placeholder='Content...' class='form-control'></textarea></div>
</div>

<div class='form-group'>
<label class='form-control-label'>Tahmini Teslim Tarihi</label>
<div class='input-group ' >
<div class='input-group-addon'><i class='fa fa-calendar'></i></div>
<input value='".$row1["tahmini_teslim_tarihi"]."' class='form-control' type='date' name='tahminiteslimtarih'>
</div>
</div>

<br><br><hr>

<div class='row form-group'>
<div class='col col-md-3'><label for='text-input' class=' form-control-label'><br>Barkod No</label></div>
<div class='col-12 col-md-9'><br><input value='".$row1["barkod_no"]."' type='text' id='text-input' name='barkodno' placeholder='Text' class='form-control'></div>
<div class='col col-md-3'><label for='text-input' class=' form-control-label'><br>Teslim Alınan Parçalar</label></div>
<div class='col-12 col-md-9'><br><input value='".$row1["teslim_alinan_parcalar"]."' type='text' id='text-input' name='teslimalinanlar' placeholder='Text' class='form-control'></div>
<div class='col col-md-3'><label for='text-input' class=' form-control-label'><br>Ücret</label></div>
<div class='col-12 col-md-9'><br><input value='".$row1["ucret"]."' type='number' id='text-input' name='ucret' placeholder='Number' class='form-control'></div>
<div class='col col-md-3'><label for='text-input' class=' form-control-label'><br>Kullanıcı Adı</label></div>
<div class='col-12 col-md-9'><br><input value='".$row1["kullanici_ad"]."' type='text' id='text-input' name='kullanici_ad' placeholder='Text' class='form-control'></div>
</div>

<div class='row form-group'>
<div class='col col-md-3'><label for='textarea-input' class=' form-control-label'>Yapılan İşlemler</label></div>
<div class='col-12 col-md-9'><textarea name='yapilanislemler' id='textarea-input' rows='9' placeholder='Content...' class='form-control'></textarea></div>
</div>
<div class='row form-group'>
<div class='col col-md-3'><label for='select' class=' form-control-label'>Cihaz Son Durum</label></div>
<div class='col-12 col-md-9'>
<select name='durum' id='select' class='form-control'>
<option value='".$row1["durum"]."'>".$row1["durum"]."</option>
<option value='teslimehazir'>teslimehazir</option>   
</select>
<br><br
</div>    
<div class='card-footer'>
<button type='submit' class='btn btn-primary btn-sm'>
<i class='fa fa-dot-circle-o'></i> GÜNCELLE
</button>
</div>
</div>
</div>
</form>
</div><!-- .animated -->
</div><!-- .content -->
</body>
</html>


";

}
}


$conn->close();
?>

<!-- Left Panel -->

<!-- Right Panel -->







<!-- Right Panel -->


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
