<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tracking System</title>

<link href="<?=base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?=base_url('public/css/datepicker3.css')?>" rel="stylesheet">
<link href="<?=base_url('public/css/styles.css')?>" rel="stylesheet">
<script src="<?=base_url('public/js/lumino.glyphs.js')?>"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

	
	<?php echo validation_errors(); ?>
	<div class="row" style="width: 100%;">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Enter your Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Password" name="password" type="password">
							</div>
							<div class="form-group">
									<a href="<?=site_url('track/register')?>" style="margin-left: 80%;">Register</a>	
							</div>

							<input class="btn btn-lg btn-info btn-block" name="submit" type="submit" value="Login"/>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		
	<script src="<?=base_url('public/js/jquery-1.11.1.min.js')?>"></script>
	<script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>
	<!-- <script src="<?=base_url('public/js/chart.min.js')?>"></script>
	<script src="<?=base_url('public/js/chart-data.js')?>"></script> 
	<script src="<?=base_url('public/js/easypiechart.js')?>"></script>
	<script src="<?=base_url('public/js/easypiechart-data.js')?>"></script>
	<script src="<?=base_url('public/js/bootstrap-datepicker.js')?>"></script>-->

</body>

</html>

