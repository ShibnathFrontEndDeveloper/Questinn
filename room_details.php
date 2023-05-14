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
			<div class="swiper-slide home_slide" style="background:url(images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg);">
				<div class="overlay"></div>
			</div>
			<div class="swiper-slide home_slide" style="background:url(images/rooms/IMG_39782.png);">
			<div class="overlay"></div>

			</div>
			<div class="swiper-slide home_slide" style="background:url(images/rooms/IMG_65019.png);">
			<div class="overlay"></div>

			</div>
			
		</div>
	</div>
	<div class="food_bg_text">
		<h1>room details</h1>
  </div>
</section>
<section class="details_rooms">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 roomDetails_imgGallery">
                <div class="swiper room_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_11892.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_39782.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_42663.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_65019.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_11892.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_39782.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_42663.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_65019.png" />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper room_swiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_11892.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_39782.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_42663.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_65019.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_11892.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_39782.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_42663.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="Images/rooms/IMG_65019.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 roomDetails_textInfo">
                <h2>single room</h2>
                <div class="description_room">
                    <h5>room name</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur pariatur suscipit illo nostrum dolorem. Nemo fugiat ex cupiditate alias! Aut maiores harum cumque deleniti vitae ipsa praesentium impedit molestias rem totam laboriosam reiciendis neque dolorem fugiat, corporis ratione consectetur incidunt.</p>
                </div>
                <div class="facility_box">
                    <h5>facilities</h5>
                    <div class="row">
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4 facilityImgBox">
                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <a href="" class="btn book_btn"> <p>book now</p></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="resent_view" style="background:url(Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg)">
       <div class="container">
            <div class="swiper details_swiper">
                <h1 class="text-center">recently viewed</h1>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="details_box">
                            <img src="Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
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
                            <img src="Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
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
                            <img src="Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
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
                            <img src="Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
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
                            <img src="Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
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
                            <img src="Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
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
                            <img src="Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
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
                            <img src="Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
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
                            <img src="Images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg" alt="">
                            <div class="slide_detail_text_box">
                                <h4>hotel name</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut ullam tenetur, expedita iusto rem fugit.</p>
                                <div class="facility_box">
                                    <h5>facilities</h5>
                                    <div class="row">
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_27079.svg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bellboy.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/bus.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 facilityImgBox">
                                            <img src="Images/Facilities/IMG_41622.svg" alt="" class="img-fluid">
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

      var swiper = new Swiper(".room_swiper2", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".room_swiper", {
      spaceBetween: 10,
      
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
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

<?php require('inc/footer.php'); ?>


</body>
</html>