<br><br>	
	<div class="row" style="width: 100%;">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<?php if($msg = $this->session->flashdata("message")): ?>

                <h4 class="success" style="color:#59b7ff;">
                    <?=$msg?>
                </h4>

			<?php endif; ?>
			<div class="login-panel panel panel-default">

				<div class="panel-heading">Add Feedback</div>
				<div class="panel-body">
					<form action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Your Full Name" name="post[name]" type="text" autofocus="">
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="3" name="post[feedback]" placeholder="Issue feedback Here..."></textarea>
							</div>
							<input class="btn btn-info btn-block" name="add_feedback" type="submit" value="Enter"/>
							
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	