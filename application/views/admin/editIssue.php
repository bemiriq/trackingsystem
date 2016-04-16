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

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-7">
                    <div class="panel-heading">Add Employee</div>
                <div class="panel-body">
                        <form name="frmOne" class="form-horizontal" action="" method="post">
                    <!-- <p>
                        <label for="date_posted">Date post</label>
                        <textarea name="post[date_posted]" id="date_posted" rows="5" cols="40"></textarea>
                    </p> -->

                    <div class="form-group">
                        <label for="name" style="color:#3fa9f5;" class="col-sm-3 control-label">Registered By</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->name?>" class="form-control" name="post[name]" id="name" placeholder="Enter registered by name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="priority" style="color:#3fa9f5;" class="col-sm-3 control-label">Priority Level</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->priority?>" class="form-control" name="post[priority]" id="priority" placeholder="Select priority level">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="building" style="color:#3fa9f5;" class="col-sm-3 control-label">Block</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->building?>" class="form-control" name="post[building]" id="building" placeholder="Select block">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="class" style="color:#3fa9f5;" class="col-sm-3 control-label">Class</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->class?>" class="form-control" name="post[class]" id="class" placeholder="Select class">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date_posted" style="color:#3fa9f5;" class="col-sm-3 control-label">Date Posted</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?=$post->date_posted?>" class="form-control" name="post[date_posted]" id="date_posted" placeholder="Issue posted on">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" style="color:#3fa9f5;" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-8">
                            <textarea type="text" value="<?=$post->description?>" class="form-control" name="post[description]"><?=$post->description?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="assigned_to" style="color:#3fa9f5;" class="col-sm-3 control-label">Assigned To</label>
                        <div class="col-sm-8">
                            <!-- <input type="text" value="<?=$post->assigned_to?>" class="form-control" name="post[assigned_to]"/> -->
                                <select class="form-control" value="<?=$post->assigned_to?>" name="post[assigned_to]">
                                    <?php foreach($fichas_info as $row){?>
                                        <option value="<?php echo $row['assigned_to'] ;?>" id="assigned_to"><?php echo $row['assigned_to'] ;?></option>
                                    <?php }?>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" style="color:#3fa9f5;" class="col-sm-3 control-label">Issue Status</label>
                        <div class="col-sm-8">
                            
                                <select class="form-control" value="<?=$post->status?>" name="post[status]">
                                  <option>Pending</option>
                                  <option>Completed</option>
                                </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-5">
                            <button type="submit" style="color:white; background:#3fa9f5;" name="update_issue" value="Update Issue" class="btn btn-default">Submit</button>
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
