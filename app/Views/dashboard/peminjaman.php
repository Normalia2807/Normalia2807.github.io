<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<!-- /.card-header -->
<div class="card-body">
    <?php if (!empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <a href="<?= base_url('/peminjaman/create'); ?>" class="btn btn-primary">Tambah</a>
    <hr />
    <table class="table table-bordered"></a>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Pinjam</th>
                <th>Tanggal Peminjaman</th>
                <th>Total Pinjam</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Jatuh Tempo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($peminjaman as $row) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->kode_pinjam; ?></td>
                    <td><?= $row->tanggal_peminjaman; ?></td>
                    <td><?= $row->total_pinjam; ?></td>
                    <td><?= $row->id_buku; ?></td>
                    <td><?= $row->judul; ?></td>
                    <td><?= $row->jatuh_tempo; ?></td>
                    
                   
                    <td>
                        <a title="View" href="<?= base_url("peminjaman/view/$row->kode_pinjam"); ?>" class="btn btn-info"><i class="nav-icon fas fa-tasks"></i></a>
                        <a title="Return" href="<?= base_url("peminjaman/edit/$row->kode_pinjam"); ?>" class="btn btn-warning"><i class="nav-icon fas fa-sign-in-alt"></i></a>    
                        <a title="Delete" href="<?= base_url("peminjaman/delete/$row->kode_pinjam") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>