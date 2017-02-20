<?php include 'menu_bar.php';?>

	<article id="sliderHome">
		<div class="slider">
            <ul id="slider" class="content-slider">
                <li>
                    <h3><img src="images/slider-img1.jpg"></h3>

                </li>
                <li>
                    <h3><img src="images/slider-img1.jpg"></h3>
                </li>
                <li>
                    <h3><img src="images/slider-img1.jpg"></h3>
                </li>
                <li>
                    <h3><img src="images/slider-img1.jpg"></h3>
                </li>
            </ul>
        </div>
		<a href="menu.php#menuCakeHome_menu"><button id="orderNow"></button></a>
		  	<script>
		         $(document).ready(function() {
		            $('#slider').lightSlider({
		                adaptiveHeight:true,
		                item:1,
		                slideMargin:0,

		                speed: 600, //ms'
		                auto: true,
		                loop: true,
		                pause: 2000,
		            });
		        });
		    </script>
	</article>
	
	<article id="menuCakeHome_menu">
		<div class="contrainer">
			<h1>MENU</h1>
			<br>
			<p>Bakery house has a many bakery for you Bakery new baking every day.</p>
			<br>
			<div class="line"></div>
			<h3>POPULAR MENU IN weekly</h3>
				<section class="menupopularBox">
					<img class="imgMenuBox_popular" src="images/popularmenu_1.jpg">
					<div class="title_name">1.STRawberry jam pie</div>
					price : 49 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
				</section>
				<section class="menupopularBox">
					<img class="imgMenuBox_popular" src="images/popularmenu_2.jpg">
					<div class="title_name">2.vanila cup pie</div>
					price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
				</section>
				<section class="menupopularBox">
					<img class="imgMenuBox_popular" src="images/popularmenu_3.jpg">
					<div class="title_name">3.the ring vanila</div>
					price : 89 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
				</section>
		</div><!-- contrainer -->
	</article>

	<article id="Menu_all">
		<div class="contrainer">
			<div id="btn_menuall">
				<a href="menu.html#Menu_all"><div class="Menu_all_active">All</div></a>
				<a href="#"><div class="btn_menuall">cake</div></a>
				<a href="#"><div class="btn_menuall">BREAD</div></a>
				<a href="#"><div class="btn_menuall">COOKIE</div></a>
			</div><!-- btn_menuall -->
			<br>

			<div class="section_menuall_box">
			<section class="menuall_box_all">
				<img class="menuall_box_all_img" src="images/menuall_box_all_img_1.jpg">
				<div class="menuall_title_name">rustic rye loaf</div>
					price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			<section class="menuall_box_all">
				<img class="menuall_box_all_img" src="images/menuall_box_all_img_2.jpg">
				<div class="menuall_title_name">Lemon & Almond Cake</div>
					price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			<section class="menuall_box_all">
				<img class="menuall_box_all_img" src="images/menuall_box_all_img_3.jpg">
				<div class="menuall_title_name">Honey Poppy Seed Roll</div>
					price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			<section class="menuall_box_all">
				<img class="menuall_box_all_img" src="images/menuall_box_all_img_4.jpg">
				<div class="menuall_title_name">Snickers Cookies</div>
					price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			</div><!-- section_menuall_box -->

			<div class="section_menuall_box">
			<section class="menuall_box_all">
				<img class="menuall_box_all_img" src="images/menuall_box_all_img_5.jpg">
				<div class="menuall_title_name">rasberry cream pie</div>
					price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			<section class="menuall_box_all">
				<img class="menuall_box_all_img" src="images/menuall_box_all_img_6.jpg">
				<div class="menuall_title_name">caramel and cherry jam</div>
					price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			<section class="menuall_box_all">
				<img class="menuall_box_all_img" src="images/menuall_box_all_img_7.jpg">
				<div class="menuall_title_name">Apple Sourdough Bread</div>
					price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			<section class="menuall_box_all">
				<img class="menuall_box_all_img" src="images/menuall_box_all_img_8.jpg">
				<div class="menuall_title_name">Macadamia Cookies</div>
					price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			</div><!-- section_menuall_box -->
			<button class="Load_more">Load more</button>
		</div>
	</article>

	<footer>
		<div class="contrainer">
			<p>&copy;2015, BAKERY HOUSE , All Ringht Reserved 
				<a href="#"><i class="fa fa-facebook-square fa-lg footerIcon"></i></a>
				<a href="#"><i class="fa fa-twitter-square fa-lg footerIcon"></i></a>
				<a href="#"><i class="fa fa-youtube-square fa-lg footerIcon"></i></p></a>
		</div>
		<div id="pageUp"><a href="#" class="scrollup"><img src="images/pageup-icon.png"></a></div>
		<script>
		  $(document).ready(function () {
		      $(window).scroll(function () {
		          if ($(this).scrollTop() > 100) {
		              $('.scrollup').fadeIn();
		          } else {
		              $('.scrollup').fadeOut();
		          }
		      });
		      $('.scrollup').click(function () {
		          $("html, body").animate({
		              scrollTop: 0
		          }, 600);
		          return false;
		      });
		  });
		</script>

	</footer>

</body>
</html>