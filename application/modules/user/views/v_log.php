
  
<div id="top_info">
   <?php
       if(isset($new_user)){ ?>
         <div class="well well-lg well-info"><h3><?php echo $new_user; ?></h3></div>
   <?php
       } else { ?>
         <div class="well well-lg well-info"><h4>Please log into the system</h4></div>
   <?php
       }
   ?>


</div>




  	    <div class="container">    
        <div id="loginbox" style="margin-top:130px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading headerback">
                        <div class="panel-title  ">Log In</div>
                    </div> 
                    <div style="padding-top:30px" class="panel-body" >

                        <!-- <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div> -->
                            
                        <form id="loginform" class="form-horizontal" role="form">
                               <?php 
                               echo form_open('user/validation');
                               ?>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username">                                        
                                    </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control password" name="password" placeholder="Password">
                                    </div>
                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-9 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Login</a>
                                    </div>
                                    <div class="col-sm-3 controls">
                                      <a id="btn-login" href="<?php echo base_url(). 'user/sign'?>" class="btn btn-warning">Sign Up</a>
                                    </div>
                                </div>
                              <?php 
                               echo form_close();
                            ?>
                          </form>
                          
              	       </div> 
           </div>
        </div>    
		</div>


