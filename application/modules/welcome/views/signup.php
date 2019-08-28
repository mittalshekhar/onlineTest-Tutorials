
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .error{
      margin-left: 235px;
      color: red;
    }
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
  
            <form class="form-horizontal" action="/signup" method="POST">
              
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                  </div>
                
                </div>
                
                <div class="form-group">
                  <label for="phone" class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="phone" class="form-control" id="inputEmail3" name="phone" placeholder="phone">
                  </div>
                
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                  </div>
                 
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
                <button type="submit" class="btn btn-default"><a href="/student" value="">Cancel</a></button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </body>
</html>
