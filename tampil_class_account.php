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
                    <h3 class="card-title">Class Account</h3>

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
                  <!doctype html>
                    <html lang="en">
                    <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">

                        <!-- Bootstrap CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

                        <title>DATA</title>
                    </head>
                    <body>
                        <h1 style= "text-align : center">ACCOUNT-BANK</h1>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                        <table class="table table-success table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Account</th>
                            <th scope="col">Pemilik</th>
                            <th scope="col">Saldo</th>
                            </tr>
                            <?php 
                            require_once 'pertemuan5/class_accountBank.php'; 
                            $ac1 = new AccountBank ('C001',6000000, 'Ahmad');
                            $ac2 = new AccountBank ('C002',5350000, 'Budi');
                            $ac3 = new AccountBank ('C003', 2500000, 'Kurniawan');
                            $ar_account = [$ac1, $ac2, $ac3];

                            $nomor = 1;
                            foreach ($ar_account as $nilai) {
                                ?>
                            <tr>
                                <td>
                                    <?=$nomor?>
                                </td>
                                <td>
                                    <?=$nilai->nomor?>
                                </td>
                                <td>
                                    <?=$nilai->customer?>
                                </td>
                                <td>
                                    <?=$nilai->saldo()?>
                                </td>
                            </tr>
                            
                            <?php
                            $nomor++;
                            }
                            ?>
                        </thead>
                        </table>
                    </body>
                        <?php

                        $ac1->deposit(1000000);
                        echo 'Ahmad Menabung 1.000.000';
                        $ac1->cetak();
                        
                        $ac2->withdraw(500000);
                        echo '<br/> Budi Tarik uang 2.500.000';
                        $ac2->cetak();
                        ?>
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