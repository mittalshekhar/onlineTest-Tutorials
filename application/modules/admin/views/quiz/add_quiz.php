
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
    config.colorButton_foreStyle = {
    element: 'font',
    attributes: { 'color': '#(color)' }
};

config.colorButton_backStyle = {
    element: 'font',
    styles: { 'background-color': '#(color)' }
};
  </style>
</head>
<body>
  <div>
    <ol class="breadcrumb">
       <li style="margin-top: 10px"><a href="#">Dashboard</a></li>
       <li style="margin-top: 10px"><a href="#">Manage Quiz</a></li>
       <li style="margin-top: 10px" class="active">Add Quiz</li>
 </ol>
</div>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Quiz Form</b></h3>
            </div>
  
            <form id="demo-form" class="form-horizontal" action="<?= base_url('admin/quiz/add_quiz')?>" method="POST" data-parsley-validate="">
              
              <div class="box-body">
            
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Question</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="question" placeholder="Question" data-parsley-required="true">
                  </div>
                <div> <?php echo form_error('email'); ?></div>
                </div>
                
                <div class="form-group">
                  <label for="phone" class="col-sm-2 control-label">Answer</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="answer" placeholder="Answer" data-parsley-required="true">
                  </div>
                <?php echo form_error('answer'); ?>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               <a href="<?=base_url('admin/quiz')?>" class="btn btn-default">CANCEL</a>

                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.min.js"></script>
<script>
</script>
<script>
   $(function () {
    CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
  })

    
    
</script>