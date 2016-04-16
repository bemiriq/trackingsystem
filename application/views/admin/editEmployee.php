<br><br> <br>
  <div class="row" style="width: 100%;">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-9 col-md-offset-3">
      <?php if($msg = $this->session->flashdata("message")): ?>

                <h4 class="success" style="color:#59b7ff;">
                    <?=$msg?>
                </h4>

      <?php endif; ?>
      <div class="login-panel panel panel-default">

            <div id="page-wrapper">
                <div class="panel-heading">Add Employee</div>
                <div class="panel-body">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-7">
                    
                        <form name="frmOne" class="form-horizontal" action="" method="post">

                            <div class="form-group">
                                <label for="assigned_to" style="color:#3fa9f5;" class="col-sm-3 control-label">Employee Name</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?=$post->assigned_to?>" class="form-control" name="post[assigned_to]" id="assigned_to" placeholder="Enterr full name of employee">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date_posted" style="color:#3fa9f5;" class="col-sm-3 control-label">Date Posted</label>
                                <div class="col-sm-8">
                                    <input type="text" value="<?=$post->date_posted?>" class="form-control" name="post[date_posted]" id="date_posted" placeholder="Issue posted on">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-6 col-sm-5">
                                    <button type="submit" style="color:white; background:#3fa9f5;" name="update_employee" value="Update Employee" class="btn btn-default">Submit</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
