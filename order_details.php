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
<section class="payment_page">
    <div class="container">
      <div class="row">
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
                        <span class="total_price"><i class="bi bi-currency-rupee"></i>150</span>
                        <a href="order_details.php" class="btn">Place Order Now</a>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6 mt-5">
              <div class="card mb-3 payment_card">
                  <div class="card-header">
                      <h4>Choose Pyament</h4>
                  </div>
                  <div class="card-body">
                      <form action="" class="payment_form">
                          <div class="form-check my-4">
                              <label for="onlone" class="form-control">
                                  <input class="form-check-input" type="radio" name="onlone" id="inlineRadio1" value="option1">
                                  <label class="form-check-label d-flex align-items-center" for="inlineRadio1">
                                      <img src="./images/payment1.png" alt="" class="pymnt_img">
                                      <p class="payment_caption">Online Payment</p>
                                  </label> 
                              </label>
                          </div>
                          <div class="form-check my-4">
                              <label for="onlone" class="form-control">
                                  <input class="form-check-input" type="radio" name="onlone" id="inlineRadio2" value="option2">
                                  <label class="form-check-label d-flex align-items-center" for="inlineRadio2">
                                      <img src="./images/cashOnDelivery1.png" alt="" class="pymnt_img">
                                      <p class="payment_caption">Cash On Delivery</p>
                                  </label> 
                              </label>
                          </div>
                      </form>
                  </div>
              </div>
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

<?php require('inc/footer.php'); ?>


</body>
</html>