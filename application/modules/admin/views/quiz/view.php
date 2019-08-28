<style type="text/css">
  input[type=radio] {
    width: 18px;
    height: 18px;
}
</style>

<div class="box">
 
            <div class="box-header">
              <h3 class="box-title">Quiz Questions</h3>
            </div>
          <style>
    body {
    background-color: #38354a;
    
}
</style>
<div class="container ">
    <div style="padding-left:20px; background: white;
padding-bottom: 20px;" class="row">
        <div class="col-sm-10">
            <div class="">
                <h4 style="padding-bottom:30px;" class="header-title">
                    <a style="color:#38354a;" href="">
                        <i class="fa fa-mail-reply"></i>
                    </a>
                </h4>
            </div>
            <div></div>
            <?php $uri = $this->uri->segment(4);?>
            <div class="container classa" style="font-size: large;">
        <p><b>Question <?php echo $uri ?></b id="MyInput"> : <?php echo @$content_data->question; ?></p>
  <form method="" action="">
    <div class="radio">
      <label><input type="radio" class="name" data-option="<?php echo @$content_data->options1; ?>" name="optradins1"><?php echo @$content_data->options1; ?></label>
    </div>
    <div class="radio">
      <label><input type="radio" class="name" data-option="<?php echo @$content_data->options2; ?>" name="optradins1" name="optradins1"><?php echo @$content_data->options2; ?></label>
    </div>
    <div class="radio">
      <label><input type="radio"  class="name" data-option="<?php echo @$content_data->options3; ?>" name="optradins1" name="optradins1"><?php echo @$content_data->options3; ?></label>
    </div>
     <div class="radio">
      <label><input type="radio"  class="name" data-option="<?php echo @$content_data->options4; ?>" name="optradins1" name="optradins1"><?php echo @$content_data->options4; ?></label>
    </div>
    <br>
     <input type="text" id="current_tab" value="" class="hidden">
   <?php 
   if($count != $uri) { ?>
     <button class="btn-success" type="button" onclick="clickNextButton(<?php echo $content_data->id;?>)">Next ❯</button>
   <?php } else { ?>
    <button class="btn-success" type="button" onclick="clickNextButton(<?php echo $content_data->id;?>)">Submit❯</button>
   <?php } ?>
  </form>
  <?php if($uri==3){ ?>
 <a href="<?= base_url('admin/quiz/show_result')?>"><button class="btn-success pull-right">Show Result</button></a>
   <?php } ?>
  
</div>

        </div>
    </div> 
   
  </div>
</div>

            
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


<script type="text/javascript">
      $('.name').click(function(){
            $("#current_tab").val($(this).attr('data-option'));
            
       });
      function clickNextButton(id) {
            var id = id;
            var idd = id+1;
            var option = $('#current_tab').val(); 
           $.ajax({
           type: "POST",
           url: '<?php echo base_url('admin/quiz/ajax_value')?>',
           data: { id:id, option:option},
           success: function(data)
           {
              var data = JSON.parse(data);
              if(idd<=3){
              window.location.href = idd;
              }else{

              }
              
           }
         });
        }
</script>
