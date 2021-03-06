<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['visa'])) {
    # code...
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['visa']) ) {
            # code...
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $visa = $_POST['visa'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                # code...
                echo 'Kindly Provide Valid Email';
            }
                else {
                 $body = $name."\n".$email."\n".$number."\n".$visa;
                    if (mail('didarulselim@gmail.com' , 'Trip', $body ,'From: didarulselim@gmail.com')) {
                    echo " Thanks For Your Mail";
                 }
                 else {
                    echo 'There is a problem in sending mail.';
                 }
                }
            
            }
       
        else {
            echo 'All Fields Are Required.';
        }
     }
        else {
            echo '';
        }
        
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- meta tag start -->
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="initial-scale=1">
    <meta class="metaTagTop" name="description" content="Lakeland, Florida Immigration Law Services
    Call our local Immigration office for your Green Card, Naturalization or Investor Visa">
    <meta class="metaTagTop" name="keywords" content="Florida Immigration Law Services, Green Card, , Naturalization or Investor Visas">
    <meta class="metaTagTop" name="author" content="Hardam Tripathi, Esq.">
    <meta property="og:title" content="Immigration Lawyer Hardam Tripathi, Esq.">
    <meta property="og:description" content="Lakeland, Florida Immigration Law Services
    Call our local Immigration office for your Green Card, Naturalization or Investor Visa">
    <meta property="og:url" content="https://www.trip-law.com/">
    <meta property="og:type" content="website">
    <meta property="cf:funnel_id" content="">
    <meta property="cf:page_id" content="">
    <meta property="cf:funnel_step_id" content="">
    <meta property="cf:user_id" content="">
    <meta property="cf:account_id" content="">
    <meta property="cf:page_code" content="=">
    <meta property="cf:mode_id" content="1">
    <meta property="cf:time_zone" content="Eastern Time (US &amp; Canada)">
    <meta property="cf:app_domain" content="">
    <!-- meta tag end -->

    <!-- link start -->
    <link rel="icon" type="image/png" href="image/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />
    <!-- link end -->
        <title>Contact || Immigration Lawyer Hardam Tripathi, Esq.</title>
  </head>
  <body>
    <header class="sticky-top">
      <div class="header-top ">
        <div class="container d-flex">
          <div class="left "><p class="m-0 p-2"><img src="image/map-marker-alt-solid.svg" alt="" width="12" height="auto"> 5304 South Florida Ave., Ste. 404B, Lakeland, FL 33813</p></div>
          <div class="right d-flex " style="margin: auto;"><a class="m-0 p-2" href="tel:18633702427" ><img src="image/phone-alt-solid.svg" alt="" width="12" height="auto"> +1 863 370 2427</a><p class="m-0 p-2"><img src="image/envelope-open-regular.svg" alt="" width="12" height="auto"> info@trip-law.com</p></div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="image/Snip-Logo1.jpg" alt="" width="200px"></a>
    <div class="btn-icon">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="m-0  call" href="tel:18633702427"><img src="image/phone-alt-solid.svg" alt="" width="12" height="auto"> </a>
    </div>      

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="about.html" >ABOUT US</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="about.html" >ABOUT US</a>
          <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdown"  data-bs-toggle="dropdown" aria-expanded="false">
            
          </a>
          <ul class="dropdown-menu" >
            <li><a class="nav-link" href="attorney.html">ATTORNEYS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.html" >SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://triplawpa.com/"  target="_blank">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://anchor.fm/theimmigrationzone" target="_blank">PODCAST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appointment.html">APPOINTMENT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" >CONTACT US</a>
        </li>
      </ul>
    </div>
   
  </div>
</nav>
    </header>


