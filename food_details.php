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


</head>
<style>
    

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper2 {
      height: 80%;
      width: 100%;
    }

    .room_swiper {
      height: 100%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
</style>
<body>

<?php require('inc/header.php'); ?>
<section class="home_carousel food_home">
	<div class="swiper home_swiper">
      <div class="swiper-wrapper">
			<div class="swiper-slide home_slide" style="background:url(images/Foods/breakfast/breakfast-1.jpg);">
				<div class="overlay"></div>
			</div>
			<div class="swiper-slide home_slide" style="background:url(images/Foods/plate-delicious-chili-fried-chicken.jpg);">
			<div class="overlay"></div>

			</div>
			<div class="swiper-slide home_slide" style="background:url(images/Foods/delicious-indian-food-tray.jpg);">
			<div class="overlay"></div>

			</div>
			
		</div>
	</div>
	<div class="food_bg_text">
		<h1>food details</h1>
  </div>
</section>
<section class="details_rooms">
    <div class="container">
        <div class="row">
            <table class="table border cart_table">
                <thead>
                    <tr>
                        <td>Product</td>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Total</td>
                        <td class="text-center">Delete Item</td>
                    </tr>
                </thead>
                <tbody>
                    <tr id="removeTableRow">
                        <td>
                            <img src="images/Foods/sandwich-cup-coffee-table.jpg" alt="" class="img-fluid">
                        </td>
                        <td><p class="mb-0">jelly bread</p></td>
                        <td><i class="bi bi-currency-rupee"></i>150</td>
                        <td>
                            <select name="" class="table_select" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                        <td><i class="bi bi-currency-rupee"></i>150</td>
                        <td class="text-center">
                            <button class="btn bg-transparent" id="removBtn"><i class="bi bi-x"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="row">
                <div class="col-lg-6">
                    <form action="">
                        <div class="input_box d-flex flex-column">
                            <label for="">Order note (Optional)</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                            <div class="text-left">
                                <button class="btn mt-5">Continue Shoping</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="card cart_details_cart">
                        <div class="card-body p-0">
                            <div class="card-header cart_header">
                                <h5 class="card-title text-center pt-3 cart_details_heading">Cart totals</h5>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center py-3 px-3">
                                <span>Sub total</span>
                                <span><i class="bi bi-currency-rupee"></i>150</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-3 px-3">
                                <span>Tax</span>
                                <span><i class="bi bi-currency-rupee"></i>45</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-3 px-3">
                                <span>Shiping</span>
                                <span><i class="bi bi-currency-rupee"></i>0</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center py-3 px-3 border">
                                <span>Total</span>
                                <span><i class="bi bi-currency-rupee"></i>150</span>
                            </div>
                            <div class="d-flex justify-content-between flex-column align-items-center py-3 px-3">
                                <span><i class="bi bi-currency-rupee"></i>150</span>
                                <a href="order_details.php" class="btn">Place Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body food_cart_body">
                            <p class="elig_para"><i class="bi bi-check-circle-fill"></i> Your order is eligible for FREE Delivery. Select this option at checkout. Details</p>
                            <h5 class="card-title">Subtotal (1 items):<i class="bi bi-currency-rupee"></i> 2000</h5>
                            <a href="order_details.php" class="card-link btn book_btn"><p>Place Order</p></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>





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



    var swiper = new Swiper(".details_swiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        425: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
</script>

<script>
    var $button1 = $('.increment_btn')
    var $counter_one = $('.counter_one');
    $button1.click(function(){
      $counter_one.val( parseInt($counter_one.val()) + 1 ); // `parseInt` converts the `value` from a string to a number
    });
</script>

<script>
    const removeTableRow = document.getElementById('removeTableRow');
    const removBtn = document.getElementById('removBtn');
    removBtn.onclick = () =>{
        removeTableRow.classList.toggle('removeRow')
    }

</script>

<?php require('inc/footer.php'); ?>


</body>
</html>