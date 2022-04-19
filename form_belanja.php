<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Pertemuan2</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Layout</a></li>
                  <li class="breadcrumb-item ">Fixed Layout</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Form Belanja</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                  <!DOCTYPE html>
                  <html lang="en">
                    <head>
                      <meta charset="UTF-8" />
                      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
            
                    </head>
                    <body>
                    <div class="col-md-3 " style="float:right">
                              <ul class="list-group"id="list">
                                  <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                                  <li class="list-group-item">TV : 4.200.000</li>
                                  <li class="list-group-item">Kulkas : 3.100.000</li>
                                  <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                                  <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
                              </ul>
                      </div>
                      <form method="POST" action="form_belanja.php" style="margin-left: 5px">
                        <div class="form-group row">
                          <label for="text1" class="col-2 col-form-label">Customer</label>
                          <div class="col-3">
                            <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-2">Pilih Produk</label>
                          <div class="col-3">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input name="radio" id="radio_0"  type="radio" class="custom-control-input" value="TV" />
                              <label for="radio_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="KULKAS" />
                              <label for="radio_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI" />
                              <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="text" class="col-2 col-form-label">Jumlah</label>
                          <div class="col-3">
                            <input id="text" name="text" placeholder="Jumlah" type="text" class="form-control" />
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class=" col-1">
                            <button name="submit" type="submit" class="btn btn-success">Kirim</button><br><br>
                          </div>
                        </div>

                      </form>
                      <?php
                      $customer = $_POST['name'];
                      $produk = $_POST['radio'];
                      $jumlah = $_POST['text'];
                      $proses = $_POST['submit'];

                      // rumus
                      $tv = 4200000;
                      $kulkas = 3100000;
                      $mesin_cuci = 3800000;

                      if ($produk == "TV" ){
                        $total = $jumlah * $tv;
                      }elseif ($produk == "KULKAS"){
                        $total = $jumlah * $kulkas;
                      }elseif ($produk == "MESIN CUCI"){
                        $total = $jumlah * $mesin_cuci;
                      }

                      // output
                      echo "<br/><hr>";
                      echo "Nama Customer : $customer";
                      echo "<br/>Produk Pilihan : $produk";
                      echo "<br/>Jumlah Beli : $jumlah";
                      echo "<br/>Total Belanja : Rp. $total ,-";
                      ?>
                    </body>
                  </html>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">Footer</div>
                  <!-- /.card-footer-->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
<?php
include_once 'footer.php';
?>