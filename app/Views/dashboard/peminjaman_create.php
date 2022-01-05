<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Peminjaman</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-light alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria- label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <form class="" method="post" action="<?= base_url('peminjaman/store') ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="kode_pinjam" class="col-sm-2 col-form-label">Kode Pinjam</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kode_pinjam" name="kode_pinjam" placeholder="Kode Pinjam" value="<?= old('kode_pinjam'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" placeholder="Tanggal Peminjaman" value="<?= old('tanggal_peminjaman'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="total_pinjam" class="col-sm-2 col-form-label">Total Pinjam</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="total_pinjam" name="total_pinjam" placeholder="Total Pinjam" value="<?= old('total_pinjam'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nim_mahasiswa" class="col-sm-2 col-form-label">Nim</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nim_mahasiswa" name="nim_mahasiswa" placeholder="Nim Mahasiswa" value="<?= old('nim_mahasiswa'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Nama Mahasiswa" value="<?= old('nama_mahasiswa'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Mahasiswa" value="<?= old('alamat'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_buku" class="col-sm-2 col-form-label">Kode Buku</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="id_buku" name="id_buku" placeholder="Kode Buku" value="<?= old('id_buku'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" value="<?= old('judul'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang Buku" value="<?= old('pengarang'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit Buku" value="<?= old('penerbit'); ?>">
                    </div>
                </div>                
                <div class="form-group row">
                <label for="jatuh_tempo" class="col-sm-2 col-form-label">Jatuh Tempo</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jatuh_tempo" name="jatuh_tempo" placeholder="Jatuh Tempo" value="<?= old('jatuh_tempo'); ?>">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Simpan</button>

            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
</div>
<?= $this->endSection('content'); ?>