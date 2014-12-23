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
   <li class='right'><a href='<?php echo base_url(). 'user/log'?>'>Log In</a>
      <!-- <ul>
        <li><a href='<?php echo base_url(). 'user/log'?>'>Log In</a></li>
        <li><a href='<?php echo base_url(). 'user/sign'?>'>Sign Up</a></li>      
      </ul> -->
   </li>
</ul>
</div>
<!-- /Top Home Navigation -->


  <div class="container">
     
     <span>
      <div id="signupbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        			
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                  
                            <div class="well lg-warning">Please fill all fields</div>

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middlename" class="col-md-3 control-label">Middle Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="middlename" placeholder="Middle Name">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="age" class="col-md-3 control-label">Age</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="age" placeholder="Age">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nationality" class="col-md-3 control-label">Nationality</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nationality" placeholder="Nationality">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber" class="col-md-3 control-label">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phonenumber" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="residence" class="col-md-3 control-label">Residence</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="residence" placeholder="Residence">
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <label for="religion" class="col-md-3 control-label">Religion</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="religion" placeholder="Religion">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="genders" class="col-md-3 control-label">Gender</label>
                                    <div class="genders" name="genders">
                                       <div class="col-md-3">
                                        <label for="gender" class="control-label">Male</label>
                                        <input type="radio" class="gender" name="gender" value="Male">
                                       </div>
                                       <div class="col-md-3">
                                        <label for="gender" class="control-label">Female</label>
                                        <input type="radio" class="gender" name="gender" value="Female">
                                       </div>
                                    </div>
                                </div>
                          
                                <div class="form-group">
                                    <label for="pass1" class="col-md-3 control-label">Enter Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="pass1" placeholder="Password Here">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pass2" class="col-md-3 control-label">Re-Enter Password</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="pass2" placeholder="Re-Enter Here">
                                    </div>
                                </div>
                               

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-success signup"><i class="icon-hand-right"></i> Sign Up</button>
                                         
                                    </div>
                                </div>
                              
                                </form>
                         </div>
                    </div>
         </div> 
         </span>
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