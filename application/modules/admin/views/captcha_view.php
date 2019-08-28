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
                      <label for="captcha" class="col-sm-3 control-label">Type Captcha</label>
                      <div class="col-sm-5">
                          <input type="text" name="captcha" id="captcha" class="form-control">
                      </div>
                      <div class="col-sm-3 img-responsive">
                          <?php  echo $captcha['image'];   ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-sm-6 text-right">
                          <button type="submit" class="btn btn-primary btn-lg">Register</button>
                      </div>
                  </div>
                </form>
            </div>

        </div>

    </div>

</div>

</body>
</html>