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
                    alart " Thanks For Your Mail";
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
        <title>Immigration Lawyer Hardam Tripathi, Esq.</title>
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

    <section class="home">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="home-contant">
          <div class="heading">
            <h1>Hardam Tripathi, Esq</h1>
            <h3>Top Immigration Lawyer</h3>
            <hr style="width: 150px; color: #E43B2C; height: 5px; opacity: 1;">
            <h4>Obtain legal status within the United States <br> quickly with proper legal representation!</h4>
          </div>
          <div class="law-list">
            <ul name="" id="">
              <li value=""><span><img src="image/bolt.png" alt="" width="25" height="20"></span>Attorney Hardam Tripathi from Trip Law, P.A. practices U.S Immigration & Nationality Law in all 50 states and territories in the Union and at Embassies and U.S. Consulates abroad.</li><br>
              <li value=""><span><img src="image/bolt.png" alt="" width="25" height="20"></span>Juris Doctorate (Western Michigan University).</li><br>
              <li value=""><span><img src="image/bolt.png" alt="" width="25" height="20"></span>Masters in Policy (University of Florida).</li><br>
              <li value=""><span><img src="image/bolt.png" alt="" width="25" height="20"></span>Bachelors in Business Management and Marketing (University of South Florida).</li><br>
              <li value=""><span><img src="image/bolt.png" alt="" width="25" height="20"></span>Practices in Business Immigration, Family Sponsorship, Visas, Green Cards, Citizenship, Deportation Defense, and Asylum.</li><br>
            </ul>
          </div>
          <a href="contact.php" class="btn h-btn mb-5 ms-4">Get A Free Consultation </a>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="home-video">
          <!-- <img src="image/trip-man.png" alt="" class="w-100"> -->
          <!-- <video width="100%" height="100%" controls>
          <source src="https://s3.us-east-2.amazonaws.com/speakeasyvideos/Speakeasy_Testimonial_HeddingLawFirm.mp4" type="video/mp4">
        </video> -->
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/auxTn-pKqO0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-form" id="Contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading pb-4">
          <h2>Get A Free Consultation</h2>
        </div>
      </div>
      <div class="col-lg-3"><br></div>
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
                                  <button class="btn "  type="submit" value="send">SEND YOUR MESSAGE</button>
                               </div>
                             </div>
                          </form>
      </div>
      <div class="col-lg-3"><br></div>
    </div>
  </div>
</section>


<section class="service">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading pb-5">
          <h1>Trip Law Services</h1>
        </div>
      </div>
    </div>

      <div class="services-list">
        <div class=" row ">
        <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-1"> 
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>EB 5 Investor Visa</h5>
            <p>USCIS administers the EB-5 Immigrant Investor Program, created by Congress???.</p>
          </div>
          </div>
        </div>

      <!-- Modal -->
      <div class="modal fade" id="modal-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-1">EB 5 Investor Visa</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  USCIS administers the EB-5 Immigrant Investor Program, created by Congress in 1990 
                  to stimulate the economy of the United States through job creation and capital 
                  investment by foreign investors. </br> </br> 
                  Commercial enterprise means any for-profit activity 
                  formed for the conduct of lawful business along with: 
                  
                  _   A sole proprietorship; </br> </br>

                  _   Partnership (whether limited or general); </br> </br>

                  _   Holding company; </br> </br>

                  _   Joint venture; </br> </br>

                 _    Corporation; 
                
                 _    Business trust; or </br> </br>
                
                 _    Other entities, which may be publicly or privately owned </br> </br>
                 
                 This definition includes a commercial enterprise consisting of a holding 
                 company and its wholly-owned subsidiaries if each such subsidiary is 
                 engaged in a for-profit activity formed for the ongoing conduct of a lawful business.  </br> </br>
                 
                 This definition does not include noncommercial activity, such as owning and operating a personal residence.  </br> </br>
                 </p>
                 <h3> Job Creation Requirements </h3>
                 <p>
                     An EB-5 investor must invest the required amount of capital in a new
                     commercial enterprise which will create a full-time position for at least 10 qualified employees.   </br> </br>
                      For a new commercial enterprise not located within a regional center, the new commercial enterprise must directly create the full-time positions to be counted. </br> </br>

_    For a new commercial enterprise located within a regional center, the new commercial enterprise can directly or indirectly create the full-time positions. </br> </br>

_    Direct jobs establish an employer-employee relationship between the new commercial enterprise and the persons it employs. </br> </br>

_    Indirect jobs are held outside of the new commercial enterprise but are created as a result of the new commercial enterprise. </br> </br>

_    In the case of a troubled business, the EB-5 investor may rely on job maintenance. </br> </br>

