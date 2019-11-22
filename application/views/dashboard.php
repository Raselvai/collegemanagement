<?php include ("include/header.php");?>
    <div class="container">
        <h3>Admin Dashboard</h3>
        <?php $username = $this->session->userdata('username'); ?>
        <h5>Welcome <?php echo $username; ?></h5>
        <a class="btn btn-primary" href="<?php echo site_url('admin/addcollege') ?>">ADD COLLEGE</a>
        <a class="btn btn-primary" href="<?php echo site_url('admin/addcoadmin') ?>">ADD COADMIN</a>
        <a class="btn btn-primary" href="<?php echo site_url('admin/addstudent') ?>">ADD STUDENT</a>
        <hr>
        <div class="row">
            <table class="table table-hover">
                <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">College Name</th>
                          <th scope="col">User Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Roll</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Branch</th>
                          <th scope="col">Action</th>
                      </tr>
                </thead>
                <tbody>
                      <tr class="table-active">
                        <td>column</td>
                        <td>column</td>
                        <td>column</td>
                        <td>column</td>
                        <td>column</td>
                        <td>column</td>
                        <td>column</td>
                        <td>column</td>
                      </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php include ("include/footer.php");?>