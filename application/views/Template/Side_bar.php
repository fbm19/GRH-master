<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../assets/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search Employee...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Gestion des ressources humaines </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Menu</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li>
                        <a href="<?php echo site_url('EmployeeDashboard/EmployeeMang')?>" onclick="loadPage()"><i class="fa fa-circle-o"></i> Employee Management </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Absence Management  </a>
                    </li>
                    <li class="treeview ">
                        <a href="#"><i class="fa fa-circle-o"></i> Payout <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li ><a href=""><i class="fa fa-circle-o"></i> Configuration</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> Attribute a Prime</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> Advance Payment Requests</a></li>

                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-circle-o"></i> Holiday Requests </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Announce  </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Recruitment  </a>
                    </li>

                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


