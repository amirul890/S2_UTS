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
                    <h3 class="card-title">File Persegi Panjang</h3>

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
                  <?php
                    // memanggil file atau class_lingkaran.php
                    require_once 'pertemuan4/class_persegipanjang.php';
                    $persegipanjang1 = new PersegiPanjang(10, 12);
                    $persegipanjang2 = new PersegiPanjang(8, 10);

                    // Menghitung luas persegi panjang menggunakan fungsi getluas
                    echo "Luas Persegi Panjang I adalah = " .$persegipanjang1->getluas();
                    echo "<br/> Luas Persegi Panjang II adalah = " .$persegipanjang2->getluas();
                    echo "<br/>";

                    // Menghitung luas persegi panjang menggunakan fungsi getkeliling
                    echo "<br/> Keliling Persegi Panjang I adalah = " .$persegipanjang1->getkeliling();
                    echo "<br/> Keliling Persegi Panjang II adalah = " .$persegipanjang2->getkeliling();
                    ?>
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