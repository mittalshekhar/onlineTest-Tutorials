
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
   
            <form id="demo-form" class="form-horizontal" action="<?= base_url('admin/quiz/add_options')?>" method="POST" data-parsley-validate="">
              
              <div class="box-body">
                <div class="form-group">
                  <label for="group" class="col-sm-2 control-label">Group</label>
                  <div class="col-sm-8"> 
                 <select class="form-control" name="group" data-parsley-required="true">
                   <option value="">select Group</option>
                  
                   <?php foreach($group_data as $value) { ?>
                   <option value="<?php echo $value->id; ?>"><?php echo ucwords($value->quiz_group);?></option>
                  <?php } ?>
               </select>
                  </div>
                <?php echo form_error('group'); ?>
                </div>

                <div class="form-group">
                  <label for="question" class="col-sm-2 control-label">Question</label>
                  <div class="col-sm-8">
                 <select class="form-control" name="question" data-parsley-required="true">
                   <option value="">select Question</option>
                   <?php foreach($all_data as $value) { ?>
                   <option value="<?php echo $value->id;?>"><?php echo ucwords($value->question);?></option>
                  <?php } ?>
               </select>
                  </div>
                <?php echo form_error('question'); ?>
                </div>
                
                <div class="form-group">
                  <label for="phone" class="col-sm-2 control-label">Answer</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="answer" placeholder="Answer" data-parsley-required="true">
                  </div>
                <?php echo form_error('answer'); ?>
                </div>

                <div class="form-group">
                  <label for="phone" class="col-sm-2 control-label">Options 1</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="options1" placeholder="Options" data-parsley-required="true">
                  </div>
                <?php echo form_error('options1'); ?>
                </div>
                <div id="add_mo"></div>
                <a id='add_more' style="margin-left: 994px;" href="javascript:void(0)">add more</a>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               <a href="<?=base_url('admin/users')?>" class="btn btn-default">CANCEL</a>

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

  $(document).ready(function(){
     var i = 2;
   $("#add_more").click(function() {
    var input = $(`<div class="form-group">
                  <label for="phone" class="col-sm-2 control-label">Options `+i+`</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="options`+i+`" placeholder="Options" data-parsley-required="true">
                  </div>
                </div>`);
     if(i < 5){ 
           i++;
        $('#add_mo').append(input);
      }else{
        alert('Only 4 Option Allowed to Add.')
      }
});

  });

    
    
</script>