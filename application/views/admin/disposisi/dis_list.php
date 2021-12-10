<?php $this->load->view("admin/_patrials/head.php")?>
<?php $this->load->view("admin/_patrials/sidebar.php")?>
<?php $this->load->view("admin/_patrials/navbar.php")?>


<!-- Begin Content -->
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <?php $this->load->view("admin/_patrials/breadcrumb.php")?>
    </h1>

</div>

<!-- Data Tables-->
<div class="card mb-3">
<div class="card-header">
    <a class="btn btn-primary" href="<?php echo site_url('admin/disposisi/add') ?>">
        <i class="fas fa-plus"> Add New
             
        </i>
    </a>
</div>
</div>


<div class="card-body">
<div class="table-responsive">
    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nomor Disposisi</th>
            <th>Nomor Surat</th>
            <th>Kepada</th>
            <th>Keterangan</th>
            <th>Tanggapan</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($disposisi as $disposisi): ?>
            <tr>
                <td width="150">
                <?php echo $disposisi->no_disposisi ?>
                </td>

                <td>
                <?php echo $disposisi->no_surat ?>
                </td>

                <td>
                <?php echo $disposisi->kepada ?>
                </td>

                <td>
                <?php echo $disposisi->keterangan ?>
                </td>

                <td>
                <?php echo $disposisi->tanggapan ?>
                </td>

                <td>
                    <a href="<?php echo site_url('admin/disposisi/edit/' .$disposisi->disposisi_id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
                    <a href="<?php echo site_url('admin/disposisi/delete/' .$disposisi->disposisi_id) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
    </table>

</div>
</div>
</div>

<!-- Footer -->
<footer class="sticky-foter bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>copyright &copy; Suryani 2021</span>
            </div>
        </div>
</footer>

<?php $this->load->view("admin/_patrials/js.php")?>