_   The investor must show that the number of existing employees is, or will be, no less than the pre-investment level for a period of at least two years.
                 </p>
                 
                  
                  
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list  " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-2">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>H1B Work Visa</h5>
            <p>The US H-1B visa is a non-immigrant visa that allows US companies to employ ...</p>
          </div>
          </div>
        </div>
        <!-- Modal -->
      <div class="modal fade" id="modal-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-2">H1B Work Visa</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  The US H-1B visa is a non-immigrant visa that allows US companies to employ graduate-level
                  workers in specialty occupations that require theoretical or technical expertise in specialized
                  fields such as IT, finance, accounting, architecture, engineering, mathematics, science, medicine,
                  etc. Any professional level job requires you to have a bachelor???s degree or higher. If you do not 
                  have a bachelor???s degree or higher you may be able to show degree equivalence through work experience 
                  and/or other qualifications.  </br> </br>
                  
                  However, because of the visa cap it is unlikely that an H-1B visa petition will be successful. The US employer petitions for the H-1B Visa in the US which has a duration of up to 6 years. </br> </br>
                  Applying for a non-immigrant visa is generally quicker than applying for a US Green Card, therefore the H-1B visa is popular for companies wishing to bring in staff for long-term assignment in the US.   </br>
                  </br>
                  Please note that individuals cannot apply directly for an H-1B visa. Instead the employer must petition for entry of the employee. </br>
                  </br>
                  Eligibility: specialty occupation </br> </br>
                  
                  The US H1-B visa is designed to be used for staff in specialty occupations. The job must meet one of the following criteria to qualify as a specialty occupation: </br> </br>
                 _    Have a minimum entry requirement of a Bachelor???s or higher degree or its equivalent. </br> </br>

                _    The degree requirement for the job is common to the industry or the job is so complex or unique that it can be performed only by an individual with a degree. </br> </br>
                
                _    The employer normally requires a degree or its equivalent for the position.  </br> </br>
                
                _    The nature of the specific duties is so specialized and complex that the knowledge required to perform the duties is usually associated with the attainment of a bachelor???s or higher degree. </br> </br>
                  
                  Length of stay </br> </br>
                  
                  The H-1B visa is initially granted for up to three years, but may then be extended to a maximum of six years. </br> </br>
                  Even though the H-1B visa is a non-immigrant visa, it is one of the few US visa categories recognized as dual intent, meaning the H-1B visa holder can apply for and obtain a US Green Card while in the US on an H-1B visa. If you are still in the US on an H-1B visa and wish to remain in the US for more than six years, you can apply for permanent residency in the US to receive a Green Card. If you do not gain permanent residency prior to the expiration of your H-1B visa, then you must live outside the US for at least one year before reapplying for another H or L visa.
</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-3">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>E2 Investor Visa</h5>
            <p>When deciding to file a petition for an E-2 work visa, it???s important to be aware of the key E-2 ...</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-3">E2 Investor Visa</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  When deciding to file a petition for an E-2 work visa, it???s important to be aware of the key E-2 visa requirements for investors and individual guidelines. USCIS saysan E-2 investment as ???the investor???s placing of capital, including funds and other assets, at risk in the commercial sense with the objective of generating a profit. Your investment may be to establish a new business venture, or purchase a pre-existing business.??? </br> </br>

An E-2 treaty investor visa is a non-immigrant visa reserved for foreign entrepreneurs of countries that have a Treaty of Trade and Commerce with the United States. E-2 investor visa allows foreign investors to enter and work inside of the United States based on a substantial investment in a bona fide enterprise. In this article, we???re going to explain the top E-2 Visa Requirements for Investors and the qualifications.  </br> </br>

There are 2 types of investor visas so before looking into E-2 visa requirements for investors you want to make sure the E-2 visa is the right fit for you as a foreign investor. If the E-2 visa isn???t the correct fit for you, there is also the option of an EB-5 Investor V </br> </br>

On an E-2 visa, you may: </br> </br>

Work legally in the company that is the investment vehicle in the U.S. </br> </br>
Travel freely in and out of the U.S. </br> </br>
Stay on a prolonged basis with unlimited two-year extensions as long as you maintain E-2 qualifications </br> </br>
Be accompanied by your under 21 dependants, relatives and spouse. Your spouse may also work while in the U.S. while your dependents may attend U.S. schools, colleges, and universities, and do not have to apply for a separate student visa. </br> </br>
Key E-2 Visa Requirements for Investors to Qualify </br> </br>

Notice of assignment of an Employer Identification Number from the Internal Revenue Service (IRS) </br>
Tax returns </br>
Financial statements </br>
Quarterly wage reports or payroll summaries (i.e., W-2s and W-3) </br>
Business organizational chart </br>
Business licenses </br>
Bank statements, utility bills, and advertisements/telephone directory listings </br>
Contracts or customer/vendor agreements </br>
Escrow documents </br>
Lease agreement 
                  </p>
            </div>
          </div>
        </div>
      </div>

        <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-4"> 
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>Green Card</h5>
            <p>What is a green card?

                A green card allows a non-U.S. citizen to gain permanent residence ...</p>
          </div>
          </div>
        </div>
        <!-- Modal -->
      <div class="modal fade" id="modal-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-4">Green Card</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  What is a green card? </br> </br>

