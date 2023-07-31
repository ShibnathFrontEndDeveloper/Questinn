
<div class="top_header">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<div class="adders_part">
				<i class="bi bi-geo-alt-fill"></i><p>Mondarmoni,West Bengal</p>
			</div>
			<div class="social_part">
				<a href=""><i class="bi bi-facebook"></i></a>
				<a href=""><i class="bi bi-twitter"></i></a>
				<a href=""><i class="bi bi-youtube"></i></a>
				<a href=""><i class="bi bi-instagram"></i></a>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg px-lg-3 py-lg-2 shadow-sm sticky-top" id="stop_nav">
  	<div class="container">
		<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"><img src="images/questinn_logo_white.png" alt="" class="brand"></a>
		<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="tggoleBar">
		<span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav justify-content-end">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="index.php">Home</a>
				</li>
				<li class="nav-item">
				<a class="nav-link me-2" href="rooms.php">Rooms</a>
				</li>
				<li class="nav-item">
				<a class="nav-link me-2" href="facilities.php">Facilities</a>
				</li>
				<li class="nav-item">
				<a class="nav-link me-2" href="contact.php">Contact Us</a>
				</li>
				<li class="nav-item">
				<a class="nav-link me-2" href="about.php">About</a>
				</li>
				<li class="nav-item">
				<a class="nav-link me-2" href="food.php">Food</a>
				</li>
			</ul>
			<div class="d-flex justify-content-end" role="search">
				<a href="login.php" class="btn book_btn"><p>Login</p></a>
				<a href="signup.php" class="btn book_btn ms-3"><p>Signup</p></a>
			</div>
			<div class="cart_box position-relative">
				<i class="bi bi-basket-fill" data-bs-target="#cart_box" data-bs-toggle="offcanvas"></i>
				<span class="position-absolute top-10 start-65 translate-middle badge rounded-pill bg-primary">
					0
				</span>
			</div>
		</div>
	</div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="cart_box" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Cart</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body cart_detail_box">
	<div class="row align-items-center border-bottom">
		<div class="col-lg-4 col-sm-12 food_detailImg_box">
			<div class="food_box food_cart_box">
				<img src="images/Foods/sandwich-cup-coffee-table.jpg" alt="" class="img-fluid">
			</div>
		</div>
		<div class="col-lg-8 roomDetails_textInfo">
			<div class="description_room">
				<h5 class="cart_product_heading">JELLY BREAD WITH ORANGE JUICE</h5>
			</div>
			<div class="facility_box add_box">
				<h5><span class="discount_price"><i class="bi bi-currency-rupee"></i>2500</span> <i class="bi bi-currency-rupee"></i>2000</h5>
				<form action="" class="d-flex align-items-center counter_box mb-3">
					<input type="text" value="1" class="counter_one form-control"/>
					<button type="button" class="increment_btn"><i class="bi bi-plus"></i></button>
				</form>
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-8">
			<h5>Total</h5>
		</div>
		<div class="col-4">
			<h5><i class="bi bi-currency-rupee"></i>2000</h5>
		</div>
	</div>
	<div class="row border-top">
		<div class="col-12 text-center mt-2">
			<a href="" class="btn book_btn"><p>Place Order</p></a>
		</div>
	</div>
</div>
</div>
</div>
<script src="js/common.js"></script>
<script>
//    const header = document.querySelector('#stop_nav')
//    const setTop = header.offsetTop;
//    console.log(setTop);
//    window.addEventListener('scroll', ()=>{
// 	if(window.pageYOffset>setTop){
// 		header.classList.add('bg_navBar');
// 	}else{
// 		header.classList.remove('bg_navBar');
// 	}
//    });
    
</script>