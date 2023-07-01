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
		<h1>room booking</h1>
  </div>
</section>
<section class="details_rooms">
    <div class="container">
        <h1 class="booking_heading">Booking</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="" class="booking_form">
                    <div class="logo_box">
                        <a href="index.php"><img src="images/questinn_logo_white.png" alt="" srcset="" class="img-fluid"></a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" required placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" required placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="tel" class="form-control" required placeholder="Your Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">City</label>
                                <input type="text" class="form-control" required placeholder="Your City">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Cuntry</label>
                                <select name="" id="" class="form-select">
                                    <option value="1" select>India</option>
                                    <option value="1">England</option>
                                    <option value="1">USA</option>
                                    <option value="1">Philippines</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Check In</label>
                                <input type="date" class="form-control" required >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Check Out</label>
                                <input type="date" class="form-control" required >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">No. of Adults</label>
                                <select name="" id="" class="form-select">
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
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">No. of Children</label>
                                <select name="" id="" class="form-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Room types</label>
                                <select name="" id="" class="form-select">
                                    <option value="1">Single</option>
                                    <option value="2">Dulux</option>
                                    <option value="3">Super Dulux</option>
                                    <option value="4">Norlal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">No. of Rooms</label>
                                <select name="" id="" class="form-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn ">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="roombooking_details">
                    <div class="booking-img_box">
                        <img src="images/rooms/room-2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="booking_about_text">
                        <h1 class="booking_heading mt-3">About Questinn</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, ipsam voluptas autem laboriosam dolores incidunt nulla facere facilis officia veritatis eum dolorem doloribus enim obcaecati! Dolorum, tempore quia sit suscipit voluptates explicabo in sunt dolor! Cupiditate, soluta reprehenderit sequi eius ducimus quibusdam amet recusandae nostrum vero veritatis. Delectus, veniam dolorem.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="resent_view" style="background:url(images/patrick-robert-doyle-AH8zKXqFITA-unsplash.jpg)">
       <div class="container">
            <div class="swiper details_swiper">
                <h1 class="text-center">recently viewed</h1>
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