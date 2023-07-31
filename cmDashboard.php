
<?php require('inc/header.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>

<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" href="css/dashboard.css">

</head>
  

<body id="body-pd">
    <!--Container Main start-->
    <div class="container custom_contain">
      <div class="row">
        <div class="col-2 profile_list_box">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Room Details</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Order Details</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Edit Profile</button>
            <button class="nav-link" id="v-pills-settings-tab">Logout</button>
          </div>
        </div>
        <div class="col-10 cmd_table_Part">
          <div class="tab-content" id="v-pills-tabContent">
            
            <!-- Room Details Tap -->
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="col-lg-12">
              <table class="table table-striped cmd_table">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Room No.</th>
                    <th scope="col">Room Name</th>
                    <th scope="col">Facilities</th>
                    <th>Price</th>
                    <th>Payment</th>
                    <th>Night Stay</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><img src="images/rooms/IMG_65019.png" class="img-fluid cmd_img"></th>
                    <td>001</td>
                    <td>Single Room</td>
                    <td>
                      <div class="dropdown cmd_dropdown">
                        <button class="btn btn-secondary dropdown-toggle toggle_btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Check
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Ac   <span class="badge rounded-pill bg-warning text-dark">Yes</span></a></li>
                          <li><a class="dropdown-item" href="#">Room Heater <span class="badge rounded-pill bg-warning text-dark">No</span></a></li>
                          <li><a class="dropdown-item" href="#">Swimming Pool<span class="badge rounded-pill bg-warning text-dark">Yes</span></a></li>
                        </ul>
                      </div>
                    </td>
                    <td><i class="bx bx-rupee"></i> 1500.00</td>
                    <td>Due</td>
                    <td>1 Night</td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="images/rooms/IMG_65019.png" class="img-fluid cmd_img"></th>
                    <td>001</td>
                    <td>Single Room</td>
                    <td>
                      <div class="dropdown cmd_dropdown">
                        <button class="btn btn-secondary dropdown-toggle toggle_btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Check
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Ac   <span class="badge rounded-pill bg-warning text-dark">Yes</span></a></li>
                          <li><a class="dropdown-item" href="#">Room Heater <span class="badge rounded-pill bg-warning text-dark">No</span></a></li>
                          <li><a class="dropdown-item" href="#">Swimming Pool<span class="badge rounded-pill bg-warning text-dark">Yes</span></a></li>
                        </ul>
                      </div>
                    </td>
                    <td><i class="bx bx-rupee"></i> 1500.00</td>
                    <td>Due</td>
                    <td>1 Night</td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="images/rooms/IMG_65019.png" class="img-fluid cmd_img"></th>
                    <td>001</td>
                    <td>Single Room</td>
                    <td>
                      <div class="dropdown cmd_dropdown">
                        <button class="btn btn-secondary dropdown-toggle toggle_btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Check
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Ac   <span class="badge rounded-pill bg-warning text-dark">Yes</span></a></li>
                          <li><a class="dropdown-item" href="#">Room Heater <span class="badge rounded-pill bg-warning text-dark">No</span></a></li>
                          <li><a class="dropdown-item" href="#">Swimming Pool<span class="badge rounded-pill bg-warning text-dark">Yes</span></a></li>
                        </ul>
                      </div>
                    </td>
                    <td><i class="bx bx-rupee"></i> 1500.00</td>
                    <td>Due</td>
                    <td>1 Night</td>
                  </tr>
                </tbody>
              </table>
              </div>
            </div>

            <!-- Food Details Tap -->
            
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <div class="card">
                  <div class="card-body">
                  <div class="d-flex justify-content-between card_border">
                    <div class="ing_food_dtls">
                      <div class="imgBox_part">
                        <img src="images/Foods/amirali-mirhashemian-ZSukCSw5VV4-unsplash.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="foodDtls_box">
                        <h2 class="food_name">Questinn</h2>
                        <p class="room_number">Hotel Questinn Room Number 001</p>
                        <p class="order_id">order#1254 <span>Thu, Feb 9, 2023, 12:56 PM</span> </p>
                        <a href="#offcanvasExample" data-bs-toggle="offcanvas">view details</a>
                        <a href="#staticBackdrop" data-bs-toggle="modal">Rate us</a>
                      </div>
                      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                          <h5 class="offcanvas_heading">Order #1254</h5>
                        </div>
                        <div class="offcanvas-body">
                          <div class="deliver_details">
                            <div class="delvr_detail_wrapper wrapper_box">
                              <div class="icon_box">
                                <i class="bx bx-map"></i>
                              </div>
                              <div class="para_d">
                                <h6>Tadoori Roti Chicken Varta</h6>
                                <p>mandarmani, West Bengal</p>
                              </div>
                            </div>
                            <div class="delvr_detail_wrapper pb-3">
                              <div class="icon_box">
                              <i class="bx bxs-arch"></i>
                              </div>
                              <div class="para_d para_b">
                                <h6>Hotel Questinn</h6>
                                <p>Room No.001, Sufal Biswas</p>
                              </div>
                            </div>
                          </div>
                          <div class="itemDtls_box">
                            <h5><span>1</span> item</h5>
                            <div class="dtls_wrrapar">
                              <div class="dtls_box">
                                <h6 class="hadding_h"><i class="bx bx-food-tag"></i>Tadoori Roti Chicken Varta</h6>
                              </div>
                              <div class="dtls_box">
                                <h6><i class="bx bx-rupee"></i>350.00</h6>
                              </div>
                            </div>
                          </div>
                          <div class="itemDtls_box">
                            <div class="dtls_wrrapar">
                              <div class="dtls_box">
                                <h6 class="hadding_h">item total</h6>
                              </div>
                              <div class="dtls_box">
                                <h6><i class="bx bx-rupee"></i>350.00</h6>
                              </div>
                            </div>
                            <div class="dtls_wrrapar">
                              <div class="dtls_box">
                                <h6>packaging charges</h6>
                              </div>
                              <div class="dtls_box">
                                <h6><i class="bx bx-rupee"></i>20.00</h6>
                              </div>
                            </div>
                            <div class="dtls_wrrapar">
                              <div class="dtls_box">
                                <h6>taxes</h6>
                              </div>
                              <div class="dtls_box">
                                <h6><i class="bx bx-rupee"></i>50.00</h6>
                              </div>
                            </div>
                          </div>
                          <div class="grandTtl_box">
                            <div class="allTxt_box">
                              <p>paid via online</p>
                            </div>
                            <div class="alltax_grand">
                              <div class="bill_big">
                                  <h5>Bill total</h5>
                              </div>
                              <div class="bill_amount">
                                  <h5><i class="bx bx-rupee"></i>420.00</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="deivr_to">
                      <span>Delivered on Thu, Feb 9, 2023, 01:25 PM <i class="bx bx-check-circle"></i></span>
                    </div>
                  </div>
                    <div class="d-flex justify-content-between align-items-center pt-3">
                      <div class="qty_box "><p>Tadoori Roti Chicken Varta x<span> 1</span></p></div>
                      <div class="qty_box"><p><i class="bx bx-rupee"></i>350.00</p></div>
                    </div>
                  </div>
              </div>
            </div>

            <!-- Profile Edit Tap -->

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <form action="" class="edit_form">
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="form-group mb-3">
                              <label for="" class="form-label">Name</label>
                              <input type="text" class="form-control" required="" placeholder="Name">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" class="form-control" required="" placeholder="Your Email">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group mb-3">
                              <label for="" class="form-label">ID</label>
                              <select name="" id="" class="form-select">
                                  <option value="1" select="">Pan Card</option>
                                  <option value="1">Aadhaar Card</option>
                                  <option value="1">Voter Card</option>
                                  <option value="1">Driving Licence</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group mb-3">
                              <label for="" class="form-label">ID Photo</label>
                              <input type="file" class="form-control">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group mb-3">
                              <label for="" class="form-label">Mobol</label>
                              <input type="tel" class="form-control" required="" pattern="[0-9]{5}-[0-9]{5}" placeholder="Mobile">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group mb-3">
                              <label for="" class="form-label">Address</label>
                              <input type="text" class="form-control" required="" placeholder="Address">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group mb-3">
                              <label for="" class="form-label">Password</label>
                              <input type="password" class="form-control" required="" placeholder="Password">
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group mb-3">
                              <label for="" class="form-label">Confirm Password</label>
                              <input type="password" class="form-control" required="" placeholder="Password">
                          </div>
                      </div>
                  </div>
                  <div class="form-group mb-3">
                      <button type="submit" class="btn ">Update</button>
                  </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rate us modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Give us Rates</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="smly_box">
              <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
              <lottie-player src="https://assets8.lottiefiles.com/datafiles/d2PQkkDcP77TPTeBzAx7iQMu6zJOARPXuafCB19k/success.json" background="transparent" speed="1" loop="" autoplay=""></lottie-player>
            </div>
            <div class="rate_box">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            </div>
            <form action="" class="rate_box">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option4">
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option5">
              </div>
              <div class="row">
                <div class="col-12 text-center my-4">
                <button type="submit" class="btn btn-primary rate_btn">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
      
    <!--Container Main end-->

    <script>
      let dropdown = document.querySelector('.dropdown-toggle');
      let dropmenu = document.querySelector('.dropdown-menu');
      dropdown.onclick =()=>{
        dropmenu.classList.toggle('show_menu');
      }


    </script>





<?php require('inc/footer.php'); ?>



</html>