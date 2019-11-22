<div class="container">
	<div class="admin-header text-center">
		<h4>Admin $ Co Admin Login</h4>
	</div>
	<div class="row">
		<div class="col-6 text-center">
		<?php if(count($chkAdminExist)){?>

		<?php }else{ ?>	
			<a class="btn btn-primary" href="<?php echo  base_url('welcome/adminregister')?>">Admin Register</a>
		<?php }?>
		</div>
		<div class="col-6 text-center">
			<a class="btn btn-primary" href="<?php echo  base_url('welcome/login')?>">Admin Login</a>
		</div>
	</div>
</div>