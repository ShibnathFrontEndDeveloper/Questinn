<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</head>
<body>

<?php require('inc/header.php'); ?>
<section class="home_carousel food_home">
	<div class="swiper home_swiper">
      <div class="swiper-wrapper">
			<div class="swiper-slide home_slide" style="background:url(images/Foods/food_banner_1.png);">
				<div class="overlay"></div>
			</div>
			<div class="swiper-slide home_slide" style="background:url(images/Foods/food_banner_2.png);">
			<div class="overlay"></div>

			</div>
			<div class="swiper-slide home_slide" style="background:url(images/Foods/food_banner_3.png);">
			<div class="overlay"></div>

			</div>
			
		</div>
	</div>
	<div class="food_bg_text">
		<h1>food</h1>
  </div>
</section>

<section class="food" id="food_sec">
  <div class="container">
    <h1>breakfast</h1>
    <div class="swiper food_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/sandwich-cup-coffee-table.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_one form-control"/>
              <button type="button" class="increment_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/breakfast-consists-bread-boiled-eggs-black-grape-salad-dressing-tomatoes-sliced-onions.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_two form-control"/>
              <button type="button" class="incrementOne_btn"><i class="bi bi-plus"></i></button>              
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
            
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/plate-food-with-glass-orange-juice-plate-food-with-sandwich.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_three form-control"/>
              <button type="button" class="incrementTwo_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
            
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/coffee-beverage-sandwich.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_four form-control"/>
              <button type="button" class="incrementThree_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="swiper-slide">
        <div class="food_box">
          <img src="images/Foods/omlet_bred.jpg" alt="" class="img-fluid">
          <h5>Jelly bread with orange juice</h5>
          <span><i class="bi bi-currency-rupee"></i>80</span>
          <form action="" class="d-flex align-items-center">
            <input type="text" value="1" class="counter_five form-control"/>
            <button type="button" class="incrementFour_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
          </form>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="food_box">
          <img src="images/Foods/bred_juice.jpg" alt="" class="img-fluid">
          <h5>Jelly bread with orange juice</h5>
          <span><i class="bi bi-currency-rupee"></i>80</span>
          <form action="" class="d-flex align-items-center">
            <input type="text" value="1" class="counter_six form-control"/>
            <button type="button" class="incrementFive_btn"><i class="bi bi-plus"></i></button>
            <div class="order_box">
              <button type="submit"class="order_btn">order now</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
      <div class="view_btn_box d-flex justify-content-end">
        <a href="breakfast.php" class="text-right btn book_btn"> <p> view more</p></a>
      </div>
  </div>

  <!-- Lunch -->

  <div class="container">
    <h1 class="mt-5">lunch</h1>
    <div class="swiper food_swiper1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/sandwich-cup-coffee-table.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_one form-control"/>
              <button type="button" class="increment_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/breakfast-consists-bread-boiled-eggs-black-grape-salad-dressing-tomatoes-sliced-onions.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_two form-control"/>
              <button type="button" class="incrementOne_btn"><i class="bi bi-plus"></i></button>              
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
            
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/plate-food-with-glass-orange-juice-plate-food-with-sandwich.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_three form-control"/>
              <button type="button" class="incrementTwo_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
            
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/coffee-beverage-sandwich.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_four form-control"/>
              <button type="button" class="incrementThree_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="swiper-slide">
        <div class="food_box">
          <img src="images/Foods/omlet_bred.jpg" alt="" class="img-fluid">
          <h5>Jelly bread with orange juice</h5>
          <span><i class="bi bi-currency-rupee"></i>80</span>
          <form action="" class="d-flex align-items-center">
            <input type="text" value="1" class="counter_five form-control"/>
            <button type="button" class="incrementFour_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
          </form>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="food_box">
          <img src="images/Foods/bred_juice.jpg" alt="" class="img-fluid">
          <h5>Jelly bread with orange juice</h5>
          <span><i class="bi bi-currency-rupee"></i>80</span>
          <form action="" class="d-flex align-items-center">
            <input type="text" value="1" class="counter_six form-control"/>
            <button type="button" class="incrementFive_btn"><i class="bi bi-plus"></i></button>
            <div class="order_box">
              <button type="submit"class="order_btn">order now</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="view_btn_box d-flex justify-content-end">
        <a href="lunch.php" class="text-right btn book_btn"> <p> view more</p></a>
      </div>

  </div>

  <!-- Dinner -->

  <div class="container">
    <h1 class="mt-5">dinner</h1>
    <div class="swiper food_swiper2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/sandwich-cup-coffee-table.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_one form-control"/>
              <button type="button" class="increment_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/breakfast-consists-bread-boiled-eggs-black-grape-salad-dressing-tomatoes-sliced-onions.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_two form-control"/>
              <button type="button" class="incrementOne_btn"><i class="bi bi-plus"></i></button>              
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
            
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/plate-food-with-glass-orange-juice-plate-food-with-sandwich.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_three form-control"/>
              <button type="button" class="incrementTwo_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
            
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/coffee-beverage-sandwich.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_four form-control"/>
              <button type="button" class="incrementThree_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="swiper-slide">
        <div class="food_box">
          <img src="images/Foods/omlet_bred.jpg" alt="" class="img-fluid">
          <h5>Jelly bread with orange juice</h5>
          <span><i class="bi bi-currency-rupee"></i>80</span>
          <form action="" class="d-flex align-items-center">
            <input type="text" value="1" class="counter_five form-control"/>
            <button type="button" class="incrementFour_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
          </form>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="food_box">
          <img src="images/Foods/bred_juice.jpg" alt="" class="img-fluid">
          <h5>Jelly bread with orange juice</h5>
          <span><i class="bi bi-currency-rupee"></i>80</span>
          <form action="" class="d-flex align-items-center">
            <input type="text" value="1" class="counter_six form-control"/>
            <button type="button" class="incrementFive_btn"><i class="bi bi-plus"></i></button>
            <div class="order_box">
              <button type="submit"class="order_btn">order now</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="view_btn_box d-flex justify-content-end">
        <a href="dinner.php" class="text-right btn book_btn"> <p> view more</p></a>
      </div>
  </div>

  <!-- Snacks -->

  <div class="container">
    <h1 class="mt-5">snacks</h1>
    <div class="swiper food_swiper3">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/sandwich-cup-coffee-table.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_one form-control"/>
              <button type="button" class="increment_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/breakfast-consists-bread-boiled-eggs-black-grape-salad-dressing-tomatoes-sliced-onions.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_two form-control"/>
              <button type="button" class="incrementOne_btn"><i class="bi bi-plus"></i></button>              
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
            
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/plate-food-with-glass-orange-juice-plate-food-with-sandwich.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_three form-control"/>
              <button type="button" class="incrementTwo_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
            
          </div>
        </div>
        <div class="swiper-slide">
          <div class="food_box">
            <img src="images/Foods/coffee-beverage-sandwich.jpg" alt="" class="img-fluid">
            <h5>Jelly bread with orange juice</h5>
            <span><i class="bi bi-currency-rupee"></i>80</span>
            <form action="" class="d-flex align-items-center">
              <input type="text" value="1" class="counter_four form-control"/>
              <button type="button" class="incrementThree_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
            </form>
          </div>
        </div>
        <div class="swiper-slide">
        <div class="food_box">
          <img src="images/Foods/omlet_bred.jpg" alt="" class="img-fluid">
          <h5>Jelly bread with orange juice</h5>
          <span><i class="bi bi-currency-rupee"></i>80</span>
          <form action="" class="d-flex align-items-center">
            <input type="text" value="1" class="counter_five form-control"/>
            <button type="button" class="incrementFour_btn"><i class="bi bi-plus"></i></button>
              <div class="order_box">
                <button type="submit"class="order_btn">order now</button>
              </div>
          </form>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="food_box">
          <img src="images/Foods/bred_juice.jpg" alt="" class="img-fluid">
          <h5>Jelly bread with orange juice</h5>
          <span><i class="bi bi-currency-rupee"></i>80</span>
          <form action="" class="d-flex align-items-center">
            <input type="text" value="1" class="counter_six form-control"/>
            <button type="button" class="incrementFive_btn"><i class="bi bi-plus"></i></button>
            <div class="order_box">
              <button type="submit"class="order_btn">order now</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="view_btn_box d-flex justify-content-end">
        <a href="snacks.php" class="text-right btn book_btn"> <p> view more</p></a>
      </div>
  </div>
