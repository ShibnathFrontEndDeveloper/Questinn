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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css"/>

</head>
<body>

<?php require('inc/header.php'); ?>

<!-- Swiper Carousal-->
<section class="home_carousel">
	<div class="swiper home_swiper">
      <div class="swiper-wrapper">
			<div class="swiper-slide home_slide" style="background:url(images/carousel/1.png);">
				<div class="overlay"></div>
			</div>
			<div class="swiper-slide home_slide" style="background:url(images/carousel/2.png);">
			<div class="overlay"></div>

			</div>
			<div class="swiper-slide home_slide" style="background:url(images/carousel/3.png);">
			<div class="overlay"></div>

			</div>
			<div class="swiper-slide home_slide" style="background:url(images/carousel/4.png);">
			<div class="overlay"></div>

			</div>
			<div class="swiper-slide home_slide" style="background:url(images/carousel/5.png);">
			<div class="overlay"></div>

			</div>
			<div class="swiper-slide home_slide" style="background:url(images/carousel/6.png);">
			<div class="overlay"></div>

			</div>
		</div>
	</div>
	<div class="caption_box">
		<h5>Welcome to</h5>
		<h1>questinn <span id="animiText"></span> beach hotel</h1>
		<p>If you are looking for a perfect holiday experience with memories to cherish you are at the right place.<br> Let’s plan a reasonable stay for you.</p>
	</div>
