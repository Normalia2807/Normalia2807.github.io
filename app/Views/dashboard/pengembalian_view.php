<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12">
    <!-- general form elements -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.card-header -->
                <!-- form start -->
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <img class="profile-user-img img-fluid img-rectangle" src="../../dist/img/web.jpg" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><?= $pengembalian->judul; ?></h3>
                            <p class="text-muted text-center"><?= $pengembalian->id_buku; ?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-9">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Loan Description</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i>
                                Education</strong>
                            <p class="text-muted">
                                    Kode Pinjam <?= $pengembalian->kode_pinjam; ?> 
                            </p>
                            <hr>
                            <strong><i class="fas fa-id-card mr-1"></i> Nim </strong>
                            <p class="text-muted"><?= $pengembalian->nim; ?></p>
                            <hr>
                            <strong><i class="fas fa-user-graduate mr-1"></i> Nama </strong>
                            <p class="text-muted"><?= $pengembalian->nama; ?></p>
                            <hr>
                            <strong><i class="fas fa-user-building mr-1"></i> Denda </strong>
                            <p class="text-muted"><?= $pengembalian->denda; ?></p>
                            <hr>
                            <strong><i class="fas fa-user-building mr-1"></i> Bayar </strong>
                            <p class="text-muted"><?= $pengembalian->bayar; ?></p>
                            
                            


                           
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.card -->
        </div>
</div>
<?= $this->endSection('content'); ?>