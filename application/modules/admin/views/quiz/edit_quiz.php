<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .error{
      margin-left: 235px;
      color: red;
    }
    .parsley-required,.parsley-type{
      color :red;
      margin-left: -39px;
      list-style: none;
    }
  </style>
</head>
<body>
  <div>
    <ol class="breadcrumb">
       <li style="margin-top: 10px"><a href="#">Dashboard</a></li>
       <li style="margin-top: 10px"><a href="#">Manage Group</a></li>
       <li style="margin-top: 10px" class="active">Add Group</li>
 </ol>
</div>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Group Form</b></h3>
            </div>
            <form id="demo-form" class="form-horizontal" action="<?= base_url('admin/quiz/edit_quiz/'.@$edit_data->id.'')?>" method="POST" data-parsley-validate="">

              <div class="box-body">
                <div class="form-group">
                  <label for="question" class="col-sm-2 control-label">Question</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="question" value="<?php echo(@$edit_data->question )?>" placeholder="Question" data-parsley-required="true" >
                  </div>
                <?php echo form_error('question'); ?>
                </div>

                 <div class="form-group">
                  <label for="answer" class="col-sm-2 control-label">Answer</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="answer" value="<?php echo(@$edit_data->answer )?>" placeholder="Answer" data-parsley-required="true" >
                  </div>
                <?php echo form_error('answer'); ?>
                </div>

              </div>
              <div class="box-footer">
                <a href="<?=base_url('admin/quiz')?>" class="btn btn-default">CANCEL</a>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
            </form>
          </div>
          </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.min.js"></script>
<script>
</script>