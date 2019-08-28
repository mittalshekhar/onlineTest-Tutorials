
<style type="text/css">
    .fadfa{
        font-size: 25px;
    }
</style>
<div class="box">
 
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
          <style>
    body {
    background-color: #38354a;
    
}
</style>
<div class="container">
    <div style="padding-left:20px; background: white;
padding-bottom: 20px;" class="row">
        <div class="col-sm-12">
            <div class="">
                <h4 style="padding-bottom:30px;" class="header-title">
                    <a style="color:#38354a;" href="">
                        <i class="fa fa-mail-reply"><?php echo @$content_data->heading;?></i>
                    </a>
                </h4>
                <h3 style="color:#24222f; margin:25px 0;"><?php echo @$content_data->topic;?></h3>
                <p style="color:#514d6a; margin-bottom:5px; padding-left:20px; line-height:1.6;" class="text-muted">
                 
                </p> 
                 <div class="clearfix"><?php echo @$content_data->content ;?></div>
                <section class="content">
        <div class="">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-code"></i><?php echo @$content_data->heading;?></h3>
            </div>
            <div class="box-body">
                  <pre style="font-weight: 700;">&lt;ul class="timeline"&gt;

            &lt;div class="timeline-footer"&gt;
                &lt;a class="btn btn-primary btn-xs"&gt;...&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;!-- END timeline item --&gt;

    ...

&lt;/ul&gt;
                  </pre>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </section>
                <div class="clearfix"><?php echo @$content_data->content ;?></div>
            </div>
        </div>

    </div> 
    <div class="col-md-12" style="text-align: right;margin: 10px">
        <ul class="pagination m-0 cus_page">
              <?php if(@$content_data->id-1 >0){ ?>
                  <li><a href="<?= base_url('admin/users/pages/'.(@$content_data->id-1).'')?>">Prev</a></li>
                  <?php   }?>
                  <?php if((@$last_id->id+1) == (@$content_data->id+1)){ ?>
            
                <?php } else {?>
                <li><a class="next" id="<?php echo @$content_data->id+1 ?>" href="<?= base_url('admin/users/pages/'.(@$content_data->id+1).'')?>">Next</a></li>
                <?php } ?>
                  
                    
                
        </ul>
    </div>
</div>

            </div>

            
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
    $(".next").click(function(){
       var id =  $(this).attr('id');

     });
        
    });
</script>
