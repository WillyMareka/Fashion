<!DOCTYPE html>
<html>
    
    <head>
      <title>Forms</title>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="<?php echo base_url() . 'assets/fonts/fashion.ico'?>" />
        <link href="<?php echo base_url() .'assets/dist/css/bootstrap.min-1.css'?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url() .'assets/dist/css/bootstrap-responsive.min-1.css'?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url() .'assets/css/ad_styles.css'?>" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url() .'assets/vendors/modernizr-2.6.2-respond-1.1.0.min.js'?>"></script>
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
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="<?php echo base_url(). 'admin/home'?>"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url(). 'admin/forms'?>"><i class="icon-chevron-right"></i> Product Form</a>
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
        
                <div class="span9" id="content">
                      

                  
                    <div class="row-fluid">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">New Product</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form enctype="multipart/form-data" method="POST" action="<?php echo base_url() . 'admin/create_product'?>" class="form-horizontal black" role="form">
						<?php 
                                  echo form_open_multipart(base_url().'admin/create_product');
                              ?>
                        <fieldset>
							<div class="alert alert-error hide">
								<button class="close" data-dismiss="alert"></button>
								Please complete filling the form
							</div>
							<div class="alert alert-success hide">
								<button class="close" data-dismiss="alert"></button>
								Product has been added successfully
							</div>

  							<div class="control-group">
  								<label class="control-label">Product Name<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="prodname" data-required="1" required value="<?php echo set_value('prodname'); ?>" class="span6 m-wrap form-control"/>
  								</div>
  							</div>

  							<div class="control-group">
  								<label class="control-label">Product Category<span class="required">*</span></label>
  								<div class="controls">
                                    <select name="prodcategory" type="text" required value="<?php echo set_value('prodcategory'); ?>" class="span6 m-wrap form-control">
                                        <?php echo $product_categories?>
                                    </select>
  									
  								</div>
  							</div>

  							<div class="control-group">
  								<label class="control-label">Product Type<span class="required">*</span></label>
  								<div class="controls">
                                    <select  name="prodtype" type="text" required value="<?php echo set_value('prodtype'); ?>" class="span6 m-wrap form-control">
                                        <?php echo $product_types?>
                                    </select>
  									
  									<!-- <span class="help-block">e.g: http://www.demo.com or http://demo.com</span> -->
  								</div>
  							</div>

  							<div class="control-group">
  								<label class="control-label">Quantity<span class="required">*</span></label>
  								<div class="controls">
  									<input name="prodquantity" type="text" required value="<?php echo set_value('prodquantity'); ?>" class="span6 m-wrapform-control "/>
  								</div>
  							</div>

  							<div class="control-group">
  								<label class="control-label">Picture<span class="required">*</span></label>
  								<div class="controls">
  									<input name="prodpicture" type="file" required value="<?php echo set_value('prodpicture'); ?>" class="span6 m-wrap form-control "/>
  								</div>
  							</div>

  							<div class="control-group">
  								<label class="control-label">Company Name<span class="required">*</span></label>
  								<div class="controls">
                                    <select name="prodcompany" type="text" required value="<?php echo set_value('prodcompany'); ?>" class="span6 m-wrap form-control ">
                                        <?php echo $product_companies?>
                                    </select>
  									
  									<!-- <span class="help-block">e.g: 5500 0000 0000 0004</span> -->
  								</div>
  							</div>
  							
  						
  							<div class="form-actions">
  								<button type="submit" class="btn btn-primary">Enter Product (s)</button>
  								<button type="reset" class="btn">Cancel</button>
  							</div>
						</fieldset>
                        <?php 
                                    echo form_close();
                                 ?>
					</form>
					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     
		    </div>
                


                </div>
            </div>
            <hr>
            <footer>
                <p> MareWill Fashion 2015 &copy;</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <link href="<?php echo base_url() .'assets/vendors/datepicker.css'?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url() .'assets/vendors/uniform.default.css'?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url() .'assets/vendors/chosen.min.css'?>" rel="stylesheet" media="screen">

        <link href="<?php echo base_url() .'assets/vendors/wysiwyg/bootstrap-wysihtml5.css'?>" rel="stylesheet" media="screen">

        <script src="<?php echo base_url() .'assets/vendors/jquery-1.9.1.js'?>"></script>
        <script src="<?php echo base_url() .'assets/dist/js/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url() .'assets/vendors/jquery.uniform.min.js'?>"></script>
        <script src="<?php echo base_url() .'assets/vendors/chosen.jquery.min.js'?>"></script>
        <script src="<?php echo base_url() .'assets/vendors/bootstrap-datepicker.js'?>"></script>

        <script src="<?php echo base_url() .'assets/vendors/wysiwyg/wysihtml5-0.3.0.js'?>"></script>
        <script src="<?php echo base_url() .'assets/vendors/wysiwyg/bootstrap-wysihtml5.js'?>"></script>

        <script src="<?php echo base_url() .'assets/vendors/wizard/jquery.bootstrap.wizard.min.js'?>"></script>

	<script type="text/javascript" src="<?php echo base_url() .'assets/vendors/jquery-validation/dist/jquery.validate.min.js'?>"></script>
	<script src="<?php echo base_url() .'assets/js/form-validation.js'?>"></script>
        
	<script src="<?php echo base_url() .'assets/js/ad_scripts.js'?>"></script>
        <script>

	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
	

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>