</section>
 
	


 <!-- check avilability form-->
 <div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 class="text-center py-3">Check Booking Availability</h5>
 			<form>
 				<div class="row align-items-end">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Adult</label>
						 <input type="number" class="form-control shadow-none">
 						
 					</div>
 					<div class="col-lg-2 mb-3">
 						<label class="form-label" style="font-weight: 500;">Children</label>
 						<input type="number" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-1 mb-lg-3 mt-2 checkabaili">
 						<button type="submit" class="btn shadow-none custom-bg">Submit</button>
 					</div>

 				</div>
 			</form>
 		</div>
 	</div>
 </div>

 <!-- About Questinn -->
 <section class="aboutQuestInn" id="aboutQuestInn">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-sm-12 aboutTextPart">
				<div class="starts">
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-half"></i>
				</div>
				<div class="text_box">
					<p class="heading">Questinn Beach Hotel</p>
					<h1>Enjoy Your Luxury Experience</h1>
					<p class="para">Our hotel signifies warmth and friendliness, simplicity with style, convenience and affordability for all executives and travelers.<br><br>
					We, Quest Inn Beach Resort situated at Dadanpatrabarh, Mandarmani, WEST BENGAL,  provide you with a luxurious experience beyond all expectations. </p>
					<a href="about.php" class="btn book_btn"><p>know more</p></a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 abotGallery">
				<div class="row">
					<div class="col-lg-6">
						<div class="img_box">
							<img src="images/about/young-couple-relaxing-during-back-massage-health-spa-focus-is-young-woman.jpg" alt="" class="mb-3">
							<img src="images/about/spa-massage-young-woman-with-facial-mask-face-indoors.jpg" alt="">
						</div>
						
					</div>
					<div class="col-lg-6">
						
						<div class="img_box">
							<img src="images/about/masseur-doing-massage-backbone-man-body-spa-salon-beauty-treatment-concept.jpg" alt="" class="mb-3">
							<img src="images/about/beauty-spa.jpg" alt="">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 </section>
 <section class="counter_part" style="background:url(images/coconut-landscape-green-tropical-swimming.jpg)">
 <div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-3 countText">
				<i class="bi bi-universal-access"></i>
				<div class="counter_box">
					<h3><span id="Projects">0</span>+</h3>
				</div>
				<p>Booking Month</p>
			</div>
			<div class="col-3 countText">
				<i class="bi bi-people-fill"></i>
				<div class="counter_box">
					<h3><span id="Clients">0</span>+</h3>
				</div>
					<p>Daily Visitors</p>
			</div>
			<div class="col-3 countText">
				<i class="bi bi-emoji-smile"></i>
				<div class="counter_box">
					<h3><span id="Partners">0</span>%</h3>
				</div>
				<p>Positive Feedback</p>
			</div>
			<div class="col-3 countText">
				<i class="bi bi-award-fill"></i>
				<div class="counter_box">
					<h3><span id="Award">0</span>+</h3>
				</div>
				<p>Award & Honour</p>
			</div>
		</div>
	</div>

 </section>
 
 <!-- Our Rooms -->
 <section class="questInnRooms" id="questInnRomms">
 	<h2 class="">OUR ROOMS</h2>
	<div class="container">
		<div class="row">

			<div class=" my-3 room_box">
				<div class="card">
					<div class="room_img_box">
						<img src="images/rooms/room-1.png">
					</div>
					<div class="card-body">
						<h5 class="card-title">Single Room</h5>
						<div class="perNight_box d-flex justify-content-start align-items-center">
							<i class="bi bi-currency-rupee"></i>
							<h6 class="mt-2">1000 Per Night </h6>
						</div>
						
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Rooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room Heater
							</span>
						</div>

						<div class="guests mb-4">
							<h6 class="mb-1">Guests</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								5 Adults
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								4 Children
							</span>
						</div>	
						<div class="rating mb-4">

							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
							</span>
						</div>
						<div class="d-flex justify-content-center mb-2 bm_btn_box">
							<a href="#" class="btn book_btn "><p> book now</p></a>
							
						</div>
					</div>
				</div>
			</div>

			<div class=" my-3 room_box">
				<div class="card">
					<div class="room_img_box">
						<img src="images/rooms/room-2.png">
					</div>
					<div class="card-body">
						<h5 class="card-title">Dulux Room</h5>
						<div class="perNight_box d-flex justify-content-start align-items-center">
							<i class="bi bi-currency-rupee"></i>
							<h6 class="mt-2">1500 Per Night </h6>
						</div>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Rooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room Heater
							</span>
						</div>

						<div class="guests mb-4">
							<h6 class="mb-1">Guests</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								5 Adults
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								4 Children
							</span>
						</div>	
						<div class="rating mb-4">

							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
							</span>
						</div>
						<div class="d-flex justify-content-center mb-2 bm_btn_box">
							<a href="#" class="btn book_btn "><p> book now</p></a>
							
						</div>
					</div>
				</div>
			</div>

			<div class=" my-3 room_box">
				<div class="card">
					<div class="room_img_box">
						<img src="images/rooms/room-3.png">
					</div>
					<div class="card-body">
						<h5 class="card-title">Super Dulux Room</h5>
						<div class="perNight_box d-flex justify-content-start align-items-center">
							<i class="bi bi-currency-rupee"></i>
							<h6 class="mt-2">2000 Per Night </h6>
						</div>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Rooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room Heater
							</span>
						</div>

						<div class="guests mb-4">
							<h6 class="mb-1">Guests</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								5 Adults
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								4 Children
							</span>
						</div>	
						<div class="rating mb-4">

							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
							</span>
						</div>
						<div class="d-flex justify-content-center mb-2 bm_btn_box">
							<a href="#" class="btn book_btn "><p> book now</p></a>
							
						</div>
					</div>
				</div>
			</div>


			<div class="col-lg-12 text-center mt-5">
				<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
			</div>
		</div>	
	</div>
 </section>
 
 

 <!-- Our Facilities-->
 <section class="questInfacilities" id="facilities" style="background:url(images/sand-coconut-sunrise-hotel-swimming.jpg)">
 	<div class="overlay"></div>
	
	<div class="container">
		
 		<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
			<div class="col-lg-12 fcliti_box ">
			<p class="heading text-center">We are Awesome</p>
		<h2 class="">OUR FACILITIES</h2>
			</div>
			<div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3 fcliti_box">
				<img src="images/Facilities/wifi.svg" width="80px">
				<h5 class="mt-3">Wifi</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3 fcliti_box">
				<img src="images/Facilities/restaurant.png" width="80px">
				<h5 class="mt-3">Restaurant</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3 fcliti_box">
			<img src="images/Facilities/bus.png" width="80px">
				<h5 class="mt-3">shuttle</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3 fcliti_box">
				<img src="images/Facilities/livingroom.png" width="80px">
				<h5 class="mt-3">Family rooms</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center rounded shadow py-4 my-3 fcliti_box">
				<img src="images/Facilities/bellboy.png" width="80px">
				<h5 class="mt-3">Room service</h5>
			</div>
			<div class="col-lg-12 text-center mt-5 fcliti_box">
				<a href="#" class="btn ">More Facilities >>></a>
			</div>
 		</div>
 	</div>
 </section>

 

 