</section>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".home_swiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        	delay: 10000,
        	disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".food_swiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      autoplay:{
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        
       425:{
        slidesPerView: 1,
      spaceBetween: 10,
       },
       768:{
        slidesPerView: 2,
      spaceBetween: 20,
       },
       1024:{
        slidesPerView: 3,
      spaceBetween: 30,
       },
       1440:{
        slidesPerView: 4,
      spaceBetween: 40,
       }
      },
    });

    var swiper = new Swiper(".food_swiper1", {
      slidesPerView: 4,
      spaceBetween: 40,
      autoplay:{
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        
       425:{
        slidesPerView: 1,
      spaceBetween: 10,
       },
       768:{
        slidesPerView: 2,
      spaceBetween: 20,
       },
       1024:{
        slidesPerView: 3,
      spaceBetween: 30,
       },
       1440:{
        slidesPerView: 4,
      spaceBetween: 40,
       }
      },
    });

    var swiper = new Swiper(".food_swiper2", {
      slidesPerView: 4,
      spaceBetween: 40,
      autoplay:{
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        
       425:{
        slidesPerView: 1,
      spaceBetween: 10,
       },
       768:{
        slidesPerView: 2,
      spaceBetween: 20,
       },
       1024:{
        slidesPerView: 3,
      spaceBetween: 30,
       },
       1440:{
        slidesPerView: 4,
      spaceBetween: 40,
       }
      },
    });

    var swiper = new Swiper(".food_swiper3", {
      slidesPerView: 4,
      spaceBetween: 40,
      autoplay:{
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        
       425:{
        slidesPerView: 1,
      spaceBetween: 10,
       },
       768:{
        slidesPerView: 2,
      spaceBetween: 20,
       },
       1024:{
        slidesPerView: 3,
      spaceBetween: 30,
       },
       1440:{
        slidesPerView: 4,
      spaceBetween: 40,
       }
      },
    });




    
    var $button1 = $('.increment_btn')
    var $counter_one = $('.counter_one');
    
    var $button2 = $('.incrementOne_btn');
    var $counter2 = $('.counter_two');
    var $button3 = $('.incrementTwo_btn');
    var $counter3 = $('.counter_three');
    var $button4 = $('.incrementThree_btn');
    var $counter4 = $('.counter_four');
    var $button5 = $('.incrementFour_btn');
    var $counter5 = $('.counter_five');
    var $button6 = $('.incrementFive_btn');
    var $counter6 = $('.counter_six');

    $button1.click(function(){
      $counter_one.val( parseInt($counter_one.val()) + 1 ); // `parseInt` converts the `value` from a string to a number
    });


    $button2.click(function(){
      $counter2.val( parseInt($counter2.val()) + 1 ); // `parseInt` converts the `value` from a string to a number
    });

      $button3.click(function(){
      $counter3.val( parseInt($counter3.val()) + 1 ); // `parseInt` converts the `value` from a string to a number
    });

      $button4.click(function(){
      $counter4.val( parseInt($counter4.val()) + 1 ); // `parseInt` converts the `value` from a string to a number
    });

      $button5.click(function(){
      $counter5.val( parseInt($counter5.val()) + 1 ); // `parseInt` converts the `value` from a string to a number
    });

      $button6.click(function(){
      $counter6.val( parseInt($counter6.val()) + 1 ); // `parseInt` converts the `value` from a string to a number
    });

</script>

</body>
</html>