A green card allows a non-U.S. citizen to gain permanent residence in the United States. Many people from outside the United States want a green card because it would allow them to live and work (lawfully) anywhere in the United States and qualify for U.S. citizenship after three or five years. </br> </br>

Every year, the U.S. government issues more than a million green cards. Most are given to family members of U.S. citizens and current green card holders, followed by workers from other countries seeking employment in the United States as the next biggest group of recipients. </br> </br>

Boundless can help spouses of U.S. citizens with their marriage-based green card application. We turn all the required government forms into simple questions you can answer online ??? typically in under two hours. </br> </br>

Types of Green Cards </br> </br>

There are many categories of green cards. The most common types are: </br> </br>

Family-Based Green Card </br>
Employment-Based Green Card </br>
Humanitarian Green Cards </br>
Diversity Lottery Green Card </br>
Longtime-Resident Green Card
                  </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list  " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-5">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>Family Immigration</h5>
            <p>Family-Based Immigration A foreign citizen seeking to live permanently in???</p>
          </div>
          </div>
        </div>
        <!-- Modal -->
      <div class="modal fade" id="modal-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-5" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-5">Family Immigration</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  Family-Based Immigration </br> </br>

A foreign citizen seeking to live permanently in the United States requires an immigrant visa (IV). To be eligible to apply for an IV, a foreign citizen must be sponsored by an immediate relative who is at least 21 years of age and is either a U.S. citizen or U.S. Lawful Permanent Resident (that is, a green-card holder). </br> </br>

There are two types of family-based immigrant visas: </br> </br>

Immediate Relative ??? these visas are based on a close family relationship with a U.S. citizen, such as a spouse, child, or parent. The number of immigrants in these categories is not limited to each fiscal year. </br> </br>

Family Preference ??? these visas are for specific, more distant, family relationships with a U.S. citizen and some specified relationships with a Lawful Permanent Resident (LPR). The number of immigrants in these categories is limited each fiscal year.  </br> </br>

Keep in mind that U.S. citizens can file an immigrant visa petition for their: </br> </br>

??? Spouse </br> </br>

 ??? Son or daughter </br> </br>

 ??? Parent </br> </br>

 ??? Brother or sister </br> </br>

U.S. Lawful Permanent Residents can only file an immigrant visa petition for their: </br> </br>

??? Spouse </br> </br>

 ??? Unmarried son or daughter
                  </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-6">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>Business and Investor Visa</h5>
            <p>What is an Investor Visa? Individuals who wish to work in the United States either by investing...</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-6" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-6">Business and Investor Visa</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  What is an Investor Visa? </br></br>

Individuals who wish to work in the United States either by investing or starting a business may be eligible for an E-1 or E-2 investor visa, or an L-1 business expansion visa. While most of the countries are not eligible or do not fall under this category, business owners and investors may meet the criteria. Employees as well as their spouse and dependents may also be able to stay in the United States with this visa. </br></br>

How much money do I need to invest for E2 Visa? </br></br>

There is no minimum amount of investment visa. The investment just need to substantial. This means that the substantial amount will depend on factors such as the type of business involved, the number of jobs created by the investor???s personal assets, etc. In most cases, the investment should be at least $100,000USD, but sometimes it may be less than this.
                  </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-7">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>U.S. Citizenship and Naturalization</h5>
            <p>What are the requirements for U.S. citizenship? To become a U.S. ...</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-7" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-7">U.S. Citizenship and Naturalization</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  What are the requirements for U.S. citizenship? </br></br>

To become a U.S. citizen, all naturalization applicants must meet the following requirements (unless they qualify for an exemption or application based on their U.S. military service): </br></br>

Be of the minimum required age (typically, at least 18) </br></br>
Continuously and physically live in the United States as a green card holder for a certain number of years </br>
Establish residency in the state or U.S. Citizenship and Immigration Services (USCIS) district where they intend to apply </br>
Have ???good moral character??? </br>
Be proficient in basic spoken and written English and demonstrate knowledge of U.S. history and government </br>
Register for military service (if a male of a certain age) and be willing to perform civil service when required </br>
Swear allegiance to the United States </br>
In the following sections, we???ll discuss each of these requirements in greater detail. Boundless also has a detailed guide to U.S. citizenship to help you understand the entire process. </br> </br>

If all of this sounds complicated and intimidating, don???t worry! We???ve have combined experience of 30 years to help you complete your citizenship application and guide you to the finish line. Together we???ll help you stay on top of interview preparation, follow-on forms, and every other important milestone along the way.
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-8">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>Family Sponsorship</h5>
            <p>What Is a Family-Based Petition? Family Sponsorship or Family-Based Petitions???</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-8" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-8">Family Sponsorship</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
              What Is a Family-Based Petition? </br></br>

