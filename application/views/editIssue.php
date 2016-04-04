<div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                
                    <form name="frmOne" class="form-horizontal" action="" method="post">
                <!-- <p>
                    <label for="date_posted">Date post</label>
                    <textarea name="post[date_posted]" id="date_posted" rows="5" cols="40"></textarea>
                </p> -->

                <div class="form-group">
                    <label for="description" style="color:#3fa9f5;" class="col-sm-3 control-label">Category Name</label>
                    <div class="col-sm-8">
                        <input type="text" value="<?=$post->description?>" class="form-control" name="post[description]" id="description" placeholder="Enter category name">
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
