<!DOCTYPE html>
<html>
<head>

   <?php $this->load->view('elements/head') ?> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   <?php $this->load->view('elements/header') ?>

  <aside class="main-sidebar">
   <?php if(!empty($page_name)){ ?>
   <?php $this->load->view('elements/pages_sidebar');
    }else{?>
   <?php $this->load->view('elements/sidebar') ?>
   <?php } ?>
   
  </aside>


  <div class="content-wrapper">

  <?php $this->load->view($page)?>

  </div>
</div>
<?php $this->load->view('elements/footer') ?>
</body>
</html>




