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
        <h4>Add Coadmin</h4>
        <hr>
    </div>
    <form method="post" action="<?php echo base_url(); ?>admin/createCoadmin">
    <div class="row">
        <div class="col-md-6">
              <div class="form-group">
                  <label class="col-md-3 control-label" for="u">Username</label>
                  <div class="col-md-9">
                      <input id="u" type="text" name="username" value="<?php echo set_value('username')?>" class="form-control" placeholder="Username">
                  </div>
              </div>
            <!-- <div class="form-group">
                <label class="col-md-3 control-label" for="">Username</label>
                <div class="col-md-9">

                </div>
            </div> -->
        </div>
        <div class="col-md-6">
            <?php echo form_error('username','<div class="text-danger>','</div>') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <label class="col-md-3 control-label" for="r">College Name</label>
              <select name="college_id" class="form-control col-md-9" id="r">
                  <option value="">Select</option>
                  <?php if(count($colleges)){ ?>
                    <?php foreach($colleges as $college){ ?>
                    <option value=<?php echo $college->college_id ?>><?php echo $college->collegename ?></option>
                    <?php };?>
                    <?php  };?>
              </select>
          </div>
        </div>
        <div class="col-md-6">
        <?php echo form_error('college_id','<div class="text-danger>','</div>') ?>
        </div>
    </div>

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
              <label class="col-md-3 control-label" for="g">Gender</label>
              <select name="gender" class="form-control col-md-9" id="g">
                  <option value="">Select</option>
                  <option value="male">male</option>
                  <option value="female">female</option>
              </select>
          </div>
        </div>
        <div class="col-md-6">
        <?php echo form_error('gender','<div class="text-danger>','</div>') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <label class="col-md-3 control-label" for="r">Role</label>
              <select name="role_id" class="form-control col-md-9" id="r">
                  <option value="">Select</option>
                  <?php if(count($roles)){ ?>
                    <?php foreach($roles as $role){ ?>
                    <option value=<?php echo $role->role_id ?>><?php echo $role->rolename ?></option>
                    <?php };?>
                    <?php  };?>
              </select>
          </div>
        </div>
        <div class="col-md-6">
        <?php echo form_error('role_id','<div class="text-danger>','</div>') ?>
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
    <div class="row">
        <div class="col-md-6">
              <div class="form-group">
                  <label class="col-md-3 control-label" for="p">Re Password</label>
                  <div class="col-md-9">
                      <input id="p" type="password" name="confpwd" class="form-control" placeholder="again  password">
                  </div>
              </div>
        </div>
        <div class="col-md-6">
        <?php echo form_error('confpwd','<div class="text-danger>','</div>') ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
    <a href="<?php echo site_url('admin/dashboard') ?>" class="btn btn-primary">Back</a>
    </form>

</div>
<?php include ("include/footer.php");?>