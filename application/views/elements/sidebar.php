<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="active treeview">
          <a href="/welcome">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li> -->
     
        <li class="active"><a href="/welcome"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Manage Student</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu" >
            <li class="active"><a href="<?php echo base_url("admin/users")?>"><i class="fa fa-circle-o"></i>Students</a></li>
          </ul>
        </li>

       <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Manage Content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url("admin/users/add")?>"><i class="fa fa-circle-o"></i>Add Content</a></li>
            <li><a href="<?php echo base_url("admin/group")?>"><i class="fa fa-circle-o"></i>Add Group</a></li>
            <li><a href="<?php echo base_url("admin/quiz")?>"><i class="fa fa-circle-o"></i>Add Quiz question</a></li>
            <li><a href="<?php echo base_url("admin/quiz/index2")?>"><i class="fa fa-circle-o"></i>Add Quiz Options</a></li>
            <li><a href="<?php echo base_url("admin/quiz/quiz_view/1")?>"><i class="fa fa-circle-o"></i>Quiz View</a></li>
            <li><a href="<?php echo base_url("admin/users/pages")?>"><i class="fa fa-circle-o"></i>Pages</a></li>
             <li><a href="<?php echo base_url("admin/users/chart")?>"><i class="fa fa-circle-o"></i>Chart</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>

    <script type="text/javascript">
      
    </script>