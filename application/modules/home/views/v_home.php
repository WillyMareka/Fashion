<html>
<head>
	<title>
        MareWill Fashion
	</title>
    <link href="<?php echo base_url() . 'assets/script/jquery/jquery-ui.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/semantic/dist/semantic.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/dist/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/animate.css'?>" rel="stylesheet">
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


<!-- Top Carousel -->
<div id="carousel-example-generic" class="carousel slide  carou" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item carou_img active">
      <img src="<?php echo base_url() . 'assets/images/girl7.jpg'?>" alt="..."> 
    </div>
    <div class="item carou_img">
      <img src="<?php echo base_url() . 'assets/images/girl6.jpg'?>" alt="...">
    </div>
    <div class="item carou_img">
      <img src="<?php echo base_url() . 'assets/images/girl8.jpg'?>" alt="...">
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   <!-- /Controls -->

<!-- /Top Carousel -->


  <div class="ui horizontal divider">
    <span class="latest">Latest Products</span>
  </div>



<!-- Categories -->


<div class="display">
      <ul class="nav nav-tabs dis">
         <li role="presentation" class="active"><a href="#tshirt" data-toggle="tab">T-Shirts</a></li>
         <li role="presentation"><a href="#suits" data-toggle="tab">Suits</a></li>
         <li role="presentation"><a href="#skirts" data-toggle="tab">Skirts</a></li>
         <li role="presentation"><a href="#sunglasses" data-toggle="tab">SunGlasses</a></li>
      </ul>

      <div class="tab-content">
              <div class="tab-pane fade active in" id="tshirt" >
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/shirt1.jpg'?>" alt="" />
                        <h2>Kshs 119/=</h2>
                        <p>Red Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/shirt2.jpg'?>" alt="" />
                        <h2>Kshs 249/=</h2>
                        <p>Grey Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/shirt3.jpg'?>" alt="" />
                        <h2>Kshs 199/=</h2>
                        <p>White Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/shirt4.jpg'?>" alt="" />
                        <h2>Kshs 99/=</h2>
                        <p>Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane fade" id="suits" >
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/suit1.jpg'?>" alt="" />
                        <h2>Kshs 4999/=</h2>
                        <p>White Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/suit2.jpg'?>" alt="" />
                        <h2>Kshs 5499/=</h2>
                        <p>Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/suit3.jpg'?>" alt="" />
                        <h2>Kshs 2999/=</h2>
                        <p>Grey Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/suit4.jpg'?>" alt="" />
                        <h2>Kshs 2499/=</h2>
                        <p>Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane fade" id="sunglasses" >
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/sun1.jpg'?>" alt="" />
                        <h2>Kshs 99/=</h2>
                        <p>White Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/sun5.jpg'?>" alt="" />
                        <h2>Kshs 189/=</h2>
                        <p>Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/sun3.jpg'?>" alt="" />
                        <h2>Kshs 159/=</h2>
                        <p>Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/sun4.jpg'?>" alt="" />
                        <h2>Kshs 249/=</h2>
                        <p>Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane fade" id="skirts" >
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/skirts1.jpg'?>" alt="" />
                        <h2>Kshs 359/=</h2>
                        <p>Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/skirt5.jpg'?>" alt="" />
                        <h2>Kshs 519/=</h2>
                        <p>Blue Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/skirts3.jpg'?>" alt="" />
                        <h2>Kshs 449/=</h2>
                        <p>Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img class="imagesize" src="<?php echo base_url(). 'assets/images/skirts4.jpg'?>" alt="" />
                        <h2>Kshs 389/=</h2>
                        <p>Pink Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
  

</div>

<!-- /Categories -->

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