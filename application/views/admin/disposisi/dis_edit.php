<?php $this->load->view("admin/_patrials/head.php")?>
<?php $this->load->view("admin/_patrials/sidebar.php")?>
<?php $this->load->view("admin/_patrials/navbar.php")?>


<!-- Begin of Content-->
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <?php $this->load->view("admin/_patrials/breadcrumb.php")?>
    </h1>
</div>

<!-- Container Fluid-->
<div class="card mb-3">
<div class="card-header">
    <a href="<?php echo site_url('admin/disposisi/')?>">
    <i class="fas fa-arrow-left"></i> Back
</a>
</div>

<div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $disposisi->disposisi_id?>" />
    
    <div class="form-group">
        <label for="disposisi_id">Disposisi Id*</label>
        <input class="form-control <?php echo form_error('disposisi_id') ? 'is_invalid' : '' ?>" type="number" name="disposisi_id" value="<?php echo $disposisi->disposisi_id?>"/>

        <div class="invaliid-feedback">
            <?php echo form_error('disposisi_id') ?>
        </div>
    </div>

    <div class="form-group">
        <label for="no_disposisi">Nomor Disposisi*</label>
        <input class="form-control" <?php echo form_error('no_disposisi') ? 'is_invalid': ''?>" type="text"
        name="no_disposisi" placeholder="Nomor Disposisi" value="<?php echo $disposisi->no_disposisi?>" />
   

        <div class="invaliid-feedback">
            <?php echo form_error('no_disposisi') ?>
        </div>

        </div>
    </div>

    


    <div class="form-group">
        <label for="no_surat">Nomor Surat*</label>
        <input class="form-control <?php echo form_error('no_surat') ? 'is_invalid' :'' ?>" type="text"
        name="no_surat" value="<?php echo $disposisi->no_surat ?>"/>

        <div class="invalid-feedback">
            <?php echo form_error('no_surat')?>
        </div>

    </div>

    <div class="form-group">
        <label for="kepada">Kepada*</label>
        <input class="form-control <?php echo form_error('kepada') ? 'is_invalid' :'' ?>" type="text"
        name="kepada" value="<?php echo $disposisi->kepada ?>"/>

        <div class="invalid-feedback">
            <?php echo form_error('kepada')?>
        </div>

    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan*</label>
        <input class="form-control <?php echo form_error('keterangan') ? 'is_invalid' :'' ?>" type="text"
        name="keterangan" value="<?php echo $disposisi->keterangan ?>"/>

        <div class="invalid-feedback">
            <?php echo form_error('keterangan')?>
        </div>

    </div>

    <div class="form-group">
        <label for="status_surat">Status Surat*</label>
        <input class="form-control <?php echo form_error('status_surat') ? 'is_invalid' :'' ?>" type="text"
        name="status_surat" value="<?php echo $disposisi->status_surat?>"/>

        <div class="invalid-feedback">
            <?php echo form_error('status_surat')?>
        </div>

    </div>

    <div class="form-group">
        <label for="tanggapan">Tanggapan*</label>
        <input class="form-control <?php echo form_error('tanggapan') ? 'is_invalid' :'' ?>" type="text"
        name="tanggapan" value="<?php echo $disposisi->tanggapan ?>"/>

        <div class="invalid-feedback">
            <?php echo form_error('tanggapan')?>
        </div>

    </div>
    <input class="btn btn-success" type="submit" name="btn" value="Save"></input>
</form>

</div>
<div class="card-footer small text-muted">
    * required fields

</div>
</div>
</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Suryani 2021</span>
        </div>
    </div>
</footer>

<?php $this->load->view("admin/_patrials/js.php")?>
