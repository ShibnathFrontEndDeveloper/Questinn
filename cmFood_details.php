<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>

<link rel="stylesheet" type="text/css" href="css/common.css">



</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
  
  :root{
    --header-height: 3rem;
  --nav-width: 68px;
  --first-color: #000;
  --first-color-light: #AFA5D9;
  --white-color: #F7F6FB;
  --body-font: 'Nunito', sans-serif;
  --normal-font-size: 1rem;
  --z-fixed: 100
}

  *,::before,::after{
    box-sizing: border-box
  }

  body{
    position: relative;
  margin: var(--header-height) 0 0 0;
  padding: 0 1rem;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  transition: .5s
}
  a{
    text-decoration: none
}
  .header{
    width: 100%
  ;height: var(--header-height);
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: end;
  padding: 0 1rem;
  background-color: var(--white-color);
  z-index: var(--z-fixed);
  transition: .5s
}
.header_toggle{
  padding-left:30px;
  
}
  .header_toggle i{
    color: #fff;
  font-size: 1.5rem;
  cursor: pointer;
 
  }
  .header_img{
    width: 35px;
  height: 35px;
  display: flex;
  justify-content: center;
  border-radius: 50%;
  overflow: hidden
  }
  .header_img img{
    width: 40px
  }
  .l-navbar{
    position: fixed;
  top: 0;
  left: -30%;
  width: var(--nav-width);
  height: 100vh;
  background-color: #000;
  padding: .5rem 1rem 0 0;
  transition: .5s;
  z-index: var(--z-fixed)
  }
  .nav{
    height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: self;
  overflow: hidden
  }
  .nav_logo, .nav_link{
    display: grid;
  grid-template-columns: max-content max-content;
  align-items: center;
  column-gap: 1rem;
  padding: .5rem 0 .5rem 1.5rem
  }
  .nav_logo{
    margin-bottom: 2rem
  }
  .nav_logo-icon{
    font-size: 1.25rem;
  color: var(--white-color)
  }
  .nav_logo-name{color: var(--white-color);font-weight: 700}
  .nav_link{position: relative;
  color: var(--first-color-light);
  margin-bottom: 1.5rem;
  transition: .3s
  }
  .nav_link:hover{
    color: var(--white-color)
  }
  .nav_icon{
    font-size: 1.25rem
  }
 
  .body-pd{
    padding-left: calc(var(--nav-width) + 1rem)
    }
    .active{
        color: var(--white-color)
    }
    .active::before{
        content: '';
    position: absolute;
    left: 0;
    width: 2px;
    height: 32px;
    background-color: var(--white-color)
    }
    p{
      margin-bottom:0;
    }
    .height-100{
        height:100vh
    }
    .btn-secondary{
      width: 20px;
      display:flex;
      justify-content:center;
      align-items:center;
      background:transparent;
      border:none;
      outline:none;
    }
    .btn-secondary:focus{
      box-shadow:none !important;
      outline:none !important;
    }
    .btn-secondary:hover{
      background:transparent;
      color:#000;
    }
    .btn.show{
      width: 20px;
      display:flex;
      justify-content:center;
      align-items:center;
      background:transparent;
      color:#000;
      box-shadow:none !important;
      outline:none !important;
    }
    .dropdown-toggle{
      color:#000;
    }
    .dropdown-item{
      color:#fff;
      font-size:15px;
    }
    .dropdown-item:hover{
      background:#084298;
      color:#fff;
    }
    .tbl_content{
      padding-top:30px;
      padding-bottom:80px;
      overflow-y:visible;
    }
    .cmd_img{
      width:100px;
    }
    .cmd_heading{
      padding-top:30px;
      font-size:30px;
      text-align:center;
      font-weight:700;
    }
    .cmd_dropdown{
      padding-left:40px;
    }
    .cmd_dropdown .dropdown-item .badge{
      float:right;
    } 
    .card_width{
        width:338px;
    }
    .imgBox_part img{
      width: 200px;
      height:180px;
    }
    .ing_food_dtls{
      display:flex;
      padding-bottom:15px;
    }
    .foodDtls_box{
      flex:1;
      margin-left:30px;
    }
    .foodDtls_box .food_name{
      font-size:20px;
      font-weight:700;
    }
    .foodDtls_box .room_number{
      font-size:14px;
      color:#7e808c;
    }
    .foodDtls_box .order_id{
      color:#7e808c;
      margin-top:10px;
      font-size:13px;
    }
    .foodDtls_box a{
      margin-top: 20px;
      line-height: 6;
      background: #3d47ff;
      padding: 8px 15px;
      color: #fff;
      text-transform: capitalize;
    }
    .delvr_detail_wrapper{
      display:flex;
      margin-top:20px;
      
    }
    .wrapper_box{
      position: relative;
    }
    .wrapper_box:before{
      content:'';
      position: absolute;
      height: 38px;
      border-right: 1px dashed #a9abb2;
      top: 35px;
      left: 14px;

    }
    .itemDtls_box h5{
      font-size:16px;
      color:#7e808c;
      text-transform:uppercase;
    }
    .delvr_detail_wrapper .icon_box i{
      font-size:30px;
      color: #1e71db;
    }
    .para_b{
      border-bottom:.5px solid lightgrey;
      width: 100%;
    }
    .dtls_wrrapar{
      display:flex;
      justify-content:space-between;
      align-items:center;
    }
    .offcanvas-header{
      justify-content:flex-start;
    }
    .offcanvas_heading{
      margin-left:30px;
      font-size:18px;
      font-weight:700;
      padding-top:10px;
    }
    .para_d{
      margin-left:15px;
      padding-bottom:15px;
    }
    .para_d h6{
      font-size:15px;
      margin-bottom:0;
      font-weight:700

    }
    .para_d p{
      font-size:13px;
      color:#7e808c;
      font-weight:300;
      text-transform:capitalize;
      padding-top:5px;
    }
    .itemDtls_box{
      padding-block:15px;
      border-top:1px solid #000;
      margin-top:15px;

    }
    .dtls_box h6{
      font-size:13px;
      color:#7e808c;
      text-transform:capitalize;
    }
    .dtls_box .hadding_h{
      color:#000;
    }
    .dtls_box .hadding_h i{
      color:red;
      margin-right:5px;
    }
    .grandTtl_box{
      display:flex;
      padding:10px 0;
      border-top:1px solid #000;
    }
   .grandTtl_box .allTxt_box{
    flex:1;
   }
   .grandTtl_box .allTxt_box p{
    font-size:12px;
    text-transform:capitalize;
   }
   .alltax_grand{
    display:flex;
    align-items:center;
    justify-content:space-between;
   }
   .alltax_grand h5{
    font-size:15px;
    margin-bottom:0;
    font-weight:600;
   }
   .bill_amount{
    margin-left:15px;
   }
   .deivr_to span{
    font-size:13px;
   }
   .deivr_to span i{
    color: green;
    font-size: 18px;
   }
   .offcanvas-backdrop{
    width: 100%;
   }
   .offcanvas{
    width: 100%;
   }
   .card_border{
    border-bottom:1px dashed #adb5bd;
   }
    @media screen and (min-width: 768px){
        body{
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 1rem)
        }
        .header{
            height: calc(var(--header-height) + 1rem);
            padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
        }
        .header_img{
            width: 40px;height: 40px
        }
        .header_img img{
            width: 45px
        }
        .l-navbar{left: 0;padding: 1rem 1rem 0 0
        }
        .view{
            width: calc(var(--nav-width) + 156px)
        }
        .body-pd{
            padding-left: calc(var(--nav-width) + 170px)
            }
        }
        @media screen and (min-width: 768px){
          .dropdown-menu.show {
                width: calc(var(--nav-width) + 90px);
                background-color: #2a2f81;
            }
            .cmd_dropdown .dropdown-menu.show{
              width: calc(var(--nav-width) + 156px);
            }
            
        }
        @media (max-width: 1200px){
          .sm_container {
              max-width: 1140px !important;
          }
        }

        @media (max-width: 576px){
          .sm_container {
              max-width: 836px !important;
          }
        }


        .modal-header{
          border-bottom:none;
        }
        .modal-footer{
          border-top:none;
        }
        lottie-player{
          width: 250px;
        }
        .smly_box{
          display:flex;
          justify-content:center;
        }
        .rate_box{
          text-align:center;
        }
        .rate_box i{
          font-size:22px;
          color:#ffa700;
        }
        .form-check-inline{
          margin-right:0;
        }
        .rate_btn{
          background:#3d47ff;
          font-size:12px;
        }