Family Sponsorship or Family-Based Petitions allow individuals in the United States of America to sponsor their family to immigrate to the United States. The Immigration and Nationality Act allows for the immigration of foreigners to the United States based on a relationship to a U.S. citizen or legal permanent resident. </br></br>

Who Can a U.S. Citizen Sponsor  </br></br>

If you are a U.S. Citizen, you may sponsor for the given relatives, as long as you can prove it in papers:  </br></br>

Husband or wife; </br>
Unmarried children under 21 years old; </br>
Unmarried son or daughter over 21 years old; </br>
Married son or daughter of any age; </br>
Brother (s) or Sisters(s), if you are at least 21 years old. </br>
Mother or father, if you are at least 21 years old </br>
Who Can a Green Card Holder Sponsor </br>

If you are a U.S. Citizen, you may sponsor for the given relatives, as long as you can prove it in papers:  </br></br>

Husband or wife; </br>
Unmarried child under 21 years of age; </br>
Unmarried son or daughter over 21 years of age. </br>
If you are planning to sponsor your family, you need a reliable lawyer. With our combined experience of 30 years, we can make the entire family sponsorship smooth for you. 
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-9">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>Permanent Residency</h5>
            <p>The USA is a dreamland and people from around the world want to live the ???</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-9" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-9">Permanent Residency</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  The USA is a dreamland and people from around the world want to live the American dream. For living the American dream, one needs to be a lawful permanent resident. The Lawful permanent residents (LPRs) are also known as green cardholders. </br></br>

The green card holders are non-citizens who are lawfully authorized to permanently live in the United States of America. Along with this, they may accept an offer of employment without special restrictions, own property, receive financial assistance at public colleges and universities, and join the Armed Forces. If they can meet a certain set of eligibility then can become the U.S. citizen as well.  </br></br>

If you want the acquiring of permanent residency to go smoothly then you need to hire the best immigration lawyer. With 30 years of combined experience, the lawyers at the Trip Law will help you in every step of obtaining permanent residency in the United States of America. 
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-10">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>T-Visas for Victims of Human Trafficking</h5>
            <p>The T-1 Visa, for the victim, is intended both as???</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-10" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-10">T-Visas for Victims of Human Trafficking</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>The T-1 Visa, for the victim, is intended both as a powerful form of relief for the victim and a potent incentive for the victim to assist (with narrow exceptions) authorities in the investigation and prosecution of dangerous human traffickers. Furthermore, certain family members of T-1 Visa beneficiaries are eligible for derivative T Visas (T-2, T-3, T-4, T-5, and T-6 Visas).  </br></br>

Eligibility Requirements  </br></br>

Section 101(a)(15)(T)(i)(I) of the Immigration and Nationality Act (INA) requires that any person eligible for a T-1 Visa have been a victim of a form of ???severe trafficking in persons??? as defined in section 7102 of the U.S. Code. The statutory requirements for something to qualify as ???severe trafficking in persons??? are: </br></br>

When a commercial sex act is induced by force, fraud, or coercion, or in where the victim induced to perform a sex act is less than 18 years of age; or The recruitment, harboring, transportation, provision, or obtaining of a person for labor or services, through the use of force, fraud, or coercion for subjection to involuntary servitude, peonage, debt bondage, or slavery. </br></br>

Note that evidence ???force, fraud, and coercion??? being present are not required in sex trafficking when the victim is less than 18 years of age.2 </br></br>

In addition to the specifically enumerated types of trafficking, INA ?? 101(a) (15) (T) (i) (II) requires that the trafficked person is physically present in the United States on account of the trafficking. The same section includes persons who are allowed entry into the United States for their participation in the investigation or prosecution of an act of trafficking in the definition of ???physically present in the United States on account of trafficking.??? 
                  
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-11">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>U-Visas for Victims of Crime</h5>
            <p>The U visa is a non-immigrant visa that is reserved???</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-11" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-11">U-Visas for Victims of Crime</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  The U visa is a non-immigrant visa that is reserved for victims of certain crimes who have suffered mental or physical abuse and are helpful to law enforcement or government officials with regards to investigating and prosecuting criminal activity.  The U visa offers individuals a road to temporary, and in some cases, permanent U.S. residence. </br></br>

The U non-immigrant visa category was created by Congress in 2000 with the intent to strengthen the ability of law enforcement and government officials to investigate and prosecute criminal activity, such as trafficking, fraud, domestic violence, witness tampering, false imprisonment, blackmail, involuntary servitude, and more. The idea was to help law enforcement agencies and offer protection to victims of such crimes at the same time. </br></br>

An individual is eligible for a U non-immigrant visa if he or she can demonstrate that: </br></br>

