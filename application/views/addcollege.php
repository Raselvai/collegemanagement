<?php include ("include/header.php");?>
<div class="container">
        <?php if($msg = $this->session->flashdata('message')){?>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert bg-success alert-dismissible mt-4">
                        <?php echo $msg; ?>
                    </div>
                </div>
            </div>
        <?php }?>
    <div class="registration-header text-center">
        <h4>Ad College</h4>
        <hr>
    </div>
    <form method="post" action="<?php echo base_url(); ?>admin/createCollege">
    <div class="row">
        <div class="col-md-6">
              <div class="form-group">
                  <label class="col-md-3 control-label" for="e">College Name</label>
                  <div class="col-md-9">
                      <input id="e" type="text" name="collegename"  class="form-control" placeholder="College name">
                  </div>
              </div>
        </div>
        <div class="col-md-6">
        <?php echo form_error('collegename','<div class="text-danger>','</div>') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
              <div class="form-group">
                  <label class="col-md-3 control-label" for="p">Branch</label>
                  <div class="col-md-9">
                      <input id="p" type="text" name="branch" class="form-control" placeholder="Branch">
                  </div>
              </div>
        </div>
        <div class="col-md-6">
        <?php echo form_error('branch','<div class="text-danger>','</div>') ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <a href="<?php echo site_url('admin/dashboard') ?>" class="btn btn-primary">Back</a>
    </form>

</div>
<?php include ("include/footer.php");?>