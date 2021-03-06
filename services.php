<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyNVML</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/lower_tabs.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/tabbed_slider.css">
    <link rel="stylesheet" href="assets/css/tabbed_slider1.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">

    <!--
        Added
    -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>

<body>
    <div id="topSec"></div>
    <div class="frm-overlay" id="frm-section" style="display: none;">
        <div class="form-container">
            <form action="#" method="post" class="frm-body">
              <h2>Sign up to take this course</h2>
                    <p>
                        <label for="Fullname" class="floatLabel">Full Name</label>
                        <input id="Fullname" name="Fullname" type="text" required>
                    </p>
                    <p>
                        <label for="Email" class="floatLabel">Email</label>
                        <input id="Email" name="Email" type="text" required>
                    </p>
                    <p>
                        <label for="password" class="floatLabel">Password</label>
                        <input id="password" name="password" type="password">
                        <span>Enter a password longer than 8 characters</span>
                    </p>
                    <p>
                        <label for="confirm_password" class="floatLabel">Confirm Password</label>
                        <input id="confirm_password" name="confirm_password" type="password">
                        <span>Your passwords do not match</span>
                    </p>
                    <p>
                        <input type="submit" value="Create My Account" id="submit">
                    </p>
            </form>
        </div>
    </div>
   
    <nav class="navbar navbar-default navbar-fixed-top" style="color:rgb(249,248,248);font-size:16px;background-color:rgb(41,44,47);">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand text-uppercase navbar-link" href="index.html">
                    <img src="assets/img/NV_Logo.png" id="logo">
                    <img class="img-responsive" src="assets/img/Nvml_logo_name.png" id="logo-name" style="display: inline; width: 250px; vertical-align: bottom;">
                </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <!--
            <div class="navbar-header"><a class="navbar-brand text-uppercase navbar-link" href="#">Brand<img src="assets/img/NV_Logo.png" id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            -->
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.html" style="color:rgb(251,252,252);">Home </a></li>
                    <li role="presentation"><a href="index.html#aboutus" style="color:rgb(251,252,252);">About Us</a></li>
                    <li role="presentation"><a href="index.html#contact" style="color:rgb(254,254,255);">Contact Us</a></li>
                    <li class="active" role="presentation"><a href="services.html" style="color:rgb(252,253,255);">Services </a></li>
                    <li role="presentation"><a href="education.html" style="color:rgb(252,253,255);">Education </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="fill">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="jumbotron hero-nature carousel-hero fill">
                        <h1 class="hero-title">Hero Nature</h1>
                        <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Learn more</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="jumbotron hero-photography carousel-hero fill">
                        <h1 class="hero-title">Hero Photography</h1>
                        <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Learn more</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="jumbotron hero-technology carousel-hero fill">
                        <h1 class="hero-title">Hero Technology</h1>
                        <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                        <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="pull-center"><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
                data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Our Main Services</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <div class="col-md-4 col-sm-6 item">
                    <a href="#"><img class="img-responsive" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Animation </h3>
                    <p class="description">
                        Our animation services covers a wide variety of animations.  We develop: 
                        PowerPoint and other presentation animations; motion graphic commercials; 
                        web animations; and let’s not forget our animated series Abeeku and the maroons 
                        (the first of many animated series from Night Vision Media Ltd.)                    
                    </p>
                        <a href="#" class="action" data-target="#animation" data-toggle="modal"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <a href="#"><img class="img-responsive" src="assets/img/building.jpg"></a>
                    <h3 class="name">Education </h3>
                    <p class="description">
                        We provide two (2) services through our NV Educate product: Online Extra Lessons; 
                        and Teachers’ Assistant Unit.  These services will revolutionize how education is 
                        disseminated especially in Jamaica.  Our Online Extra Lessons was created specifically 
                        for students pursuing their education at various levels.  The Teachers’ Assistant Unit is 
                        the premiere service created to assistant teachers to ensure that they do what they do better.    
                    </p>
                    <a href="#" class="action" data-target="#Education" data-toggle="modal"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <a href="#"><img class="img-responsive" src="assets/img/loft.jpg"></a>
                    <h3 class="name">Marketing </h3>
                    <p class="description">
                        All businesses must market their products and services.  But it is particularly difficult 
                        for Small Business Owners to find the Time and Money to do so.  Night Vision Media Ltd. has 
                        created Office On The Go which caters to that specific need.    
                    </p>
                    <a href="#" class="action" data-target="#Marketing" data-toggle="modal"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="animation">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Amimation</h4>
                </div>
                <div class="modal-body">
                    <div class="container anim-modal">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 anim-modal">
                                <a href="#"><img class="img-responsive modal-image" src="assets/img/desk.jpg" alt="Amimation"></a>
                            </div>
                        </div>
                    </div>
                    <p class="description">
                        Our animation services covers a wide variety of animations.  We develop: 
                        PowerPoint and other presentation animations; motion graphic commercials; 
                        web animations; and let’s not forget our animated series Abeeku and the maroons 
                        (the first of many animated series from Night Vision Media Ltd.)                    
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="Education">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Education</h4>
                </div>
                <div class="modal-body">
                    <div class="container anim-modal">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 anim-modal">
                                <a href="#">
                                    <img src="assets/img/building.jpg" alt="Amimation" class="img-responsive modal-image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="description">
                        We provide two (2) services through our NV Educate product: Online Extra Lessons; 
                        and Teachers’ Assistant Unit.  These services will revolutionize how education is 
                        disseminated especially in Jamaica.  Our Online Extra Lessons was created specifically 
                        for students pursuing their education at various levels.  The Teachers’ Assistant Unit is 
                        the premiere service created to assistant teachers to ensure that they do what they do better.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="Marketing">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Marketing</h4>
                </div>
                <div class="modal-body">
                    <div class="container anim-modal">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 anim-modal">
                                <a href="#">
                                    <img src="assets/img/loft.jpg" alt="Amimation" class="img-responsive modal-image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="description">
                         All businesses must market their products and services.  But it is particularly difficult 
                        for Small Business Owners to find the Time and Money to do so.  Night Vision Media Ltd. has 
                        created Office On The Go which caters to that specific need.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="attraction">
        <h1 id="add">Like What you see?</h1>
        <p>Check us out on social media or contact us via email for more info</p>
        <div class="container social-icons">
            <a href="https://twitter.com/theNVVO" class="small-icons" title="Twitter">
                <i class="icon ion-social-twitter"></i>
            </a>
            <a href="https://www.facebook.com/theNVVO" class="small-icons" title="Facebook">
                <i class="icon ion-social-facebook"></i>
            </a>
            <a href="#" class="small-icons" title="Skype @theNVVO">
                <i class="icon ion-social-skype"></i>
            </a>
            <a href="#" class="small-icons" title="">
                <i class="icon ion-social-snapchat"></i>
            </a>
            <a href="https://www.youtube.com/user/TheNVVO" class="small-icons" title="Youtube">
                <i class="icon ion-social-youtube"></i>
            </a>
        </div>
    </div> -->
    <div class="projects-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Events </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row projects">
                <div class="col-md-4 col-sm-6 item">
                    <a href="#">
                        <img class="img-responsive" src="assets/img/desk.jpg">
                        <h3 class="name">Small Business Online Conference by Office On The Go</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    </a>
                    <!--<button class="btn btn-primary events-button" type="button">Join Event</button>-->
                    <a class="btn btn-primary events-button" type="button" href="events/event.php?eventId=321">View Event!</a>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <a href="#">
                        <img class="img-responsive" src="assets/img/building.jpg">
                        <h3 class="name">Abeeku and the maroons launch</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    </a>
                    <!--<button class="btn btn-primary events-button" type="button">Join Event</button>-->
                    <a class="btn btn-primary events-button" type="button" href="services.php#topSec?eventId=321">View Event!</a>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <a href="#">
                        <img class="img-responsive" src="assets/img/loft.jpg">
                        <h3 class="name">NVML 10 Year Celebrations</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    </a>
                    <!--<button class="btn btn-primary events-button" type="button">Join Event</button>-->
                    <a class="btn btn-primary events-button" type="button" href="services.php#topSec?eventId=321">View Event!</a>
                </div>

            </div>
            <div class="row projects">
                <div class="col-md-6 col-sm-6 item">
                    <a href="#">
                        <img class="img-responsive" src="assets/img/minibus.jpeg">
                        <h3 class="name">StuDate Online Conference by Online Extra Lessons</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    </a>
                    <!--<button class="btn btn-primary events-button" type="button">Join Event</button>-->
                    <a class="btn btn-primary events-button" type="button" href="services.php#topSec?eventId=321">View Event!</a>                    
                </div>

                <!--<div class="col-md-4 col-sm-6 "></div>-->

                <div class="col-md-6 col-sm-6 item">
                    <a href="#">
                        <img class="img-responsive" src="assets/img/minibus.jpeg">
                        <h3 class="name">Tech Teacher Online Conference by The Teachers’ Assistant Unit</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>

                    </a>
                    <!--<button class="btn btn-primary events-button" type="button">Join Event</button>-->
                    <a class="btn btn-primary events-button" type="button" href="services.php#topSec?eventId=321">View Event!</a>
                </div>
            </div>
        </div>
    </div>

    
    <div class="team-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row people">
                <!-- <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/1.jpg"> -->
                <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/Adrian.jpg">
                    <h3 class="name">Mr. Adrian Whyte</h3>
                    <p class="title">Education & Financial Director </p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. . </p>
                    <div class="social">
                        <a href="https://www.facebook.com/whyte.ink" target="_blank" title="Facebook">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/whyte.ink/" target="_blank" title="Instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/2.jpg"> -->
                <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/chevvy.jpg">
                     <h3 class="name">Mrs. Chevonnese Chevers Whyte</h3>
                    <p class="title">Marketing, Managing, and Creative Director</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. </p>
                    <div class="social">
                        <a href="http://chevonnesewhyte.com" target="_blank" title="Website">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/chevyNVML" target="_blank" title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://plus.google.com/+ChevonneseCheversWhyteNVML" target="_blank" title="Google+">
                            <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/chevonnese.whyte" target="_blank" title="Facebook">
                            <i class="fa fa-facebook-official"></i>
                        </a>
                        <a href="https://jm.linkedin.com/in/chevonnese-whyte-mba-b-sc-1a841425" target="_blank" title="LinkedIn">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="http://chevonnesewhyte.tumblr.com" target="_blank" title="Tumblr">
                            <i class="fa fa-tumblr" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/3.jpg"> -->
                <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/Kevin.jpg">
                    <h3 class="name">Mr. Kevin Jackson </h3>
                    <p class="title">Animation Manager and Vetting Officer </p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. </p>
                    <div class="social">
                        <a href="http://www.nivekfilms.com" target="_blank" title="Website">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/nivekfilms/" target="_blank" title="Facebook">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/NivekEnt" target="_blank" title="Twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        
                    </div>
                </div>
                <!--
                <div class="col-md-3 col-sm-6 item"><img class="img-circle" src="assets/img/3.jpg">
                    <h3 class="name">Howard </h3>
                    <p class="title">Developer </p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                -->
            </div>
        </div>
    </div>
    <!--
    <div class="newsletter-subscribe">
        <div class="container subscriber">
            <div class="intro">
                <h2 class="text-center">Subscribe for our Newsletter</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <form class="form-inline" method="post">
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Subscribe </button>
                </div>
            </form>
        </div>
    </div>
    -->
    <div class="brands">
        <a href="#"> <img src="assets/img/instacart.png"><img src="assets/img/kickstarter.png"><img src="assets/img/lyft.png"><img src="assets/img/shopify.png"><img src="assets/img/pinterest.png"><img src="assets/img/twitter.png"></a>
    </div>
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation internal-links">
                <!--<h3><a href="#">Night Vission<span><img src="assets/img/NV_Logo.png" class="logo"> </span></a></h3> -->
                <h3>
                    <a href="index.html">
                        <!--Night Vission-->
                        <!--
                        <img class="img-responsive" src="assets/img/Nvml_logo_name.png" id="logo-name" style="display: inline; width: 50px; vertical-align: bottom;"> -->
                        <span>
                            <img src="assets/img/NV_Logo.png" class="logo footer-logo">
                        
                        <img class="img-responsive" src="assets/img/Nvml_logo_name.png" id="logo-name" style="display: inline; width: 150px; vertical-align: middle;">
                        </span>
                    </a>
                    </h3>
                
                <p class="links"><a href="index.html">Home</a><strong> · </strong><a href="index.html#aboutus">About Us</a><strong> · </strong><a href="index.html#contact">Contact Us</a><strong> · </strong><a href="index.html#services">Services </a><strong> · </strong><a href="education.html">Education </a><strong> · </strong><a href="#">Faq </a></p>
                <p
                class="company-name">Night Vision Media Ltd © 2007 </p>
            </div>
            <!--
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Night Vission<span><img src="assets/img/NV_Logo.png" class="logo"> </span></a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">About Us</a><strong> · </strong><a href="#">Contact Us</a><strong> · </strong><a href="#">Services </a><strong> · </strong><a href="#">Education </a><strong> · </strong><a href="#">Faq </a></p>
                <p
                class="company-name">Night Vision Media Ltd © 2017 </p>
            </div>
            -->
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">2 Fairway Avenue</span> Kingston 5, Jamaica</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 876 7927107</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">contact@nightvisionmedia.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p>Night Vision Media Ltd. specializes in creativity.  We evolved from being a graphic design firm, to a company that can provide a creative solution for all of our clients.  Currently our services have been broken down into three (3) categories: Animation; Education; and Marketing.
                </p>
                <div class="social-links"><a href="https://www.facebook.com/myNVML"><i class="fa fa-facebook"></i></a><a href="@myNVML"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/tabbed_slider.js"></script>
    <script type="text/javascript" src="assets/js/frmHandler.js"></script>
    <script type="text/javascript" src="assets/js/frmVal.js"></script>
    <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=62925783"></script>
</body>

</html>