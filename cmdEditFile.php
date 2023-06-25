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
  .show{
    left: 0
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
        .show{
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
                    <a href="cmFood_details.php" class="nav_link">
                        <i class='bx bxs-dish'></i> 
                         <span class="nav_name">Food Details</span> 
                    </a> 
                    <a href="cmdEditFile.php" class="nav_link active"> 
                        <i class='bx bx-folder nav_icon'></i>
                         <span class="nav_name">Edit Profiles</span> 
                    </a> 
                  </div>
            </div> 
        </nav>
    </div>
    <!--Container Main start-->
    <div class="container">
      <div class="logForm_box_main">
          <form action="" class="logSign_form">
              <div class="logo_box">
                  <a href="index.php"><img src="images/questinn_logo_white.png" alt="" srcset="" class="img-fluid"></a>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                          <label for="" class="form-label">Name</label>
                          <input type="text" class="form-control" required="" placeholder="Name">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                          <label for="" class="form-label">Email</label>
                          <input type="email" class="form-control" required="" placeholder="Your Email">
                      </div>
                  </div>
                  <div class="col-md-6">
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
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                          <label for="" class="form-label">ID Photo</label>
                          <input type="file" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                          <label for="" class="form-label">Mobol</label>
                          <input type="tel" class="form-control" required="" pattern="[0-9]{5}-[0-9]{5}" placeholder="Mobile">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                          <label for="" class="form-label">Address</label>
                          <input type="text" class="form-control" required="" placeholder="Address">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                          <label for="" class="form-label">Password</label>
                          <input type="password" class="form-control" required="" placeholder="Password">
                      </div>
                  </div>
                  <div class="col-md-6">
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
    
    <!--Container Main end-->


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
      nav.classList.toggle('show')
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