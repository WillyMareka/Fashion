<!DOCTYPE html>
<html class="no-js">
    
    <head>
    <title>Admin</title>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        
        <link rel="icon" type="image/x-icon" href="<?php echo base_url() . 'assets/fonts/fashion.ico'?>" />
        <link type="text/css" href="<?php echo base_url() .'assets/ionicons/css/ionicons.css' ?>" rel="stylesheet" media="screen">
        <link type="text/css" href="<?php echo base_url() .'assets/dist/css/bootstrap.min-1.css' ?>" rel="stylesheet" media="screen">
        <link type="text/css" href="<?php echo base_url() .'assets/dist/css/bootstrap-responsive.min.css'?>" rel="stylesheet" media="screen">
        <link type="text/css" href="<?php echo base_url() .'assets/vendors/easypiechart/jquery.easy-pie-chart.css'?>" rel="stylesheet" media="screen">
        <link type="text/css" href="<?php echo base_url() .'assets/css/ad_styles.css' ?>" rel="stylesheet" media="screen">
        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(). 'assets/vendors/modernizr-2.6.2-respond-1.1.0.min.js'?>"></script>
    </head>
    
    <body>

        <?php
              $username = $this->session->userdata('username');
        ?>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li><a href="<?php echo base_url(). 'home/index'?>">Home Page</a></li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $username?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" data-toggle="modal" data-target="#myModal">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'user/logout'?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Reports <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    
                                    <li>
                                        <a href="#">Excel</a>
                                    </li>
                                    <li>
                                        <a href="#">PDF</a>
                                    </li>
                                    <!-- <li class="divider"></li> -->
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'admin/tables'?>">Tables</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'admin/news'?>">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'admin/messages'?>">Messages</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Deactivations<i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'admin/dusers'?>">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'admin/dcompa'?>">Companies List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url(). 'admin/dmang'?>">Manager List</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="<?php echo base_url(). 'admin/home'?>"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'admin/forms'?>"><span class="badge badge-alert pull-right"><?php echo $productnumber?></span> Product Form</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'admin/statistics'?>"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'admin/messages'?>"><span class="badge badge-warning pull-right"><?php echo $messagenumber?></span> Messages</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'admin/company'?>"><span class="badge badge-info pull-right"><?php echo $companynumber?></span> Company</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'admin/users'?>"><span class="badge badge-success pull-right"><?php echo $usernumber?></span> Users</a>
                        </li>
                        
                    </ul>
                </div>
                
                <!--/span-->




                <div class="row-fluid addlength">
                        <div class="span12">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Users Table</div>
                                <div class="pull-right"><span class="badge badge-info"><?php echo $usernumber?></span></div>
                            </div>
                            <div class="block-content collapse in">
                                
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover" id="example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Age</th>
                                                <th>Nationality</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Residence</th>
                                                <th>Religion</th>
                                                <th>Gender</th>
                                                <th colspan="2">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php echo $users_table; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>









                </div>
            </div>
            <hr>
            <footer>
                <p> Marewill Fashion 2015 &copy;</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="<?php echo base_url(). 'assets/vendors/jquery-1.9.1.js'?>"></script>
        <script src="<?php echo base_url(). 'assets/dist/js/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url(). 'assets/vendors/datatables/js/jquery.dataTables.min.js'?>"></script>


        <script src="<?php echo base_url(). 'assets/js/ad_scripts.js'?>"></script>
        <script src="<?php echo base_url(). 'assets/dist/js/table_bootstrap.js'?>"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>