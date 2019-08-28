<section class="sidebar">
      
      <ul class="sidebar-menu" data-widget="tree">
   <?php $uri = $this->uri->segment(4);?>
      <?php if(!empty($con_data)){ ?>

        <?php foreach ($con_data as $values) { ?>
           <li class="<?php if($uri == @$values->heading){echo 'active';}else{}?>"><a href="<?= base_url('admin/users/pages/'.(@$values->heading).'')?>" class=""><i class=" <?php if($uri == @$values->id){echo 'fa fa-circle-o text-green';}else{echo 'fa fa-circle-o text-yellow';}?>"></i> <span><?php echo ucwords(@$values->topic);?></span></a></li>
         <?php  }}else { ?>

        <?php  } ?>
        
      
         
     
    

      </ul>

    </section>