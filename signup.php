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

<div class="log_section" style="background:url(images/log_bg.jpg)">
    <div class="logForm_box_main">
        <form action="" class="logSign_form">
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
                        <label for="" class="form-label">ID</label>
                        <select name="" id="" class="form-select">
                            <option value="1" select>Pan Card</option>
                            <option value="1">Aadhaar Card</option>
                            <option value="1">Voter Card</option>
                            <option value="1">Driving Licence</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="form-label">ID Photo</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Mobol</label>
                        <input type="tel" class="form-control" required pattern="[0-9]{5}-[0-9]{5}" placeholder="Mobile">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Address</label>
                        <input type="text" class="form-control" required placeholder="Address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" required placeholder="Password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" required placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <p class="form_para">Alrerady have an account? <a href="login.php">Login</a></p>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn ">Send</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>