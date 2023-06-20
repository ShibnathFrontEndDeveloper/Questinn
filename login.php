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
<body>

<div class="log_section" style="background:url(images/sand-coconut-sunrise-hotel-swimming.jpg)">
    <div class="logForm_box_main">
        <div class="row g-3 align-items-center">
            <form action="" class="logSign_form">
                <div class="logo_box">
                    <a href="index.php"><img src="images/questinn_logo_white.png" alt="" srcset="" class="img-fluid"></a>
                </div>
                <div class="form-group mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" required placeholder="Name">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" required placeholder="Your Email">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" required placeholder="Password">
                </div>
                <div class="form-group mb-3">
                    <p class="form_para">Don't you have an account? <a href="signup.php">Signup</a></p>
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn ">Send</button>
                </div>
            </form>
        </div>
    </div>

</div>

</body>
</html>