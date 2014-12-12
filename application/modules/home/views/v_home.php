<html>
<head>
	<title>
        MareWill Fashion
	</title>
    <link href="<?php echo base_url() . 'assets/script/jquery/jquery-ui.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/semantic/dist/semantic.css'?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/dist/css/bootstrap.css'?>" rel="stylesheet">
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
      <!-- <ul>
         <li class='has-sub'><a href='#'>Mens Wear</a>
            <ul>
               <li><a href='#'>Shirts</a></li>
               <li><a href='#'>Jeans</a></li>
               <li><a href='#'>Suits</a></li>
               <li><a href='#'>Sweater & Jumpers</a></li>
               <li><a href='#'>UnderWear</a></li>
               <li><a href='#'>Shoes</a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'>Women Wear</a>
            <ul>
               <li><a href='#'>Tops</a></li>
               <li><a href='#'>Trousers</a></li>
               <li><a href='#'>Skirts</a></li>
               <li><a href='#'>Swim Suits</a></li>
               <li><a href='#'>Awesome Panties</a></li>
               <li><a href='#'>Dresses</a></li>
               <li><a href='#'>Shoes</a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'>Childrens Wear</a>
          <ul>
          <li class='has-sub'><a href='#'>Boys</a>
            <ul>
               <li><a href='#'>Shirts</a></li>
               <li><a href='#'>Jeans</a></li>
               <li><a href='#'>Trousers</a></li>
               <li><a href='#'>UnderWear</a></li>
               <li><a href='#'>Shoes</a></li>
            </ul>
          
         </li>
         <li class='has-sub'><a href='#'>Girls</a>
            <ul>
              
               <li><a href='#'>Shirts</a></li>
               <li><a href='#'>Jeans</a></li>
               <li><a href='#'>Trousers</a></li>
               <li><a href='#'>UnderWear</a></li>
               <li><a href='#'>Shoes</a></li>
            </ul>
         </li>
       </ul>
       </li>
         <li class='has-sub'><a href='#'>Accessories</a>
            <ul>
               <li><a href='#'>Watches</a></li>
               <li><a href='#'>Hats</a></li>
               <li><a href='#'>Chians</a></li>
               <li><a href='#'>Glasses</a></li>
               <li><a href='#'>Necklaces</a></li>
               <li><a href='#'>Rings</a></li>
            </ul>
         </li>
      </ul> -->
   </li>
   <li class='left'><a href='<?php echo base_url(). 'products/view'?>'>About</a></li>
   <li class='left'><a href='<?php echo base_url(). 'products/view'?>'>Contact</a></li>
   <li class='has-sub right'><a href='#'>Account</a>
      <ul>
        <li><a href='<?php echo base_url(). 'products/view'?>'>Log In</a></li>
        <li><a href='<?php echo base_url(). 'products/view'?>'>Sign Up</a></li>      
      </ul>
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
      <img src="<?php echo base_url() . 'assets/images/girl1.jpg'?>" alt="..."> 
    </div>
    <div class="item carou_img">
      <img src="<?php echo base_url() . 'assets/images/girl2.jpg'?>" alt="...">
    </div>
    <div class="item carou_img">
      <img src="<?php echo base_url() . 'assets/images/girl3.jpg'?>" alt="...">
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
<!-- /Top Carousel -->

<!-- Side Home Navigation -->


<!-- <div id='sidemenu'>
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Products</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Product 1</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Product 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>About</span></a></li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div> -->

<!-- /Side Home Navigation -->

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
                        <img src="<?php echo base_url(). 'assets/images/gallery1.jpg'?>" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="<?php echo base_url(). 'assets/images/gallery2.jpg'?>" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="<?php echo base_url(). 'assets/images/gallery3.jpg'?>" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="<?php echo base_url(). 'assets/images/gallery4.jpg'?>" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
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
                        <img src="<?php echo base_url(). 'assets/images/gallery4.jpg'?>" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery3.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery2.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery1.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
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
                        <img src="<?php echo base_url(). 'assets/images/gallery3.jpg'?>" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery4.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery1.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery2.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
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
                        <img src="<?php echo base_url(). 'assets/images/gallery1.jpg'?>" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery2.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery3.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery4.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane fade" id="poloshirt" >
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery2.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery4.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery3.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="product-wrap">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="images/home/gallery1.jpg" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
  

</div>

<!-- /Categories -->


<script src="<?php echo base_url() .'assets/script/jquery-1.11.1.min.js'?>"></script>
<script src="<?php echo base_url() .'assets/script/jquery/jquery-ui.js'?>"></script>
<script src="<?php echo base_url() .'assets/semantic/dist/semantic.js'?>"></script>
<script src="<?php echo base_url() .'assets/dist/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/script.js'?>"></script>

<script src="<?php echo base_url() .'assets/js/main.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.scrollUp.min.js'?>"></script>
</body>
</html>