</style>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_img">
             <img src="https://i.imgur.com/hczKIze.jpg" alt=""> 
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div class="header_toggle">
                <i class='bx bx-menu' id="header-toggle"></i> 
            </div>
            <div>
                 <a href="#" class="nav_logo"> 
                    <img src="images/questinn_logo_white.png" alt="" width="150px"> 
                </a>
                <div class="nav_list">
                     <a href="cmDashboard.php" class="nav_link">
                     <i class='bx bxs-institution nav_icon'></i>
                         <span class="nav_name">Room Details</span> 
                    </a>
                    <a href="cmFood_details.php" class="nav_link  active">
                        <i class='bx bxs-dish'></i> 
                         <span class="nav_name">Food Details</span> 
                    </a> 
                    <a href="cmdEditFile.php" class="nav_link"> 
                        <i class='bx bx-folder nav_icon'></i>
                         <span class="nav_name">Edit Profiles</span> 
                    </a> 
                  </div>
            </div> 
        </nav>
    </div>
    <!--Container Main start-->
    <!-- <div class="container"> -->
      <h2 class="cmd_heading">Order Details</h2>
      <div class="container sm_container">
        <div class="row">
          <div class="col-12 pb-5">
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
                    <a href="#offcanvasRight" data-bs-toggle="offcanvas">view details</a>
                    <a href="#staticBackdrop" data-bs-toggle="modal">Rate us</a>
                  </div>
                </div>
                <div class="deivr_to">
                  <span>Delivered on Thu, Feb 9, 2023, 01:25 PM <i class='bx bx-check-circle'></i></span>
                </div>
               </div>
                <div class="d-flex justify-content-between align-items-center pt-3">
                <div class="qty_box "><p>Tadoori Roti Chicken Varta x<span> 1</span></p></div>
                <div class="qty_box"><p><i class='bx bx-rupee'></i>350.00</p></div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
  
      
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          <h5 class="offcanvas_heading">Order #1254</h5>
        </div>
        <div class="offcanvas-body">
          <div class="deliver_details">
            <div class="delvr_detail_wrapper wrapper_box">
              <div class="icon_box">
                <i class='bx bx-map'></i>
              </div>
              <div class="para_d">
                <h6>Tadoori Roti Chicken Varta</h6>
                <p>mandarmani, West Bengal</p>
              </div>
            </div>
            <div class="delvr_detail_wrapper pb-3">
              <div class="icon_box">
              <i class='bx bxs-arch'></i>
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
                <h6 class="hadding_h"><i class='bx bx-food-tag'></i>Tadoori Roti Chicken Varta</h6>
              </div>
              <div class="dtls_box">
                <h6><i class='bx bx-rupee'></i>350.00</h6>
              </div>
            </div>
          </div>
          <div class="itemDtls_box">
            <div class="dtls_wrrapar">
              <div class="dtls_box">
                <h6 class="hadding_h">item total</h6>
              </div>
              <div class="dtls_box">
                <h6><i class='bx bx-rupee'></i>350.00</h6>
              </div>
            </div>
            <div class="dtls_wrrapar">
              <div class="dtls_box">
                <h6>packaging charges</h6>
              </div>
              <div class="dtls_box">
                <h6><i class='bx bx-rupee'></i>20.00</h6>
              </div>
            </div>
            <div class="dtls_wrrapar">
              <div class="dtls_box">
                <h6>taxes</h6>
              </div>
              <div class="dtls_box">
                <h6><i class='bx bx-rupee'></i>50.00</h6>
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
                  <h5><i class='bx bx-rupee'></i>420.00</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!--Container Main end-->


    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Give us Rates</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="smly_box">
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets8.lottiefiles.com/datafiles/d2PQkkDcP77TPTeBzAx7iQMu6zJOARPXuafCB19k/success.json"  background="transparent"  speed="1"  loop autoplay></lottie-player>
        </div>
        <div class="rate_box">
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
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


<script>
    document.addEventListener("DOMContentLoaded", function(event) {
   
   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)
   
      // Validate that all variables exist
      if(toggle && nav && bodypd && headerpd){
      toggle.addEventListener('click', ()=>{
      // show navbar
      nav.classList.toggle('view')
      // change icon
      toggle.classList.toggle('bx-x')
      // add padding to body
      bodypd.classList.toggle('body-pd')
      // add padding to header
      headerpd.classList.toggle('body-pd')
      });
    }
   }
   
   showNavbar('header-toggle','nav-bar','body-pd','header')
   
   /*===== LINK ACTIVE =====*/
   const linkColor = document.querySelectorAll('.nav_link')
   
   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))
   });
</script>






<?php require('inc/footer.php'); ?>



</html>