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
            <div class="col-lg-8 col-sm-12 food_detailImg_box">
                <div class="row">
                    <div class="col-4">
                        <div class="food_box food_cart_box">
                            <img src="images/Foods/sandwich-cup-coffee-table.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="description_room">
                            <h5>JELLY BREAD WITH ORANGE JUICE</h5>
                            <p class="food_detail">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur pariatur suscipit illo nostrum dolorem. Nemo fugiat ex cupiditate alias! Aut maiores harum cumque deleniti vitae ipsa praesentium impedit molestias rem totam laboriosam reiciendis neque dolorem fugiat, corporis ratione consectetur incidunt.</p>
                        </div>
                        <div class="facility_box add_box">
                            <h5><span class="discount_price"><i class="bi bi-currency-rupee"></i>2500</span> <i class="bi bi-currency-rupee"></i>2000</h5>
                            <form action="" class="d-flex align-items-center counter_box">
                                <input type="text" value="1" class="counter_one form-control"/>
                                <button type="button" class="increment_btn"><i class="bi bi-plus"></i></button>
                            </form>
                            <div class="mt-3">
                                <button type="submit"class="btn order_btn">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body food_cart_body">
                        <p class="elig_para"><i class="bi bi-check-circle-fill"></i> Your order is eligible for FREE Delivery. Select this option at checkout. Details</p>
                        <h5 class="card-title">Subtotal (1 items):<i class="bi bi-currency-rupee"></i> 2000</h5>
                        <a href="#" class="card-link btn book_btn"><p>Another link</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="resent_view" style="background:url(images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg)">
       <div class="container">
            <div class="swiper details_swiper">
                <h1 class="text-center">you might also like</h1>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p class="rooms_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        
                                        
                                        <div class="price_box">
                                        <i class="bi bi-currency-rupee"></i>1500
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <a href="" class="btn book_btn"> <p>book now</p></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p class="rooms_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        
                                        
                                        <div class="price_box">
                                        <i class="bi bi-currency-rupee"></i>1500
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <a href="" class="btn book_btn"> <p>book now</p></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p class="rooms_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        
                                        
                                        <div class="price_box">
                                        <i class="bi bi-currency-rupee"></i>1500
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <a href="" class="btn book_btn"> <p>book now</p></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p class="rooms_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        
                                        
                                        <div class="price_box">
                                        <i class="bi bi-currency-rupee"></i>1500
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <a href="" class="btn book_btn"> <p>book now</p></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p class="rooms_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        
                                        
                                        <div class="price_box">
                                        <i class="bi bi-currency-rupee"></i>1500
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <a href="" class="btn book_btn"> <p>book now</p></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p class="rooms_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        
                                        
                                        <div class="price_box">
                                        <i class="bi bi-currency-rupee"></i>1500
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <a href="" class="btn book_btn"> <p>book now</p></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p class="rooms_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        
                                        
                                        <div class="price_box">
                                        <i class="bi bi-currency-rupee"></i>1500
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <a href="" class="btn book_btn"> <p>book now</p></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p class="rooms_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        
                                        
                                        <div class="price_box">
                                        <i class="bi bi-currency-rupee"></i>1500
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <a href="" class="btn book_btn"> <p>book now</p></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p class="rooms_para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        
                                        
                                        <div class="price_box">
                                        <i class="bi bi-currency-rupee"></i>1500
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <a href="" class="btn book_btn"> <p>book now</p></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
       </div>
       <div class="overlay"></div>
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