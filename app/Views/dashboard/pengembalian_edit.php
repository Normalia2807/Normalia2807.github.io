<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Pengembalian</h3>
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
        <form class="form-horizontal" method="post" action="<?= base_url('pengembalian/update/' . $pengembalian->kode_pinjam) ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="kode_pinjam" class="col-sm-2 col-form-label">Kode Pinjam</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kode_pinjam" name="kode_pinjam" value="<?= $pengembalian->kode_pinjam; ?>">
                    </div>
                </div>
                <div class="form-group row">
                <label for="id_buku" class="col-sm-2 col-form-label">Kode Buku</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?= $pengembalian->id_buku; ?>">
                    </div>
                </div>
                <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $pengembalian->judul; ?>">
                    </div>
                </div>
                <div class="form-group row">
                <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" value="<?= $pengembalian->tanggal_peminjaman; ?>">
                    </div>
                </div>
                <div class="form-group row">
                <label for="jatuh_tempo" class="col-sm-2 col-form-label">Jatuh Tempo</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jatuh_tempo" name="jatuh_tempo" value="<?= $pengembalian->jatuh_tempo; ?>">
                    </div>
                </div>
                <div class="form-group row">
                <label for="jatuh_tempo" class="col-sm-2 col-form-label">Jatuh Tempo</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jatuh_tempo" name="jatuh_tempo" value="<?= $pengembalian->jatuh_tempo; ?>">
                    </div>
                </div>
                <div class="form-group row">
                <label for="tanggal_kembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?= $pengembalian->tanggal_kembali; ?>">
                    </div>
                </div>
                <div class="form-group row">
                <label for="telat" class="col-sm-2 col-form-label">Telat</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="telat" name="telat" value="<?= $pengembalian->telat; ?>">
                    </div>
                </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="submit" class="btn btn-danger">Batal</button>

            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
</div>
<?= $this->endSection('content'); ?>