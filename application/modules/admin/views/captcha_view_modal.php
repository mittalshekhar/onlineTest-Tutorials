<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<div id="container">
    <h1 class="text-center">Welcome to <strong>Mysite</strong></h1>
    <div class="container">
        <div class="col-md-6 col-md-offset-3 well">
            <div class="row">
                <?php
                if($this->session->flashdata('error')):
                    echo "<p class='alert alert-danger'>".$this->session->flashdata('error')."</p>";
                endif;
                ?>
                <h2 class="text-center">Registration Form</h2>
                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('admin/users/register'); ?>">

                  <div class="form-group">
                      <label for="firstName" class="col-sm-3 control-label">username</label>
                      <div class="col-sm-9">
                          <input type="text" name="username" id="firstName" class="form-control" placeholder="username" autofocus>
                      </div>
                  </div>

                   <div class="form-group">
                      <label for="email" class="col-sm-3 control-label">Email</label>
                      <div class="col-sm-9">
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email" autofocus >
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="password" class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-9">
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="rpassword" class="col-sm-3 control-label">Re-Type Password</label>
                      <div class="col-sm-9">
                          <input type="password" name="rpassword" id="rpassword" class="form-control" placeholder="Password">
                      </div>
                  </div>



                  <div class="form-group">
                      <div class="col-sm-6 text-right">
                          <button type="submit" class="btn btn-primary btn-lg">Register</button>
                      </div>
                      <div class="col-sm-4 text-right">
                        <input type="button" name="" id="kdkd" class="btn btn-primary btn-lg" value="View">
                      </div>
                  </div>
                </form>
            </div>

        </div>

    </div>

</div>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal
              </button>
              <div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body…</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">

$(document).ready(function($) {
  $("#kdkd").on("click",function(event) {
    event.preventDefault();
    jQuery.noConflict();
    $('#modal-default').modal('show');

  });
});
</script>