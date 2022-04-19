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
                <h1>Pertemuan5</h1>
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
                    <h3 class="card-title">Class Dispenser</h3>

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
                    class Dispenser{
                        protected $volume;
                        protected $hargaSegelas;
                        private $volumeGelas;
                        public $namaMinuman;
                    

                        public function isi(){
                            $this->volume = 1000;
                            echo "Volume galon nya adalah {$this->volume} Ml";
                        }

                        function harga(){
                            $this->hargaSegelas = 3000;
                            echo "Harga Segelas nya adalah {$this->hargaSegelas} Rupiah";
                        }

                        function gelas(){
                            $this->volumeGelas = 250;
                            echo "Andi beli air gelas yang volume nya {$this->volumeGelas} Ml";
                        }

                        function hasil(){
                            $this->hasil = $this->volume - $this->volumeGelas;
                            echo "Hasil Volume Sekarang adalah {$this->hasil} Ml";
                        }
                    }
                    $penser = new Dispenser();
                    echo $penser -> namaMinuman = 'Nama Minuman Aqua';
                    echo "<hr><br/>";
                    echo $penser -> isi();
                    echo "<br/>";
                    echo $penser ->harga();
                    echo "<br/>";
                    echo $penser ->gelas();
                    echo "<br/>";
                    $penser ->hasil();
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