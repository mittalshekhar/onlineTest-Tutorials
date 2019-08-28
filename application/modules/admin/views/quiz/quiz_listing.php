
<style type="text/css">
    .fadfa{
        font-size: 25px;
    }
</style>


<div class="box">
 
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <div>
                <div class="success"><?php echo $this->session->flashdata('success'); ?></div> 
                <div class="alert alert-success" id="success" style="display: none">
                <strong></strong>
                </div>
               <h class="box-title pull-right" style="margin-right: 20px; margin-bottom: 6px;"><a href="<?= base_url('admin/quiz/add_quiz')?>" class="btn btn-info">Add</a></h>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr.No</th>
                  <th>Question</th>
                  <th>Answer</th>
                  <th style="color: #3c8dbc">Edit</th>
                  <th style="color: #3c8dbc">View</th>
                  <th style="color: #3c8dbc">Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $i=1; 
                  
                    if(!empty($all_data)) { ?>
                     <?php foreach ($all_data as $key => $articles) { ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$articles->question;?></td>
                   <td><?=$articles->answer;?></td>
                  <td><a href="<?= base_url('admin/quiz/edit_quiz/'.$articles->id.'')?>"  class="fa fa-pencil-square-o fadfa" ></a></td>
                   <td id='<?php echo $articles->id ;?>' class="cldjd"><a  class="fa fa-eye fadfa"></a></td>
                  <td><a onclick="delete_function(<?php echo $articles->id;?>)" class="fa fa-trash fadfa" style="color: red"></a></td>
                </tr>
                <?php $i++; }  }?>
                
                </tbody>
                
              </table>

            </div>
            </div>

     
<div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr.No</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th style="color: #3c8dbc">Status</th>
                  <th style="color: #3c8dbc">Edit</th>
                  <th style="color: #3c8dbc">View</th>
                  <th style="color: #3c8dbc">Delete</th>
              
                </tr>
                </thead>
               <tbody id="view-listing">

                        </tbody>
                
              </table>

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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready( function () {

    $('#example1').DataTable();
   });
</script>
<script>
    function delete_function(id){
        if(confirm("Are you sure you want to delete this?")){
        var delete_id = id;
        }
        else{
        return false;
        }
        $.ajax({
            'url'      : '<?= base_url('admin/users/delete_data')?>',
            'data'     : {'id':delete_id},
            'method'   : 'post',
            'dataType' : 'json',
            success  : function(data){
             if(data.result == 'success'){
             $('#success').show();
             $('#success').html(data.msg);
              setTimeout(function () { location.reload(1); }, 3000);
             }
             else{

             }
            },
        });

    }
</script>

<script type="text/javascript">
$(document).ready(function($) {
 $('.cldjd').on('click', function(){
   var delete_id = $(this).attr('id')
    $.ajax({
            'url'      : '<?= base_url('admin/users/get_all_data')?>',
            'data'     : {'id':delete_id},
            'method'   : 'post',
            'dataType' : 'json',
            success  : function(data){
              console.log(data);
            $('#view-listing').html(data.result);
             
            },
        });
    event.preventDefault();
    jQuery.noConflict();
    $('#modal-default').modal('show');
  });
});
</script>