<!-- Testimonials -->
<section class="tesimonial">
	<p class="heading text-center">What says they</p>
	<h2 class="">Testimonials</h2>
	<div class="container mt-5">
		<!-- Swiper -->
		<div class="swiper swiper-testimonials">
			<div class="swiper-wrapper mb-5">

				<div class="swiper-slide">
					<div class="slider_box">
						<div class="profile d-flex align-items-center mb-3">
							<div class="clnt_img_box">
								<img src="images/Clients/portrait-caucasian-woman-smiling.jpg">
							</div>
							<h6 class="m-0 ms-2">Random user1</h6>
						</div>
						<div class="text_testimonial_box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt 
							</p>
						</div>
						
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
					
				</div>
				<div class="swiper-slide">
					<div class="slider_box">
						<div class="profile d-flex align-items-center mb-3">
							<div class="clnt_img_box">
								<img src="images/Clients/portrait-handsome-bearded-man.jpg">
							</div>
							<h6 class="m-0 ms-2">Random user1</h6>
						</div>
						<div class="text_testimonial_box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.  
							</p>
						</div>
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slider_box">
						<div class="profile d-flex align-items-center mb-3">
							<div class="clnt_img_box">
								<img src="images/Clients/portrait-young-beautiful-woman-standing-smiling.jpg">
							</div>
							<h6 class="m-0 ms-2">Random user1</h6>
						</div>
						<div class="text_testimonial_box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.  
							</p>
						</div>
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slider_box">
						<div class="profile d-flex align-items-center mb-3">
							<div class="clnt_img_box">
								<img src="images/Clients/portrait-young-man-with-dark-curly-hair.jpg">
							</div>
							<h6 class="m-0 ms-2">Random user1</h6>
						</div>
						<div class="text_testimonial_box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.  
							</p>
						</div>
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slider_box">
						<div class="profile d-flex align-items-center mb-3">
							<div class="clnt_img_box">
								<img src="images/Clients/young-bearded-man-with-striped-shirt.jpg">
							</div>
							<h6 class="m-0 ms-2">Random user1</h6>
						</div>
						<div class="text_testimonial_box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.  
							</p>
						</div>
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slider_box">
						<div class="profile d-flex align-items-center mb-3">
							<div class="clnt_img_box">
								<img src="images/Clients/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair.jpg">
							</div>
							<h6 class="m-0 ms-2">Random user1</h6>
						</div>
						<div class="text_testimonial_box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.  
							</p>
						</div>
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slider_box">
						<div class="profile d-flex align-items-center mb-3">
							<div class="clnt_img_box">
								<img src="images/Clients/portrait-caucasian-woman-smiling.jpg">
							</div>
							<h6 class="m-0 ms-2">Random user1</h6>
						</div>
						<div class="text_testimonial_box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.  
							</p>
						</div>
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="slider_box">
						<div class="profile d-flex align-items-center mb-3">
							<div class="clnt_img_box">
								<img src="images/Clients/young-bearded-man-with-striped-shirt.jpg">
							</div>
							<h6 class="m-0 ms-2">Random user1</h6>
						</div>
						<div class="text_testimonial_box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.  
							</p>
						</div>
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="slider_box">
						<div class="profile d-flex align-items-center mb-3">
							<div class="clnt_img_box">
								<img src="images/Clients/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair.jpg">
							</div>
							<h6 class="m-0 ms-2">Random user1</h6>
						</div>
						<div class="text_testimonial_box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.  
							</p>
						</div>
						<div class="rating">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
					</div>
				</div>

			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>

