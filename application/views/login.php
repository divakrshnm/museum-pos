<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Museum Pos Indonesia</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/sb-admin.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
</head>

<body>
	
    <?php
    if(isset($error)){
    ?>
		<div class="col-lg-8" style="margin-top:1%; margin-left:16%;">
			<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong><?php if(isset($error)){echo $error;} ?></strong> <?php if(isset($message)){echo $message;} ?>
			</div>
        </div>
        <?php
    }
        ?>
        <center>
		<div class="col-lg-3" style="margin-top:9%; margin-left:37%;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><b>Login</b></h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url('login/login'); ?>" method="post" role="form">
						<div class="form-group<?php if(isset($error) && $error != 'Status anda tidak aktif!'){echo ' has-error';}?>">
							<input type="text" class="form-control" name="username" placeholder="Username" <?php if(isset($error) && $error != 'Status anda tidak aktif!'){echo 'id="inputError"' ;} ?>>

						</div>
						<div class="form-group<?php if(isset($error) && $error != 'Status anda tidak aktif!'){echo ' has-error';}?>">
							<input type="password" class="form-control" name="password" placeholder="Password" <?php if(isset($error) ){echo 'id="inputError"' ;} ?>>

						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Login" style="width:100%">
						</div>

					</form>
				</div>
			</div>
		</div>
	</center>
	<script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/morris/raphael.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/morris/morris-data.js')?>"></script>
</body>

</html>
