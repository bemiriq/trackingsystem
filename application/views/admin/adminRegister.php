<br>
<br><div class="row" style="width: 100%;">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<?php if($msg = $this->session->flashdata("message")): ?>

                <h4 class="success" style="color:#59b7ff;">
                    <?=$msg?>
                </h4>

			<?php endif; ?>
			<div class="login-panel panel panel-default">

				<div class="panel-heading">Admin Register</div>
				<div class="panel-body">
					<form action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Full Name" name="post[name]" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Email-Id" name="post[email]" type="email">
							</div>
							<div class="form-group">
								<select class="form-control" name="post[user_category]">
								  <option>Teacher</option>
								  <option>Student</option>
								  <option>IT Employee</option>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Username" name="post[username]" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Password" name="post[password]" type="password">
							</div>
							<!-- <div class="form-group">
									<a href="<?=site_url('track')?>" style="margin-left: 80%;">Log-In</a>
							</div> -->
							<input class="btn btn-lg btn-info btn-block" name="create_admin_user" type="submit" value="Sign-In"/>
							
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	