The individual is the victim of criminal activity that qualifies for purposes of the U visa; </br>
The individual has suffered significant physical or mental abuse as a consequence of the criminal activity; </br>
The individual has information about the criminal activity; </br>
The individual was helpful, is currently helpful, or is likely to be helpful to law enforcement officials with the investigation and prosecution of the crime; </br>
The crime in question has taken place in the U.S. or in contravention of U.S. laws; and </br>
The individual is otherwise admissible to the United States. </br>
Simply filling out the appropriate forms is not enough when an individual is applying for a U visa. Instead, the applicant must gather paperwork and documents that support a claim of injury. This typically includes a personal narrative statement describing the situation and providing context about the crime. The applicant should also provide evidence that he or she is a victim of qualifying criminal activity. In most instances, applicants will gather relevant medical records, affidavits from social workers and medical personnel, police reports, court documents, orders of protection, and affidavits from individuals who have personal knowledge about the crime. </br> </br>

A U visa holder can bring his or her immediate family members to the United States. However, the principal U visa petitioner must have his or her own visa approved before family members can be eligible for their own derivative U visas. If the principal petitioner is under 21 years of age, that person may petition on behalf of his or her spouse, children, parents, and unmarried siblings under the age of 18. If the principal is over 21, that person may petition on behalf of his or her spouse and children. In order to petition for a qualified family member, the petitioner must file Form I-918, Supplement A, Petition for Qualifying Family Member of U-1 Receipt. If an individual is applying for a U visa from within the United States, he or she will most likely not be required to have an interview at a local USCIS office. However, if the person is applying from outside the U.S., he or she will likely have an interview at a U.S. embassy or U.S. consulate in his or her home country. If the interview with the U.S. official goes well, the applicant???s U visa will be approved.
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-12">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>Political Asylum and Refugee Status</h5>
            <p>Refugee status determination is normally a governmental ???</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-12" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-12">Political Asylum and Refugee Status</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  Refugee status determination is normally a governmental procedure. Each government decides according to its established national procedures to whom to grant refugee status among asylum applicants. Asylum and refugee status are special legal protections available to people who have left their home country for their own safety and are afraid to return to any place within that country.  </br></br>

Asylum is a protection granted to foreign nationals already in the United States or arriving at the border who meet the international law definition of a ???refugee.??? The United Nations 1951 Convention and 1967 Protocol define a refugee as a person who is unable or unwilling to return to his or her home country, and cannot obtain protection in that country, due to past persecution or a well-founded fear of being persecuted in the future ???on account of race, religion, nationality, membership in a particular social group, or political opinion.??? Congress incorporated this definition into U.S. immigration law in the Refugee Act of 1980. </br></br>

As a signatory to the 1967 Protocol, and through U.S. immigration law, the United States has legal obligations to provide protection to those who qualify as refugees. The Refugee Act established two paths to obtain refugee status???either from abroad as a resettled refugee or in the United States as an asylum seeker. If you need political asylum and refugee status, you can contact Trip Law firm. Wei will help you to manage the issue and take care of it in no time. 
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-13">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>Temporary Protected Status</h5>
            <p>Temporary Protected Status (TPS) is a program that offers a???</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-13" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-13">Temporary Protected Status</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  Temporary Protected Status (TPS) is a program that offers a temporary legal status to certain immigrants in the United States who cannot return to their country of origin due to ongoing armed conflict, natural disaster, or other extraordinary reasons. </br></br>

Once the U.S. Department of Homeland Security (DHS) issues a TPS designation for nationals from such a country, applicants must prove they have continuously lived in the United States since a specific date and undergo a criminal and security background check. </br></br>

The secretary of Homeland Security can grant and renew TPS for periods of six to 18 months. At this point, TPS beneficiaries must apply for renewal, submit to additional background checks, and pay a fee.
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-14">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>Crimmigration</h5>
            <p>Understanding How Criminal Defense and Immigration Law Intersect  When the???</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-14" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-14">Crimmigration</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  Understanding How Criminal Defense and Immigration Law Intersect </br></br>

When the citizen of the United States is convicted of a crime, they can face probation, fines, jail time and other penalties. When the noncitizen is found guilty of the offense, their status, as well as future in the country, are immediately put into jeopardy. The intersection between criminal law and immigration is called crimmigration. This is a legal concept that has grown more prominent in recent years. </br></br>

Historically, the following offenses are considered crimes of moral turpitude: </br></br>

?? Murder </br></br>

?? Rape </br></br>

?? Spousal abuse </br></br>

?? Child abuse </br></br>

?? Robbery or theft </br></br>

?? Kidnapping </br></br>

?? Aggravated assault </br></br>

In most situations, the noncitizen faces a criminal charge that can lead to removal and deportation. Even the removal is avoided, having the criminal recond can endanger the current as well as future immigration efforts, including the citizenship application and even lawful permanent residency.  </br></br>

In such a case, you do not only need an experienced lawyer but a dependable one. At Trip Law, we will tactfully handle your case to avoid any future issues regarding your immigration and citizenship. 
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-15">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <h5>Deportation Defense</h5>
            <p>Deportation or removal is a process that is used by the ...</p>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-15" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-15" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-15">Deportation Defense</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  Deportation or removal is a process that is used by the US government for removing individuals from the United States. Our attorneys are familiar with the process and are also passionate advocate who work for immigrant rights. </br></br>

