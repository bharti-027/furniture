<?php
include("header.php")
?>
<div class="banner">
		<section class="slider">
            <div class="flexslider">
                <ul class="slides">
					<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-text">
								<p>Vivamus id dui et augue</p>
								<h3>Donec eu dolor ac erat sodales rutrum</h3>
							</div>
						</div>
					</div>
					</li>
					<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-text">
								<p>Vivamus id dui et augue</p>
								<h3>Donec eu dolor ac erat sodales rutrum</h3>
							</div>
						</div>
					</div>
					</li>
					<li>
					<div class="banner3">
						<div class="container">
							<div class="banner-text">
								<p>Fusce dictum sem eu</p>
								<h3>Mauris lacus tortor venenatis eu efficitur</h3>
							</div>
						</div>
					</div>
					</li>
					<li>
					<div class="banner4">
						<div class="container">
							<div class="banner-text">
								<p>Quisque gravida eros id</p>
								<h3>Aenean nec nisl molestie efficitur ante</h3>
							</div>
						</div>
					</div>
					</li>
				</ul>
			</div>
		</section>
		<div class="down">
			<h3>Visit Our Site</h3>
			<ul>
				<li><a href="#welcome" class="hvr-bounce-to-right scroll">Welcome</a></li>
				<li><a href="#furniture" class="hvr-bounce-to-right scroll">Furniture</a></li>
				<li><a href="#news" class="hvr-bounce-to-right scroll">News & Events</a></li>
				<li><a href="#product" class="hvr-bounce-to-right scroll">Product</a></li>
			</ul>
		</div>
	</div>
	<!--banner-end-->
	<!--FlexSlider-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
	<!--End-slider-script-->
	<!--starts-welcome-->
	<div class="welcome" id="welcome">
		<div class="container">
			<div class="welcome-top heading">
				<h2>Welcome</h2>
				<p>Mauris malesuada mi sit amet quam euismod auctor quis quis urna. Cras a maximus ex. Vestibulum vitae vestibulum lectus, at maximus libero.</p>
			</div>
			<div class="welcome-bottom">
				<div class="col-md-4 welcome-left">
					<img src="images/w-1.jpg" alt="" />
					<div class="welcome-btm">
						<a href="single.html">Phasellus eget <span class="arw"> </span></a>
					</div>
				</div>
				<div class="col-md-4 welcome-left">
					<img src="images/w-2.jpg" alt="" />
					<div class="welcome-btm">
						<a href="single.html">Phasellus eget <span class="arw"> </span></a>
					</div>
				</div>
				<div class="col-md-4 welcome-left">
					<img src="images/w-3.jpg" alt="" />
					<div class="welcome-btm">
						<a href="single.html">Phasellus eget <span class="arw"> </span></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--welcome-End-->
	<!--our-starts-->
	<div class="our" id="furniture">
		<div class="container">
			<div class="our-top">
				<div class="col-md-7 our-left heading">
					<h3>Our Furniture</h3>
					<p>Curabitur volutpat turpis et metus molestie tincidunt. Morbi blandit dapibus efficitur. Fusce a efficitur massa. Donec a fermentum libero.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras condimentum euismod mollis. </p>
				</div>
				<div class="col-md-5 our-right">
					<a href="single.html"><img src="images/o-1.jpg" alt="" /></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="our-top">
				<div class="col-md-7 o-left">					
					<a href="single.html"><img src="images/o-2.jpg" alt="" /></a>
				</div>
				<div class="col-md-5 o-right  heading">
					<h3>Furniture Design</h3>
					<p>Curabitur volutpat turpis et metus molestie tincidunt. Morbi blandit dapibus efficitur. Fusce a efficitur massa. Donec a fermentum libero.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="our-top">
				<div class="col-md-7 our-left heading">
					<h3>Special Design</h3>
					<p>Curabitur volutpat turpis et metus molestie tincidunt. Morbi blandit dapibus efficitur. Fusce a efficitur massa. Donec a fermentum libero.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras condimentum euismod mollis. </p>
				</div>
				<div class="col-md-5 our-right">
					<a href="single.html"><img src="images/o-3.jpg" alt="" /></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--our-End-->
	
	<!--product-starts-->
	<div class="product" id="product">
		<div class="container">
			<div class="product-top">
				<div class="col-md-4 product-left heading">
					<h3>New Arrivals</h3>
					<ul>
						<li><a href="#">Maecenas suscipit non eros vel consequat</a></li>
						<li><a href="#">Suspendisse ac nunc nec dui imperdiet</a></li>
						<li><a href="#">Fusce consectetur tellus sed commodo</a></li>
						<li><a href="#">Pellentesque egestas dolor vel sapien</a></li>
						<li><a href="#">Cras a ipsum id nisl dignissim pharetra</a></li>
						<li><a href="#">Nulla sodales neque et risus imperdiet</a></li>
					</ul>
				</div>
				<div class="col-md-8 product-right heading">
					<h3>New Products</h3>
					<div class="prdt">
						<div class="col-md-6 prdt-left">
							<a href="single.html"><img src="images/p-1.jpg" alt="" /></a>
							<a href="single.html"><h4>Proin euismod a mi non</h4></a>
							<p>Fusce lacinia metus eget sapien ullamcorper accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						</div>
						<div class="col-md-6 prdt-left">
							<a href="single.html"><img src="images/p-1.jpg" alt="" /></a>
							<a href="single.html"><h4>Proin euismod a mi non</h4></a>
							<p>Fusce lacinia metus eget sapien ullamcorper accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--product-end-->
    <?php
    include("footer.php")
    ?>