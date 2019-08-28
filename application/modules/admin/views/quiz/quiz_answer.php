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
</style>


<div class="box">
            <div class="box-header">
            </div>

<div class="container classa" style="font-size: large;">
    <?php  
      $i=1;
    foreach ($content_data as $value) { 
      ?>
       <p><b>Question <?php echo $i ?></b id="MyInput"> : <?php echo @$value->question; ?></p>
    <div class="radio">
      <label <?php if($value->options1 == $value->answer) echo 'class="abcd"';?> ><input type="radio" data-parsley-required="true"  class="name" value="<?php echo @$value->options1; ?>" <?php if($value->options1 == $value->answer) echo 'checked="checked"'; ?> name="ques<?php echo $i ?>"> <?php echo @$value->options1; ?></label>
    </div>
    <div class="radio">
      <label <?php if($value->options2 == $value->answer) echo 'class="abcd"';?> ><input type="radio" class="name" value="<?php echo @$value->options2; ?>" <?php if($value->options2 == $value->answer) echo 'checked="checked"';   ?>  name="ques<?php echo $i ?>"><?php echo @$value->options2; ?></label>
    </div>
    <div class="radio">
      <label <?php if($value->options3 == $value->answer) echo 'class="abcd"';?> ><input type="radio"  class="name" value="<?php echo @$value->options3; ?>"  <?php if($value->options3 == $value->answer) echo 'checked="checked"'; ?> name="ques<?php echo $i ?>"><?php echo @$value->options3; ?></label>
    </div>
     <div class="radio">
      <label <?php if($value->options4 == $value->answer) echo 'class="abcd"';?> ><input type="radio"  class="name" value="<?php echo @$value->options4; ?>" <?php if($value->options4 == $value->answer) echo 'checked="checked"'; ?> name="ques<?php echo $i ?>"><?php echo @$value->options4; ?></label>
    </div>

    <br>
     <input type="text" id="current_tab" value="" class="hidden">
  
   <?php  $i++; } ?>
  
</div>      
</div>

<script type="text/javascript">
  
$(document).ready(function(){
 $('input[type="radio"]').ready(function(){
        
});
 });


</script>