If you or your family member is a non-US citizen member have: </br></br>

_    Received the legal notice from the US government to appear before an immigration judge </br></br>

_    Received a visit from the Immigration and Customs Enforcement (ICE) </br></br>

_    Become subject to a criminal investigation </br></br>

_    Been convicted of a misdemeanor or crime </br></br>

If any of the above situations is similar to you then, you need an immigration lawyer to help you with the process. At Trip Law, we provide you top-notch deportation defense lawyer who will help you with the entire process.
                  </p>
            </div>
          </div>
        </div>
      </div>

    </div>
      </div>
    <!-- row  -->
    </div>
</section>

<section class="fild">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="image/image-03.png" alt="" class="w-100">
      </div>
      <div class="col-lg-6">
        <div class="fild-contant">
          <span>IMMIGRATION LAWYER HARDAM TRIPATHI</span><br><br>
            <div class="heading">
              <h1>Hardam Tripathi is a Leader in the Field of Immigration Law</h1>
            </div>
          <p>At Trip Law we set out to create a unique law firm where outstanding immigration representation and a deep commitment to humanity go hand in hand. Hardam H. Tripathi was a former legal professional in the federal government. <br><br>

          Trip Law at this moment is the home to some of the most experienced lawyers. Trip Law has turned into a leader in the field of immigration law. The growth of Trip Law was fueled by excellence,

          integrity, and a hard-earned reputation for quality.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="fild-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="fild-contant">
          <span>HARDAM TRIPATHI, ESQUIRE</span> <br><br>
            <div class="heading">
              <h1>FOUNDING MEMBER</h1>
            </div>
          <p>A Immigration lawyer Hardam H. Tripathi has formerly served as a legal professional for a number of federal agencies. With collaboration and experience Tripathi started his firm to serve as an immigration lawyer in Florida. <br> <br>

Tripathi is up-to-date about all the latest immigration laws so he will be your best help to get an immigration visa in the USA. He and his experienced team assists clients to get an H-1B professional visa; E-2 treaty investor visa; U visa and other types of temporary working visas. He also helps the clients to qualify under the EB-1; EB-2; EB-3; EB-4 and EB-5 categories. Along with this he provides the best strategic advice on US immigration and nationality law for individuals interested in pursuing legal permanent residency and the U.S. citizenship. <br><br>
Federal Agencies Attorney Tripathi served in as a legal professional: <br><br>
U.S. Air Force JAG Corps, DEA, ATF, U.S. Department of State, U.S. Attorney's
Office, Federal Defenders Office, State and Local Government, Thirteenth Judicial
Circuit of Florida, State Attorney???s Office. 

</p> <br>
<a href="tel:(863) 370-2427"  class="btn h-btn mb-5 ">Call: (863) 370-2427</a>
        </div>
      </div>

      <div class="col-lg-5">
        <img src="image/trip-man.png" alt="" class="w-100">
      </div>

    </div>
  </div>
</section>

<section class="why text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-5">
        <div class="heading ">
          <h1>Why Immigration Lawyer Hardam Tripathi?</h1>
          <p>Our firm is focused on the client's demands for an exceptional legal service model that provides value, quality, and client service.</p>
        </div>
      </div>
        <div class="col-lg-3 col-md-6 mb-3">
        <div class="card p-4"  >
          <div class="card-body" data-number="100">
            <img src="image/graduate-cap.png" alt="" width="50" height="50">
            <h2 class="card-title"><span id="number1">100</span> +</h2>
            <p class="card-text">Happy Clients</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-3">
        <div class="card p-4"  >
          <div class="card-body" data-number="8">
            <img src="image/bank.png" alt="" width="50" height="50">
            <h2 class="card-title"><span id="number2">8</span> +</h2>
            <p class="card-text">Years of Combined Experience</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-3">
        <div class="card p-4"  >
          <div class="card-body">
            <img src="image/globe.png" alt="" width="50" height="50">
            <h2 class="card-title"><span id="number3">100</span> +</h2>
            <p class="card-text">Successful CASES</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-3">
        <div class="card p-4"  >
          <div class="card-body">
            <img src="image/briefcase.png" alt="" width="50" height="50">
            <h2 class="card-title"><span id="number4">300</span> +</h2>
            <p class="card-text">More Helped</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 

<section class="video">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 ">
        <div class="heading text-center">
          <h1 >What Clients Say About Hardam Tripathi, Esq <br> Immigration Lawyer</h1>
          <br><br>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <!-- <video width="100%" height="100%" controls class="p-4">
          <source src="https://s3.us-east-2.amazonaws.com/speakeasyvideos/Speakeasy_Testimonial_HeddingLawFirm.mp4" type="video/mp4">
        </video> -->
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Yrmc5B9wqG0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-lg-6">
        <!-- <video width="100%" height="100%" controls class="p-4">
          <source src="https://s3.us-east-2.amazonaws.com/speakeasyvideos/Speakeasy_Testimonial_HeddingLawFirm.mp4" type="video/mp4">
        </video> -->
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/-MOf24ygOmg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>


