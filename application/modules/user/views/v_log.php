<html>
	<head>
	<title>
        MareWill Fashion
	</title>
    <link href="<?php echo base_url() . 'assets/script/jquery/jquery-ui.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/semantic/dist/semantic.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/dist/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/font-awesome.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/styles.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/styles2.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/main.css'?>" rel="stylesheet">
	
</head>
<body>
<div class="header">
		<div class="left-header">
    MAREWILL FASHION WEBSITE 
  </div>
  <div class="middle-header">
    <i class="call icon"></i> (+254) 0714 135 480
    &nbsp &nbsp
    <i class="mail icon"></i> marewillfashion@gmail.com
  </div>
</div>


  <!-- Top Home Navigation -->
<div id='topmenu' class="over">
<ul>
   <li class='active left'><a href='#'>Home</a></li>
   <li class='left'><a href='<?php echo base_url(). 'products/view'?>'>Products</a>
     
   </li>
   <li class='left'><a href='<?php echo base_url(). 'home/about'?>'>About</a></li>
   <li class='left'><a href='<?php echo base_url(). 'home/contact'?>'>Contact</a></li>
   <li class='right'><a href='<?php echo base_url(). 'user/sign'?>'>Sign Up</a>
      <!-- <ul>
        <li><a href='<?php echo base_url(). 'user/log'?>'>Log In</a></li>
        <li><a href='<?php echo base_url(). 'user/sign'?>'>Sign Up</a></li>      
      </ul> -->
   </li>
</ul>
</div>
<!-- /Top Home Navigation -->
  
  	    <div class="container">    
        <div id="loginbox" style="margin-top:130px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading headerback">
                        <div class="panel-title  ">Log In</div>
                    </div> 
                    <div style="padding-top:30px" class="panel-body" >

                        <!-- <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div> -->
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                                    </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-9 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Login</a>
                                    </div>
                                    <div class="col-sm-3 controls">
                                      <a id="btn-login" href="<?php echo base_url(). 'user/sign'?>" class="btn btn-warning">Sign Up</a>
                                    </div>
                                </div>
              	       </div> 
           </div>
        </div>    
		</div>
    <!-- Footer -->


  <div class=" col-sm-12 home-footer">
  <div class="bottom-topic">
    <span class="marewill">MAREWILL</span> FASHION WEBSITE
  </div>
  <div class="col-sm-12 footer-content">
    <div class="col-sm-4">
      Copyright &copy 2013 MareWill Inc. All rights reserved.
    </div>

    <div class="col-sm-4">
      <a href="http://www.facebook.com"><i class="facebook square icon"></i></a>
      <a href="http://www.instagram.com"><i class="instagram icon"></i></a>
      <a href="http://www.twitter.com"><i class="twitter square icon"></i></a>
    </div>

    <div class="col-sm-4">
      www.marewillfashion.com
    </div>
  </div>
</div>



<!-- /Footer -->



<script src="<?php echo base_url() .'assets/script/jquery-1.11.1.min.js'?>"></script>
<script src="<?php echo base_url() .'assets/script/jquery/jquery-ui.js'?>"></script>
<script src="<?php echo base_url() .'assets/semantic/dist/semantic.js'?>"></script>
<script src="<?php echo base_url() .'assets/dist/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.scrollUp.min.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/script.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/main.js'?>"></script>
</body>
</html>