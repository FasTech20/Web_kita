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

<!-- /.Container Fluid -->
<div class="card mb-3">
<div class="card-header">
    <a href="<?php echo site_url('admin/disposisi') ?>"><i class="fas fa-arrow-left"></i> Back </a>
</div>

<div class="card-body">
    <form action="<?php echo site_url('admin/disposisi/add')?>" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="no_agenda">Disposisi_Id*</label>
        <input class="form-control" <?php echo form_error('disposisi_id') ? 'is_invalid': ''?>" type="number" name="disposisi_id" placeholder="Disposisi_Id" />

       

    </div>

    <div class="form-group">
        <label for="jenis_surat">Nomor Disposisi*</label>
        <input class="form-control" <?php echo form_error('no_disposisi') ? 'is_invalid': ''?>" type="text"
        name="no_disposisi" placeholder="Nomor Disposisi" />
    </div>
   
    <div class="form-group">
        <label for="tanggal_kirim">Nomor Surat*</label>
        <input class="form-control" <?php echo form_error('no_surat') ? 'is_invalid': ''?>" type="text" name="no_surat" />
        <div class="invalid-feedback">
            <?php echo form_error('no_surat') ?>

        </div>

    <div class="form-group">
        <label for="tanggal_terima">Kepada*</label>
        <input class="form-control" <?php echo form_error('kepada') ? 'is_invalid': ''?>" type="text" name="kepada" />
        <div class="invalid-feedback">
            <?php echo form_error('kepada') ?>

        </div>
    </div>

    <div class="form-group">
        <label for="no_surat">Keterangan*</label>
        <input class="form-control" <?php echo form_error('keterangan') ? 'is_invalid': ''?>" type="text" name="keterangan" placeholder="Keterangan" />

    <div class="invalid-feedback">
        <?php echo form_error('keterangan') ?>
    </div> 
    
    <div class="form-group">
        <label for="pengirim">Status Surat*</label>
        <input class="form-control <?php echo form_error('status_surat') ? 'is_invalid': ''?>"
        type="text" name="status_surat" placeholder="Status Surat" />
     
    </div>
    <div class="invalid-feedback">
        <?php echo form_error('status_surat') ?>
   
    </div> 

    <div class="form-group">
        <label for="perihal">Tanggapan*</label>
        <input class="form-control <?php echo form_error('tanggapan') ? 'is_invalid': ''?>"
        type="text" name="tanggapan" placeholder="Tanggapan" />
     
    </div>
    <div class="invalid-feedback">
        <?php echo form_error('tanggapan') ?>
   
    </div> 

    <input class="btn btn-success" type="submit" name="btn" value="Save" />
    </form>

</div>

    <div class="card-footer small text-muted">* required fields </div>


</div>
<!--- end of /.container fluid -->

</div>
<!-- end of main content--> 

<!-- footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
        <span Copyright &copy; Suryani 2021></span>
    </div>
    </div>

</footer>
</div>

<?php $this->load->view("admin/_patrials/js.php")?>