<section class="tabs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="nav  mb-3 nav-tabs justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">EXPERIENCE & KNOWLEDGE</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">CUSTOMIZED SERVICE</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">FAST, EASY, SECURE</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="ex ">
      <div class="ex-img ">
      <img src="image/book.png" alt="" class="w-100" style="padding: 40px 23px;">
    </div>
    <div class="ex-content  mt-3">
      <div class="fild-contant ">
          <span>10 YEAR's COMBINED EXPERIENCE</span> <br><br>
            <div class="heading">
              <h1>EXPERIENCE & KNOWLEDGE</h1>
            </div>
          <p>Trip Law focuses exclusively on the practice of the immigration law of The United States. Attorney Hardam Tripathi has a broad experience of practicing U.S. Immigration & Nationality Law with a focus on business and investor-based immigration services along with commercial real estate and development projects. Tripathi has 10 years of combined experience in handling legal issues. Therefore no matter what immigration issue you are dealing with, Trip Law is here to help you out.

</p>
        </div>
    </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="ex ">
      <div class="ex-img ">
      <img src="image/us_ct.jpeg" alt="" class="mt-3 w-100" style="padding: 23px;">
    </div>
    <div class="ex-content  mt-3">
      <div class="fild-contant ">
          <span>CUSTOMIZED SERVICE</span> <br><br>
            <div class="heading">
              <h1>Client-Focused Solution and Result</h1>
            </div>
          <p>At Trip Law, we understand that, for the clients, value is not just an hourly rate comparison. Rather, value is an efficient process of tracking, reporting, and creating approaches to reduce the legal risks, cost-effectiveness, and results. Our team emphasises on the desired results of the clients. The Trip Law focuses on each stage of the immigration process. Our culture, structure, and processes have been aligned with one goal in mind, client satisfaction.

</p>
        </div>
    </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="ex ">
      <div class="ex-img ">
      <img src="image/image-03.png" alt="" class="mt-3 w-100" style="padding: 23px;">
    </div>
    <div class="ex-content  mt-3">
      <div class="fild-contant ">
          <span>FAST, EASY, SECURE</span> <br><br>
            <div class="heading">
              <h1>Flexible and Value-Driven Approach</h1>
            </div>
          <p>As an immigration firm we always provide honest legal advice that is in your best interest. We are realistic about the case expectations as well as the chances of success. We believe our clients deserve no less. For approaching each case: every team member is encouraged to have ownership of the clients and results. We strive to provide a value-driven approach to every case by communicating and strategizing with our clients for meeting their needs and goals.
          </p>
        </div>
    </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="clients">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading">
          <h1>What Our Clients Say</h1>
          <span>Read the success stories of our clients in their own words.</span>
        </div>
      </div>
      
      <div class="col-lg-12">
      <div class="owl-carousel ">
    <div class="item">
       <div class="client-top clearfix d-flex">
         <img src="image/team-1.jpg" alt="" >
         <h5>Wilmer</h5>
       </div>
       <div class="client-bottom">
         <p>Trip Law has helped me to bring the American Dream into a reality. My naturalization process was smooth as ever.</p>
       </div>
    </div>
    <div class="item">
       <div class="client-top clearfix d-flex">
         <img src="image/team-2.jpg" alt="" >
         <h5>Dilip</h5>
       </div>
       <div class="client-bottom">
         <p>Attorney Tripathi helped me with my consular immigration affairs, and he was exceptional in the class of services he provided.</p>
       </div>
    </div>
    <div class="item">
       <div class="client-top clearfix d-flex">
         <img src="image/team-3.jpg" alt="" >
         <h5>Didarul Selim</h5>
       </div>
       <div class="client-bottom">
         <p>Attorney Tripathi helped me with my consular immigration affairs, and he was exceptional in the class of services he provided.</p>
       </div>
    </div>
</div>
      </div>

    </div>
  </div>
