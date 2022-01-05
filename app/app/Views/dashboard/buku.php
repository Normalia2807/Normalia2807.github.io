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
    <a href="<?= base_url('/buku/create'); ?>" class="btn btn-primary">Tambah</a>
    <hr />
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode_Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($buku as $row) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->kode_buku; ?></td>
                    <td><?= $row->judul; ?></td>
                    <td><?= $row->pengarang; ?></td>
                    <td><?= $row->penerbit; ?></td>
                    <td><?= $row->tahun; ?></td>
                    <td>
                        <a title="View" href="<?= base_url("buku/view/$row->id_buku"); ?>" class="btn btn-info">view</a>
                        <a title="Edit" href="<?= base_url("buku/edit/$row->id_buku"); ?>" class="btn btn-info">Edit</a>
                        <a title="Delete" href="<?= base_url("buku/delete/$row->id__buku") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
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