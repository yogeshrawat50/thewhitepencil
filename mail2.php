<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>White Pencil : Thank You</title>
        <link rel="icon shortcut" href="assets/images/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="assets/fonts/font.css" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/responsive.css" />



        <style>

.header-section {
 
    background: #000;
}.footer-section {
    padding: 50px 0;
}
.mailarea {
    min-height: 300px;

    padding-top: 200px; padding-bottom: 50px;
  
}

        </style>
    </head>
    <body class="page homepage">
   

    <header class="header-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-6">
                        <div class="short-logo">
                            <a href="https://thewhitepencil.com/"><img src="https://res.cloudinary.com/thewhitepencil-com/image/upload/v1649246266/assets/images/logo-s_hfebsu.png" alt="whitepencil short logo" /> </a>
                        </div>
                    </div>

                    <div class="col-xl-7 offset-xl-3 col-md-9 col-6">
                        <nav class="menu">
                          
                            <ul>
                                <li class="nav-link"><a href="https://thewhitepencil.com/about-us">About us </a></li>
                                <li class="nav-link"><a href="https://thewhitepencil.com/service/ui-ux-design-agency">What we offer</a></li>
                                <li class="nav-link"><a href="https://thewhitepencil.com/white-pencil-studio-process">Our Process</a></li>
                                <li class="nav-link"><a href="https://thewhitepencil.com/contact"   class="active">get in touch </a></li>
                            </ul>
                            
                        </nav>

                        <div class="burger">
                            <span class="openmenu"> </span>
                            <span class="closemenu"> </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Menu click open -->

        <nav class="navbar-fixed">
            <div class="container">
                <div class="row mmenu_item d-flex align-items-center">
                    <div class="col-12">
                        <ul class="nav-links">
                            <li class="nav-link"><a href="https://thewhitepencil.com/" class="active">Home</a></li>                     
                            <li class="nav-link"><a href="https://thewhitepencil.com/about-us">About us </a></li>
                            <li class="nav-link"><a href="https://thewhitepencil.com/service/ui-ux-design-agency">What we offer</a></li>
                            <li class="nav-link"><a href="https://thewhitepencil.com/white-pencil-studio-process">Process</a></li>
                              <li class="nav-link"><a href="https://thewhitepencil.com/blogs" target="_blank">Blogs </a></li>
                            <li class="nav-link"><a href="https://thewhitepencil.com/contact">Get in Touch  </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

<div class="mailarea">

    <div class="container">

        <div class="text-center phppage">

            <?php if (isset($_POST['email'])) {

                // EDIT THE 2 LINES BELOW AS REQUIRED

                $email_to = "hello@thewhitepencil.com";

                $email_subject = "White pencil Portfolio link  Inquiry";

                function died($error)
                {
                    // your error code can go here

                    echo "<h1>Whoops!</h1><h2>There appears to be something wrong with your completed form.</h2>";

                    echo "<strong><p>The following items are not specified correctly.</p></strong><br />";

                    echo $error . "<br /><br />";

                    echo "<p>Return to the form and try again.</p><br />";
                    echo "<p><a href='index.html'>return to the homepage</a></p>";
                    die();
                }

                $first_name = $_POST['first_name']; // required

                // $last_name = $_POST['last_name']; // required

                $email_from = $_POST['email']; // required

             // $telephone = $_POST['telephone']; // not required

                $comments = $_POST['comments']; // required

                $error_message = "";

                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

                if (!preg_match($email_exp, $email_from)) {
                    $error_message .= '<li><p>The completed e-mail address appears to be incorrect<p></li>';
                }

                $string_exp = "/^[A-Za-z .'-]+$/";

                if (!preg_match($string_exp, $first_name)) {
                    $error_message .= '<li><p>Name appears to be wrong</p></li>';
                }

                //   if(!preg_match($string_exp,$last_name)) {

                //     $error_message .= '<li><p>Subject  appears to be wrong</p></li>';

                //   }

                if (strlen($comments) < 2) {
                    $error_message .= '<li><p>Message appears to be incorrect</p></li>';
                }

                if (strlen($error_message) > 0) {
                    died($error_message);
                }

                $email_message = "portfolio Links details are given below.\n\n";

                function clean_string($string)
                {
                    $bad = ["content-type", "bcc:", "to:", "cc:", "href"];

                    return str_replace($bad, "", $string);
                }

                $email_message .= "Name: " . clean_string($first_name) . "\n";

                // $email_message .= "Subject: ".clean_string($last_name)."\n";

                $email_message .= "Email Adress: " . clean_string($email_from) . "\n";

              //  $email_message .= "Phone: ".clean_string($telephone)."\n";

                $email_message .= "Portfolio Link: " . clean_string($comments) . "\n";

                // create email headers

                $headers = 'From: ' . $email_from . "\r\n" . 'Reply-To: ' . $email_from . "\r\n" . 'X-Mailer: PHP/' . phpversion();

                @mail($email_to, $email_subject, $email_message, $headers);
                ?>
             
            
             
            <!-- include your own success html here -->
             
             
             
            <h1>Thank you for your message!</h1> <h2>We will contact you as soon as possible.</h2>
            
             
            
            
            
             
            <?php
            } ?>
            
           
            
            </div>
    </div>