</section>

 

 

 <!-- Contact us-->
 <section class="contact" id="contact_questinn">
 		<h2 class="cont_heading">Contact Us</h2>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
				<iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29666.06823035305!2d87.65155404577145!3d21.65379827998291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a032fd93a4bf789%3A0xa8e634453578d6a3!2sMandarmani%20Beach!5e0!3m2!1sen!2sin!4v1683527506097!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="col-lg-4 col-md-4 ">
				<div class="bg-white p-4 rounded">
					<h5>Call us</h5>
					<a href="tel: 91-7890315235" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 91-7890315235</a>
					<a href="tel: 91-7980269490" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 91-7980269490</a>
					<a href="tel: 91-8392046451" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 91-8392046451</a>
					<a href="tel: 91-6296663434" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 91-6296663434</a>
				</div>	
				<div class="bg-white p-4 rounded">
					<h5>Mail us</h5>
					<a href="#" class="d-inline-block mb-3">
						<span class="badge bg-light text-dark fs-6 p-2">
							<i class="bi bi-envelope me-1"></i>questinnbeachresort@gmail.com
						</span>
					</a>
					
				</div>
			</div>
		</div>
	</div>
 </section>

 <!-- Client area -->

 <section class="top_client" id="top_client">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 client_heading">
				<h1>Our Amazing Clients</h1>
			</div>
			<div class="col-lg-8">
				<div class="row g-5">
					<div class="col-4">
						<img src="images/Clients/clnt-1.jpg" alt="" class="client_imgs">
					</div>
					<div class="col-4">
						<img src="images/Clients/clnt-2.jpg" alt="" class="client_imgs">
					</div>
					<div class="col-4">
						<img src="images/Clients/clnt-3.jpg" alt="" class="client_imgs">
					</div>
					<div class="col-4">
						<img src="images/Clients/clnt-4.jpg" alt="" class="client_imgs">
					</div>
					<div class="col-4">
						<img src="images/Clients/clnt-5.jpg" alt="" class="client_imgs">
					</div>
					<div class="col-4">
						<img src="images/Clients/clnt-6.jpg" alt="" class="client_imgs">
					</div>
				</div>
			</div>
		</div>
	</div>
 </section>

 <?php require('inc/footer.php') ?>
<!-- JavaScript Bundle with Popper -->


 <!-- Swiper JS -->
 	<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".home_swiper", {
        spaceBetween: 30,
        effect: "slide",
        loop: true,
        autoplay: {
        	delay: 10000,
        	disableOnInteraction: false,
        }
      });

      
	  var swiper = new Swiper(".swiper-testimonials", {
		slidesPerView: 3,
		spaceBetween: 30,
		pagination: {
			el: ".swiper-pagination",
			type: "progressbar",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints:{
			1024:{
				slidesPerView: 3,
				spaceBetween: 30,
			},
			768:{
				slidesPerView: 2,
				spaceBetween: 20,
			},
			425:{
				slidesPerView: 1,
				spaceBetween: 10,
			},
		}
		});
    </script>
	<script>
		var typed = new Typed('#animiText', {
			strings: ['Relaxtion','Vacation','Party','Event'],
			typedSpeed:100,
			backSpeed:100,
			loop:true
		});
	</script>
	<script>
		function numCounter(tagId,maxCount,speed){
			var initialNumber = 0;
			function counter(){
				document.getElementById(tagId).innerHTML = initialNumber;
				++initialNumber;
			}
			var counterDelay = setInterval(counter,speed);
			function totalTime(){
				clearInterval(counterDelay);
			}
			var totalPeriod = speed * (maxCount);  
			setTimeout(totalTime, totalPeriod);
		}

		numCounter("Projects",251,80);
		numCounter("Clients",1201,10);
		numCounter("Partners",96,100);
		numCounter("Award",6,400);
	</script>
</body>
</html>