<style type="text/css">
    .fadfa{
        font-size: 25px;
    }
</style>
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
.abcd{
    color: limegreen;
}
.worng{
    color: red;
}

</style>

<div class="box divresult">
 
            <div class="box-header">
 
      
            </div>
            <div align="center">
              <h1 class="box-title" style="color: green">Your Result is</h1>
              <p><h1><b><?php echo $result;?></b>/6</h1></p>
              <p style="color: green"><h3>Thank you !</h3></p>
                 
               <h class="box-title" style="margin-right: 20px; margin-bottom: 10px;"><a href="javascript:void(0)" class="btn btn-success" id="showanswer">Show Answer</a></h>
             
               <h class="box-title" style="margin-right: 20px; margin-bottom: 6px;"><a href="<?= base_url('admin/quiz/quiz_view2')?>" class="btn btn-info">Start Test Again</a></h>
            </div>
           
          
</div>

<div class="box divbutton" style="display:none;">
            <div class="box-header">
            </div>

<div class="container classa" style="font-size: large;">

    <?php  
      $i=1;
    foreach ($content_data as $value) { 
     
      ?>
       <p><b id="MyInput">Question <?php echo $i ?></b>: <?php echo @$value->question; ?></p>

    <div class="">
      <label <?php if($value->options1 == $value->answer) echo 'class="abcd"';?> <?php if($value->options1 == @$r_data['ques'.@$i.'']) echo 'class="worng"';?>><p>1. <?php echo @$value->options1; ?><i <?php if(@$value->options1 == @$value->answer){ echo 'class=" fa fa-check"';} elseif(@$value->options1 == @$r_data['ques'.$i.'']){ echo 'class="fa fa-close"';} else{}?> aria-hidden="true"></i></p></label>
    </div>

    <div class="">
      <label <?php if($value->options2 == $value->answer) echo 'class="abcd"';?> <?php if($value->options2 == @$r_data['ques'.@$i.'']) echo 'class="worng"';?>><p>2. <?php echo @$value->options2; ?><i <?php if(@$value->options2 == @$value->answer){ echo 'class=" fa fa-check"';} elseif(@$value->options2 == @$r_data['ques'.$i.'']){ echo 'class="fa fa-close"';}else{}?>  aria-hidden="true"></i></p></label>
    </div>

     <div class="">
      <label <?php if($value->options3 == $value->answer) echo 'class="abcd"';?> <?php if($value->options3 == @$r_data['ques'.@$i.'']) echo 'class="worng"';?>><p>3. <?php echo @$value->options3; ?><i <?php if(@$value->options3 == @$value->answer){ echo 'class=" fa fa-check"';} elseif(@$value->options3 == @$r_data['ques'.$i.'']){ echo 'class="fa fa-close"';}else{}?>  aria-hidden="true"></i></p></label>
    </div>
  
    <div class="">
      <label <?php if($value->options4 == $value->answer) echo 'class="abcd"';?> <?php if($value->options4 == @$r_data['ques'.@$i.'']) echo 'class="worng"';?>><p>4. <?php echo @$value->options4; ?><i <?php if(@$value->options4 == @$value->answer){ echo 'class=" fa fa-check"';} elseif(@$value->options4 == @$r_data['ques'.$i.'']){ echo 'class="fa fa-close"';}else{}?>  aria-hidden="true"></i></p></label>
    </div>

    
    <br>
     <input type="text" id="current_tab" value="" class="hidden">
  
   <?php  $i++; } ?>

   <div align="center" style="margin-bottom: 14px;
    margin-top: -50px;"> <h class="box-title" style="margin-right: 20px; margin-bottom: 6px;"><a href="<?= base_url('admin/quiz/quiz_view2')?>" class="btn btn-info">Start Test Again</a></h></div>
  
</div>      
</div>


<script type="text/javascript">
  $(document).ready(function(){
  $('#showanswer').click(function(){
          $('.divbutton').show();
          $('.divresult').hide();
       });
 });
  
</script>


 <!-- <div class="radio">
      <label <?php if($value->options4 == $value->answer) echo 'class="abcd"';?> ><input type=""  class="name" value="<?php echo @$value->options4; ?>" <?php if($value->options4 == $value->answer) echo 'checked="checked"'; ?> <?php if($value->options4 == $r_data[$i-1]) echo 'checked="checked"'; ?> name="ques<?php echo $i ?>"><?php echo @$value->options4; ?></label>
    </div> -->