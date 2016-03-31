
	<div class="row" style="width: 100%;">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Full Name" name="name" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Email-Id" name="email" type="email">
							</div>
							<div class="form-group">
								<select class="form-control">
								  <option>Teacher</option>
								  <option>Student</option>
								  <option>IT Employee</option>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Username" name="username" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Password" name="password" type="password">
							</div>
							<div class="form-group">
									<a href="<?=site_url('track/login')?>" style="margin-left: 80%;">Log-In</a>
							</div>
							<a href="<?=site_url('track/login')?>" class="btn btn-primary">Sign-In</a>
							
							
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		


