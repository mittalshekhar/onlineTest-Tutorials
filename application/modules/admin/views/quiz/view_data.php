<style type="text/css">
  input[type=radio] {
    width: 18px;
    height: 18px;
}
.timer {
    width: 100px;
    font-size: 2.5em;
    text-align: center;
}
body {
    background-color: #38354a;
    
}
</style>

<div class="box">
 
            <div class="box-header">
              <h3 class="box-title">Quiz Questions</h3>
            </div>
            <div class="timer pull-right" style="color: red">
            <time style="margin-left: -216px;" id="countdown">0:10</time>
        </div>

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
  <form method="POST" action="<?= base_url('admin/quiz/show_result')?>" name="form1" id="form1">
    <?php  
      $i=1;
    foreach ($content_data as $value) { 
      //pr($content_data);die;
      ?>
       <p><b>Question <?php echo $i ?></b id="MyInput"> : <?php echo @$value->question; ?></p>
    <div class="radio">
      <label><input type="radio" data-parsley-required="true" class="name" value="<?php echo @$value->options1; ?>" name="ques<?php echo $i ?>"> <?php echo @$value->options1; ?></label>
    </div>
    <div class="radio">
      <label><input type="radio" class="name" value="<?php echo @$value->options2; ?>" name="ques<?php echo $i ?>"><?php echo @$value->options2; ?></label>
    </div>
    <div class="radio">
      <label><input type="radio"  class="name" value="<?php echo @$value->options3; ?>" name="ques<?php echo $i ?>"><?php echo @$value->options3; ?></label>
    </div>
     <div class="radio">
      <label><input type="radio"  class="name" value="<?php echo @$value->options4; ?>" name="ques<?php echo $i ?>"><?php echo @$value->options4; ?></label>
    </div>

    <br>
     <input type="text" id="current_tab" value="" class="hidden">
  
   <?php  $i++;} ?>
   <button type="submit" class="btn btn-success">Submit❯</button>
  </form>
  
</div>

        </div>
    </div> 
   
  </div>
</div>

            
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


<script type="text/javascript">
      $('.name').click(function(){
            
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
<script>
         var seconds = 10;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;

          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }

          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
          if (seconds == 0) {
              clearInterval(countdownTimer);
             //form1 is your form name
            document.form1.submit();
          } else {
              seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);
</script>
