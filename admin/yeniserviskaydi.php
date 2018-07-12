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


 <div class="col-md-10" style="margin: 50px 0 50px 8%;">
  <div class="card">
    <div class="card-header">
    </div>
    <div class="card-body card-block">

      <form action="src/yeniserviskayit.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label"><b>Müşteri Bilgileri</b></label></div>
          <div class="col-12 col-md-9">
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ad</label></div>
          <div class="col-12 col-md-9"><input type="text" id="text-input" name="ad" placeholder="Text" class="form-control" required
            data-validation-required-message="Lütfen Boş Bırakmayın"></div>

            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>Soyad</label></div>
            <div class="col-12 col-md-9"><br><input type="text" id="text-input" name="soyad" placeholder="Text" class="form-control" required
              data-validation-required-message="Lütfen Boş Bırakmayın"></div>

              <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>Telefon</label></div>
              <div class="col-12 col-md-9"><br><input type="number" id="text-input" name="telefon" placeholder="Text" class="form-control" required
                data-validation-required-message="Lütfen Boş Bırakmayın"></div>

                <div class="col col-md-3"><label for="email-input" class=" form-control-label"><br>Email</label></div>
                <div class="col-12 col-md-9"><br><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control" required
                  data-validation-required-message="Lütfen Boş Bırakmayın"></div>

                  <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>İl</label></div>
                  <div class="col-12 col-md-9"><br><input type="text" id="text-input" name="il" placeholder="Text" class="form-control" required
                    data-validation-required-message="Lütfen Boş Bırakmayın"></div>

                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>İlçe</label></div>
                    <div class="col-12 col-md-9"><br><input type="text" id="text-input" name="ilce" placeholder="Text" class="form-control" required
                      data-validation-required-message="Lütfen Boş Bırakmayın"></div>

                      <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>Kullanıcı Adı</label></div>
                      <div class="col-12 col-md-9"><br><input type="text" id="text-input" name="kullaniciad" placeholder="Text" class="form-control" required
                        data-validation-required-message="Lütfen Boş Bırakmayın"></div>
                      </div>

                      <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Adress</label></div>
                        <div class="col-12 col-md-9"><textarea name="adres" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required
                          data-validation-required-message="Lütfen Boş Bırakmayın"></textarea></div>
                        </div>

                        <br><br>
                        <div class="card-header">
                        </div>
                        <br>
                        <div class="col col-md-3"><label class=" form-control-label"><b>Cihaz Bilgileri</b></label></div>

                        <br><br>

                        <?php 
                        require 'src/ayardb.php';

                        $sql="SELECT * FROM kategori";
                        $sql2="SELECT * FROM personel";
                        $result = $conn->query($sql);
                        $result2 = $conn->query($sql2);
                        ?>
                        

                        <div class='row form-group'>
                         <div class='col col-md-3'><label for='select' class=' form-control-label'>Kategori</label></div>
                         <div class='col-12 col-md-9'>
                           <select name='kategori' id='select' class='form-control'>                 
                            <?php 
                            if ($result->num_rows > 0) {

                              while($row = $result->fetch_assoc()) {
                                echo "<option value='".$row["kategori_id"]."'>".$row["kategori_ad"]."</option>";

                              }
                            }
                            ?>
                          </select>
                        </div>
                        

                        <div class="col col-md-3"><label for="select" class=" form-control-label"><br>İlgili Personel</label></div>
                        <div class="col-12 col-md-9">
                          <br><select name="personel" id="select" class="form-control">
                            <?php 
                            if ($result2->num_rows > 0) {

                              while($row = $result2->fetch_assoc()) {
                                echo "<option value='".$row["personel_id"]."'>".$row["ad"]."-".$row["gorevi"]."</option>";

                              }
                            }
                            ?>
                          </select>
                        </div>

                      </div>

                      <div class="row form-group">

                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Marka</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="marka" placeholder="Text" class="form-control" required
                          data-validation-required-message="Lütfen Boş Bırakmayın"></div>

                          <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>Model</label></div>
                          <div class="col-12 col-md-9"><br><input type="text" id="text-input" name="model" placeholder="Text" class="form-control" required
                            data-validation-required-message="Lütfen Boş Bırakmayın"></div>

                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>Seri No</label></div>
                            <div class="col-12 col-md-9"><br><input type="text" id="text-input" name="serino" placeholder="Text" class="form-control" required
                              data-validation-required-message="Lütfen Boş Bırakmayın"></div>

                              <div class="col col-md-3"><label class=" form-control-label"><br>Garanti Durum</label></div>
                              <div class="col col-md-9"><br>
                                <div class="form-check-inline form-check">
                                  <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="garantidurum" value="4" class="form-check-input" required
                                    data-validation-required-message="Lütfen Boş Bırakmayın">Var  
                                    <br> </label>
                                    <label for="inline-radio2" class="form-check-label ">
                                      <input type="radio" id="inline-radio2" name="garantidurum" value="3" class="form-check-input" required
                                      data-validation-required-message="Lütfen Boş Bırakmayın">Yok
                                    </label>
                                  </div>
                                </div>
                              </div>




                              <div class="form-group">
                                <label class="form-control-label">Teslim Alınma Tarihi</label>
                                <div class="input-group " >
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  <input class="form-control" type="date" name="teslimtarih" required
                                  data-validation-required-message="Lütfen Boş Bırakmayın">
                                </div>
                              </div>




                              <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Şikayet</label></div>
                                <div class="col-12 col-md-9"><textarea name="sikayet" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                              </div>


                              <div class="form-group">
                                <label class="form-control-label">Tahmini Teslim Tarihi</label>
                                <div class="input-group " >
                                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  <input class="form-control" type="date" name="tahminiteslimtarih" required
                                  data-validation-required-message="Lütfen Boş Bırakmayın" >
                                </div>
                              </div>


                              <br><br><hr>



                              <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>Barkod No</label></div>
                                <div class="col-12 col-md-9"><br><input type="text" id="text-input" name="barkodno" placeholder="Text" class="form-control" required
                                  data-validation-required-message="Lütfen Boş Bırakmayın"></div>
                                  <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>Teslim Alınan Parçalar</label></div>
                                  <div class="col-12 col-md-9"><br><input type="text" id="text-input" name="teslimalinanlar" placeholder="Text" class="form-control" required
                                    data-validation-required-message="Lütfen Boş Bırakmayın"></div>
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><br>Ücret</label></div>
                                    <div class="col-12 col-md-9"><br><input type="number" id="text-input" name="ucret" placeholder="Number" class="form-control" required
                                      data-validation-required-message="Lütfen Boş Bırakmayın"></div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Yapılan İşlemler</label></div>
                                      <div class="col-12 col-md-9"><textarea name="yapilanislemler" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required
                                        data-validation-required-message="Lütfen Boş Bırakmayın"></textarea></div>
                                      </div>

                                      <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                          <i class="fa fa-dot-circle-o"></i> Kaydet
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm"><a href="yeniserviskaydi.php">
                                          <i class="fa fa-ban"></i> Temizle
                                        </a></button>
                                      </div>
                                    </div>

                                  </div>


                                </form>







                              </div><!-- .animated -->
                            </div><!-- .content -->




                            <!-- Right Panel -->


                            <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
                            <script src="assets/js/popper.min.js"></script>
                            <script src="assets/js/plugins.js"></script>
                            <script src="assets/js/main.js"></script>


                          </body>
                          </html>
