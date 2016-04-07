<br><br>	
	<div class="row" style="width: 100%;">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<?php if($msg = $this->session->flashdata("message")): ?>

                <h4 class="success" style="color:#59b7ff;">
                    <?=$msg?>
                </h4>

			<?php endif; ?>
			<div class="login-panel panel panel-default">

				<div class="panel-heading">Issue Register</div>
				<div class="panel-body">
					<form action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Full Name" name="post[name]" type="text" autofocus="">
							</div>
							<div class="form-group">
								<select class="form-control" name="post[priority]">
								  <option>High</option>
								  <option>Medium</option>
								  <option>Low</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control" name="post[building]">
								  <option>London</option>
								  <option>Nepal</option>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Classroom Name" name="post[class]" type="text">
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="3" name="post[description]" placeholder="Issue Description Here..."></textarea>
							</div>
							<div class="form-group">
								<select type="hidden" style="display:none" class="form-control" name="post[assigned_to]">
								  <option>--Select--</option>
								  <option>Pariskrit Shrestha</option>
								  <option>Sangam Shrestha</option>
								</select>
							</div>
							<div class="form-group">
								<select type="hidden" style="display:none" class="form-control" name="post[status]">
								  <option>Pending</option>
								  <option>Completed</option>
								</select>
							</div>
							<input class="btn btn-info btn-block" name="employee_add_issue" type="submit" value="Enter"/>
							
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	