
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" <?php echo base_url();?>dashboard/">DEBUG</a>
            </div>
            <!-- /.navbar-header -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>dashboard/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                     
                        <!--Sound-->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Audio<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>sound/">List Audio</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>sound/uploadForm">Upload Audio</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>sound/recordForm">Record Audio</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>sound/recordForm2">Record Audio 2</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--End Of NavBar-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
