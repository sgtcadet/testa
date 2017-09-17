<?php
//require 'assets/php/scripts/Connection.php';
        //echo "<h2>Test</h2>";
require_once 'assets/php/scripts/Event.php';
//$connect = new Connection();

/*
    * #Event == Conference
    * #Event has a ID, name,description,image,date,content??.
    * #Webinar Software : https://www.join.me/solutions/free-webinar-software
    */

//GET EVENT ID
$eventID = $_GET['eventId'];
//echo $eventID;

//CHECK IF EVENT ID IS IN DATABASE
$event = new Event();
$test = $event->Select('*', $eventID);
//$event->Select();
//IF IT IS LOAD THE EVENT'S DATA
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Conference</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="index.html">
                        
                        <!-- logo image  -->
                        <!-- <img src="assets/images/logo.png" alt="Logo">

                        Conference 2015 -->
                        <img src="assets/images/nvmlogo.png" width="70" height="38" alt="Logo">

                        Night Vision Media
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li class="active"><a data-scroll href="#about">About</a></li>
                    <li><a data-scroll href="#speakers">Speakers</a></li>              
                    <li><a data-scroll href="#schedule">Schedule</a></li>                  
                    <li><a data-scroll href="#partner">Partner</a></li>                  
                    <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
                    <li><a data-scroll href="#faq">FAQ</a></li>
                    <li><a data-scroll href="#photos">Photos</a></li>
                
                </ul>
            </div>
        </div><!-- /.container -->
    </nav>

    
    <header id="site-header" class="site-header valign-center"> 
        <div class="intro">

            <?php

                if(!isset($test)) //REMINDER: FIX THIS CONDITION
                {

                
            ?>
            <!--<h2>25 April, 2015 / Townhall California</h2>-->
                <!-- <h2> <?php //echo //date("d-m-Y",$event->getEventDateTime()) . "/" . $event->getEventLocation();?> </h2> -->
                <h2> <?php echo $event->getEventDateTime() . " / " . $event->getEventLocation();?> </h2>
                <h1> <?php echo $event->getEventTitle() .":". $event->getEventId();?> </h1>
                <p> <?php echo "First &amp; " . $event->getEventSubTitle();?></p>
                <a class="btn btn-white" data-scroll href="#registration">Register Now</a>
            <?php

                }
                else{
            ?>
            <h2>25 April, 2015 / Townhall California</h2>
            <h1>Freelancer Conference 2015: <?php echo $eventID?></h1> 
            <!--<h1><?php //echo $event->eventTitle .": ". $event->eventID;?></h1> -->
            <!-- <h2>Testing: <?php //echo $event->eventID;?></h2> -->
            <p>First &amp; Largest Conference</p>
            
            <a class="btn btn-white" data-scroll href="#registration">Register Now</a>
            <?php
                }
            ?>
        </div>
    </header>

    <section id="about" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <h3 class="section-title">About Us</h3>

                    <p>You've inspired new consumer, racked up click-thru's, blown-up brand enes. We can't give you back the weekends you worked, or erase the pain ebeing forced to make the logo bigger. But if you submit your best work we ajusts might be able to give the chance to show you best digital marketing.</p>

                    <figure>
                        <img alt="" class="img-responsive" src="assets/images/about-us.jpg">
                    </figure>

                </div><!-- /.col-sm-6 -->

                <div class="col-sm-6">

                    <h3 class="section-title multiple-title">What is Our Goal?</h3>

                    <p>You've inspired new consumer, racked up click-thru's, blown-up brand enes. We can't give you back the weekends you worked, or erase the pain ebeing forced to make the logo bigger. But if you submit your best work we ajusts might be able to give the chance to show you best digital marketing.</p>

                    <ul class="list-arrow-right">

                        <li>Learn from the best Asian Social Media Experts &amp; Case Studies</li>
                        <li>Have dedicated 2-to-1 meetings with the experts</li>
                        <li>Reach more consumers for less by learning new digital media skills</li>
                        <li>Save money when spending in online advertising</li>
                    
                    </ul>

                </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section id="facts" class="section bg-image-1 facts text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <i class="ion-ios-calendar"></i>
                    <h3>2015<br>June 25</h3>
                
                </div>
                <div class="col-sm-3">

                    <i class="ion-ios-location"></i>
                    <h3>California<br>USA</h3>
                
                </div>
                <div class="col-sm-3">

                    <i class="ion-pricetags"></i>
                    <h3>150<br>Tickets</h3>
                
                </div>
                <div class="col-sm-3">
                
                    <i class="ion-speakerphone"></i>
                    <h3>06<br>Speakers</h3>
                
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <section id="speakers" class="section speakers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h3 class="section-title">Speakers</h3>
                
                </div>
            </div>

            <div class="row">
                <?php

                    /*
                    $speaker_fname;
                    $speaker_lname;
                    $speaker_occupation;
                    $speaker_position;
                    */
                    for($var = 0; $var < $event->getSpeakerInstance()->numSpeakers; $var++)
                    {
                       //echo "HEY !! ->" . $event->getSpeakerInstance()->getFirstName($var) ." <br>" ;
                       /*
                       $event->getSpeakerInstance()->$lastName[$var] ." ". 
                       $event->getSpeakerInstance()->$occupation[$var] ." ". 
                       $event->getSpeakerInstance()->$position[$var] ."<br>";
                       */ 
                       //echo "HEY!! <br>";
                       //echo $event->getSpeakerInstance()->numSpeakers . "<br>";
                    //}
                ?>
                <div class="col-md-6">
                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-1.jpg">
                        </figure>

                        <h4>
                        <?php echo $event->getSpeakerInstance()->getFirstName($var) ." ". $event->getSpeakerInstance()->getLastName($var)?></h4>

                        <p>
                        <?php
                           echo $event->getSpeakerInstance()->getOccupation($var) ." at ". $event->getSpeakerInstance()->getCompany($var)
                        ?>    
                        </p>
                        <!--<p>CEO of Peren</p>-->

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div>
                </div>
                <?php
                    }
                ?>
                <!--
                <div class="col-md-4">
                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-1.jpg">
                        </figure>

                        <h4>Jhon Smith</h4>

                        <p>CEO of Peren</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div>
                </div>
                -->
                <!--
                <div class="col-md-4">
                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-2.jpg">
                        </figure>

                        <h4>Jhon Smith</h4>

                        <p>CEO of Peren</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-3.jpg">
                        </figure>

                        <h4>Jhon Smith</h4>

                        <p>CEO of Peren</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div>
                </div>
                -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-4">

                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-4.jpg">
                        </figure>

                        <h4>Jhon Smith</h4>

                        <p>CEO of Peren</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-5.jpg">
                        </figure>

                        <h4>Jhon Smith</h4>

                        <p>CEO of Peren</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="speaker">
                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-6.jpg">
                        </figure>
                        <h4>Jhon Smith</h4>
                        <p>CEO of Peren</p>
                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="registration" class="section registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 id="reg-form-title" class="section-title">Registration &amp; Pricing</h3>
                </div>
            </div>
                
            <form action="#" id="registration-form">
                <div class="row">
                    <div class="col-md-12" id="registration-msg" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstname" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" id="cell" name="cell" required>
                        </div>

                        <!--ADDED-->
                        <div class="form-group"><input type="text" name="event" id="event" value="<?php echo $eventID?>" hidden></div>
                        <div class="form-group">
                            <select class="form-control" name="package" id="package" required>
                                <option readonly>Choose a package</option>
                                <option>Free (US$0.00)</option>
                                <option>Limited Personal Use (US$25.00)</option>
                                <option>CXC Student (US$45.00)</option>
                                <option>Unlimited Personal Use (US$200.00)</option>
                            </select>
                        </div>
                    </div>

                    <!--<div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" id="address" name="address" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Zip Code" id="zip" name="zip" required>
                        </div>
                        
                        

                        <div class="form-group">
                            <select class="form-control" name="city" id="city" required>
                                <option readonly>City</option>
                                <option>City Name 1</option>
                                <option>City Name 2</option>
                                <option>City Name 3</option>
                                <option>City Name 4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="program" id="program" required>
                                <option readonly>Select Your Program</option>
                                <option>Program Name 1</option>
                                <option>Program Name 2</option>
                                <option>Program Name 3</option>
                            </select>
                        </div>
                    </div>-->
                </div>
                <div class="text-center mt20">
                    <button type="submit" class="btn btn-black" id="registration-submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <section id="contribution" class="section bg-image-2 contribution">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase mt0 font-400">Submit Your Contribution Work</h3>
                    
                    <p>You've inspired new consumer, racked up click-thru's, blown-up brand awareness. We can't give you back the weekends you worked, or erase the pain of being forced to make the logo bigger. But if you submit your best work.</p>

                    <a class="btn btn-white" href="#">Submit</a>
                </div>
            </div>
        </div>
    </section>

    <section id="schedule" class="section schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Event Schedule</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="09:00">09:00 am</time> - <time datetime="22:00">10:00 am</time>
                        </div>
                        <h3>Welcome and intro</h3>
                        <p>Mustafizur Khan, SD Asia</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="10:00">10:00 am</time> - <time datetime="22:00">10:00 am</time>
                        </div>
                        <h3>Tips and share</h3>
                        <p>Mustafizur Khan, SD Asia</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="10:00">10:00 am</time> - <time datetime="22:00">10:00 am</time>
                        </div>
                        <h3>View from the top</h3>
                        <p>Mustafizur Khan, SD Asia</p>
                    </div>
                </div>
            </div>
    </section>

    <section id="partner" class="section partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Event Partner</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-1"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-2"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-3"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-4"></a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-5"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-6"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-7"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-8"></a>
                </div>
            </div>   
    </section>

    <section id="faq" class="section faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Event FAQs</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> What is the price of the ticket ?</a>
                                </h4>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <h3>Hello</h3>
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> What is included in my ticket ?</a>
                                </h4>
                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">Hello</div>
                            </div>
                        </div>
  
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Office address ?</a>
                                </h4>
                            </div>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">Hello</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> How should I dress ?</a>
                                </h4>
                            </div>

                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">Hello</div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> I have specific questions that are not addressed here. Who can help me ?</a>
                                </h4>
                            </div>

                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">Hello</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="photos" class="section photos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Photos</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="grid">
                        
                        <li class="grid-item grid-item-sm-6">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-1.jpg">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-2.jpg">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-3.jpg">
                        </li>
                    
                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-5.jpg">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-6.jpg">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-7.jpg">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-8.jpg">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-2.jpg">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-3.jpg">
                        </li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>

    <section id="location" class="section location">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="section-title">Event Location</h3>
                    <address>
                        <p>Eardenia<br> The Grand Hall<br> House # 08, Road #52, Street<br> Phone: +1159t3764<br> Email: example@mail.com</p>
                    </address>
                </div>
                <div class="col-sm-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96706.50013548559!2d-78.9870674333782!3d40.76030630398601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sbd!4v1436299406518" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Designed and <br> Developed by <a href="http://technextit.com">Technext Limited</a></p>
                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>