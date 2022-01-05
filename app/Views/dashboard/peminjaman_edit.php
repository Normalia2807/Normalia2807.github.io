<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Pengembalian</h3>
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
        <form class="" method="post" action="<?= base_url('pengembalian/store') ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="kode_pinjam" class="col-sm-2 col-form-label">Kode Pinjam</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kode_pinjam" name="kode_pinjam" placeholder="Kode Pinjam" value="<?= old('kode_pinjam'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim Mahasiswa" value="<?= old('nim'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa" value="<?= old('nama'); ?>">
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
                    <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" placeholder="Tanggal Peminjaman" value="<?= old('tanggal_peminjaman'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jatuh_tempo" class="col-sm-2 col-form-label">Jatuh Tempo</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jatuh_tempo" name="jatuh_tempo" placeholder="Jatuh Tempo" value="<?= old('jatuh_tempo'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggal_kembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tanggal_kembali" name="tanggal_kembali" placeholder="Tanggal Kembali" value="<?= old('tanggal_kembali'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                <label for="telat" class="col-sm-2 col-form-label">Telat Pengembalian</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="telat" name="telat" placeholder="Telat Pengembalian" value="<?= old('telat'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                <label for="denda" class="col-sm-2 col-form-label">Denda</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="denda" name="denda" placeholder="Denda" value="<?= old('denda'); ?>">
                    </div>
                </div>
                
                <div class="form-group row">
                <label for="bayar" class="col-sm-2 col-form-label">Bayar Denda</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="bayar" name="bayar" placeholder="Bayar Denda" value="<?= old('bayar'); ?>">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="submit" class="btn btn-warning">Batal</button>

            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
</div>
<?= $this->endSection('content'); ?>