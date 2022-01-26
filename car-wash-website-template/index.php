<?php
require_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>R.S Auto Solution</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.14/css/bootstrap-multiselect.css" integrity="sha512-EvvoSMXERW4Pe9LjDN9XDzHd66p8Z49gcrB7LCUplh0GcEHiV816gXGwIhir6PJiwl0ew8GFM2QaIg2TW02B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.14/js/bootstrap-multiselect.js" integrity="sha512-CoQowxKxumTPPSTrsNoJ0VU1Sd6QFUXvEX/CLD2h2/peHOLb5IfkLT1cK/DeACOe5ixA4zgJzcX5g59TnEkV8w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                               <h1>R.S  <span> Auto </span> Solution </h1> 
                              
                                <!--<img class= "logoimage"src="img/logo1.jpeg" alt="Logo"> -->
                            </a>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        
        
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="#about-nav" class="nav-item nav-link">About</a>
                            <a href="#service-nav" class="nav-item nav-link">Service</a>
                            <a href="gallery.html" class="nav-item nav-link active">Gallery</a>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">
                            <!--<a class="btn btn-custom" href="https://autocares.lk/Booking/index/1">Get Appointment</a>-->
                            <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#myModal">Get Appointment</button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

         <!-- Modal start -->

         
      <style type="text/css">
        .m-b-5{
          margin-bottom: 5px;
        }
        .m-b-10{
          margin-bottom: 10px;
        }
        .btn-dangerr {
    color: #fff;
    background-color: #636161;
    border-color: #636161;
    font-size: 18px;
}
.btn-dangerr:hover {
    color: #fff;
    background-color: #636161;
    border-color: #636161;
    font-size: 18px;
}
.btn-successs {
    color: #fff;
    background-color: #252f76;
    border-color: #252f76;
    font-size: 18px;
}
.btn-successs:hover {
    color: #fff;
    background-color: #252f76;
    border-color: #252f76;
    font-size: 18px;
}
      </style>

      <!-- Modal -->
      <div style="margin-top: 60px;" id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="color:white;background-color: #0751aa;">
            <div style="flex-direction:column;">
              <h4 style="color:white;background-color: #0751aa;" class="text-center modal-title">Book A Service</h4>
             
            </div>
            </div>

            <div class="modal-body">
              <div id="error">
                
              </div>
              <form name="book_form" action="insert-booking.php" method="post" onsubmit="return validateForm()" id="form_select">
                
                <div class="m-b-10">
                  <input class="form-control" type="text" name="owner_name" placeholder="Your Name">
                </div>
                <div class="m-b-10">
                  <input class="form-control" type="text" name="vehicle_no" placeholder="Vehicle Number">
                </div>

                <div class="m-b-10">
                  <input class="form-control" type="text" name="contact_no" placeholder="Mobile Number">
                  <span id="mobile_error"></span>
                </div>

                <div class="m-b-10">
                  <select class="form-control" name="service" id="main">
                    <option value="" type ="checkbox" disabled selected>Select Service</option>
                    <?php
                        $query = "SELECT * FROM booking_service";
                        $result=mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($result)){
                        echo '<option value="'.$row['service_id'].'">'.$row['service'].'</option>';
                        }


                        ?>
                  </select>
                </div>
                <div class="m-b-10">
                  <label type="checkbox"  id="sub" ></label>
                   
                  
                  </select>
                </div>

            <script>
        $(document).ready(function(){
      $("#main").change(function(){
        var service_id = $(this).val();
        $.ajax({
          url:"ajax.php",
          type:"POST",
          cache:false,
          data:{serviceid:service_id},
          success:function(data){
           // alert(data);
           $("#sub").html(data);
          }
        });
       
       
      }); 
    });

 
            </script>

         
                                    
                

                <div class="row">
                  <div class="col-md-6">
                    <div>
                      <label>Your Date:</label>
                    </div>
                    <div>
                      <input class="form-control" type="date" name="book_date">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div>
                      <label>Your Time:</label>
                    </div>
                    <div>
                      <select class="form-control" name="book_time">
                        <?php
                          for ($x = 9; $x <= 19; $x++) {
                            if ($x < 10) {
                              echo "<option value=0".$x.":00:00>";
                              echo "0".$x.":00";
                              echo "</option>";

                              echo "<option value=0".$x.":30:00>";
                              echo "0".$x.":30";
                              echo "</option>";
                            }
                            else{
                              echo "<option value=".$x.":00:00>";
                              echo $x.":00";
                              echo "</option>";

                              echo "<option value=".$x.":30:00>";
                              echo $x.":30";
                              echo "</option>";
                            }
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="modal-footer">
              <button style="border-radius: 0px; " type="button" class="btn btn-dangerr" data-dismiss="modal">Close</button>
              <input type="submit" name="submit" style="border-radius: 0px;" class="btn btn-successs" value="Book Now">
              
            </div>
            </form>
          </div>

        </div>
      </div>

      <script type="text/javascript">
        function validateForm(){
          var owner_name = document.forms["book_form"]["owner_name"].value;
          var vehicle_no = document.forms["book_form"]["vehicle_no"].value;
          var contact_no = document.forms["book_form"]["contact_no"].value;
          var service = document.forms["book_form"]["service"].value;
          var book_date = document.forms["book_form"]["book_date"].value;
          var book_time = document.forms["book_form"]["book_time"].value;

          if(owner_name == "" || vehicle_no == "" || contact_no == "" || book_date == "" || service == ""){
            document.getElementById("error").innerHTML = "<div class='alert alert-danger'>Fill All Requirements!</div>";
            return false;
          }
          else{
            document.getElementById("error").innerHTML = "";
            if(contact_no.length != 10){
              document.getElementById("mobile_error").innerHTML = "<div class='text-danger'>Enter Valid Mobile</div>";
              return false;
            }
            else{
              document.getElementById("mobile_error").innerHTML = "";
              return true;
            }
          }
        }
      </script>

          <!-- Modal End -->


        
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/slider-img-7.jpeg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                            <p>
                                We believe in providing top quality workmanship and are,so confident in our level of service that we back it up <br> with a good quality.
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item" style="width: 100% !important;">
                        <div class="carousel-img">
                            <img src="img/slide2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Quality service for you</h1>
                            <p>
                                The CAR you drive tells a lot about YOU,And the CAR we wash tells a lot about US!
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/slide3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                            <p>
                                we protect one of your most treasured possessions: your vehicle. After each wash, experience the same pride of ownership as you did the day you took your vehicle off the lot!
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        
        

        <!-- About Start -->
        <section id="about-nav">
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/slider-img-5.jpeg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>car washing and detailing</h2>
                        </div>
                        <div class="about-content">
                            <p>
                                Auto Wash is a genuine professional local car service operating throughout Jaffna .We only use professional safe products on vehicles and all of our work is fully guaranteed.We can provide a trustworthy services for all our customers.
                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Exterior Washing</li>
                                <li><i class="far fa-check-circle"></i>Interior Washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                <li><i class="far fa-check-circle"></i>Wet cleaning</li>
                                <li><i class="far fa-check-circle"></i>Window wiping</li>
                                <li><i class="far fa-check-circle"></i>Oil Changing</li>
                                <li><i class="far fa-check-circle"></i>Brake Reparing</li>
                            </ul>
                            <a class="btn btn-custom" href="gallery.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- About End -->

        <style type="text/css">
            #sen_box_shadow{
                box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
                height: 320px;
                padding: 50px 30px;
                margin-bottom: 20px;
            }
            #sen_box_shadow:hover {
                -webkit-transition: transform 0.3s ease-in-out;
              transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }
        </style>
        <!-- Service Start -->
        <section id="service-nav">
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium Washing Services</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div id="sen_box_shadow">
                            <center> 
                                <div class="service-item">
                                    <i class="flaticon-car-wash-1"></i>
                                    <h3>Exterior Washing</h3>
                                    <center> <button onclick="location.href='service.html'" class="learn-btn"<p>Learn More </p></button></center>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div id="sen_box_shadow">
                          <center> 
                        <div class="service-item">
                            <i class="flaticon-car-wash" ></i>
                            <h3>Interior Washing</h3>
                            <center> <button onclick="location.href='service.html'" class="learn-btn"<p>Learn More </p></button></center>
                        </div>
                        </center>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div id="sen_box_shadow">
                            <center>
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                            <center> <button onclick="location.href='service.html'" class="learn-btn"<p>Learn More </p></button></center>
                        </div>
                    </center>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div id="sen_box_shadow">
                            <center>
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Seats Washing</h3>
                            <center> <button onclick="location.href='service.html'" class="learn-btn"<p>Learn More </p></button></center>
                        </div>
                    </center>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div id="sen_box_shadow">
                            <center>
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Window Wiping</h3>
                            <center> <button onclick="location.href='service.html'" class="learn-btn"<p>Learn More </p></button></center>
                        </div>
                    </center>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div id="sen_box_shadow">
                           <center>
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Wet Cleaning</h3>
                            <center> <button onclick="location.href='service.html'" class="learn-btn"<p>Learn More </p></button></center>
                        </div>
                    </center>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div id="sen_box_shadow">
                           <center>
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Oil Changing</h3>
                           <center><button onclick="location.href='service.html'" class="learn-btn"<p>Learn More </p></button></center> 
                        </div>
                    </center>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div id="sen_box_shadow">
                           <center>
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Brake Reparing</h3>
                           <center><button onclick="location.href='service.html'" class="learn-btn"<p>Learn More </p></button></center> 
                        </div>
                    </center>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
        <!-- Service End -->
        
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">25</h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">350</h3>
                                <p>Engineers & Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5000</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
       
        
      <!-- content Start -->
      <section id="about-nav">
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/slider-img-7.jpeg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section-header text-left">

                           <h2>Quality Support</h2>
                        </div>
                        <div class="about-content">
                            <p>

                                Consistently trained for best practices, Enjoy working with passion and maintaining a friendly team working atmosphere, Recognize and value each other equal to our customers.</p>
                           
                        </div>
                        <div class="section-header text-left">
                            
                            <h2>Variety Services</h2>
                        </div>
                        <div class="about-content">
                            <p>

                                
                                    We are committed to provide the highest quality in car Detailing/ Car Wash/ Lube and other Car Care related Products and Services that helps to maintain our customer’s vehicles.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- content End -->


       
       <!-- Blog Start -->
        <!-- <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Image">
                                <div class="meta-date">
                                    <span>01</span>
                                    <strong>Jan</strong>
                                    <span>2045</span>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Image">
                                <div class="meta-date">
                                    <span>01</span>
                                    <strong>Jan</strong>
                                    <span>2045</span>
                                </div>
                            </div>
                             </div> 
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" alt="Image">
                                <div class="meta-date">
                                    <span>01</span>
                                    <strong>Jan</strong>
                                    <span>2045</span>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                  
        <div class="text" >The mission of Splasherz Automobile Club is to provide top-quality washing and detail service for luxury car owners in Jaffna District. Splasherz Automobile Club will work to keep employees satisfied in order to maintain impeccable customer service.</div>
    -->
        <!-- Blog End --> 


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>A9 Road,<br>Nochchimoddai,Vavuniya.</p>
                            <p><i class="fa fa-phone-alt"></i>+0242229192 </p>
                            <p><i class="fa fa-phone-alt"></i>+94 77 227 1080 </p>
                            <p><i class="fa fa-envelope"></i>rsautosolutions2021@gmail.com</p>
                            <div class="footer-social">
                                
                                <a class="btn" href="https://www.facebook.com/RS-Auto-Solution-Vavuniya-104887008656086/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="index.html">Home</a>
                            <a href="about.html">About Us</a>
                            <a href="contact.html">Contact Us</a>
                            <a href="service.html">Our Service</a>
                            <a href="gallery.html">Gallery</a>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <div class="col-md-12">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.415989289735!2d80.49453351478525!3d8.840805593651574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee256ac1d9afe487!2zOMKwNTAnMjYuOSJOIDgwwrAyOSc0OC4yIkU!5e0!3m2!1sen!2slk!4v1639547973199!5m2!1sen!2slk"
                                  frameborder="0"
                                  style="border: 0"
                                  allowfullscreen=""
                                  aria-hidden="false"
                                  tabindex="0"
                                  height="300px"
                                  width="300px"
                                ></iframe>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">R.S Auto Solution</a>, All Right Reserved. Designed By <a href="https://www.kodplex.com/home">Kodplex</a></p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
            $(document).ready(function(){
                $('#sub').multiselect({
                    nonSelectedText :'select sub services',
                    enableFiltering:true,
                    enableCaseInsensitiveFiltering:true,
                    buttonWidth:'400px'
                });

                $('#form_select').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert-booking.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#sub option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#sub').multiselect('refresh');
    alert(data);
   }
  });
 });
            });
        </script>
    </body>
</html>
