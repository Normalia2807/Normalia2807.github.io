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
                            <div class="text-center">
                            <img class="profile-user-img img-fluid img-rectangle" src="/sampul/<?= $buku->sampul; ?>" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><?= $buku->judul; ?></h3>
                            <p class="text-muted text-center"><?= $buku->id_buku; ?><br><?= $buku->pengarang; ?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-9">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Book Description</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i>
                                Education</strong>
                            <p class="text-muted">
                                Pengarang <?= $buku->pengarang; ?> Pada
                                Sekolah Tinggi Manajemen dan Informatika
                                (STMIK) Palangkaraya
                            </p>
                            <hr>
                            <strong><i class="fas fa-mobile-alt mr-1"></i> Tahun
                                Buku</strong>
                            <p class="text-muted"><?= $buku->tahun; ?></p>

                           
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