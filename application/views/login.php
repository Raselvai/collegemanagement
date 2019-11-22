<?php include ("include/header.php");?>
<div class="container">
        <?php if($msg = $this->session->flashdata('message')){?>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert bg-danger alert-dismissible mt-4">
                        <?php echo $msg; ?>
                    </div>
                </div>
            </div>
        <?php }?>
    <div class="registration-header text-center">
        <h4>Admin Login</h4>
        <hr>
    </div>
    <form method="post" action="<?php echo base_url(); ?>welcome/signin">
    <div class="row">
        <div class="col-md-6">
              <div class="form-group">
                  <label class="col-md-3 control-label" for="e">Email</label>
                  <div class="col-md-9">
                      <input id="e" type="text" name="email"  value="<?php echo set_value('email')?>" class="form-control" placeholder="email">
                  </div>
              </div>
        </div>
        <div class="col-md-6">
        <?php echo form_error('email','<div class="text-danger>','</div>') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
              <div class="form-group">
                  <label class="col-md-3 control-label" for="p">Password</label>
                  <div class="col-md-9">
                      <input id="p" type="password" name="password" class="form-control" placeholder="again  password">
                  </div>
              </div>
        </div>
        <div class="col-md-6">
        <?php echo form_error('password','<div class="text-danger>','</div>') ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <button type="reset" class="btn btn-primary">Back</button>
    </form>

</div>
<?php include ("include/footer.php");?>