</div>


<script>
    setTimeout(function(){
       window.location.href = 'https://thewhitepencil.com/';
    }, 3000);



 </script>  


   
          
          <!-- ====== :: footer SECTION :: ===== -->
          <footer id="footer" class="py-100 footer-section dark-section">
                <div class="section_common">
                    <div class="container">
                        <div class="row my-5">
                            <div class="col-md-6">
                                <div class="footer-content" data-aos="fade-up">
                                    <h3 class="foo-tiile font-jeb">
                                        <span class="filter_shadow filter_shadow2 position-relative"> </span>
                                        Ready to kick off <br />
                                        your growth journey?
                                    </h3>

                                    <div class="hover-img-slide mb-5">
                                        <img src="https://res.cloudinary.com/thewhitepencil-com/image/upload/v1649246051/assets/images/footer_img01_asmhul.png" alt="footer" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                          

                                <div class="contact-form pe-md-5" id="hereform">
                                    <form id="footerform" action="mail.php" method="post" name="contactform">
                                        <div class="input__field">
                                            <input type="text" class="form-control form-control-1st" placeholder="Please enter your name" name="first_name" id="first" required />
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="input__field">
                                            <input type="email" name="email" id="emailadr" class="form-control" placeholder="Email ID" required />
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="input__field">
                                            <input type="number" name="telephone" id="telephone" class="form-control" placeholder="Enter your phone number " required />
                                            <span class="focus-border"></span>
                                        </div>
                                        <!-- <div class="mb-md-5 mb-4 position-relative">
                                            <input type="text" class="form-control" placeholder="Tell us about your project" id="input__project" name="comments" required />
                                            <span class="focus-border"></span>
                                        </div> -->

                                        <button class="footer-btn primary-color" type="submit">Contact Us <img src="https://res.cloudinary.com/thewhitepencil-com/image/upload/v1646983011/assets/images/arrow_akbc23.webp" alt="arrow icon" class="ms-4" /></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <hr class="my-5" />

                        <div class="justify-content-between d-flex footerdiv mb-5">
                            <div class="footer-logo">
                                <a href="https://thewhitepencil.com/"> <img src="https://res.cloudinary.com/thewhitepencil-com/image/upload/v1646983041/assets/images/logo_xnw5dx.svg" alt="logo" /></a>
                            </div>

                            <div class="footer-menu justify-content-around d-flex">
                                <div class="footer_items">
                                    <ul class="quick-link">
                                        <li><a href="about-us">About Us</a></li>
                                        <li><a href="white-pencil-studio-process"> Our Process </a></li>
                                        <li><a href="javascript:void(0)" class="gotoform"> Contact Us </a></li>
                                        <li><a href="https://thewhitepencil.com/blogs" target="_blank"> Blogs </a></li>
                                    </ul>
                                </div>

                                <div class="footer_items">
                                    <ul class="quick-link">
                                        <li><a href="service/ui-ux-design-agency">Immersive Design </a></li>
                                        <li><a href="service/perfomance-marketing-agency"> Performance Marketing </a></li>
                                        <li><a href="javascript:void()" title="coming soon"> Brand Building </a></li>
                                        <li><a href="service/content-marketing-agency"> Content Marketing </a></li>
                                        <li><a href="service/ecommerce-marketing-agency"> eCommerce Experience </a></li>
                                    </ul>
                                </div>

                                <div class="footer_items">
                                    <p class="foo-blocks">
                                        Office
                                        <span class="d-block font-r text-white">
                                            B-81, B Block Naraina,<br />
                                            New Delhi
                                        </span>
                                    </p>
                                    <p class="foo-blocks">
                                        Call us
                                        <span class="d-block"> <a href="tel:+91-7982003024" class="font-r"> +91 798 200 3024</a> </span>
                                    </p>
                                    <p class="foo-blocks">
                                        Drop a mail
                                        <span class="d-block"> <a href="mailto:hello@thewhitepencil.com" class="font-r"> hello@thewhitepencil.com</a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="justify-content-between d-flex footerdiv pt-md-5 pt-4 footer-menu">
                            <div class="me-5">
                                <p class="font-r fw-300">
                                    The White Pencil Studio. All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        <a id="button"><i class="fas fa-sort-up"></i></a>
        <div class="cursor"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="assets/js/function.js"></script>
    </body>
</html>
