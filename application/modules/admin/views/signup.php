
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
       <li style="margin-top: 10px"><a href="#">Manage Users</a></li>
       <li style="margin-top: 10px" class="active">Add Users</li>
 </ol>
</div>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Users Form</b></h3>
            </div>
  
            <form id="demo-form" class="form-horizontal" action="<?= base_url('admin/users/add
            ')?>" method="POST" data-parsley-validate="">
              
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" data-parsley-required="true" 
type="email">
                  </div>
                <div> <?php echo form_error('email'); ?></div>
                </div>
                
                <div class="form-group">
                  <label for="phone" class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="phone" class="form-control" id="inputEmail3" name="phone" placeholder="phone" data-parsley-required="true" data-parsley-type="digits"  >
                  </div>
                <?php echo form_error('phone'); ?>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" data-parsley-required="true">
                  </div>
                 <?php echo form_error('password'); ?>
                </div>
                <div class="form-group">
                  <label for="contant" class="col-sm-2 control-label">Contant</label>
                  <div class="col-sm-10">
                  
                     <textarea id="editor1" class="form-control"  name="contant" placeholder="contant" rows="10" cols="80">
                                         
                    </textarea>
                    </div>
                 <?php echo form_error('editor1'); ?>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
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

    
    
</script>