<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>


<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="dist/img/Norma.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">NORMALIA</h3>

                <p class="text-muted text-center">Semester III </p>
                <p class="text-muted text-center">Teknik Informatika Kelas A </p>
                <p class="text-muted text-center">Mata Kuliah Pemrograman Framework </p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Email:</b> <a class="float-right">normalia280@gmail.com</a>
                    </li>
                    <li class="list-group-item">
                        <b>No Telp:</b> <a class="float-right">082357449804</a>
                    </li>
                    <li class="list-group-item">
                        <b>Instagram:</b> <a class="float-right">Brighxiu</a>
                    </li>
                    <li class="list-group-item">
                        <b>Hobi:</b> <a class="float-right">Nonton,Game,Mengedit</a>
                    </li>
                    
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Data Diri</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->


    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                BS in Computer Science from STMIK Palangkaraya
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Palangkaraya, Kalimantan Tengah</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                    <span class="tag tag-danger">Draw,</span>
                    <span class="tag tag-success">Edit,</span>
                    <span class="tag tag-info">Desain,</span>
                    <span class="tag tag-warning">HTML,</span>
                    <span class="tag tag-primary">PHP.</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">without reading and studying we will be petty people, Bullies and wearers are easily provoked without breadth of heart and imagination.</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>



<?= $this->endSection('content'); ?>