</section> -->
<section class="n-blog " style="padding: 3%;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-5 text-center">
        <div class="heading ">
          <h1>News</h1>
          <p>Our firm is focused on the client's demands for an exceptional legal service model that provides value, quality and client service.</p>
        </div>
      </div>
        <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-4"  >
        <!--  <img src="image/news1.png" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#modal-21"> --->
  <div class="card-body">
    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#modal-21">Lakeland lawyer: Afghan translator, family escape to UAE</h5>
    <p class="card-text">A Lakeland lawyer has received happy news in his quest to help an Afghan translator and his family flee Afghanistan.</p>
    <a href="https://www.theledger.com/story/news/local/2021/09/27/lakeland-lawyer-hardam-tripathi-afghan-translator-family-escape-abu-dhabi/5882105001/" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-21">Read More..</a>
  </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-4"  >
       <!--   <img src="https://trip-law.com/wp-content/uploads/2021/03/How-Do-I-Get-an-H1B-Visa-in-Tampa-Florida_-trip-law-400x200@2x.png" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#modal-22"> -->
  <div class="card-body">
    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#modal-22">Army veteran in Lakeland works with immigration lawyer to help translator who</h5>
    <p class="card-text">LAKELAND, Fla. ??? Thousands of Afghan translators fear persecution and death from the Taliban for assisting U.S. troops after the 9/11 attacks.</p>
    <a href="https://www.baynews9.com/fl/tampa/news/2021/08/25/lakeland-lawyer-helps-afghan-translator-in-kabul?fbclid=IwAR2U4Z6DppqyS0apJLYtSWKYYk1IK6-ciGL0XQzKQY0F6m-4yXsetYEsnP8" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-22">Read More..</a>
  </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card p-4"  >
   <!--       <img src="https://trip-law.com/wp-content/uploads/2021/03/How-Do-I-Get-an-H1B-Visa-in-Tampa-Florida_-trip-law-400x200@2x.png" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#modal-23"> -->
  <div class="card-body">
    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#modal-23">Army veteran scrambles to help interpreter escape Afghanistan</h5>
    <p class="card-text">Amid the chaos, a retired U.S. Army master sergeant who served in Afghanistan is trying to get his former interpreter and his family out of the country safely.</p>
    <a href="https://www.fox13news.com/news/army-veteran-scrambles-to-help-interpreter-escape-afghanistan?fbclid=IwAR1_bJb9DinXoL7mo12Hn3Zbx86SHzaCEMM03LRvklYBy-aGamiGwr6ZiZ4" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-23">Read More..</a>
  </div>
        </div>
      </div>
    </div>
  </div>
</section> 

<section class="news">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading">
          <h1>Have Questions? Look Here</h1>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What is a green card?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Green is the permanent residency card that shows that an individual is a permanent resident of the United States. Green card holders are formally known as lawful permanent residents.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How long after I arrive in the U.S. can I apply for a green card?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>If you have entered the U.S. using your immigrant visa and made the visa fee then, it will take up to 90 days from the date you entered and made your payment to receive the permanent resident card.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Can I work in the U.S. while waiting for my green card?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Once USCIS approves the green card application, your work permit will automatically terminate. As a permanent resident, you are not going to need a separate work permit. You are authorized to work in the United States even before the physical green card arrives.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
        Can a U.S. citizen sponsor a non-family member?
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="collapsefour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Unfortunately, you cannot petition for a foreign national???s green card or visa if they are not your family member. But, there is a way. You can sponsor your friend???s immigration petition financially. But before becoming a financial sponsor of your friend, you should understand the clauses.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
        What is a lawful permanent resident?
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="collapsefive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>A lawful permanent resident is someone who has the legally granted right to live in the United State indefinitely. Permanent residents are approved with a ???green card??? (which is a photo id). A lawful permanent resident has the right to work in the United States and to petition for close family members to receive permanent residency.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingsix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
        How long does it take to adjust my status?
      </button>
    </h2>
    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="collapsesix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Adjustment of status is the process of changing from a nonimmigrant immigration status such as tourist, student etc. to permanent residency. If the U.S. immigration law allows a temporary visitor to change the status to a permanent resident then the individual needs to meet certain requirements. It might take 8 to 12 months to adjust the status.
      </div>
    </div>
  </div>
</div>

<div class="col-lg-12 text-center">
  <h5 class="h5-md">Still, have a question? <a class="darkblue-color" href="contact.php">Ask your question here</a></h5>
</div>
      </div>
    </div>
  </div>
</section>

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
        <p class="mt-4">Green Card <br> Family-Based Immigration <br>Employment Based Immigration <br>Deportation Defense <br> manitarian and Religious Visas <br> Change and Adjustment of Status <br> US Citizenship <br> Waivers </p>
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
    <!-- <script src="js/bootstrap.js"></script -->
    <!--Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->
<script type="text/javascript">
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
    });

    $('.owl-carousel').owlCarousel({
        items: 3,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
            })
          </script>
    <script>
      $.fn.jQuerySimpleCounter = function( options ) {
          var settings = $.extend({
              start:  0,
              end:    100,
              easing: 'swing',
              duration: 400,
              complete: ''
          }, options );

          var thisElement = $(this);

          $({count: settings.start}).animate({count: settings.end}, {
          duration: settings.duration,
          easing: settings.easing,
          step: function() {
            var mathCount = Math.ceil(this.count);
            thisElement.text(mathCount);
          },
          complete: settings.complete
        });
      };


    $('#number1').jQuerySimpleCounter({end: 100,duration: 2500});
    $('#number2').jQuerySimpleCounter({end: 8,duration: 2000});
    $('#number3').jQuerySimpleCounter({end: 100,duration: 2500});
    $('#number4').jQuerySimpleCounter({end: 300,duration: 3000});

    </script>
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

