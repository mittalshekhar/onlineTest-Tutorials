<!DOCTYPE html>
<html>
<head>

   <?php $this->load->view('elements/head') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   <?php $this->load->view('elements/header') ?>

  <aside class="main-sidebar">
    <?php $this->load->view('elements/sidebar') ?>
  </aside>


  <div class="content-wrapper">
   <?php $this->load->view('elements/.'$page'') ?>

  </div>
</div>
<?php $this->load->view('elements/footer') ?>
</body>
</html>




