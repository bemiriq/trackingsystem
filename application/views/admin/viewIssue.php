<br><br>  
  <div class="row" style="width: 100%;">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-9 col-md-offset-3">
      <?php if($msg = $this->session->flashdata("message")): ?>

                <h4 class="success" style="color:#59b7ff;">
                    <?=$msg?>
                </h4>

      <?php endif; ?>
      <div class="login-panel panel panel-default">

        <div class="panel-heading">Issue Register</div>
        <div class="panel-body">
                      <div class="table-responsive">
                  <table class="table tablesorter table-bordered table-hover table-striped sortable">
                     <thead>
                        <tr>
                           <th>Registered by</th>
                           <th>Priority Level</th>
                           <th>Building</th>
                           <th>Class</th>
                           <th>Issue Description</th>
                           <th>Date posted</th>
                           <th>Update</th>
                           <th>Delete</th>

                        </tr>
                     </thead>
                     <tbody>
                        <?php $i=1; foreach($posts as $post): ?>
                        <tr <?=($i % 2 == 0) ? 'class="even"' : '' ?>>
                           <td><?=$post->name?></td>
                           <td><?=$post->priority?></td>
                           <td><?=$post->building?></td>
                           <td><?=$post->class?></td>
                           <td><?=$post->description?></td>
                           <td><?=$post->date_posted?></td>
                          <td><a href="<?=site_url("track/editIssue/".$post->issue_id)?>">edit</a> </td>
                           <td> <a href="<?=site_url("track/deleteIssue/".$post->issue_id)?>">delete</a></td>
                        </tr>
                        <?php $i++; endforeach; ?>
                     </tbody>
                  </table>
               </div>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  