<section class="contact-form" id="Contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading pb-4">
          <h1>Have Questions? Get in Touch</h1>
        </div>
      </div>
      <div class="col-lg-6 location" style="padding: 0px 30px ;">
          <div class="address-list " style="background-color: #f39c1229;padding: 20px;margin-bottom: 20px;box-shadow: 0px 0px 5px 2px #f39c12;"><img src="image/map-marker-alt-solid.svg" alt="" width="" height="auto" style="padding: 10px;border-radius: 10px;background-color: #f39c12;margin-bottom: 20px;width: 50px;">  <h5>5304 South Florida Ave., Ste. 404B, Lakeland, FL 33813 </h5> <span style="font-weight: 700; color: #adb5bd;">Our location</span></div>
          <div class="address-list " style="background-color: #f39c1229;padding: 20px;margin-bottom: 20px;box-shadow: 0px 0px 5px 2px #f39c12;"><img src="image/phone-alt-solid.svg" alt="" width="" height="auto" style="padding: 10px;border-radius: 10px;background-color: #f39c12;margin-bottom: 20px;width: 50px;">  <h5>Phone: +1 863 370 2427 </h5> <span style="font-weight: 700; color: #adb5bd;">Let's Talk</span></div>
          <div class="address-list " style="background-color: #f39c1229;padding: 20px;margin-bottom: 20px;box-shadow: 0px 0px 5px 2px #f39c12;"><img src="image/envelope-open-regular.svg" alt="" width="" height="auto" style="padding: 10px;border-radius: 10px;background-color: #f39c12;margin-bottom: 20px;width: 50px;">  <h5>info@trip-law.com</h5>
            <span style="font-weight: 700; color: #adb5bd;">Drop a Line</span></div>
      </div>
      <div class="col-lg-6">
        <form method="post" action="" class="card">
                            
                             <div class="row">
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12  d-flex fl-name mb-3">
                                 
                                    <!-- <label for="name" class="form-label">Name</label><br> -->
                                    <input type="text" class="form-control " name="name" placeholder="Enter Your Name" required=""> 
                                  
                               </div><br><br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 mail mb-3">
                                 <!-- <label for="email" class="">Email</label> <br> --><input type="email" class="form-control" name="email" placeholder="Enter Your Email" required="">
                               </div><br><br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 number mb-3">
                                 <!-- <label for="number" class="">Phone number<br> </label>--><input type="number" class="form-control" name="number" pattern="[0-9\-]+" placeholder="Enter Your Phone" minlength="9" required="">
                               </div><br><br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 number mb-3">
                                
                                 <select class="form-control" name="visa" aria-invalid="false">
                                  <option value="Visa For">Visa For</option>
                                  <option value="Family">Family</option>
                                  <option value="Green Card">Green Card</option>
                                  <option value="Business">Business</option>
                                  <option value="Work">Work</option>
                                  <option value="Investment">Investment</option>
                                  <option value="Citizenship &amp; Naturalization">Citizenship &amp; Naturalization</option>
                                  <option value="Other">Other</option>
                                </select><br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12">                                 
                                  <button class="btn " type="submit" value="send">SEND YOUR MESSAGE</button>
                               </div>
                             </div>
                          
      </div></form>
    </div>
  </div>
</div></section>



<section class="section dsl">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="m-0 p-2">Disclaimer: Not a licensed attorney in the state of Florida. Licensed attorney from the state of Wisconsin. Practices Immigration Law in all 50 states, territories, and Embassies/Consulates abroad via Federal Jurisdiction.</p>
            </div>
        </div>
    </div>
</section>

<footer class="pt-5 pb-2 text-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <a class="navbar-brand logo" href="index.php">
          <img src="image/Snip-Logo1.jpg" alt="" width="150px" height="37px">
        </a>
        <p class="mt-4 text-justify">
          With attorneys based in Florida USA our team has substantial experience in all areas of family and business immigration law. With a combined experience of 8 years Trip Law is providing excellent services all over the United States.
        </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="mt-2">Contact Details</h5>
        <p class="mt-4">5304 South Florida Avenue, <br>Suite 404B, Lakeland, FL 33813 <br> 
          Phone: +18633702427
          <br>
          <a href="mailto:info@trip-law.com" >info@trip-law.com</a>
          <br>
          Mon-Fri: 7:00 am ??? 7:00pm
        </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="mt-2">Useful Links:</h5>
        <p class="mt-4">
          <a href="Privacy-Policy.html" >Privacy Policy</a> <br>
        <a href="dsl.html">DISCLAIMER</a> <br>
          <a href="http://www.dhs.gov/" target="_blank">Department of Homeland Security</a><br>
        <a href="http://www.uscis.gov/" target="_blank">U.S. Citizenship and Immigration Services</a><br>
        <a href="http://www.ice.gov/" target="_blank">Immigration and Customs Enforcement</a><br>
        <a href="http://www.cbp.gov/" target="_blank">Customs and Border Protection</a><br>
        <a href="http://travel.state.gov/" target="_blank">U.S. DOS Bureau of Consular Affairs</a> <br>
        <a href="contact.php" target="_blank">Contact</a>
      </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="mt-2">Services</h5>
        <p class="mt-4">Green Card <br> Family-Based Immigration <br>Employment Based Immigration <br>Deportation Defense <br> Manitarian and Religious Visas <br> Change and Adjustment of Status <br> US Citizenship <br> Waivers </p>
      </div>
      

      <hr>

      <div class="col-lg-12 footer-copy  mt-2 ">
        <div class="col-lg-6 col-md-6 text-left">
          <p class="">
          <img src="image/copyright-svg.png" width="15" height="15" alt="">
          Copyright <a href="https://trip-law.com/">Trip Law</a> 2021. All Right Reserved.
        </p>
        </div>
        <div class="col-lg-6 col-md-6 text-right">
          <p class="social">
          <a href="https://www.facebook.com/TripLawPA/"><img src="image/fb.png" alt="Facebook" width="20" height="20"></a>
          <a href="https://www.linkedin.com/mynetwork/"><img src="image/linkedin.png" alt="linkedin" width="20" height="20"></a>
          <a href="https://www.youtube.com/channel/UC2cHbRX0u0QrAFfCvy6LMdg"><img src="image/youtube.png" alt="linkedin" width="20" height="20"></a>
        </p>
        </div>
        
      </div>
      
    </div>
  </div>
</footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js" ></script>
    <!-- <script src="js/bootstrap.js"></script -->>
    <!--Jquery -->

<script>
      $('a[href*="#"]').click(function (event) {
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 750);
    }
  }
});
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>



