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
                <h1>Pertemuan4</h1>
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
                    <h3 class="card-title">Form Nilai Mahasiswa</h3>

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
                      <meta charset="UTF-8">
                      <meta http-equiv="X-UA-Compatible" content="IE=edge">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <title>Form Nilai</title>
                      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                  </head>
                  <body>
                  <div class="container">   
                  <form method="POST" action="form_nilaimahasiswa.php">
                    <div class="form-group row">
                      <label for="nim" class="col-4 col-form-label">NIM</label> 
                      <div class="col-8">
                        <input id="nim" name="nim" placeholder="masukkan nim anda" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                      <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select">
                          <option value="DDP">Dasar - Dasar Pemrograman</option>
                          <option value="PEMWEB">Pemrograman Web</option>
                          <option value="BASDAT">Basis Data</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nilai" class="col-4 col-form-label">NILAI</label> 
                      <div class="col-8">
                        <input id="nilai" name="nilai" placeholder="masukkan nilai anda" type="text" class="form-control">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="submit" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                  </div>

                  <?php
                  require_once 'pertemuan4/class_nilaimahasiswa.php';
                  if($_POST){
                      $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                      $keterangan = $ns->hitungNilai();
                      $hasil = $ns->kelulusan($keterangan);
                      $hasil2 = $ns->grade($keterangan);

                      echo 'NIM :' .$ns->nim;
                      echo '<br/> Mata Kuliah :' .$ns->matkul;
                      echo '<br/> Nilai : ' .$ns->nilai;
                      echo '<br/> Status : ' .$ns->kelulusan($keterangan);
                      echo '<br/> Grade :' .$ns->grade($keterangan);
                  }
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