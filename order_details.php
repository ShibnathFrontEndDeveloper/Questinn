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
            <div class="col-lg-8">
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
        <div class="row">
            
        <div class="col-lg-3 col-md-4">
                <div class="card mb-3">
                    <div class="card-header bg-transparent">Price details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between align-items-center paymnt_details_head">
                                <h5 class="card-title">Price (1 item)</h5>
                                <p>185.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between align-items-center paymnt_details_head">
                                <h5 class="card-title">Delivery Charges</h5>
                                <p>Free</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between align-items-center paymnt_details_head">
                                <h5 class="card-title">Amount Payable</h5>
                                <p>185.00</p>
                            </div>
                        </div>
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