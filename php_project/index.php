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
		<a href="menu.php"><button id="orderNow"></button></a>
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
	
	<article id="menuCakeHome">
		<div class="contrainer">
			<h1>MENU</h1>
			<br>
			<section class="menuEventBox">
				<img class="imgMenuBox" src="images/menu-img1.gif">
				price : 49 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			<section class="menuEventBox">
				<img class="imgMenuBox" src="images/menu-img2.gif">
				price : 59 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			<section class="menuEventBox">
				<img class="imgMenuBox" src="images/menu-img3.gif">
				price : 89 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>
			<section class="menuEventBox">
				<img class="imgMenuBox" src="images/menu-img4.gif">
				price : 129 B./piece   <button><i class="fa fa-cart-plus"></i> add cart</button>
			</section>

			<button class="viewAll">VIEW ALL</button>
		</div>
	</article>

	<article id="aboutInHome">
		<aside><img src="images/about-img1.jpg"></aside>
		<aside>
			<div id="aboutHomeText">
				<h2>ABOUT US</h2>
				<p class="thaiText">BAKERY HOUSEคอนเซปเป็นร้านขนมอบสไตล์ให้<br>
					ความรู้สึกเหมือนมานั่งทานอยู่ในห้องอบขนม <br>
					โดยมีบรรยากาศเป็นครัวเปิด มองเห็นการอบขนม <br>
					และได้กลิ่นขนมอบอวลในร้าน<br><br><br></p>
				<p class="thaiText">มีเค้กและคัพเค้ก DIY ตกแต่งหน้าเค้กให้ลูกค้า<br>
					ได้เลือกตกแต่งตามใจชอบและช็อปขนมที่นอกเหนือ<br>
					จากเค้กที่่มีทั้ง คุ๊กกี้ ขนมปังอบต่างๆ</p>
			</div>
		</aside>
	</article>

	<article id="eventPromotion">
		<div class="contrainer">
			<h2>EVENT AND PROMOTION</h2>
			<br>
			<section class="menuEventBox">
				<img class="imgMenuBox" src="images/event-img1.gif">
			</section>
			<section class="menuEventBox">
				<img class="imgMenuBox" src="images/event-img2.jpg">
			</section>
			<section class="menuEventBox">
				<img class="imgMenuBox" src="images/event-img3.gif">
			</section>
			<section class="menuEventBox">
				<img class="imgMenuBox" src="images/event-img4.gif">
			</section>

			<button class="viewAll">VIEW ALL</button>
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